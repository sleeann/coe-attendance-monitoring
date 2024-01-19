@extends('layouts.master')
@section('title', 'Profile')
@section('content')
<div class="content-body">
   <div class="container-fluid">
        <div class="profile">
            <div class="widget-stat card">
               <div class="card-body p-4">
                  <div class="media">
                     <div class="media-body text-white">
                        <div class="d-flex flex-column">
                           <div class="profile-details p-3">
                              <h3 class="text-success">Student's Profile</h3>
                              <hr>
                              <div class="widget-stat card" style="background: rgba(111, 133, 147, 0.1);">
                                 <div class="card-body  p-4">
                                    <div class="media">
                                       <div class="media-body text-dark">
                                          <div class="d-flex flex-column">
                                             <div class="personal-details p-1">
                                                <h4>Personal Information</h4>
                                                   <div class="mx-5">
                                                      <h5>Name: &nbsp;<span>Lee Ann Sabado</span></h5>
                                                      <h5>Sex: &nbsp;<span>Female</span></h5>
                                                      <h5>Email: &nbsp;<span>leeannsabado@gmail.com</span></h5>
                                                      <h5>Address: &nbsp;<span>Purok 5, Brgy Poblacion, Sto. Tomas, Pangasinan</span></h5>
                                                      <h5>Contact No: &nbsp;<span>09876543210</span></h5>
                                                      <h5>Date of Birth: &nbsp;<span>01/01/2000</span></h5>
                                                   </div>
                                             </div>
                                             <hr>
                                             <div class="academic-details p-1">
                                                <h4>Academic Information</h4>
                                                   <div class="mx-5">
                                                      <h5>Block: &nbsp;<span>A</span></h5>
                                                      <h5>Year Level: &nbsp;<span>4th Year</span></h5>
                                                      <h5>Student ID: &nbsp;<span>19-UR-1212</span></h5>
                                                      <h5>Course: &nbsp;<span>Bachelor of Science in Computer Engineering - Major in System and Network Administration</span></h5>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
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
@endsection

