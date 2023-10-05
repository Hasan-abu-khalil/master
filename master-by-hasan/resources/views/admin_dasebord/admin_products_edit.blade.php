@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Edit product</h1>
            <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" min="0">
                </div>

                <div class="form-group">
                    <label for="image">Image </label>
                    <input type="file" class="form-control" id="image" name="image" value="{{ $product->image }}">
                </div>

                <button type="submit" class="btn btn-primary">Update product</button>
            </form>
        </div>
    </div>
</section>
@endsection



