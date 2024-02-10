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
                                                   <h5>Name: &nbsp;<span>{{$user->name}}</span></h5>
                                                      <h5>Sex: &nbsp;<span>{{$user->sex}}</span></h5>
                                                      <!-- <h5>Email: &nbsp;<span>leeannsabado@gmail.com</span></h5> -->
                                                      <h5>Address: &nbsp;<span>{{$user->address}}</span></h5>
                                                      <h5>Contact No: &nbsp;<span>{{$user->contact_number}}</span></h5>
                                                      <h5>Date of Birth: &nbsp;<span>{{$user->date_of_birth}}</span></h5>
                                                   </div>
                                             </div>
                                             <hr>
                                             <div class="academic-details p-1">
                                                <h4>Academic Information</h4>
                                                   <div class="mx-5">
                                                      <h5>Block: &nbsp;<span>{{$user->block}}</span></h5>
                                                      <h5>Year Level: &nbsp;<span>{{$user->year}}</span></h5>
                                                      <h5>Student ID: &nbsp;<span>{{$user->email}}</span></h5>
                                                      <h5>Course: &nbsp;<span>{{$user->course}}</span></h5>
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