@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>categorys</h1>
            <a class="btn btn-primary create-button" href="{{ route('admin_categorys.create') }}">Add New Category</a>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> image</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorys as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>
                                <img src="../img/{{ $category->image }}" alt="">
                            </td>
                            <td>{{ $category->name }}</td>


                            <td class="table-form">


                                <form action="{{ route('admin_categorys.edit', ['admin_category' => $category->id]) }}"
                                    method="GET">
                                    @csrf
                                    <button class="btn btn-sm btn-secondary" type="submit">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </form>

                                <form action="{{ route('admin_categorys.destroy', ['admin_category' => $category->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    </section>
@endsection
