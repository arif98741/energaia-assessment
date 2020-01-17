@extends('layout.web.master') @section('title','Homepage') @section('content')
<div class="container">

    <h1 class="text-center">Products</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key=> $product)
            <tr>
                <th scope="row" class="text-center">{{ ++$key }}</th>
                <td>{{ $product->title }}</td>
                <td>{{ $product->product_category->name }}</td>
                <td class="text-center">{{ $product->price }}</td>
                <td>{{ substr($product->descriptions,0,20) }}...</td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@push('extra-css') @endpush @endsection