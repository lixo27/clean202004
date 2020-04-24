@extends('clean::layouts.main')

@section('title', 'Create Sale')

@section('content')

    <h1>Create Sale</h1>

    <form method="post" action="{{ route('sale.store') }}">

        <div class="border p-4 mb-3">

            <div class="form-group row">
                <label for="customerId" class="col-sm-2 col-form-label">Customer</label>
                <div class="col-sm-10">
                    <select id="customerId" name="customerId" class="custom-select" required>
                        <option value="" selected>Choose...</option>
                        @foreach ($saleViewModel->customers as $customer)
                            <option value="{{ $customer->value }}">{{ $customer->text }}</option>
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
                            <option value="{{ $employee->value }}">{{ $employee->text }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="productId" class="col-sm-2 col-form-label">Product</label>
                <div class="col-sm-10">
                    <select id="productId" name="productId" class="custom-select" required>
                        <option value="" selected>Choose...</option>
                        @foreach ($saleViewModel->products as $product)
                            <option value="{{ $product->value }}">{{ $product->text }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mb-0">
                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $saleViewModel->sale->quantity }}" required>
                </div>
            </div>

        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>

    </form>

@endsection
