@extends('layouts.parent')
@section('title', 'Attendance')
@section('content')
<div class="content-body">
   <div class="container-fluid">
        <div class="attendance">
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
</div>
@endsection

