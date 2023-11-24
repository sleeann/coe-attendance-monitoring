@extends('layouts.master')
@section('title', 'Manage Users')
@section('content')
<div class="content-body">
   <!-- container starts -->
   <div class="container-fluid">
    <button type="button" class="btn btn-success"><i class="fa-solid fa-add me-2"></i>Add User</button>
    <div style="height: 12px"></div>
      <!-- row -->
      <div class="element-area">
         <div class="demo-view" style="width: 100%">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
               <div class="row">
                  <!-- Column starts -->
                  <div class="col-xl-12">
                     <div class="card dz-card" id="bootstrap-table2">
                        <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                           <div>
                              <h4 class="card-title">Exam Toppers</h4>
                              <p class="m-0 subtitle">Exam Toppers. Add class <code>exam</code> with the class <code> bootstrap-table</code></p>
                           </div>
                        </div>
                        <!-- tab-content -->
                        <div class="tab-content" id="myTabContent-1">
                           <div class="tab-pane fade show active" id="bordered" role="tabpanel" aria-labelledby="home-tab-1">
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                       <thead>
                                          <tr>
                                             <th style="width:50px;">
                                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                   <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                   <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                             </th>
                                             <th><strong>ROLL NO.</strong></th>
                                             <th><strong>NAME</strong></th>
                                             <th><strong>Email</strong></th>
                                             <th><strong>Date</strong></th>
                                             <th><strong>Status</strong></th>
                                             <th><strong></strong></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                   <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                   <label class="form-check-label" for="customCheckBox2"></label>
                                                </div>
                                             </td>
                                             <td><strong>542</strong></td>
                                             <td>
                                                <div class="d-flex align-items-center">
                                                   <img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt="">
                                                   <span class="w-space-no">Dr. Jackson</span>
                                                </div>
                                             </td>
                                             <td>example@example.com	</td>
                                             <td>01 August 2020</td>
                                             <td>
                                                <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Successful</div>
                                             </td>
                                             <td>
                                                <div class="d-flex">
                                                   <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                   <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                   <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                   <label class="form-check-label" for="customCheckBox3"></label>
                                                </div>
                                             </td>
                                             <td><strong>542</strong></td>
                                             <td>
                                                <div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                                             </td>
                                             <td>example@example.com	</td>
                                             <td>01 August 2020</td>
                                             <td>
                                                <div class="d-flex align-items-center"><i class="fa fa-circle text-danger me-1"></i> Canceled</div>
                                             </td>
                                             <td>
                                                <div class="d-flex">
                                                   <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                   <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                   <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                   <label class="form-check-label" for="customCheckBox4"></label>
                                                </div>
                                             </td>
                                             <td><strong>542</strong></td>
                                             <td>
                                                <div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                                             </td>
                                             <td>example@example.com	</td>
                                             <td>01 August 2020</td>
                                             <td>
                                                <div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div>
                                             </td>
                                             <td>
                                                <div class="d-flex">
                                                   <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                   <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /tab-content -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
