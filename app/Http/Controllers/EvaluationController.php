<?php

namespace App\Http\Controllers;

use App\Models\DetailLearning;
use App\Models\EvaluationTaken;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index(DetailLearning $detailLearning)
    {
        $detail = DetailLearning::find($detailLearning->id);
        $ld = $detail->learning->detailLearning;
        $content = $detail->content;
        $course = $content->course;

        $eval_taken = $detail->evaluationTaken;
        $evaluation = $eval_taken->evaluation;
        $rubrik = $evaluation->rubrik;

        return view('course/evaluation', [
            "title" => "Evaluasi",
            "page" => "content",
            "content" => $content,
            "sub_course" => $course->subCourse,
            "allContent" => $course->content,
            "allDetail" => $ld,
            "evaluation" => $evaluation,
            "eval_taken" => $eval_taken,
            "rubrik" => $rubrik,
            "detail" => $detail
        ]);
    }

    public function evalSubmit(Request $request)
    {
        $request->validate([
            'answer' => 'file|required|max:2048'
        ]);

        $eval_taken = EvaluationTaken::find($request->input('eval_id'));
        if ($request->file()) {
            $fileName = time() . '_' . $eval_taken->detailLearning->learning->user_id . '_' . $request->file('answer')->getClientOriginalName();
            if ($request->file('answer')->storeAs('eval-course', $fileName)) {
                $eval_taken->file_path = $fileName;
                $eval_taken->waktu_pengumpulan = date('Y-m-d H:i:s');
                $eval_taken->status = 1;
                $eval_taken->save();
            }
        }

        return back();
    }
}
