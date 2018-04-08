<?php

namespace App\Http\Controllers;









use Illuminate\Http\Request;
use App\Passcode;
use App\Event;

class TabulateController extends Controller
{

    public function index(Request $request) {
        $passcode = Passcode::where('id', '=', $request->session()->get('code_id'))->get()->first();
        return view('judge.tabulation')->with('passcode', $passcode);
    }

    public function judgeLogin(Request $request) {
        $code = $request['passcode'];
        $passcode = Passcode::where('code', '=', $code)->get()->first();

        if($passcode !== null) {
            $code_id = $passcode->id;
            $request->session()->put('code_id', $code_id);
            return redirect('tabulation');
        } else {
            return redirect('/');
        }
    }

    public function judgeLogout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }
}
