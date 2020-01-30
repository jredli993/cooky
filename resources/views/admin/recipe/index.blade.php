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
                            <h4 class="card-title ">Recipe list</h4>
                            <p class="card-category">List of all recipes</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-warning">
                                        <th>Name</th>
                                        <th>Prep time</th>
                                        <th>Difficulty</th>
                                        <th>Chef</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($recipes as $recipe)
                                            <tr>
                                                <td>{{ $recipe->name }}</td>
                                                <td>{{ $recipe->prep_time }}</td>
                                                <td>{{ $recipe->difficulty }}</td>
                                                <td><a href="#">{{ ucfirst($recipe->user->name) }}</a></td>
                                                <td><button type="button" rel="tooltip" title="" data-route="recipes" data-id="{{ $recipe->id }}" class="btn btn-danger btn-remove btn-link btn-sm" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                <div class="ripple-container"></div></button></td>
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
