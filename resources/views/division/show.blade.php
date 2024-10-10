@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> SHOW DIVISION DETAILS
                            <a href="{{ route('division.index') }}" class="btn btn-danger float-right" style="margin-top: 9px">
                                Back
                            </a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="id">Id</label>
                            <p>
                                {{ $division->id }}
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="name">Name Division</label>
                            <p>
                                {{ $division->name_division }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection