@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>user</h1>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"> Phone</th>
                        <th scope="col"> address</th>
                        <th scope="col"> city</th>
                        <th scope="col"> country</th>
                        <th scope="col">Role</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->country }}</td>

                            <td>user</td>
                            <td>
                                <a class="btn btn-sm btn-secondary " href="#">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a class="btn btn-sm btn-danger " href="#">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    </section>
@endsection
