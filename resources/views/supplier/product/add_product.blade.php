@extends('layout.web.master') @section('title','Homepage') @section('content')
<div class="container mt-4">

    <h1 class="text-center">Product Add</h1>
    <h3 class="text-center">Suppliers Provided Products </h3>

    <div class="row">
        <div class="col-md-offset-4 col-md-8 mt-1">
            <div class="panel panel-default">
                <div class="panel-heading bg-primary">Add Product</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/supplier/save-product') }}">
                        @method('post') {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">
                                <input id="email" type="title" class="form-control" name="title" value="{{ old('title') }}" autofocus> @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product_category_id" class="col-md-4 control-label">Product Name</label>

                            <div class="col-md-6">

                                <select name="product_category_id" id="" class="form-control">
                                    <option value="" disabled selected>Product Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select> @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span> @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit" class="col-md-4 control-label">Unit</label>

                            <div class="col-md-6">
                                <input id="unit" type="unit" class="form-control" name="unit" value="{{ old('unit') }}" autofocus> @if ($errors->has('unit'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('unit') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value="{{ old('title') }}" autofocus> @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
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