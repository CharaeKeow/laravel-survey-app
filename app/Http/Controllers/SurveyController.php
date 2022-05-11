<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function showHomepage()
    {
        return view('homepage');
    }

    public function submit(Request $request)
    {
        $ageGroup = $request->input('age-group');
        $eduLevel = $request->input('edu-level');
        $salary = $request->input('salary');
        $gender = $request->input('gender');

        //$surveys = DB::table('surveys')->get();

        //save answer into DB
        DB::insert('insert into surveys (age_group, education_level, monthly_income, gender) values (?, ?, ?, ?)', [$ageGroup, $eduLevel, $salary, $gender]);

        //query db for each answer group 

        $surveys = array(
            $ageGroup, $eduLevel, $salary, $gender
        );
        return view('/results', ["data" => $surveys]);
    }

    public function showResults()
    {
        return view('results');
    }
}
