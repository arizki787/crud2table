@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> SHOW EMPLOYEE DETAILS
                            <a href="{{ route('employee.index') }}" class="btn btn-danger float-right" style="margin-top: 9px">
                                Back
                            </a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Id</label>
                            <p>
                                {{ $employee->id }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <p>
                                {{ $employee->name }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Date of Birth</label>
                            <p>
                                {{ $employee->date_of_birth }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <p>
                                {{ $employee->phone }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Division</label>
                            <p>
                                {{ $employee->division-> }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection