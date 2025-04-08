<!-- you have to tell it to extend the layout section
-- and then tell it which section you want to this to render at 
-->

<!-- it looks for a layout in views, 
 if it's in a different folder, indicate -->
@extends('layout')
@section('content')
<!-- ^^ you can find this in the layout.blade.php -->
<!-- 'content' could be named anything that is related to th at section-->

<h1>Students</h1>
<!-- students is a variable passed from the controller to the view -->
<!-- it is an array of students, so we can loop through it -->
    @foreach ($students as $student)
        <p>{{ $student-> fname }} {{ $student-> lname }} | 
            <a href="{{ route('students.edit', $student -> id) }}">Edit </a></p>
            <form action ="{{ route('students.destroy', $student -> id) }}" method="POST">
                {{ csrf_field() }}
                @method('DELETE')
                <!-- <input type="hidden" id= "{{ $student -> id }}"> -->
                <input type="submit" value="Delete">
            </form>

    @endforeach
@endsection