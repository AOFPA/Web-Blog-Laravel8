@extends('layouts.master')

{{-- @section('title')
    admin-dashboard
@endsection --}}
@section('title', 'Users')

@section('content')
    <div class="container-fluid px-4 mt-4">


        <div class="card">
            <div class="card-header">
                <h4>View Users <a href="{{ url('admin/add-user') }}" class="btn btn-primary btn-sm float-end">Add
                        User</a>
                </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ @session('message') }}</div>
                @endif

                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role_as == '1' ? 'Admin' : 'User' }}</td>
                                <td>
                                    <a href="{{ url('admin/users/' . $item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-user/' . $item->id) }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>



@endsection