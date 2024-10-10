<div class="container-fluid justify-content-center">
    @include('include.header')
</div>
@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @session('status')
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endsession

                <div class="card">
                    <div class="card-header">
                        <h1> DIVISION LIST
                            <a href="{{ route('division.create') }}" class="btn btn-primary float-right" style="margin-top: 9px">
                                <i class="fa fa-plus-circle"></i> Add
                            </a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name Division</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($divisions as $division)
                                <tr>
                                    <td>{{ $division->id }}</td>
                                    <td>{{ $division->name_division }}</td>
                                    <td>
                                        <a href="{{ route('division.edit', $division->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('division.show', $division->id) }}" class="btn btn-info">Show</a>
                                        <form action="{{ route('division.destroy', $division->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection