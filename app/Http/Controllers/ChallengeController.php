<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\ChallengeTaken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $c = Auth::user()->challengeTaken;
            $recap = [
                "wait" => $c->where('status', 1)->count(),
                "finish" => $c->where('status', 2)->count(),
                "point" => $c->where('status', 2)->sum('point')
            ];
            return view('main/challenge', [
                "title" => "Tantangan",
                "challenge" => Challenge::all(),
                "recap" => $recap
            ]);
        } else {
            return view('main/challenge', [
                "title" => "Tantangan",
                "challenge" => Challenge::all()
            ]);
        }
    }

    public function detail(Challenge $challenge)
    {
        if (Auth::check()) {
            $id = ChallengeTaken::where([['user_id', Auth::user()->id], ['challenge_id', $challenge->id]])->first();
            if ($id) {
                return redirect('/challenge/detail/' . $challenge->id . '/' . $id->id);
            } else {
                return view('main/detail_challenge', [
                    "title" => "Detail Tantangan",
                    "detail" => Challenge::find($challenge->id),
                    "taken" => null
                ]);
            }
        } else {
            return view('main/detail_challenge', [
                "title" => "Detail Tantangan",
                "detail" => Challenge::find($challenge->id)
            ]);
        }
    }

    public function detailTaken(Challenge $challenge, ChallengeTaken $challengeTaken)
    {
        $taken = ChallengeTaken::find($challengeTaken->id);
        return view('main/detail_challenge', [
            "title" => "Detail Tantangan",
            "detail" => Challenge::find($taken->challenge_id),
            "taken" => $taken
        ]);
    }

    public function join(Request $request)
    {
        $ct = ChallengeTaken::create([
            'challenge_id' => $request->input('id_challenge'),
            'user_id' => Auth::user()->id
        ]);
        return redirect('/challenge/detail/' . $request->input('id_challenge') . '/' . $ct->id);
    }

    public function challengeSubmit(Request $request)
    {
        $request->validate([
            'answer' => 'file|required|max:2048'
        ]);

        $ct = ChallengeTaken::find($request->input('id'));
        if ($request->file()) {
            $fileName = time() . '_' . $ct->user_id . '_' . $request->file('answer')->getClientOriginalName();
            $request->file('answer')->storeAs('challenge', $fileName);
            $ct->answer_file = $fileName;
            $ct->submit_date = date('Y-m-d H:i:s');
            $ct->status = 1;

            $ct->save();
        }

        return back();
    }
}
