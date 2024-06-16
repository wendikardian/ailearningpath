<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\ChallengeTaken;
use App\Models\DetailLearning;
use App\Models\EvaluationTaken;
use App\Models\Learning;
use App\Models\Notification;
use App\Models\QuizTaken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::with(['achievement', 'challengeTaken', 'learning'])->get();
        $quiz_takens = Learning::all();
        return view('admin/home', [
            "title" => "Dashboard",
            "user" => $user,
            "quiz_takens" => $quiz_takens
        ]);
    }

    function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    function random_color()
    {
        return $this->random_color_part() . $this->random_color_part() . $this->random_color_part();
    }


    public function detailDashboard(User $user)
    {
        $user = User::with(['achievement', 'challengeTaken', 'learning'])->where('id', "=", $user->id)->get();
        $arrayDataPointUser = array();
        $arrayDataPengalamanUser = array();
        $arrayNamaPointUser = array();
        $arrayColorPointUser = array();
        $arrayColorPengalamanUser = array();
        $arrayColorChallengesUser = array();
        $arrayDataChallengesUser = array();
        $arrayNamaChallengesUser = array();
        $arrayColorQuizTakensUser = array();
        $arrayDataQuizTakensUser = array();
        $arrayNamaQuizTakensUser = array();
        $arrayColorEvaluationTakensUser = array();
        $arrayDataEvaluationTakensUser = array();
        $arrayNamaEvaluationTakensUser = array();
        $check = array();
        foreach ($user as $value) {
            array_push($arrayDataPointUser, $value->achievement->total_point);
            array_push($arrayDataPengalamanUser, $value->achievement->total_xp);
            array_push($arrayNamaPointUser, $value->name);
            array_push($arrayColorPointUser, "#" . $this->random_color());
            array_push($arrayColorPengalamanUser, "#" . $this->random_color());
            if ($value->challengeTaken) {
                foreach ($value->challengeTaken as $dataChallenge) {
                    $challenge = Challenge::where('id', '=', $dataChallenge->challenge_id)->first();
                    array_push($arrayColorChallengesUser, "#" . $this->random_color());
                    array_push($arrayDataChallengesUser, $dataChallenge->score);
                    array_push($arrayNamaChallengesUser, $challenge->judul);
                }
            }
            $quizTaken = QuizTaken::select("courses.judul", DB::raw('sum(quiz_takens.total_point) as total_point'))
                ->join('detail_learnings', 'quiz_takens.detail_learning_id', 'detail_learnings.id')
                ->join('learnings', 'detail_learnings.learning_id', 'learnings.id')
                ->join('courses', 'learnings.course_id', 'courses.id')
                ->where('learnings.user_id', "=", $value->id)
                ->groupBy('courses.id')
                ->get();
            if ($quizTaken) {
                foreach ($quizTaken as $valueQuizTaken) {
                    array_push($arrayColorQuizTakensUser, "#" . $this->random_color());
                    array_push($arrayDataQuizTakensUser, $valueQuizTaken->total_point);
                    array_push($arrayNamaQuizTakensUser, $valueQuizTaken->judul);
                }
            }
            $evaluationTaken = EvaluationTaken::select("courses.judul", DB::raw('sum(evaluation_takens.nilai) as total_point'))
                ->join('detail_learnings', 'evaluation_takens.detail_learning_id', 'detail_learnings.id')
                ->join('learnings', 'detail_learnings.learning_id', 'learnings.id')
                ->join('courses', 'learnings.course_id', 'courses.id')
                ->where('learnings.user_id', "=", $value->id)
                ->groupBy('courses.id')
                ->get();
            if ($evaluationTaken) {
                foreach ($evaluationTaken as $valueEvaluationTaken) {
                    array_push($arrayColorEvaluationTakensUser, "#" . $this->random_color());
                    array_push($arrayDataEvaluationTakensUser, $valueEvaluationTaken->total_point);
                    array_push($arrayNamaEvaluationTakensUser, $valueEvaluationTaken->judul);
                }
            }
        }
        return view('admin/detail_dashboard', [
            "title" => "Home",
            "user" => $user,
            "arrayDataPointUser" => $arrayDataPointUser,
            "arrayDataPengalamanUser" => $arrayDataPengalamanUser,
            "arrayNamaPointUser" => $arrayNamaPointUser,
            "arrayColorPointUser" => $arrayColorPointUser,
            "arrayColorPengalamanUser" => $arrayColorPengalamanUser,
            "arrayColorChallengesUser" => $arrayColorChallengesUser,
            "arrayDataChallengesUser" => $arrayDataChallengesUser,
            "arrayNamaChallengesUser" => $arrayNamaChallengesUser,
            "arrayColorQuizTakensUser" => $arrayColorQuizTakensUser,
            "arrayDataQuizTakensUser" => $arrayDataQuizTakensUser,
            "arrayNamaQuizTakensUser" => $arrayNamaQuizTakensUser,
            "arrayColorEvaluationTakensUser" => $arrayColorEvaluationTakensUser,
            "arrayDataEvaluationTakensUser" => $arrayDataEvaluationTakensUser,
            "arrayNamaEvaluationTakensUser" => $arrayNamaEvaluationTakensUser,
            "check" => $check
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
