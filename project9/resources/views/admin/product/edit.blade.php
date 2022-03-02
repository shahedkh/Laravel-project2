@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3" >
                        <label for="">Name</label>
                        <input value="{{ $product->name }}"  type="text" class="form-control" name="name">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Category</label>
                        <select name="cat_id" class="form-control">
                            @foreach($category as $item )
                            <option {{ $product->cat_id == $item->id ? 'selected' : '' }} value="{{ $item->id }} ">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Brief</label>
                        <textarea class="form-control" name="brief"  rows="5">{{ $product->brief }}</textarea>
                        <hr>
                    </div>
                    <div class="col-mid-12 mb-3">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description"  rows="5">{{ $product->description }}</textarea>
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Stock</label>
                        <input value="{{ $product->stock }}" type="number" name="stock">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Price</label>
                        <input value="{{ $product->price }}" type="number" name="price">
                        <hr>
                    </div>
                    <div class="col-md-6 mb-3" >
                        <label for="">Image</label>
                        <input value="{{ $product->image }}" type="text" name="image">
                        <hr>
                    </div>
                    <div class="col-mid-12">
                        <button type="submit" class="btn btn-success">Edit Product</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
@endsection