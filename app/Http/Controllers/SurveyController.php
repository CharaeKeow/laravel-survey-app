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

        //save answer into DB
        DB::insert('insert into surveys (age_group, education_level, monthly_income, gender) values (?, ?, ?, ?)', [$ageGroup, $eduLevel, $salary, $gender]);

        //Query db for each answer group 

        $surveys = self::querySurveys();
        //dd($surveys);
        return view('/results', ["data" => $surveys]);
    }

    public function showResults()
    {
        $surveys = self::querySurveys();

        return view('/results', ["data" => $surveys]);
    }

    static public function querySurveys()
    {
        //Age
        // under 18
        $ageGroup1 = DB::select('select count(id) as age_group_1 from surveys where age_group = :age_group', ['age_group' => 1]);
        //18-35
        $ageGroup2 = DB::select('select count(id) as age_group_2 from surveys where age_group = :age_group', ['age_group' => 2]);
        //35-60
        $ageGroup3 = DB::select('select count(id) as age_group_3 from surveys where age_group = :age_group', ['age_group' => 3]);
        // >60
        $ageGroup4 = DB::select('select count(id) as age_group_4 from surveys where age_group = :age_group', ['age_group' => 4]);

        // Education
        // secondary
        $eduLevel1 = DB::select('select count(id) as education_level_1 from surveys where education_level = :education_level', ['education_level' => 1]);
        // diploma
        $eduLevel2 = DB::select('select count(id) as education_level_2 from surveys where education_level = :education_level', ['education_level' => 2]);
        // degree
        $eduLevel3 = DB::select('select count(id) as education_level_3 from surveys where education_level = :education_level', ['education_level' => 3]);
        // postgraduate
        $eduLevel4 = DB::select('select count(id) as education_level_4 from surveys where education_level = :education_level', ['education_level' => 4]);

        // Monthly Salary
        // <1000
        $salary1 = DB::select('select count(id) as monthly_income_1 from surveys where monthly_income = :monthly_income', ['monthly_income' => 1]);
        // 1000 - 3000
        $salary2 = DB::select('select count(id) as monthly_income_2 from surveys where monthly_income = :monthly_income', ['monthly_income' => 2]);
        // 3000 - 5000
        $salary3 = DB::select('select count(id) as monthly_income_3 from surveys where monthly_income = :monthly_income', ['monthly_income' => 3]);
        // > 5000
        $salary4 = DB::select('select count(id) as monthly_income_4 from surveys where monthly_income = :monthly_income', ['monthly_income' => 4]);

        // under 18
        $gender1 = DB::select('select count(id) as gender_1 from surveys where gender = :gender', ['gender' => 1]);
        //18-35
        $gender2 = DB::select('select count(id) as gender_2 from surveys where gender = :gender', ['gender' => 2]);

        $surveys = array(
            'ageGroup' => array(
                'ageGroup1' => $ageGroup1[0]->age_group_1,
                'ageGroup2' => $ageGroup2[0]->age_group_2,
                'ageGroup3' => $ageGroup3[0]->age_group_3,
                'ageGroup4' => $ageGroup4[0]->age_group_4,
            ),
            'eduLevel' => array(
                'eduLevel1' => $eduLevel1[0]->education_level_1,
                'eduLevel2' => $eduLevel2[0]->education_level_2,
                'eduLevel3' => $eduLevel3[0]->education_level_3,
                'eduLevel4' => $eduLevel4[0]->education_level_4,
            ),
            'salary' => array(
                'salary1' => $salary1[0]->monthly_income_1,
                'salary2' => $salary2[0]->monthly_income_2,
                'salary3' => $salary3[0]->monthly_income_3,
                'salary4' => $salary4[0]->monthly_income_4,
            ),
            'gender' => array(
                'gender1' => $gender1[0]->gender_1,
                'gender2' => $gender2[0]->gender_2
            )
        );

        return $surveys;
    }
}
