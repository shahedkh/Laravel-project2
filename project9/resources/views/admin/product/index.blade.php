@extends('layouts.admin')

@section('content')
@if ($message = session('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h1>Products Page</h1>
            <a href="{{ url('add-product') }}" class="btn btn-success mt-3">Add Product!</a>
            <hr>
        </div>
        <div class="card-body table-responsive ">
            <table class="table table-bordered table-striped overflow-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brief</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($product as $item)
                    <tr class="border">
                        <td>{{ $item->id }}</td>
                        <td >{{ $item->name }}</td>
                        <td >{{ $item->category->name }}</td>
                        <td >{{ $item->brief }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                        <img class="w-100" src="{{ asset('/assets/uploads/product/'.$item->image) }}" alt="cat_image">
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection