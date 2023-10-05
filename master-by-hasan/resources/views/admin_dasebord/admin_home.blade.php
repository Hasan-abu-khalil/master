@extends('layouts.master_admin')

@section('content')
    <div class="sidebar-right-side">
        <div class="sidebar-right-table">
            <h1>Admin</h1>
            <a class="btn btn-primary create-button" href="#">Add</a>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>hasan</td>
                        <td>abu khalil</td>
                        <td>asdasdasda@mdo</td>
                        <td>admin</td>
                        <td>
                            <a class="btn btn-sm btn-secondary " href="#">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a class="btn btn-sm btn-danger " href="#">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>ahmad</td>
                        <td>abu khalil</td>
                        <td>asdasd@faasdast</td>
                        <td>admin</td>
                        <td>
                            <a class="btn btn-sm btn-secondary me-2" href="#">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="#">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    

                </tbody>
            </table>
        </div>

    </div>
    </section>
@endsection
