<?php

namespace App\Http\Controllers;

use App\Models\ChallengeTaken;
use App\Models\DetailLearning;
use App\Models\EvaluationTaken;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/home', [
            "title" => "Home"
        ]);
    }

    public function evaluation()
    {
        $evaluation = EvaluationTaken::orderBy('status', 'asc')->get();
        return view('admin/evaluation', [
            "title" => "Evaluasi",
            "evaluation" => $evaluation
        ]);
    }

    public function evaluationDetail(EvaluationTaken $evaluationTaken)
    {
        $detail = EvaluationTaken::find($evaluationTaken->id);
        return view('admin/evaluation_detail', [
            "title" => "Evaluasi",
            "e" => $detail
        ]);
    }

    public function download(EvaluationTaken $evaluationTaken)
    {
        $eval = EvaluationTaken::find($evaluationTaken->id);
        return Storage::download('eval-course/' . $eval->file_path);
    }

    public function evaluationUpdate(Request $request)
    {
        $data = $request->validate([
            'nilai' => 'required|numeric|min:20|max:100'
        ]);

        $eval = EvaluationTaken::find($request->input('eval_id'));
        $eval->nilai = $request->input('nilai');

        foreach ($eval->evaluation->rubrik->sortBy('score') as $r) {

            if (($eval->nilai / 10) <= intval($r->score)) {
                $eval->point = $r->point;
                break;
            }
        }

        $eval->xp = $eval->evaluation->xp;
        $eval->status = 2;
        $eval->save();

        $learning  = $eval->detailLearning;
        $learning->status = 1;
        $learning->save();

        $next = $learning->content->next_id;
        $nextDetail = DetailLearning::where('content_id', $next)->first();
        $nextDetail->status = 1;
        $nextDetail->save();

        $l = $nextDetail->learning;
        $l->status = 1;
        $l->save();

        $achievement = $learning->learning->user->achievement;
        $achievement->total_point += $eval->point;
        $achievement->total_xp += $eval->xp;
        $achievement->save();

        $this->updateLevel($achievement);

        //update notification
        /*$data = [
            "user_id" => $l->user_id,
            "judul_notifikasi" => "Telah Menyelesaikan Evaluasi pada " . $l->course->judul_course,
            "id_content" => $l->id,
            "tipe" => 1
        ];

        Notification::create($data);*/

        return back();
    }

    public function challenge()
    {
        $challenge = ChallengeTaken::orderBy('status', 'asc')->get();
        return view('admin/challenge', [
            "title" => "Tantangan",
            "challenge" => $challenge
        ]);
    }

    public function challengeDownload(ChallengeTaken $challengeTaken)
    {
        $challenge = ChallengeTaken::find($challengeTaken->id);
        return Storage::download('challenge/' . $challenge->answer_file);
    }

    public function challengeDetail(ChallengeTaken $challengeTaken)
    {
        $detail = ChallengeTaken::find($challengeTaken->id);
        return view('admin/challenge_detail', [
            "title" => "Tantangan",
            "c" => $detail
        ]);
    }

    public function challengeUpdate(Request $request)
    {
        $data = $request->validate([
            'nilai' => 'required|numeric|min:0|max:100'
        ]);

        $chal = ChallengeTaken::find($request->input('c_id'));
        $chal->score = $request->input('nilai');
        if ($request->input('nilai') <= 60) {
            $chal->status = 3;
            $chal->comment = $request->input('comment');
        } else {
            $chal->status = 2;
            $chal->point = $chal->challenge->point;
            $chal->xp = $chal->challenge->xp;
            $achievement = $chal->user->achievement;
            $achievement->total_point += $chal->point;
            $achievement->total_xp += $chal->xp;
            $achievement->save();
        }

        $chal->save();
        $this->updateLevel($achievement);

        return back();
    }
}
