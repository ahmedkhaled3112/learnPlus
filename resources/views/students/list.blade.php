@extends('master')

@section('page-title')
    Students List
@endsection

@section('page-content')
    <div class="card">
        <div class="card-body">
            <h1 class="display-3 my-5 text-primary"><i class="fa-solid fa-users"></i> Students List</h1>
            <div class="row">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th style="width: 30%;">Actions</th>
                    </tr>
                    @foreach($students as $student)
                    <tr>
                        <td><img class="profile-picture" src="{{ asset('storage/students/' . $student->image) }}"></td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->city->name }}</td>
                        <td style="width: 30%;">
                            <a href="{{ route('students.view', $student->id) }}" class="btn btn-secondary">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                            <form style="display: inline-block;" action="{{ route('students.delete', $student->id) }}" method="post">
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
