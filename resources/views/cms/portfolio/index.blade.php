@extends('cms/layouts/main')
@section('content')
    <h1>My Portfolio</h1>
    <a href="/cms/portfolio/add" class="btn btn-outline-primary my-4">Add Portfolio</a>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($data as $i)
                    <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->project_date }}</td>
                        <td>
                            <a href="/cms/portfolio/{{ $i->id }}" class="btn btn-primary">View</a>
                            <a href="/cms/portfolio/delete/{{ $i->id }}"
                                onclick="confirm('Are you sure want to delete portfolio ?')"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
