<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Question;

class IndexController extends Controller
{
    public function index(){
        //DB select文で質問内容を取得
        $question = new Question();
        $questions = $question->get();
        //質問内容を格納した配列をViewに渡す
        return view('top')->with('questions', $questions);
    }
}
