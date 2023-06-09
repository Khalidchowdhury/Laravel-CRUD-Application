@extends('layouts.app')

@section('main')

<div class="wrap-table shadow">
    <div class="card">
        <div class="card-body">
            <div class="row pt-3 pb-3">
                <div class="col-md-6">
                    <h2>All Data</h2>
                </div>
                <div class="col-md-6">  
                    <a href="{{ route('create.page') }}" class="btn btn-primary btn-outline ml-auto float-right">
                        Add New User
                    </a>
                </div>
            </div>
          
            {{-- table start --}}
            @include('validate')
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cell</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $auths as $auth )
                    <tr>
                        <td>1</td>
                        <td>{{ $auth->name }}</td>
                        <td>{{ $auth->email }}</td>
                        <td>{{ $auth->phone }}</td>
                        <td><img src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt=""></td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('view.page', $auth -> id) }}">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- table end --}}

        </div>
    </div>
</div>


@endsection

    