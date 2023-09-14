@extends('master')

@section('page-title')
    Search Students By Field
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <h1 class="display-1 text-primary my-5">Search Students By Field</h1>
        <form class="row mb-4" action="{{ route('students.by_field') }}" method="get">
            <div class="col-6">
                <input type="text" name="term" id="term" value="{{ request('term') }}" class="form-control" placeholder="Type a Value Here">
            </div>
            <div class="col-4">
                <select name="field" id="field" class="form-select">
                    <option {{ request('field') == "name"       ? "selected" : "" }} value="name">Name</option>
                    <option {{ request('field') == "phone"      ? "selected" : "" }} value="phone">Phone</option>
                    <option {{ request('field') == "address"    ? "selected" : "" }} value="address">Address</option>
                    <option {{ request('field') == "birth_date" ? "selected" : "" }} value="birth_date">Birth Date</option>
                </select>
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
