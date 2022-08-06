@extends('dashboard.layouts.master')

@section('content')
<div>
    <h1>categories page</h1>
</div>
    <a href="{{ route('category.create') }}" class="btn btn-outline-primary">Add Category</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th>Actioos</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('category.edit' , ['id' => $category->id ]) }}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-info">Edit</button>
                        </form>
                        <form action="{{ route('category.destroy' , ['id' => $category->id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No Categories yet</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
