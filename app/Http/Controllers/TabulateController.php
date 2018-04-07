<?php

namespace App\Http\Controllers;









use Illuminate\Http\Request;
use App\Passcode;

class TabulateController extends Controller
{

    public function index() {
        return view('judge.tabulation');
    }

    public function judgeLogin(Request $request) {
        $code = $request['passcode'];
        $passcode = Passcode::where('code', '=', $code)->get()->first();

        if($passcode !== null) {
            $judge_name = $passcode->judge_name;
            $request->session()->put('judge_name', $judge_name);
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
