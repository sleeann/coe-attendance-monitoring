@extends('layouts.master')
@section('title', 'Manage Users')
@section('content')
@include('components.user-modal')
<div class="content-body">
   <!-- container starts -->

   <div class="container-fluid">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target=".user_modal">
        <i class="fa-solid fa-add me-2"></i>Add User
    </button>
    <div style="height: 12px"></div>
      <!-- row -->
      <div class="element-area">

         <div class="demo-view" style="width: 100%">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
               <div class="row">
               <div class="alert alert-success alert-dismissible alert-alt fade show" style="display: none;" id="success_alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </button>
                    <strong>Success!</strong> User Succesfully Added.
                </div>
                <div class="alert alert-success alert-dismissible alert-alt fade show" style="display: none;" id="edit_success_alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                        <span><i class="fa-solid fa-xmark"></i></span>
                    </button>
                    <strong>Success!</strong> User Succesfully Updated.
                </div>
                  <!-- Column starts -->
                  <div class="col-xl-12">
                     <div class="card dz-card" id="bootstrap-table2">
                        <div class="card-header flex-wrap d-flex justify-content-between  border-0">
                           <div>
                              <h4 class="card-title">User Lists</h4>
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
                                             <th><strong>ID</strong></th>
                                             <th><strong>Name</strong></th>
                                             <th><strong>Role</strong></th>
                                             <th><strong>Status</strong></th>
                                             <th><strong></strong></th>
                                          </tr>
                                       </thead>
                                       <tbody id="datatable">
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

