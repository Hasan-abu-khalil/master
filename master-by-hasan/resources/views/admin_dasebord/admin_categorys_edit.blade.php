@extends('layouts.master_admin')

@section('content ')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Edit Category</h1>
            <form method="POST" action="{{ route('admin_categorys.update', ['admin_category' => $admin_category->id]) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $admin_category->name }}">
                </div>

                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ $admin_category->image }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>
    </section>
@endsection
