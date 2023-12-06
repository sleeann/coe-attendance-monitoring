@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3  col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body  p-4">
                            <div class="media">
                                <span class="me-3">
                                    <i class="la la-users"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Total Students</p>
                                    <h3 class="text-white">3280</h3>
                                    <div class="progress mb-2 bg-secondary">
                                        <div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-warning">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="me-3">
                                    <i class="la la-user"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Parents</p>
                                    <h3 class="text-white">245</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-white" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-secondary">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="me-3">
                                    <i class="la la-graduation-cap"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Instructor</p>
                                    <h3 class="text-white">28</h3>
                                    <div class="progress mb-2 bg-primary">
                                        <div class="progress-bar progress-animated bg-white" style="width: 76%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6">
                    <div class="widget-stat card bg-danger ">
                        <div class="card-body p-4">
                            <div class="media">
                                <span class="me-3">
                                    <i class="la la-dollar"></i>
                                </span>
                                <div class="media-body text-white">
                                    <p class="mb-1">Accounts</p>
                                    <h3 class="text-white">250</h3>
                                    <div class="progress mb-2 bg-secondary">
                                        <div class="progress-bar progress-animated bg-white" style="width: 30%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

