<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// you reference the controller here
// the students route will be handled by the StudentController
// this one line will create all the routes for the resource "student"
// it will prefix the routes with "students"
// do not hardcode the routes, use the resource method to create the routes 
// for example: students.index, students.create, students.store, etc.

// Route class
// resource is a method that creates all the routes for the resource

Route::resource('students', StudentController::class);

// on your cli: php artisan route:list

// GET|HEAD        / ..................................................................................................
// GET|HEAD        storage/{path} ....................................................................... storage.local
// GET|HEAD        students .................................................. students.index › StudentController@index
// POST            students .................................................. students.store › StudentController@store
// GET|HEAD        students/create ......................................... students.create › StudentController@create
// GET|HEAD        students/{student} .......................................... students.show › StudentController@show
// PUT|PATCH       students/{student} ...................................... students.update › StudentController@update
// DELETE          students/{student} .................................... students.destroy › StudentController@destroy
// GET|HEAD        students/{student}/edit ..................................... students.edit › StudentController@edit
// GET|HEAD        up .................................................................................................