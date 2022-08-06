@extends('dashboard.layouts.master')

@section('content')
    <div class="m-auto w-25">
        <h4>Create New Product</h4>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="description" id="desc" class="form-control" required></textarea>
            </div>
            <div class="form-group ">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
