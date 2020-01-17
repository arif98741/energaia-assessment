@extends('layout.web.master') @section('title','Homepage') @section('content')
<div class="container mt-4">

    <h1 class="text-center">Dashboard</h1>
    <h3 class="text-center">Supplied Products </h3>
    <h3 class="">Supplier: {{ $supplier->name }} </h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Total</th>
                <th scope="col">Details</th>
                <th scope="col">Company</th>
                <th scope="col">Sent on</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key=> $product)
            <tr>
                <th scope="row" class="text-center">{{ ++$key }}</th>
                <td>{{ $product->title }}</td>
                <td class="text-center">{{ $product->price }}</td>
                <td class="text-center">{{ $product->amount.' ' }}@if($product->amount > 1) {{ $product->unit.'s' }} @else {{ $product->unit }} @endif</td>
                <td class="text-center">{{ $product->price * $product->amount }}</td>
                <td>{{ substr($product->descriptions,0,20) }}...</td>
                <td>{{ $product->name }}</td>
                <td>{{ date('d-m-Y',strtotime($product->created_at)) }}</td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@push('extra-css') @endpush @endsection