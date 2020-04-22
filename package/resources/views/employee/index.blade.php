@extends('clean::layouts.main')

@section('title', 'Employees')

@section('content')

    <h1>Employees</h1>

    <table class="table table-bordered">

        <thead class="thead-light">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>

        </thead>

        <tbody>

        @forelse ($employees as $employee)

            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="2">Sorry, no employees</td>
            </tr>

        @endforelse

        </tbody>

    </table>

@endsection
