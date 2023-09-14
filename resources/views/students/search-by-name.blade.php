@extends('master')

@section('page-title')
    Search Students By Name
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 text-primary my-5">Search Students By Name</h1>
        <form class="row mb-4" action="/students/search-by-name" method="get">
            <div class="col-10">
                <input type="text" name="name" id="name" value="{{ request('name') }}" class="form-control" placeholder="Type a Name Here">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </form>
        @empty($results)
            <p class="alert alert-info text-center">No Data to Show</p>
        @else
            <div class="row">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Birth Date</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($results as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->birth_date }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->city_id }}</td>
                        <td>
                            <a href="/students/{{ $student->id }}" class="btn btn-secondary">View</a>
                            <a href="/students/{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                            <form style="display: inline-block;" action="/students/{{ $student->id }}" method="post">
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        @endempty
    </div>
</div>
@endsection
