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
                            <h4 class="card-title ">Categories list</h4>
                            <p class="card-category">List of all categories</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <a type="button" rel="tooltip" title="" href="{{ route('admin.category.create') }}" data-route="category" class="btn bg-info btn-white btn-link btn-sm" data-original-title="Add">
                                    <i class="material-icons">add</i> Add new Category
                                    <div class="ripple-container"></div>
                                </a>
                                <table class="table">
                                    <thead class=" text-warning">
                                        <th>Name</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <button type="button" rel="tooltip" title="" data-route="category" data-id="{{ $category->id }}" class="btn btn-danger btn-remove btn-link btn-sm" data-original-title="Remove">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                    <a type="button" href="{{ route('admin.category.edit', $category->id) }}" rel="tooltip" title="" data-route="category" class="btn btn-warning btn-link btn-sm" data-original-title="Edit">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
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
