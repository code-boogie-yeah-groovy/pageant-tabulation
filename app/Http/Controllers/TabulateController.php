<?php

namespace App\Http\Controllers;








use Validator;
use Illuminate\Http\Request;
use App\Passcode;
use App\Event;

class TabulateController extends Controller
{

    public function index(Request $request) {
        $passcode = Passcode::where('id', '=', $request->session()->get('code_id'))->get()->first();
        return view('judge.tabulation', ['passcode' => $passcode]);
    }

    public function indexCard(Request $request) {
        $passcode = Passcode::where('id', '=', $request->session()->get('code_id'))->get()->first();
        return view('judge.scorecard', ['passcode' => $passcode]);
    }

    public function judgeLogin(Request $request) {
        $code = $request['passcode'];
        $passcode = Passcode::where('code', '=', $code)->get()->first();

        $messages = [
            'passcode.required' => 'Please enter the code',
            'passcode.exists' => 'You have entered an invalid code'
        ];

        $validator = Validator::make($request->all(), [
            'passcode' => 'required|exists:passcodes,code,usable,1',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $code_id = $passcode->id;
        $request->session()->put('code_id', $code_id);
        return redirect('tabulation');
    }

    public function judgeLogout(Request $request) {
        $request->session()->flush();
        return redirect('/');
    }
}
