@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> EDIT EMPLOYEE
                            <a href="{{ route('employee.index') }}" class="btn btn-danger float-right" style="margin-top: 9px">
                                Back
                            </a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required/>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" value="{{ $employee->date_of_birth }}" required/>
                                @error('date_of_birth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}" required/>
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="division_id">Division</label>
                                <select name="division_id" id="division_id" class="form-control" required>
                                    <option value="">Select Division</option>
                                    @foreach($divisions as $division)
                                        <option value="{{ $division->id }}" {{ $employee->division_id == $division->id ? 'selected' : '' }}>
                                            {{ $division->name_division }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection