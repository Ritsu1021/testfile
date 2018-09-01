<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Answer extends Model
{
    public function answerInsert($data,$user_id,$question_id)
    {
        DB::table('answers')
        ->insert(['body' => $data['coment'], 'user_id' => $user_id, 'question_id' => $question_id]);
    }

    public function get($id)
    {
      $answers = DB::table('answers')->select( 'question_id', 'body', 'answers.created_at', 'users.name')
          ->join('users', 'users.id', '=', 'answers.user_id')
          ->where('question_id', $id)
          ->get();
      return $answers;
    }
}
