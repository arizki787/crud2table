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
                        <h1> EMPLOYEE LIST
                            <a href="{{ route('employee.create') }}" class="btn btn-primary float-right" style="margin-top: 9px">
                                <i class="fa fa-plus-circle"></i> Add
                            </a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Employee Name</th>
                                    <th>date_of_birth</th>
                                    <th>phone</th>
                                    <th>division_name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->date_of_birth }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->division->name_division }}</td>
                                    <td>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-info">Show</a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="d-inline">
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