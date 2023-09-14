@extends('master')

@section('page-title')
    Students Trash
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 my-5 text-danger"><i class="fa-solid fa-trash-can"></i> Students Trash</h1>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th style="width: 20%;">Actions</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->city->name }}</td>
                    <td style="width: 20%;">
                        <a href="{{ route('students.restore', $student->id) }}" class="btn btn-success">Restore</a>
                        <a href="{{ route('students.delete_forever', $student->id) }}" class="btn btn-danger">Delete Permanently</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
