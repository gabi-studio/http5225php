<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Course;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // for now, we will just return a simple view
        return view('students.index', [
            'students' => Student::all(),
    
            // make the students variable available to the view
            // 'students' => Student::all() is a collection of all students
            // you dont have to use query builder here
            // this is called eloquent in laravel
            // this kind of saying select * from students
            // it uses "human readable" syntax
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // for now, we will just return a simple view that has a form
        // to create a new student
        // the form will have a post request to the students.store route
        // on the routes list, you can see the names of the routes
        // php artisan route:list
        return view('students.create')->with('courses', Course::all());   
        
        // ^ this means that when you create a new student, 
        // you will also be able to select a course when creating a new student
        // this is a one to many relationship
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        // to keep the code clean, we will use the request class to validate the request
        Student::create($request->validated());
        // validated -- this will use the validation rules from the request class
        
        return redirect()->route('students.index');
        // this will redirect to the index route
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        // in classic php, fetch association from the database
        // in laravel, you can just use compact
        // compact converts the student variable to fetch the student from the database
        // compact allows you to return a single student array 
        // and pass it to the view

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // we are calling the update method on the upcoming request
        // this means we are updating the student with the request data
        $student->update($request->validated());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
        Student::destroy($student -> id);
        return redirect()->route('students.index');
    }
}
