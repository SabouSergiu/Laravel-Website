@extends('layouts2.app-master')

@section('content')
    <div align="right">
        <a href="http://localhost:8000/home">Inapoi la magazin</a>
    </div>
    <div class="bg-light p-4 rounded">
        <h1>Products</h1>
        <div class="lead">
            Manage your products here.
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right">Add new product</a>
        </div>

        <div class="mt-2">
            @include('layouts2.partials.messages')
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Description</th>
                <th scope="col" width="10%">Price</th>
                <th scope="col" width="1%">Image</th>
                <th scope="col" width="1%" colspan="4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->image }}</td>
                    <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btnsm">Show</a></td>
                    <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btnsm">Edit</a></td>
                    <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $products->links() !!}
        </div>
    </div>
    
@endsection