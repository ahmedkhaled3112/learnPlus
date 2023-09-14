@extends('master')

@section('page-title')
    New Student
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-primary">New Student</h1>
        <form action="{{ route('students.save') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Profile Picture</label>
                <input type="file" name="image" id="image" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="city_id">City</label>
                <select name="city_id" id="city_id" class="form-select mt-2 mb-3">
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="/students" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
@endsection
