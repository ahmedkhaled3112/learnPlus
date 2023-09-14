@extends('master')

@section('page-title')
    Student Profile
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-primary">Student Profile</h1>
        <div class="row">
            <div class="col-6">
                <ul class="h2 mb-5">
                    <li class="mb-3">ID: {{ $student->id }}</li>
                    <li class="mb-3">Name: {{ $student->name }}</li>
                    <li class="mb-3">Phone: {{ $student->phone }}</li>
                    <li class="mb-3">Birth Date: {{ $student->birth_date }}</li>
                    <li class="mb-3">Address: {{ $student->address }}</li>
                    <li class="mb-3">City: {{ $student->city->name }}</li>
                </ul>
                <a href="/students" class="btn btn-secondary">Back to Students List</a>
            </div>
            <div class="col-6">
                <img id="profile-picture" src="{{ asset('storage/students/' . $student->image) }}">
            </div>
        </div>
    </div>
</div>
@endsection

