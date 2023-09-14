@extends('master')

@section('page-title')
    Edit Student
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h1 class="display-1 my-5 text-primary">Edit Student</h1>
            </div>
            <div class="col-4">
                <img class="mt-3" id="profile-picture" src="{{ asset('storage/students/' . $student->image) }}">
            </div>
        </div>
        <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            <div class="form-group">
                <label for="image">Profile Picture</label>
                <input type="file" name="image" id="image" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ $student->phone }}" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{ $student->email }}" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control mt-2 mb-3">
            </div>
            <div class="form-group">
                <label for="city_id">City</label>
                <select name="city_id" id="city_id" class="form-select mt-2 mb-3">
                    @foreach ($cities as $city)
                        <option {{ $city->id == $student->city_id ? "selected" : "" }} value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('students.list') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
@endsection
