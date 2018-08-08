<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Question extends Model
{
    public function get()
    {
        $questions = DB::table('questions')->select('body')->get();
        return $questions;
    }
    public function insert($data,$user_id)
    {
        DB::table('questions')
        ->insert(['body' => $data['coment'],'user_id' => $user_id]);

    }
}
