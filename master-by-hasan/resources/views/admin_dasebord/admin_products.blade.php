@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>products</h1>
            <a class="btn btn-primary create-button" href="{{ route('product.create') }}">Add New products</a>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> image</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Description</th>
                        <th scope="col"> Price</th>


                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>
                                <img src="../img/{{ $product->image }}" alt="">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <div class="description">
                                    <span class="truncated-description">{{ Str::limit($product->description, 50) }}</span>
                                    <span class="full-description" style="display: none;">{{ $product->description }}</span>
                                    <button class="btn btn-link toggle-description">Show More</button>
                                </div>
                            </td>
                            <td>{{ $product->price }}</td>
                            <td class="table-form">


                                <form action="{{ route('product.edit', ['product' => $product->id]) }}" method="GET">
                                    @csrf
                                    <button class="btn btn-sm btn-secondary" type="submit">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </form>


                                <form action="{{ route('product.destroy', ['product' => $product->id]) }}"
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
