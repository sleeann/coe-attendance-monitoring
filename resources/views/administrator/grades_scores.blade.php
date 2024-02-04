@extends('layouts.master')
@section('title', 'Grades and Score')
@section('content')
@include('components.grades-modal')
<div class="content-body">
   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Grades</h3>
         <div class="row" id="grade">
            <div class="col-xl-12  col-lg-12 col-sm-12">
               <div class="widget-stat card">
                  <div class="card-body  p-4">
                     <div class="media">
                        <div class="media-body text-black">
                           <table class="table table-light table-striped-rows table-hover">
                              <thead>
                                 <tr>
                                    <th style="width:50px;">
                                       <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                          <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                          <label class="form-check-label" for="checkAll"></label>
                                       </div>
                                    </th>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Student ID</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Grade</strong></th>
                                    <th><strong>Remarks</strong></th>
                                    <th><strong>Actions</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="datatable">
                                 <!-- <tr>
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
                                    <td>34</td>
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
                                 </tr> -->
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Add Grade Score
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Upload Grades
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Download Grades
                  </button>
               </div>
            </div>

         </div>
         <i class="fa fa-chevron-down updown" id="grade_updown" aria-hidden="true" style="font-size: 20px;"></i> 
      </div>
   </div>

   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Examinations</h3>
         <div class="row" id="exam">

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

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Download Exams
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Add Exams Score
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Upload Exams
                  </button>
               </div>
            </div>
         </div>
         <i class="fa fa-chevron-down updown" id="exam_updown" aria-hidden="true" style="font-size: 20px;"></i> 
      </div>
   </div>

   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Quizzes</h3>
         <div class="row" id="quiz">

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
            
            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Add Quiz Score
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-secondary data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Upload Quiz
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Download Quiz
                  </button>
               </div>
            </div>

         </div>
         <i class="fa fa-chevron-down updown" id="quiz_updown" aria-hidden="true" style="font-size: 20px;"></i> 
      </div>
   </div>


   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Seatworks</h3>
         <div class="row" id="seatwork">

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

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Add Assignment Score
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Upload Assignment
                  </button>
               </div>
            </div>
            
            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Download Assignment
                  </button>
               </div>
            </div>

         </div>
         <i class="fa fa-chevron-down updown" id="seatwork_updown" aria-hidden="true" style="font-size: 20px;"></i> 
      </div>
   </div>

   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Assignments</h3>
         <div class="row" id="assign">
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

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Add Seatwork Scores
                  </button>
               </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Upload Seatwork
                  </button>
               </div>
            </div>
            
            <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Download Seatwork
                  </button>
               </div>
            </div>

         </div>
         <i class="fa fa-chevron-down updown" id="assign_updown" aria-hidden="true" style="font-size: 20px;"></i> 
      </div>
   </div>

</div>
<br><br>
@endsection

@section('script')
   <script type="text/javascript">
      $(document).ready(function() {
         $(document).on('click', '.updown', function(){
            id = this.id;
            id_name = '#'+id.split('_');
            $(id_name).toggle(500);
         })
      });
   </script>
@endsection

