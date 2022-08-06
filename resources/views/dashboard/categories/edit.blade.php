@extends('dashboard.layouts.master')

@section('content')
    <div class="m-auto w-25">
        <h4>Update Category</h4>
        <form action="{{ route('category.update' , ['id'=> $category->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
