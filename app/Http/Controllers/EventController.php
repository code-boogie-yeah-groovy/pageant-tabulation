<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Contestant;
use App\Category;
use App\Passcode;
use App\User;

class EventController extends Controller
{
    public function addEvent(Request $request) {
        $event = new Event;
        $event->event_name = $request['eventname'];
        $event->user_id = Auth::user()->id;
        $event->event_date = $request['date'];
        $event->save();

        $lastEvent = Event::find(DB::table('events')->max('id'));
        $lastEvent_id = $lastEvent['id'];
        if($request['contMs'] != null) {
            foreach($request['contMs'] as $key=>$value) {
                $contestantsMs[] = [
                    'contestant_name' => $value,
                    'mister' => false,
                    'contestant_no' => $key + 1,
                    'event_id' => $lastEvent_id,
                ];
            }
            DB::table('contestants')->insert($contestantsMs);
        }

        if($request['contMr'] != null) {
            foreach($request['contMr'] as $key=>$value) {
                $contestantsMr[] = [
                    'contestant_name' => $value,
                    'mister' => true,
                    'contestant_no' => $key + 1,
                    'event_id' => $lastEvent_id,
                ];
            }
            DB::table('contestants')->insert($contestantsMr);
        }

        if($request['judges'] != null) {
            foreach($request['judges'] as $key=>$value) {
                $code = substr(base_convert(microtime(), 10, 36), 6, 12);
                $judges[] = [
                    'code' => $code,
                    'event_id' => $lastEvent_id,
                    'judge_name' => $value,
                    'usable' => true,
                ];
            }
            DB::table('passcodes')->insert($judges);
        }

        if($request['categories'] != null) {
            foreach($request['categories'] as $key=>$value) {
                foreach($request['percentage'] as $key2=>$percentage) {
                    if($key == $key2) {
                        $category[] = [
                            'category_name' => $value,
                            'percentage' => $percentage,
                            'event_id' => $lastEvent_id,
                        ];
                    }
                }
            }
            DB::table('categories')->insert($category);
        }

        return back()->with('message', 'New event has been created: ' . $request['eventname']);
    }

}
