@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> CREATE DIVISION
                            <a href="{{ route('division.index') }}" class="btn btn-danger float-right" style="margin-top: 9px">
                                Back
                            </a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('division.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id">Id</label>
                                <input type="text" name="id" class="form-control"/>
                                @error('id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name">Name Division</label>
                                <input type="text" name="name_division" class="form-control"/>
                                @error('name_division')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection