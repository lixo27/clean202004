@extends('clean::layouts.main')

@section('title', 'Sales')

@section('content')

    <h1>Sales</h1>

    <table class="table table-bordered">

        <thead class="thead-light">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Customer</th>
            <th scope="col">Employee</th>
            <th scope="col">Product</th>
            <th scope="col">Total</th>
        </tr>

        </thead>

        <tbody>

        @forelse ($sales as $sale)

            <tr>
                <td><a href="{{ route('sale.detail', ['id' => $sale->id]) }}">{{ $sale->id }}</a></td>
                <td>{{ $sale->date }}</td>
                <td>{{ $sale->customerName }}</td>
                <td>{{ $sale->employeeName }}</td>
                <td>{{ $sale->productName }}</td>
                <td>@money( $sale->total )</td>
            </tr>

        @empty

            <tr>
                <td colspan="6">Sorry, no sales</td>
            </tr>

        @endforelse

        </tbody>

    </table>

    <div class="text-right">
        <a class="btn btn-primary" href="{{ route('sale.create') }}">Create Sale</a>
    </div>

@endsection
