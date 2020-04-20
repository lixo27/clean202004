@extends('site.layout.main')

@section('title', 'Customers')

@section('content')

    <h1>Customers</h1>

    <table class="table table-bordered">

        <thead class="thead-light">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>

        </thead>

        <tbody>

        @forelse ($customers as $customer)

            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="2">Sorry, no customers</td>
            </tr>

        @endforelse

        </tbody>

    </table>

@endsection
