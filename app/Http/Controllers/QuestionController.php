<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Question;
use App\Http\Models\Answer;


class QuestionController extends Controller
{
  public function postView(){
        $user = \Auth::user();   #ログインユーザー情報を取得します。
        return view('post',compact('user'));
  }

  // public function headerView(){
  //     $user = \Auth::user();
  //     return view('header',compact('user'));
  // }

  public function index($id){
      // return $id;
      //回答するユーザー情報、質問本文、質問タイトル
      $user = \Auth::user();   #ログインユーザー情報を取得します。
      $question = new Question();
      $questions = $question->find($id);
      $answer = new Answer();
      $answers = $answer->get($id);
      // $questionsは変数 = $question->find($id)はモデルメソッド
      // dd($questions);
      //複数の変数を渡すときは以下のようにカンマで区切る
      // dd($answers);
      return view('post_answer',compact('user', 'questions', 'answers'));
  }

  public function answer(Request $request, $id){
        $data = $request->all();
        $question_id = $id;
        // dd($question_id);
        $this->validate($request, [
        'name' => 'required',
        'coment' => 'required | min:20',
      ]);
        $user = \Auth::user();
        $user_id = $user->id;
        $answer = new Answer();
        $answers = $answer->answerInsert($data, $user_id, $question_id);

  }


}
