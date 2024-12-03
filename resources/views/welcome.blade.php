<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')  <!-- Extend the app layout -->

@section('title', 'Welcome to Student Management') <!-- Optional title for the page -->

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Student Management!</h1>
        <p class="lead">This is the central dashboard for managing students, teachers, courses, enrollments, and payments. You can easily navigate to the relevant sections from the menu above.</p>
        <hr class="my-4">
        <p>Click on any of the links in the navigation bar to get started.</p>
    </div>
@endsection
