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
   <div class="container-fluid">
        <div class="attendance">
            <h4 class="">Attendance</h4>
            <div class="row">
               <div class="col-xl-12  col-lg-12 col-sm-12">
                  <div class="widget-stat card">
                     <div class="card-body  p-4">
                        <div class="media">
                           <div class="media-body text-black">
                              <table class="table table-light table-striped-rows table-hover">
                                 <thead>
                                    <tr>
                                       <th><strong>Date</strong></th>
                                       <th><strong>Time</strong></th>
                                       <th><strong>First Name</strong></th>
                                       <th><strong>Last Name</strong></th>
                                       <th><strong>Status</strong></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>12/08/2023</td>
                                       <td>08:00</td>
                                       <td>Rosette</td>
                                       <td>Sabado</td>
                                       <td>In</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
    <h4 class="">Announcements</h4>
        @foreach ($allAnnouncement as $announcements)
            <div class="announcements">
                <div class="row">
                <div class="col-xl-12  col-lg-12 col-sm-12">
                    <div class="widget-stat card bg-primary">
                        <div class="card-body  p-4">
                            <div class="media">
                            <div class="media-body text-white">
                                <div class="d-flex flex-inline">
                                    <div class=" " style="max-width: 700px; max-heigth: 400px;">
                                        <img src="{{ asset('storage/gallery/' . $announcements->image) }}" style="width: 300px; height: 180px;" alt="">
                                    </div>
                                    <div class="announce-details p-3">
                                        <h3 class="text-success">{{ $announcements->title }}</h3>
                                        <p class="mb-1">{{ $announcements->announcement }}</p>

                                    </div>
                                </div>
                                <br>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-white" style="width: 800%"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

