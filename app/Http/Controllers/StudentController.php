<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function show()
    {
        //array of student for fetching multiple data
        //$students = [];

        //normal data fetch
        /* $student = Student::get();
        return View('welcome', ['students' => $student]);*/

        //data fetch with condition
        /*$students = Student::where('city', 'Vapi')->orderBy('name')->get();
        return view('welcome', ['students' => $students]);*/

        //Chunking Record
        /*Student::chunk(2, function ($students) {
            echo 'Chunk of Data <br>';
            foreach ($students as $stud) {
                echo $stud->name;
                echo '<br>';
            }
        });*/

        //find() used
        /* $students = Student::find(1);
        //dd($students);
        return View('welcome', ['students' => $students]);*/

        //first() used
        /*$student = Student::first('name');
        return View('welcome', ['students' => $student]);*/

        //fetching first record according to condition using first()
        /*$student = Student::where('city', 'Vapi')->first();
        return View('welcome', ['students' => $student]);*/

        //fistWhere Methods
        /*$student = Student::firstWhere('city', 'Vapi');
        return View('welcome', ['students' => $student]);*/

        //fistOr() is u
        /* $students = Student::where('marks', 100)->firstOr(function () {
            echo 'First not Found So function Executed';
        });
        return View('welcome', ['students' => $students]);*/

        // firstOrCreate()-insert if not founded  else show the data
        /*$students = Student::firstOrCreate(
            ['name' => 'Rahul'],
            ['email' => 'rahul@gmail.com', 'city' => 'Surat', 'marks' => 65],
        );
        return View('welcome', ['students' => $students]);*/

        //firstOrNew()-same as firstOrCreate() but differance is mandatory to call save method for save data in database
        /*$students = Student::firstOrNew(
            ['name' => 'Ravi'],
            ['email' => 'ravi@gmail.com', 'city' => 'Patana', 'marks' => 85],
        );
        $students->save();
        return View('welcome', ['students' => $students]);*/

        //updateOrCreate()=update if found else make model
        /*$students = Student::updateOrCreate(
            ['name' => 'Rahul'],
            ['email' => 'rahul123@gmail.com', 'city' => 'Surat', 'marks' => 89],
        );
        return View('welcome', ['students' => $students]);*/

        //aggregate functions-count(),max()
        //$students = Student::where('city', 'vapi')->count();
        //$students = Student::where('city', 'Vapi')->min('marks');
        //$students = Student::where('city', 'Vapi')->max('marks');
        //dd($students);

        //Insert new Record in table
        // $students = new Student;
        // $students->name = 'Jinal';
        // $students->email = 'jinal12@gmail.com';
        // $students->city = 'Gandhinagar';
        // $students->marks = 65;
        // $students->save();
        // return View('welcome', ['students' => $students]);

        //using variable data insertion
        // $name = 'Sneha';
        // $email = 'sneha@gmail.com';
        // $city = 'Ahemadabad';
        // $marks = 85;
        // $students = new Student;
        // $students->name = $name;
        // $students->email = $email;
        // $students->city = $city;
        // $students->marks = $marks;
        // $students->save();
        // return View('welcome', ['students' => $students]);

        //Inert data using Create()
        /*$students = Student::create([
            'name' => 'Shailesh',
            'email' => 'sdv@gmail.com',
            'city' => 'Ahemadabad',
            'marks' => 85,
        ]);*/

        //update data in table
        /*$students = Student::find(10);
        $students->name = 'Vidhi';
        $students->email = 'vidhi@gmail.com';
        $students->city = 'Bardoli';
        $students->marks = 56;
        $students->save();
        return View('welcome', ['students' => $students]);*/

        //Mass Update
        //Student::where('city', 'vapi')->update(['marks' => 80]);

        //Delete Using delete Method
        // $students = Student::find(13);
        // $students->delete();

        //Delete using destroy Method
        // $students = Student::destroy(14);
        // dd($students);

        //Delete Using Quires
        //$students = Student::where('city', 'Raipur')->delete();
        // dd($students);

        //truncat method-remove all data from table;
        //Student::truncate();

        //cursor


    }
    //cursor-collection
    public function operation()
    {

        foreach (Student::where('id', '>', '2')->cursor() as $student) {
            echo $student;
        }
        exit();
        return view('students', compact('students'));
    }
}
