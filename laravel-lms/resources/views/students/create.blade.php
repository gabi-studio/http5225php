@extends('layout')
@section('content')
<h1>Create Student</h1>

<!-- do not hard code the url for action as "/students" as this could change
 do it more programatically, so you dont have to manually change anything -->

 <!-- in laravel, you always have to put the CSRF token in the form, 
    this is a security feature to prevent cross site request forgery -->

    @if ($errors -> any())
    <!-- any will return a boolean, all will return the records -->
        @foreach ($errors -> all() as $error)
                <li>{{ $error }}</li>
        @endforeach
            

    @endif

    <form action="{{ route('students.store') }}" method="POST">
        {{ csrf_field() }}
        <!-- this is a blade directive that will generate the CSRF token for you.
        it will generate a hidden input field with the token in it.
        this is a security feature to prevent cross site request forgery 
        if you don't put this token, laravel will not allow the form to be submitted. 
        by default, purely session based-->

        <!-- use old to repopulate the form fields with the old values if the form fails validation. -->

        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" placeholder="First Name" value="{{ old('fname') }}" >
        
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" placeholder="Last Name" value="{{ old('lname') }}" >

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" >
        
        <!-- add a dropdown for selecting course -->

        <select name="" id "">
            @foreach ($courses as $course)
                <option value="">{{ $course -> name }}</option>
            @endforeach
        </select>
        <button type="submit">Create Student</button>

        

    </form>
@endsection