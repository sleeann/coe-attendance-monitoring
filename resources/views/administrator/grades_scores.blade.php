@extends('layouts.master')
@section('title', 'Grades and Score')
@section('content')
@include('components.grades-modal')

<div class="content-body">
   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Add and Upload Grades and Scores</h3>
         <br>
         <div class="row " id="">
            <div class="col-xl-2  col-lg-2 col-sm-2">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".upload_grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Upload Grades&Scores
                  </button>
            </div>

            <div class="col-xl-2  col-lg-2 col-sm-2">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                  <i class="fa-solid fa-add me-2"></i>Grade Score
               </button>
            </div>

            <div class="col-xl-2  col-lg-2 col-sm-2">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".exam_modal">
                  <i class="fa-solid fa-add me-2"></i>Exams Score
               </button>
            </div>

            <div class="col-xl-2  col-lg-2 col-sm-2">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".quiz_modal">
                  <i class="fa-solid fa-add me-2"></i>Quiz Score
               </button>
            </div>

            <div class="col-xl-2  col-lg-2 col-sm-2">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".assignment_modal">
                  <i class="fa-solid fa-add me-2"></i>Assignment Score
               </button>
            </div>

            <div class="col-xl-2  col-lg-2 col-sm-2">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".seatwork_modal">
                  <i class="fa-solid fa-add me-2"></i>Seatwork Scores
               </button>
            </div>
            <!-- <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Download Grades
                  </button>
               </div>
            </div> -->

         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
         <h3 class="">Grades</h3>
         <div class="row" id="grade">
            <div class="col-xl-12  col-lg-12 col-sm-12">
               <div class="widget-stat card">
                  <div class="card-body  p-4">
                     <div class="media">
                        <div class="media-body text-black" style="max-height: 500px; overflow-y: scroll;">
                           <table class="table table-light table-striped-rows table-hover">
                              <thead style="position: sticky; top: 0; ">
                                 <tr>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Student ID</strong></th>
                                    <th><strong>Student Name</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Grade</strong></th>
                                    <th><strong>Remarks</strong></th>
                                    <th><strong>Actions</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="grades_datatable">
                                 @foreach($grades as $grade)
                                    <tr>
                                       <td>{{$grade['date']}}</td>
                                       <td>{{$grade['student_id']}}</td>
                                       <td>{{$grade['name']}}</td>
                                       <td>{{$grade['semester']}}</td>
                                       <td>{{$grade['term']}}</td>
                                       <td>{{$grade['grade']}}</td>
                                       <td>{{$grade['remarks']}}</td>
                                       <td>
                                          <div class="d-flex justify-content-center">
                                                <button style="border: none;" value="{{$grade['id']}}" class="edit_btn" onclick="edit({{$grade['id']}})">
                                                   <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button style="border: none;" value="{{$grade['id']}}" onclick="deleteGrade({{$grade['id']}})">
                                                   <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <!-- <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target=".grade_modal">
                     <i class="fa-solid fa-add me-2"></i>Add Grade Score
                  </button>
               </div>
            </div> -->

            <!-- <div class="col-xl-4  col-lg-4 col-sm-4">
               <div class="widget-stat card">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target=".upload_grade_modal">
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
            </div> -->

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
                        <div class="media-body text-black" style="max-height: 500px; overflow-y: scroll;">
                           <table class="table table-light table-striped-rows table-hover">
                              <thead style="position: sticky; top: 0;">
                                 <tr>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Student ID</strong></th>
                                    <th><strong>Student Name</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Exam Item</strong></th>
                                    <th><strong>%</strong></th>
                                    <th><strong>Actions</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="exams_datatable">
                                 @foreach($exams as $exam)
                                    <tr>
                                       <td>{{$exam['date']}}</td>
                                       <td>{{$exam['student_id']}}</td>
                                       <td>{{$exam['name']}}</td>
                                       <td>{{$exam['semester']}}</td>
                                       <td>{{$exam['term']}}</td>
                                       <td>{{$exam['score']}}</td>
                                       <td>{{$exam['exam_item']}}</td>
                                       <td>{{$exam['score_in_percent']}}%</td>
                                       <td>
                                          <div class="d-flex justify-content-center">
                                                <button style="border: none;" value="{{$exam['id']}}" class="edit_btn" onclick="editExam({{$exam['id']}})">
                                                   <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button style="border: none;" value="{{$exam['id']}}" onclick="deleteExam({{$exam['id']}})">
                                                   <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
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
                        <div class="media-body text-black" style="max-height: 500px; overflow-y: scroll;">
                           <table class="table table-light table-striped-rows table-hover">
                              <thead style="position: sticky; top: 0;">
                                 <tr>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Student ID</strong></th>
                                    <th><strong>Quiz No.</strong></th>
                                    <th><strong>Student Name</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Quiz Item</strong></th>
                                    <th><strong>%</strong></th>
                                    <th><strong>Actions</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="quizzes_datatable">
                                 @foreach($quizzes as $quiz)
                                    <tr>
                                       <td>{{$quiz['date']}}</td>
                                       <td>{{$quiz['student_id']}}</td>
                                       <td>{{$quiz['quiz_no']}}</td>
                                       <td>{{$quiz['name']}}</td>
                                       <td>{{$quiz['semester']}}</td>
                                       <td>{{$quiz['term']}}</td>
                                       <td>{{$quiz['score']}}</td>
                                       <td>{{$quiz['quiz_item']}}</td>
                                       <td>{{$quiz['score_in_percent']}}%</td>
                                       <td>
                                          <div class="d-flex justify-content-center">
                                                <button style="border: none;" value="{{$quiz['id']}}" class="edit_btn" onclick="editQuiz({{$quiz['id']}})">
                                                   <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button style="border: none;" value="{{$quiz['id']}}" onclick="deleteQuiz({{$quiz['id']}})">
                                                   <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
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
                        <div class="media-body text-black" style="max-height: 500px; overflow-y: scroll;">
                           <table class="table table-light table-striped-rows table-hover">
                              <thead style="position: sticky; top: 0;">
                                 <tr>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Student ID</strong></th>
                                    <th><strong>Seatwork No.</strong></th>
                                    <th><strong>Student Name</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Seatwork Item</strong></th>
                                    <th><strong>%</strong></th>
                                    <th><strong>Actions</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="seatwork_datatable">
                                 @foreach($seatworks as $seatwork)
                                    <tr>
                                       <td>{{$seatwork['date']}}</td>
                                       <td>{{$seatwork['student_id']}}</td>
                                       <td>{{$seatwork['seatwork_no']}}</td>
                                       <td>{{$seatwork['name']}}</td>
                                       <td>{{$seatwork['semester']}}</td>
                                       <td>{{$seatwork['term']}}</td>
                                       <td>{{$seatwork['score']}}</td>
                                       <td>{{$seatwork['seatwork_item']}}</td>
                                       <td>{{$seatwork['score_in_percent']}}%</td>
                                       <td>
                                          <div class="d-flex justify-content-center">
                                                <button style="border: none;" value="{{$seatwork['id']}}" class="edit_btn" onclick="editSeatwork({{$seatwork['id']}})">
                                                   <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button style="border: none;" value="{{$seatwork['id']}}" onclick="deleteSeatwork({{$seatwork['id']}})">
                                                   <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
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
                        <div class="media-body text-black" style="max-height: 500px; overflow-y: scroll;">
                           <table class="table table-light table-striped-rows table-hover">
                              <thead style="position: sticky; top: 0;">
                                 <tr>
                                    <th><strong>Date</strong></th>
                                    <th><strong>Student ID</strong></th>
                                    <th><strong>Assignment No.</strong></th>
                                    <th><strong>Student Name</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Assignment Item</strong></th>
                                    <th><strong>%</strong></th>
                                    <th><strong>Actions</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="assignment_datatable">
                                 @foreach($assignments as $assignment)
                                    <tr>
                                       <td>{{$assignment['date']}}</td>
                                       <td>{{$assignment['student_id']}}</td>
                                       <td>{{$assignment['assignment_no']}}</td>
                                       <td>{{$assignment['name']}}</td>
                                       <td>{{$assignment['semester']}}</td>
                                       <td>{{$assignment['term']}}</td>
                                       <td>{{$assignment['score']}}</td>
                                       <td>{{$assignment['assignment_item']}}</td>
                                       <td>{{$assignment['score_in_percent']}}%</td>
                                       <td>
                                          <div class="d-flex justify-content-center">
                                                <button style="border: none;" value="{{$assignment['id']}}" class="edit_btn" onclick="editAssignment({{$assignment['id']}})">
                                                   <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                </button>
                                                <button style="border: none;" value="{{$assignment['id']}}" onclick="deleteAssignment({{$assignment['id']}})">
                                                   <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </button>
                                          </div>
                                       </td>
                                    </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
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

