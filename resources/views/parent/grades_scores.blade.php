@extends('layouts.master')
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
                           <p class="mb-1 text-dark" style="font-size: 20px">First Semester</p><br>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <h4 class="text-white">Grade: <strong>{{$midterm_grade = isset($student_grade['First Semester']['Midterm']) ? $student_grade['First Semester']['Midterm']->grade : '--'}}</strong></h4><br>
                                 <span class="text-dark" style="font-weight: 600">Midterm</span>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <h4 class="text-white">Grade: <strong>{{$finalgrade = isset($student_grade['First Semester']['Final']) ? $student_grade['First Semester']['Final']->grade : '--'}}</strong></h4><br>
                                 <span class="text-dark" style="font-weight: 600">Final</span>
                              </div>
                           </div>
                           <hr>
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                              <h5 class="text-{{$midterm_remarks = $midterm_grade == '--' ? 'dark' : (!isset($student_grade['First Semester']['Midterm']) ? 'dark' : ($student_grade['First Semester']['Midterm']->remarks == 'Passed' || $student_grade['First Semester']['Midterm']->remarks == 'PASSED' ? 'green' : 'danger'))}}">Remarks: {{$midterm_grade == '--' ? 'NG' : (isset($student_grade['First Semester']['Midterm']) ? $student_grade['First Semester']['Midterm']->remarks : '--')}}</h5>
                                 <div class="progress mb-2 bg-primary">
                                       <div class="progress-bar progress-animated bg-{{$midterm_remarks}}" style="width: {{$midterm_grade == '--' ? 0 : $finalgrade}}%"></div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                              <h5 class="text-{{$final_remarks = $finalgrade == '--' ? 'dark' : (!isset($student_grade['First Semester']['Final']) ? 'dark' : ($student_grade['First Semester']['Final']->remarks == 'Passed' || $student_grade['First Semester']['Final']->remarks == 'PASSED' ? 'green' : 'danger'))}}">Remarks: {{$finalgrade == '--' ? 'NG' : (isset($student_grade['First Semester']['Final']) ? $student_grade['First Semester']['Final']->remarks : '--')}}</h5>
                                 <div class="progress mb-2 bg-primary">
                                       <div class="progress-bar progress-animated bg-{{$final_remarks}}" style="width: {{$finalgrade == '--' ? 0 : $finalgrade}}%"></div>
                                 </div>
                              </div>
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
                           <p class="mb-1 text-white" style="font-size: 20px">Second Semester</p><br>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                 <h4 class="text-white">Grade: <strong>{{$midterm_grade = isset($student_grade['Second Semester']['Midterm']) ? $student_grade['Second Semester']['Midterm']->grade : '--'}}</strong></h4><br>
                                    <span class="text-white" style="font-weight: 600">Midterm</span>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                 <h4 class="text-white">Grade: <strong>{{$finalgrade = isset($student_grade['Second Semester']['Final']) ? $student_grade['Second Semester']['Final']->grade : '--'}}</strong></h4><br>
                                    <span class="text-white" style="font-weight: 600">Final</span>
                                 </div>
                           </div>
                              <hr>
                              <div class="row">
                                 <div class="col-lg-6 col-md-6">
                                    <h5 class="text-{{$midterm_remarks = $midterm_grade == '--' ? 'dark' : (!isset($student_grade['Second Semester']['Midterm']) ? 'dark' : ($student_grade['Second Semester']['Midterm']->remarks == 'Passed' || $student_grade['Second Semester']['Midterm']->remarks == 'PASSED' ? 'green' : 'danger'))}}">Remarks: {{$midterm_grade == '--' ? 'NG' : (isset($student_grade['Second Semester']['Midterm']) ? $student_grade['Second Semester']['Midterm']->remarks : '--')}}</h5>
                                    <div class="progress mb-2 bg-primary">
                                          <div class="progress-bar progress-animated bg-{{$midterm_remarks}}" style="width: {{$midterm_grade == '--' ? 0 : $finalgrade}}%"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                 <h5 class="text-{{$final_remarks = $finalgrade == '--' ? 'dark' : (!isset($student_grade['Second Semester']['Final']) ? 'dark' : ($student_grade['Second Semester']['Final']->remarks == 'Passed' || $student_grade['Second Semester']['Final']->remarks == 'PASSED' ? 'green' : 'danger'))}}">Remarks: {{$finalgrade == '--' ? 'NG' : (isset($student_grade['Second Semester']['Final']) ? $student_grade['Second Semester']['Final']->remarks : '--')}}</h5>
                                    <div class="progress mb-2 bg-primary">
                                          <div class="progress-bar progress-animated bg-{{$final_remarks}}" style="width: {{$finalgrade == '--' ? 0 : $finalgrade}}%"></div>
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

   <div class="container-fluid">
      <div class="attendance text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
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
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Exam Item</strong></th>
                                    <th><strong>%</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="exams_datatable">
                                 @foreach($exams as $exam)
                                    <tr>
                                       <td>{{$exam['date']}}</td>
                                       <td>{{$exam['semester']}}</td>
                                       <td>{{$exam['term']}}</td>
                                       <td>{{$exam['score']}}</td>
                                       <td>{{$exam['exam_item']}}</td>
                                       <td>{{$exam['score_in_percent']}}%</td>
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
      <div class="attendance text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
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
                                    <th><strong>Quiz No.</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Quiz Item</strong></th>
                                    <th><strong>%</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="quizzes_datatable">
                                 @foreach($quizzes as $quiz)
                                    <tr>
                                       <td>{{$quiz['date']}}</td>
                                       <td>{{$quiz['quiz_no']}}</td>
                                       <td>{{$quiz['semester']}}</td>
                                       <td>{{$quiz['term']}}</td>
                                       <td>{{$quiz['score']}}</td>
                                       <td>{{$quiz['quiz_item']}}</td>
                                       <td>{{$quiz['score_in_percent']}}%</td>
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
      <div class="attendance text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
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
                                    <th><strong>Seatwork No.</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Seatwork Item</strong></th>
                                    <th><strong>%</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="seatwork_datatable">
                                 @foreach($seatworks as $seatwork)
                                    <tr>
                                       <td>{{$seatwork['date']}}</td>
                                       <td>{{$seatwork['seatwork_no']}}</td>
                                       <td>{{$seatwork['semester']}}</td>
                                       <td>{{$seatwork['term']}}</td>
                                       <td>{{$seatwork['score']}}</td>
                                       <td>{{$seatwork['seatwork_item']}}</td>
                                       <td>{{$seatwork['score_in_percent']}}%</td>
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
      <div class="attendance text-center" style="background: #e1e7ed; border-radius: 10px; padding: 10px;">
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
                                    <th><strong>Assignment No.</strong></th>
                                    <th><strong>Semester</strong></th>
                                    <th><strong>Term</strong></th>
                                    <th><strong>Score</strong></th>
                                    <th><strong>Assignment Item</strong></th>
                                    <th><strong>%</strong></th>
                                 </tr>
                              </thead>
                              <tbody id="assignment_datatable">
                                 @foreach($assignments as $assignment)
                                    <tr>
                                       <td>{{$assignment['date']}}</td>
                                       <td>{{$assignment['assignment_no']}}</td>
                                       <td>{{$assignment['semester']}}</td>
                                       <td>{{$assignment['term']}}</td>
                                       <td>{{$assignment['score']}}</td>
                                       <td>{{$assignment['assignment_item']}}</td>
                                       <td>{{$assignment['score_in_percent']}}%</td>
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

