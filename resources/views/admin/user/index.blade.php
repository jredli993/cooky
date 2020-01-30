@extends('layouts.admin')

@section('meta-csfr')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Users list</h4>
                            <p class="card-category">List of all users</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-warning">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Nr. of recipes</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->recipes->count() }}</td>
                                            <td>
                                                <button type="button" rel="tooltip" title="" data-route="user" data-id="{{ $user->id }}" class="btn btn-danger btn-remove btn-link btn-sm" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> </div>
    </div>
@endsection
