<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Question extends Model
{
    public function get()
    {
        $questions = DB::table('questions')->select('questions.id', 'body', 'title', 'questions.created_at', 'users.name')
        ->join('users', 'users.id', '=', 'questions.user_id')
        ->get();
        return $questions;
    }

    public function find($id)
    {
        $questions = DB::table('questions')->select('questions.id', 'body', 'title', 'questions.created_at', 'users.name')
        ->join('users', 'users.id', '=', 'questions.user_id')
        ->where('questions.id', $id)->get();
        return $questions['0'];
    }

    public function insert($data,$user_id)
    {
        DB::table('questions')
        ->insert(['body' => $data['coment'], 'user_id' => $user_id, 'title' => $data['title']] );
     // 'title' => $title
     // 'title' => $data['title']
    }

}
