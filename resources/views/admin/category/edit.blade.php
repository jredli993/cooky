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
                            <h4 class="card-title ">Edit category</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                                    @csrf
                                    @method("PATCH")

                                    <input name="name" value="{{ $category->name }}" type="text">
                                    <button type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div> </div>
    </div>
@endsection
