@extends('layout.web.master') @section('title','Homepage') @section('content')
<div class="container">

    <h1 class="text-center">Recent Received Products from Supplier</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Total</th>
                <th scope="col">Details</th>
                <th scope="col">Received on</th>
                <th scope="col">Supplier</th>
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
                <td>{{ date('d-m-Y',strtotime($product->created_at)) }}</td>
                <td>{{ $product->name }}</td>


            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@push('extra-css') @endpush @endsection