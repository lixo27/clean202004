@extends('clean::layouts.main')

@section('title', 'Create Sale')

@section('content')

    <h1>Create Sale</h1>

    <form class="border p-4" method="post" action="{{ route('sale.store') }}">

        <div class="form-group row">
            <label for="customerId" class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
                <select id="customerId" name="customerId" class="custom-select" required>
                    <option value="" selected>Choose...</option>
                    @foreach ($saleViewModel->customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="employeeId" class="col-sm-2 col-form-label">Employee</label>
            <div class="col-sm-10">
                <select id="employeeId" name="employeeId" class="custom-select" required>
                    <option value="" selected>Choose...</option>
                    @foreach ($saleViewModel->employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="customerId" class="col-sm-2 col-form-label">Product</label>
            <div class="col-sm-10">
                <select id="productId" name="productId" class="custom-select" required>
                    <option value="" selected>Choose...</option>
                    @foreach ($saleViewModel->products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} - {{ money_format('%.2n', $product->price ) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Product</label>
            <div class="col-sm-10">
                <input type="number" name="quantity" class="form-control" value="{{ $saleViewModel->sale->quantity }}" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>

    </form>

@endsection
