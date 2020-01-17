@extends('layout.web.master') @section('title','Homepage') @section('content')
<div class="container mt-4">

    <h1 class="text-center">Product Add</h1>
    <h3 class="text-center">Suppliers Provided Products </h3>

    <div class="row">
        <div class="col-md-offset-4 col-md-8 mt-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-primary">Add Product</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/supplier/save_product') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input id="email" type="title" class="form-control" name="title" value="{{ old('title') }}" autofocus> @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('product_category_id') ? ' has-error' : '' }}">
                            <label for="product_category_id" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input id="product_category_id" type="title" class="form-control" name="product_category_id" value="{{ old('product_category_id') }}" autofocus>

                                <select name="product_category_id" id="" class="form-control">
                                    <option value="" disabled selected>Product Categ</option>
                                </select> @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/supplier/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@push('extra-css') @endpush @endsection