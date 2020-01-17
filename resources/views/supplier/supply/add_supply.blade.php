@extends('layout.web.master') @section('title','Homepage') @section('content')
<div class="container mt-4">

    <h1 class="text-center">Supply Add</h1>
    <h3 class="text-center">Supply Products to Company</h3>

    <div class="row">
        <div class="col-md-offset-4 col-md-8 mt-1">
            <div class="panel panel-default">
                <div class="panel-heading bg-primary">Add Supply</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/supplier/supply') }}">
                        @method('post') {{ csrf_field() }}

                        <div class="form-group">
                            <label for="product_product_id" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">

                                <select name="product_id" id="" class="form-control">
                                    <option value="" disabled selected>Select Product</option>
                                    @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                    @endforeach
                                </select> @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_product_id" class="col-md-4 control-label">Company</label>

                            <div class="col-md-6">

                                <select name="admin_id" id="" class="form-control">
                                    <option value="" disabled selected>Select Company</option>
                                    @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select> @if ($errors->has('company'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="amount" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="amount" class="form-control" name="amount" value="{{ old('amount') }}" autofocus> @if ($errors->has('amount'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('amount') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descriptions" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea name="descriptions" id="" cols="30" rows="3" class="form-control">
                                    {{ old('descriptions') }}
                                </textarea> @if ($errors->has('descriptions'))

                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span> @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@push('extra-css') @endpush @endsection