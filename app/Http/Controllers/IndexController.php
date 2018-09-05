<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Question;

class IndexController extends Controller
{
    public function index(){
        //DB select文で質問内容を取得
        $user = \Auth::user();
        $question = new Question();
        $questions = $question->get();
        //質問内容を格納した配列をViewに渡す
        // return view('top')->with('questions', $questions);
        return view('top',compact('questions', 'user'));
    }

    public function postQuestion(Request $request){
        $data = $request->all();
        $this->validate($request, [
        'name' => 'required',
        'coment' => 'required | min:20',
      ]);
        $user = \Auth::user();
        // dd($data);
        // dd($user->id);
        $user_id = $user->id; //1
        //モデルをインスタンス化
        $question = new Question();
        //モデルに命令を出す（データも同時に渡す）
        $questions = $question->insert($data, $user_id );
        // dd($user_id);
        //投稿完了ページに遷移
    }

}
