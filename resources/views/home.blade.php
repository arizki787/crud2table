@extends('app')

@section('title')
    Home
@endsection

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <!-- Employee Section -->
        <div class="col-md-4">
            <div class="card text-center shadow-lg" style="border-radius: 10px; background-color: #f1f1f1;">
                <div class="card-header bg-info text-white" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <h3 class="font-weight-bold">Employee</h3>
                </div>
                <div class="card-body">
                    <i class="fa fa-user fa-7x mb-4" style="color: #17a2b8;"></i>
                    <a href="/employee" class="btn btn-outline-primary btn-lg d-block" style="font-size: 1.5em; padding: 10px 20px;">
                        View Employee Data
                    </a>
                </div>
            </div>
        </div>

        <!-- Division Section -->
        <div class="col-md-4">
            <div class="card text-center shadow-lg" style="border-radius: 10px; background-color: #f1f1f1;">
                <div class="card-header bg-info text-white" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <h3 class="font-weight-bold">Division</h3>
                </div>
                <div class="card-body">
                    <i class="fa fa-university fa-7x mb-4" style="color: #17a2b8;"></i>
                    <a href="/division" class="btn btn-outline-primary btn-lg d-block" style="font-size: 1.5em; padding: 10px 20px;">
                        View Division Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
