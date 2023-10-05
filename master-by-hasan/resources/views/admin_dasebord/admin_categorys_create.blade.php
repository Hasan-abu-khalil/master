@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Create Category</h1>
            <form method="POST" action="{{ route('admin_categorys.store') }}">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" maxlength="30">
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
