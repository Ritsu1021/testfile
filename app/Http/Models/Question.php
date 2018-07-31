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
}
