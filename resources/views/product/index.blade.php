@extends('clean::layouts.main')

@section('title', 'Products')

@section('content')

    <h1>Products</h1>

    <table class="table table-bordered">

        <thead class="thead-light">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
        </tr>

        </thead>

        <tbody>

        @forelse ($products as $product)

            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ (new \NumberFormatter('en-US', \NumberFormatter::CURRENCY))->format( $product->price ) }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="3">Sorry, no products</td>
            </tr>

        @endforelse

        </tbody>

    </table>

@endsection
