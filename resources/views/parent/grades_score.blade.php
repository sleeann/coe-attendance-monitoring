@extends('layouts.parent')
@section('title', 'Grades and Score')
@section('content')
<div class="content-body">
   <div class="container-fluid">
         <h4 class="">Grades</h4>
        <div class="row">
            <div class="col-xl-6  col-lg-6 col-sm-6">
               <div class="widget-stat card bg-secondary">
                  <div class="card-body  p-4">
                     <div class="media">
                        <span class="me-3">
                           <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                           <p class="mb-1">First Semester</p><br>
                           <h3 class="text-white">Grade: <strong>75</strong></h3>
                           <hr>
                           <h3 class="text-green">Remarks: Pass</h3>
                           <div class="progress mb-2 bg-primary">
                                 <div class="progress-bar progress-animated bg-success" style="width: 75%"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6  col-lg-6 col-sm-6">
               <div class="widget-stat card bg-primary ">
                  <div class="card-body p-4">
                        <div class="media">
                           <span class="me-3">
                              <i class="la la-users"></i>
                           </span>
                           <div class="media-body text-white">
                              <p class="mb-1">Second Semester</p><br>
                              <h3 class="text-white">Grade: <strong>66</strong></h3>
                              <hr>
                              <h3 class="text-red">Remarks: Bagsak</h3>
                              <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-danger" style="width: 75%"></div>
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
            <h4 class="">Scores</h4>
            <div class="row">
               <div class="col-xl-12  col-lg-12 col-sm-12">
                  <div class="widget-stat card">
                     <div class="card-body  p-4">
                        <div class="media">
                           <div class="media-body text-black">
                              <table class="table table-light table-striped-rows table-hover">
                                 <thead>
                                    <tr>
                                       <th><strong>Quiz #</strong></th>
                                       <th><strong>Date</strong></th>
                                       <th><strong>Name</strong></th>
                                       <th><strong>Score</strong></th>
                                       <th><strong>Total</strong></th>
                                       <th><strong>%</strong></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>12/08/2023</td>
                                       <td>Rosette Ventura</td>
                                       <td>8</td>
                                       <td>10</td>
                                       <td>80%</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>12/12/2023</td>
                                       <td>Rosette Ventura</td>
                                       <td>36</td>
                                       <td>100</td>
                                       <td>36%</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>01/15/2024</td>
                                       <td>Rosette Ventura</td>
                                       <td>56</td>
                                       <td>100</td>
                                       <td>56%</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>01/28/2024</td>
                                       <td>Rosette Ventura</td>
                                       <td>7</td>
                                       <td>10</td>
                                       <td>70%</td>
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

