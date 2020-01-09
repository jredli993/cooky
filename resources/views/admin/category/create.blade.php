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
                            <h4 class="card-title ">Add new category</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <form method="POST" action="{{ route('admin.category.store') }}">
                                    @csrf
                                    @method("POST")
                                    <input type="text" name="name">

                                    <button type="submit">Insert</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div> </div>
    </div>
@endsection
