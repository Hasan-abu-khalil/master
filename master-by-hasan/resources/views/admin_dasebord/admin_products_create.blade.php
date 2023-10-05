@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Create product</h1>
            <form method="POST" action="{{ route('product.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" maxlength="30">
                </div>


                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="name" maxlength="200">
                </div>


                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" min="0">
                </div>
                
                <div class="form-group">
                    <input type="hidden" class="form-control" id="quantity" name="quantity" value="1">
                </div>

                <div class="form-group">
                    <label for="image">Image URL</label>

                    <input type="file"name="image" id="image"  class="form-control"  >
                </div>


                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</section>
@endsection
