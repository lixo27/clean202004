@extends('clean::layouts.main')

@section('title', 'Details')

@section('content')

    <h1>Sale Details</h1>

    <table class="table table-borderless border">

        <tbody class="thead-light">

        <tr>
            <th class="w-25" scope="row">#</th>
            <td>{{ $sale->id }}</td>
        </tr>

        <tr>
            <th scope="row">Date</th>
            <td>{{ $sale->date }}</td>
        </tr>

        <tr>
            <th scope="row">Customer</th>
            <td>{{ $sale->customerName }}</td>
        </tr>

        <tr>
            <th scope="row">Employee</th>
            <td>{{ $sale->employeeName }}</td>
        </tr>

        <tr>
            <th scope="row">Product</th>
            <td>{{ $sale->productName }}</td>
        </tr>

        <tr>
            <th scope="row">Total</th>
            <td>@money( $sale->total )</td>
        </tr>

        </tbody>

    </table>

@endsection
