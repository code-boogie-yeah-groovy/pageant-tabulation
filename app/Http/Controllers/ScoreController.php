<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoreController extends Controller
{
    

    
    public function addScore(Request $request) {
        $passcodeid = $request['passcodeid'];
        $eventid = $request['eventid'];
        $contestantid = $request['contestantid'];
        $categoryid = $request['categoryid'];
        $score = $request['score'];
        $newScore = new Score;
        $newScore->event_id = $eventid;
        $newScore->passcode_id = $passcodeid;
        $newScore->contestant_id = $contestantid;
        $newScore->category_id = $categoryid;
        $newScore->score = $score;
        $newScore->save();

        return redirect()->back();
    }
}
