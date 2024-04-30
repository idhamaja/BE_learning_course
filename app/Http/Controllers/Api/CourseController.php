<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //return all the courseList
    public function courseList(){

        try {
            //code...
        //select the fields
        $result = Course::get(['name', 'thumbnail', 'lesson_num', 'price', 'id']);
        // $result = Course::select('name', 'thumbnail', 'lesson_num', 'price', 'id')->get();

        return response()->json([
            'code' => 200,
            'msg' => 'My course list is here',
            'data' => $result
        ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'code'=>500,
                'msg'=> 'The Column does not exist or you have a syntax error',
                'data' => $th->getMessage(),
            ], 500);
        }
    }
}
