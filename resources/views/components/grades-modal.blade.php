<div class="modal fade bd-example-modal-lg upload_grade_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Grades and Scores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grades and Scores</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate  id="uploadForm" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Grades and Scores</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="upload_grade" name="upload_grade" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                            <div class="invalid-feedback">
                                                Grades and Scores
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_upload_grade"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 lg-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_type">type</label>
                                                <div class="input-group transparent-append">
                                                    <select class="form-control" id="score_type" placeholder="Select type." required>
                                                        <option selected disabled>(Please select type)</option>
                                                        <option>All</option>
                                                        <option>Grade</option>
                                                        <option>Exam</option>
                                                        <option>Quiz</option>
                                                        <option>Assignment</option>
                                                        <option>Seatwork</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select type.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_type"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 lg-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_term">Term</label>
                                                <div class="input-group transparent-append">
                                                    <select class="form-control" id="score_term" placeholder="Select Term." required>
                                                        <option selected disabled>(Please select term)</option>
                                                        <option>All</option>
                                                        <option>Midterm</option>
                                                        <option>Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select term.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_term"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 lg-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_semester">Semester</label>
                                                <div class="input-group transparent-append">
                                                    <select class="form-control" id="score_semester" placeholder="Select Semester." required>
                                                        <option selected disabled>(Please select Semester)</option>
                                                        <option>First Semester</option>
                                                        <option>Second Semester</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select Semester.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_semester"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="uploadGradeScore">Upload</button>
            </div>
        </div>
    </div>
</div>

<!-- Grades Edit Modal -->
<div class="modal fade bd-example-modal-lg edit_grade_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grade</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <input type="text" id="edit_id" hidden>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="edit_student_id" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="edit_error_student_id"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_student_name" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_student_name"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_semester" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_semester"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_term" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_term"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="edit_date" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Grade</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_grade" required>
                                                    <div class="invalid-feedback">
                                                        Grade
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_grade"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Remarks</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_remarks" required>
                                                    <div class="invalid-feedback">
                                                        Remarks
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_remarks"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateGrade">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Grades Add Modal -->
<div class="modal fade bd-example-modal-lg grade_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Grade</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="student_id" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_student_id"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="student_name" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_student_name"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="semester" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_semester"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="term" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_term"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="date" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Grade</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="grade" required>
                                                    <div class="invalid-feedback">
                                                        Grade
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_grade"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Remarks</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="remarks" required>
                                                    <div class="invalid-feedback">
                                                        Remarks
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_remarks"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveGrade">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Exams Edit Modal -->
<div class="modal fade bd-example-modal-lg edit_exam_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Exam Score</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Exam</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <input type="text" id="edit_id_exam" hidden>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="edit_student_id_exam" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="edit_error_student_id_exam"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_student_name_exam" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_student_name_exam"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_semester_exam" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_semester_exam"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_term_exam" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_term_exam"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="edit_date_exam" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date_exam"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_score_exam">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_score_exam" required>
                                                    <div class="invalid-feedback">
                                                        exam
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_score_exam"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_item_exam">Exam Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_item_exam" required>
                                                    <div class="invalid-feedback">
                                                        Exam Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_remarks_exam"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateExam">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Exams Add Modal -->
<div class="modal fade bd-example-modal-lg exam_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Exam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Exam</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="student_id_exam" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_student_id_exam"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="student_name_exam" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_student_name_exam"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="semester_exam" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_semester_exam"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="term_exam" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_term_exam"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="date_exam" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date_exam"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_exam">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="score_exam" required>
                                                    <div class="invalid-feedback">
                                                        Score
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_exam"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-6 cold-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="item_exam">Exam Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="item_exam" required>
                                                    <div class="invalid-feedback">
                                                        Exam Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_item_exam"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveExam">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Quiz Edit Modal -->
<div class="modal fade bd-example-modal-lg edit_quiz_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Quiz Score</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quiz</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <input type="text" id="edit_id_quiz" hidden>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="edit_student_id_quiz" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="edit_error_student_id_quiz"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_student_name_quiz" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_student_name_quiz"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_semester_quiz" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_semester_quiz"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_term_quiz" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_term_quiz"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="edit_date_quiz" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date_quiz"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_no_quiz">Quiz No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_no_quiz" required>
                                                    <div class="invalid-feedback">
                                                        Quiz No.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_no_quiz"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_score_quiz">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_score_quiz" required>
                                                    <div class="invalid-feedback">
                                                        quiz
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_score_quiz"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_item_quiz">Quiz Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_item_quiz" required>
                                                    <div class="invalid-feedback">
                                                        Quiz Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_item_quiz"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateQuiz">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Quizs Add Modal -->
<div class="modal fade bd-example-modal-lg quiz_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Quiz</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quiz</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="student_id_quiz" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_student_id_quiz"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="student_name_quiz" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_student_name_quiz"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="semester_quiz" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_semester_quiz"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="term_quiz" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_term_quiz"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="date_quiz" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date_quiz"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="no_quiz">Quiz No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="no_quiz" required>
                                                    <div class="invalid-feedback">
                                                        Quiz No.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_no_quiz"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_quiz">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="score_quiz" required>
                                                    <div class="invalid-feedback">
                                                        Score
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_quiz"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="item_quiz">quiz Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="item_quiz" required>
                                                    <div class="invalid-feedback">
                                                        quiz Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_item_quiz"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveQuiz">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Assignment Edit Modal -->
<div class="modal fade bd-example-modal-lg edit_assignment_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Assignment Score</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Assignment</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <input type="text" id="edit_id_assignment" hidden>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="edit_student_id_assignment" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="edit_error_student_id_assignment"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_student_name_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_student_name_assignment"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_semester_assignment" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_semester_assignment"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_term_assignment" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_term_Assignment"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="edit_date_assignment" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date_assignment"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_no_assignment">Assignment No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_no_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Assignment No.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_no_assignment"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_score_assignment">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_score_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Score
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_score_assignment"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_item_assignment">Assignment Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_item_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Assignment Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_remarks_assignment"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateAssignment">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Assignments Add Modal -->
<div class="modal fade bd-example-modal-lg assignment_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Assignment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Assignment</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="student_id_assignment" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_student_id_assignment"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="student_name_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_student_name_assignment"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="semester_assignment" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_semester_assignment"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="term_assignment" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_term_assignment"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="date_assignment" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date_assignment"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="no_assignment">Assignment No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="no_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Assignment No.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_no_assignment"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_assignment">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="score_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Score
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_assignment"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="item_assignment">Assignment Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="item_assignment" required>
                                                    <div class="invalid-feedback">
                                                        Assignment Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_item_assignment"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveAssignment">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Seatwork Edit Modal -->
<div class="modal fade bd-example-modal-lg edit_seatwork_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Seatwork Score</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Seatwork</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <input type="text" id="edit_id_seatwork" hidden>
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="edit_student_id_seatwork" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="edit_error_student_id_seatwork"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_student_name_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_student_name_seatwork"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_semester_seatwork" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_semester_seatwork"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="edit_term_seatwork" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="edit_error_term_seatwork"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="edit_date_seatwork" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date_seatwork"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_no_seatwork">Seatwork No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_no_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Seatwork No.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_no_seatwork"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_score_seatwork">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_score_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Score
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_score_seatwork"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="edit_item_seatwork">Seatwork Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_item_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Seatwork Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="edit_error_remarks_seatwork"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateSeatwork">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Seatworks Add Modal -->
<div class="modal fade bd-example-modal-lg seatwork_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Seatwork</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Seatwork</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <div class="mb-3">
                                                    <label class="text-label form-label" for="">Student ID</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="student_id_seatwork" required>
                                                        <div class="invalid-feedback">
                                                            Student ID
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_student_id_seatwork"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-lg-9 col-xl-9">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Student Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="student_name_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Student Name
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_student_name_seatwork"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Semester</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="semester_seatwork" style="width: 100%;">
                                                        <option selected disabled>(Please select a Semester)</option>
                                                        <option value="First Semester">First Semester</option>
                                                        <option value="Second Semester">Second Semester</option>
                                                        <option value="Mid Year">Mid Year</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Semester
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_semester_seatwork"></span>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="">Term</label>
                                                    
                                                <div class="input-group">
                                                    <select class="form-select" id="term_seatwork" style="width: 100%;">
                                                        <option selected disabled>(Please select a Term)</option>
                                                        <option value="Midterm">Midterm</option>
                                                        <option value="Final">Final</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Term
                                                    </div>
                                                </div>
                                                
                                                <span style="color: red" id="error_term_seatwork"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="date_seatwork" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date_seatwork"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="no_seatwork">Seatwork No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="no_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Seatwork No.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_no_seatwork"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="score_seatwork">Score</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="score_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Score
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_score_seatwork"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 cold-xl-4">
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="item_seatwork">Seatwork Items</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="item_seatwork" required>
                                                    <div class="invalid-feedback">
                                                        Seatwork Items
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_item_seatwork"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveSeatwork">Save</button>
            </div>
        </div>
    </div>
</div>

@section('user')
    <script>
        
            // for clearing error messages
        const clearErrorMessages = () => {
            $('#error_student_id').html('')
            $('#error_student_name').html('')
            $('#error_semester').html('')
            $('#error_date').html('')
            $('#error_term').html('')
            $('#error_grade').html('')
            $('#error_remarks').html('')


            $('#edit_error_student_id').html('')
            $('#edit_error_student_name').html('')
            $('#edit_error_semester').html('')
            $('#edit_error_date').html('')
            $('#edit_error_term').html('')
            $('#edit_error_grade').html('')
            $('#edit_error_remarks').html('')
        }
        const clearErrorMessagesExam = () => {
            //EXAM
            $('#error_student_id_exam').html('')
            $('#error_student_name_exam').html('')
            $('#error_semester_exam').html('')
            $('#error_date_exam').html('')
            $('#error_term_exam').html('')
            $('#error_score_exam').html('')
            $('#error_item_exam').html('')


            $('#edit_error_student_id_exam').html('')
            $('#edit_error_student_name_exam').html('')
            $('#edit_error_semester_exam').html('')
            $('#edit_error_date_exam').html('')
            $('#edit_error_term_exam').html('')
            $('#edit_error_score_exam').html('')
            $('#edit_error_item_exam').html('')
        }
        const clearErrorMessagesQuiz = () => {
            //QUIZ
            $('#error_student_id_quiz').html('')
            $('#error_student_name_quiz').html('')
            $('#error_semester_quiz').html('')
            $('#error_date_quiz').html('')
            $('#error_term_quiz').html('')
            $('#error_score_quiz').html('')
            $('#error_item_quiz').html('')
            $('#error_no_quiz').html('')

            $('#edit_error_student_id_quiz').html('')
            $('#edit_error_student_name_quiz').html('')
            $('#edit_error_semester_quiz').html('')
            $('#edit_error_date_quiz').html('')
            $('#edit_error_term_quiz').html('')
            $('#edit_error_score_quiz').html('')
            $('#edit_error_item_quiz').html('')
            $('#edit_error_no_quiz').html('')
        }
        const clearErrorMessagesAssignment = () => {
            //ASSIGNMENT
            $('#error_student_id_assignment').html('')
            $('#error_student_name_assignment').html('')
            $('#error_semester_assignment').html('')
            $('#error_date_assignment').html('')
            $('#error_term_assignment').html('')
            $('#error_score_assignment').html('')
            $('#error_item_assignment').html('')
            $('#error_no_assignment').html('')

            $('#edit_error_student_id_assignment').html('')
            $('#edit_error_student_name_assignment').html('')
            $('#edit_error_semester_assignment').html('')
            $('#edit_error_date_assignment').html('')
            $('#edit_error_term_assignment').html('')
            $('#edit_error_score_assignment').html('')
            $('#edit_error_item_assignment').html('')
            $('#edit_error_no_assignment').html('')
        }
        const clearErrorMessagesSeatwork = () => {
            //SEATWORK
            $('#error_student_id_seatwork').html('')
            $('#error_student_name_seatwork').html('')
            $('#error_semester_seatwork').html('')
            $('#error_date_seatwork').html('')
            $('#error_term_seatwork').html('')
            $('#error_score_seatwork').html('')
            $('#error_item_seatwork').html('')
            $('#error_no_seatwork').html('')

            $('#edit_error_student_id_seatwork').html('')
            $('#edit_error_student_name_seatwork').html('')
            $('#edit_error_semester_seatwork').html('')
            $('#edit_error_date_seatwork').html('')
            $('#edit_error_term_seatwork').html('')
            $('#edit_error_score_seatwork').html('')
            $('#edit_error_item_seatwork').html('')
            $('#edit_error_no_seatwork').html('')
        }
        const clearErrorMessagesUpload = () => {
            $('#error_upload_grade').html(''),
            $('#error_score_type').html(''),
            $('#error_score_term').html(''),
            $('#error_score_semester').html('')
        }
        // for clearing inputs
        const clearInput = () => {
            //grade
            $('#student_id').val(''),
            $('#student_name').val(''),
            $('#date').val(''),
            $('#semester').val(''),
            $('#term').val(''),
            $('#grade').val(''),
            $('#remarks').val(''),

            $('#edit_student_id').val(''),
            $('#edit_student_name').val(''),
            $('#edit_date').val(''),
            $('#edit_semester').val('(Please select a Semester)'),
            $('#edit_term').val('(Please select a Term)'),
            $('#edit_grade').val(''),
            $('#edit_remarks').val('')
        }
        const clearInputExam = () => {
            //exam
            $('#student_id_exam').val(''),
            $('#student_name_exam').val(''),
            $('#date_exam').val(''),
            $('#semester_exam').val(''),
            $('#term_exam').val(''),
            $('#score_exam').val(''),
            $('#item_exam').val(''),

            $('#edit_student_id_exam').val(''),
            $('#edit_student_name_exam').val(''),
            $('#edit_date_exam').val(''),
            $('#edit_semester_exam').val('(Please select a Semester)'),
            $('#edit_term_exam').val('(Please select a Term)'),
            $('#edit_score_exam').val(''),
            $('#edit_item_exam').val('')
        }
        const clearInputQuiz = () => {
            //quiz
            $('#student_id_quiz').val(''),
            $('#student_name_quiz').val(''),
            $('#date_quiz').val(''),
            $('#semester_quiz').val(''),
            $('#term_quiz').val(''),
            $('#score_quiz').val(''),
            $('#item_quiz').val(''),
            $('#no_quiz').val(''),

            $('#edit_student_id_quiz').val(''),
            $('#edit_student_name_quiz').val(''),
            $('#edit_date_quiz').val(''),
            $('#edit_semester_quiz').val('(Please select a Semester)'),
            $('#edit_term_quiz').val('(Please select a Term)'),
            $('#edit_score_quiz').val(''),
            $('#edit_no_quiz').val('')
        }
        const clearInputAssignment = () => {
            //assignment
            $('#student_id_assignment').val(''),
            $('#student_name_assignment').val(''),
            $('#date_assignment').val(''),
            $('#semester_assignment').val(''),
            $('#term_assignment').val(''),
            $('#score_assignment').val(''),
            $('#item_assignment').val(''),
            $('#no_assignment').val(''),

            $('#edit_student_id_assignment').val(''),
            $('#edit_student_name_assignment').val(''),
            $('#edit_date_assignment').val(''),
            $('#edit_semester_assignment').val('(Please select a Semester)'),
            $('#edit_term_assignment').val('(Please select a Term)'),
            $('#edit_score_assignment').val(''),
            $('#edit_no_assignment').val('')
        }
        const clearInputSeatwork = () => {
            //seatwork
            $('#student_id_seatwork').val(''),
            $('#student_name_seatwork').val(''),
            $('#date_seatwork').val(''),
            $('#semester_seatwork').val(''),
            $('#term_seatwork').val(''),
            $('#score_seatwork').val(''),
            $('#item_seatwork').val(''),
            $('#no_seatwork').val(''),

            $('#edit_student_id_seatwork').val(''),
            $('#edit_student_name_seatwork').val(''),
            $('#edit_date_seatwork').val(''),
            $('#edit_semester_seatwork').val('(Please select a Semester)'),
            $('#edit_term_seatwork').val('(Please select a Term)'),
            $('#edit_score_seatwork').val(''),
            $('#edit_no_seatwork').val('')
        }
        const clearInputUpload = () => {
            $('#upload_grade').val(''),
            $('#score_type').val('(Please select type)'),
            $('#score_term').val('(Please select term)'),
            $('#score_semester').val('(Please select Semester)')
        }

        //uploading grade and score
        $('#uploadGradeScoreScore').click(function(){
            var formData = new FormData($('#uploadForm')[0]);
            formData.append('score_type', $('#score_type').val());
            formData.append('score_term', $('#score_term').val());
            formData.append('score_semester', $('#score_semester').val());
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.grades_score.upload') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                beforeSend: function(){
                    Swal.fire({
                        title: 'Loading...',
                        allowOutsideClick: false,
                        onBeforeOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function(response) {
                    Swal.close();
                    if(response.success){
                        clearInput();
                        clearInputExam();
                        clearInputQuiz();
                        clearInputAssignment();
                        clearInputSeatwork();
                        $("#datatable").html('');
                        $("#exams_datatable").html('');
                        $("#quizzes_datatable").html('');
                        $("#assignment_datatable").html('');
                        $("#seatwork_datatable").html('');
                        displayGrade();
                        displayExam();
                        displayQuiz();
                        displayAssignment();
                        displaySeatwork();
                        $('.upload_grade_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function() {
                    Swal.close();
                    clearInput();
                    $('#result').html('File upload failed. Please try again.');
                }
            });
        })

        // saving grade
        $('#saveGrade').click(function() {
            var formData = new FormData();
            let student_id = $('#student_id').val();
            let student_name = $('#student_name').val();
            let date = $('#date').val();
            let semester = $('#semester').val();
            let term = $('#term').val();
            let grade = $('#grade').val();
            let remarks = $('#remarks').val();

            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('grade', grade);
            formData.append('remarks', remarks);
            clearErrorMessages();

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.grades.save') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInput();
                        $('.grade_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#datatable").html('');
                        displayGrade();
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    if(xhr.responseJSON && xhr.responseJSON.errors) {
                        $('#error_student_id').html(xhr.responseJSON.errors.student_id);
                        $('#error_student_name').html(xhr.responseJSON.errors.student_name);
                        $('#error_date').html(xhr.responseJSON.errors.date);
                        $('#error_semester').html(xhr.responseJSON.errors.semester);
                        $('#error_term').html(xhr.responseJSON.errors.term);
                        $('#error_grade').html(xhr.responseJSON.errors.grade);
                        $('#error_remarks').html(xhr.responseJSON.errors.remarks);
                    }
                }
            });
        });

        // saving exam
        $('#saveExam').click(function() {
            var formData = new FormData();
            let student_id = $('#student_id_exam').val();
            let student_name = $('#student_name_exam').val();
            let date = $('#date_exam').val();
            let semester = $('#semester_exam').val();
            let term = $('#term_exam').val();
            let score = $('#score_exam').val();
            let item = $('#item_exam').val();

            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('score', score);
            formData.append('item', item);
            clearErrorMessagesExam();

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.exams.save') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInputExam();
                        $('.exam_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#exams_datatable").html('');
                        displayExam();
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    if(xhr.responseJSON && xhr.responseJSON.errors) {
                        $('#error_student_id_exam').html(xhr.responseJSON.errors.student_id);
                        $('#error_student_name_exam').html(xhr.responseJSON.errors.student_name);
                        $('#error_date_exam').html(xhr.responseJSON.errors.date);
                        $('#error_semester_exam').html(xhr.responseJSON.errors.semester);
                        $('#error_term_exam').html(xhr.responseJSON.errors.term);
                        $('#error_score_exam').html(xhr.responseJSON.errors.score);
                        $('#error_item_exam').html(xhr.responseJSON.errors.exam_item);
                    }
                }
            });
        });

        // saving quiz
        $('#saveQuiz').click(function() {
            var formData = new FormData();
            let student_id = $('#student_id_quiz').val();
            let student_name = $('#student_name_quiz').val();
            let date = $('#date_quiz').val();
            let semester = $('#semester_quiz').val();
            let term = $('#term_quiz').val();
            let score = $('#score_quiz').val();
            let item = $('#item_quiz').val();
            let quiz_no = $('#no_quiz').val();

            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('score', score);
            formData.append('item', item);
            formData.append('quiz_no', quiz_no);
            clearErrorMessages();

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.quiz.save') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInputQuiz();
                        $('.quiz_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#quizzes_datatable").html('');
                        displayQuiz();
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    if(xhr.responseJSON && xhr.responseJSON.errors) {
                        $('#error_student_id_quiz').html(xhr.responseJSON.errors.student_id);
                        $('#error_student_name_quiz').html(xhr.responseJSON.errors.student_name);
                        $('#error_date_quiz').html(xhr.responseJSON.errors.date);
                        $('#error_semester_quiz').html(xhr.responseJSON.errors.semester);
                        $('#error_term_quiz').html(xhr.responseJSON.errors.term);
                        $('#error_score_quiz').html(xhr.responseJSON.errors.score);
                        $('#error_item_quiz').html(xhr.responseJSON.errors.exam_item);
                        $('#error_no_quiz').html(xhr.responseJSON.errors.quiz_no);
                    }
                }
            });
        });
        // display list of grade
        const displayGrade = () => {
            $.ajax({
                url: '{{ route('instructor.grades.display') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    response.forEach(grade => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>
                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox${grade.id}" required="">
                                    <label class="form-check-label" for="customCheckBox${grade.id}"></label>
                                </div>
                            </td>
                            <td>${grade.date}</td>
                            <td>${grade.student_id}</td>
                            <td>${grade.name}</td>
                            <td>${grade.semester}</td>
                            <td>${grade.term}</td>
                            <td>${grade.grade}</td>
                            <td>${grade.remarks}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button style="border: none;" value="${grade.id}" class="edit_btn" onclick="edit(${grade.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${grade.id}" onclick="deleteGrade(${grade.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#datatable").append(row);

                    });
                },
                error: function(error) {
                console.error('Request Failed: ', error);
                }
            });
        };

        // display list of exam
        const displayExam = () => {
            $.ajax({
                url: '{{ route('instructor.exams.display') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    response.forEach(exam => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${exam.date}</td>
                            <td>${exam.student_id}</td>
                            <td>${exam.name}</td>
                            <td>${exam.semester}</td>
                            <td>${exam.term}</td>
                            <td>${exam.score}</td>
                            <td>${exam.exam_item}</td>
                            <td>${exam.score_in_percent}%</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button style="border: none;" value="${exam.id}" class="edit_btn" onclick="editExam(${exam.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${exam.id}" onclick="deleteExam(${exam.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#exams_datatable").append(row);

                    });
                },
                error: function(error) {
                console.error('Request Failed: ', error);
                }
            });
        };

        // display list of quiz
        const displayQuiz = () => {
            $.ajax({
                url: '{{ route('instructor.quizzes.display') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    response.forEach(quiz => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${quiz.date}</td>
                            <td>${quiz.student_id}</td>
                            <td>${quiz.quiz_no}</td>
                            <td>${quiz.name}</td>
                            <td>${quiz.semester}</td>
                            <td>${quiz.term}</td>
                            <td>${quiz.score}</td>
                            <td>${quiz.quiz_item}</td>
                            <td>${quiz.score_in_percent}%</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button style="border: none;" value="${quiz.id}" class="edit_btn" onclick="editQuiz(${quiz.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${quiz.id}" onclick="deleteQuiz(${quiz.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#quizzes_datatable").append(row);

                    });
                },
                error: function(error) {
                console.error('Request Failed: ', error);
                }
            });
        };

        // display list of assignment
        const displayAssignment = () => {
            $.ajax({
                url: '{{ route('instructor.assignments.display') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    response.forEach(assignment => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${assignment.date}</td>
                            <td>${assignment.student_id}</td>
                            <td>${assignment.assignment_no}</td>
                            <td>${assignment.name}</td>
                            <td>${assignment.semester}</td>
                            <td>${assignment.term}</td>
                            <td>${assignment.score}</td>
                            <td>${assignment.assignment_item}</td>
                            <td>${assignment.score_in_percent}%</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button style="border: none;" value="${assignment.id}" class="edit_btn" onclick="editAssignment(${assignment.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${assignment.id}" onclick="deleteAssignment(${assignment.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#assignment_datatable").append(row);

                    });
                },
                error: function(error) {
                console.error('Request Failed: ', error);
                }
            });
        };

        // display list of seatwork
        const displaySeatwork = () => {
            $.ajax({
                url: '{{ route('instructor.seatworks.display') }}',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    response.forEach(seatwork => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${seatwork.date}</td>
                            <td>${seatwork.student_id}</td>
                            <td>${seatwork.seatwork_no}</td>
                            <td>${seatwork.name}</td>
                            <td>${seatwork.semester}</td>
                            <td>${seatwork.term}</td>
                            <td>${seatwork.score}</td>
                            <td>${seatwork.seatwork_item}</td>
                            <td>${seatwork.score_in_percent}%</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button style="border: none;" value="${seatwork.id}" class="edit_btn" onclick="editSeatwork(${seatwork.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${seatwork.id}" onclick="deleteSeatwork(${seatwork.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#seatwork_datatable").append(row);

                    });
                },
                error: function(error) {
                console.error('Request Failed: ', error);
                }
            });
        };

        // edit grade
        const edit = (id) =>{
            $('.edit_grade_modal').modal('show');
            $.ajax({
                url: '/instructor/grades-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response.id)
                    $('#edit_student_id').val(response.student_id)
                    $('#edit_student_name').val(response.name)
                    //2024-02-10 00:00:00
                    $('#edit_date').val(response.date.substring(0, 10))
                    $('#edit_semester').val(response.semester)
                    $('#edit_term').val(response.term)
                    $('#edit_grade').val(response.grade)
                    $('#edit_remarks').val(response.remarks)
                    // $('#edit_image').prop('value', response.image);
                    $('#edit_id').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }

        // edit exam
        const editExam = (id) =>{
            $('.edit_exam_modal').modal('show');
            $.ajax({
                url: '/instructor/exams-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#edit_student_id_exam').val(response.student_id)
                    $('#edit_student_name_exam').val(response.name)
                    $('#edit_date_exam').val(response.date.substring(0, 10))
                    $('#edit_semester_exam').val(response.semester)
                    $('#edit_term_exam').val(response.term)
                    $('#edit_score_exam').val(response.score)
                    $('#edit_item_exam').val(response.exam_item)
                    $('#edit_id_exam').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }
        // edit quiz
        const editQuiz = (id) =>{
            $('.edit_quiz_modal').modal('show');
            $.ajax({
                url: '/instructor/quiz-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#edit_student_id_quiz').val(response.student_id)
                    $('#edit_student_name_quiz').val(response.name)
                    $('#edit_date_quiz').val(response.date.substring(0, 10))
                    $('#edit_semester_quiz').val(response.semester)
                    $('#edit_term_quiz').val(response.term)
                    $('#edit_score_quiz').val(response.score)
                    $('#edit_item_quiz').val(response.quiz_item)
                    $('#edit_no_quiz').val(response.quiz_no)
                    $('#edit_id_quiz').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }
        // edit assignment
        const editAssignment = (id) =>{
            $('.edit_assignment_modal').modal('show');
            $.ajax({
                url: '/instructor/assignment-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#edit_student_id_assignment').val(response.student_id)
                    $('#edit_student_name_assignment').val(response.name)
                    $('#edit_date_assignment').val(response.date.substring(0, 10))
                    $('#edit_semester_assignment').val(response.semester)
                    $('#edit_term_assignment').val(response.term)
                    $('#edit_score_assignment').val(response.score)
                    $('#edit_item_assignment').val(response.assignment_item)
                    $('#edit_no_assignment').val(response.assignment_no)
                    $('#edit_id_assignment').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }
        // edit seatwork
        const editSeatwork = (id) =>{
            $('.edit_seatwork_modal').modal('show');
            $.ajax({
                url: '/instructor/seatwork-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#edit_student_id_seatwork').val(response.student_id)
                    $('#edit_student_name_seatwork').val(response.name)
                    $('#edit_date_seatwork').val(response.date.substring(0, 10))
                    $('#edit_semester_seatwork').val(response.semester)
                    $('#edit_term_seatwork').val(response.term)
                    $('#edit_score_seatwork').val(response.score)
                    $('#edit_item_seatwork').val(response.seatwork_item)
                    $('#edit_no_seatwork').val(response.seatwork_no)
                    $('#edit_id_seatwork').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }
        // update grade
        $('#updateGrade').click(function() {
            clearErrorMessages()

            var formData = new FormData();
            let id = $('#edit_id').val();
            let student_id = $('#edit_student_id').val();
            let student_name = $('#edit_student_name').val();
            let date = $('#edit_date').val();
            let semester = $('#edit_semester').val();
            let term = $('#edit_term').val();
            let grade = $('#edit_grade').val();
            let remarks = $('#edit_remarks').val();

            
            formData.append('id', id);
            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('grade', grade);
            formData.append('remarks', remarks);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.grades.update') }}',
                type: 'POST',
                contentType: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInput()
                        $('.edit_grade_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#datatable").html('')
                        displayGrade()
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#edit_error_grade').html(xhr.responseJSON.errors.grade)
                    $('#edit_error_date').html(xhr.responseJSON.errors.date)
                }
            });
        });

        // update exam
        $('#updateExam').click(function() {
            clearErrorMessagesExam()

            var formData = new FormData();
            let id = $('#edit_id_exam').val();
            let student_id = $('#edit_student_id_exam').val();
            let student_name = $('#edit_student_name_exam').val();
            let date = $('#edit_date_exam').val();
            let semester = $('#edit_semester_exam').val();
            let term = $('#edit_term_exam').val();
            let score = $('#edit_score_exam').val();
            let item = $('#edit_item_exam').val();

            
            formData.append('id', id);
            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('score', score);
            formData.append('item', item);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.exams.update') }}',
                type: 'POST',
                contentType: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInputExam()
                        $('.edit_exam_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#exams_datatable").html('')
                        displayExam()
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#edit_error_score_exam').html(xhr.responseJSON.errors.score)
                    $('#edit_error_date_exam').html(xhr.responseJSON.errors.date)
                }
            });
        });

        // update quiz
        $('#updateQuiz').click(function() {
            clearErrorMessagesQuiz()

            var formData = new FormData();
            let id = $('#edit_id_quiz').val();
            let student_id = $('#edit_student_id_quiz').val();
            let student_name = $('#edit_student_name_quiz').val();
            let date = $('#edit_date_quiz').val();
            let semester = $('#edit_semester_quiz').val();
            let term = $('#edit_term_quiz').val();
            let score = $('#edit_score_quiz').val();
            let item = $('#edit_item_quiz').val();
            let quiz_no = $('#edit_no_quiz').val();

            
            formData.append('id', id);
            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('score', score);
            formData.append('item', item);
            formData.append('quiz_no', quiz_no);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.quiz.update') }}',
                type: 'POST',
                contentType: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInputQuiz()
                        $('.edit_quiz_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#quizzes_datatable").html('')
                        displayQuiz()
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#edit_error_score_quiz').html(xhr.responseJSON.errors.score)
                    $('#edit_error_date_quiz').html(xhr.responseJSON.errors.date)
                }
            });
        });

        // update assignment
        $('#updateAssignment').click(function() {
            clearErrorMessagesAssignment()

            var formData = new FormData();
            let id = $('#edit_id_assignment').val();
            let student_id = $('#edit_student_id_assignment').val();
            let student_name = $('#edit_student_name_assignment').val();
            let date = $('#edit_date_assignment').val();
            let semester = $('#edit_semester_assignment').val();
            let term = $('#edit_term_assignment').val();
            let score = $('#edit_score_assignment').val();
            let item = $('#edit_item_assignment').val();
            let assignment_no = $('#edit_no_assignment').val();

            
            formData.append('id', id);
            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('score', score);
            formData.append('item', item);
            formData.append('assignment_no', assignment_no);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.assignment.update') }}',
                type: 'POST',
                contentType: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInputAssignment()
                        $('.edit_assignment_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#assignment_datatable").html('')
                        displayAssignment()
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#edit_error_score_assignment').html(xhr.responseJSON.errors.score)
                    $('#edit_error_date_assignment').html(xhr.responseJSON.errors.date)
                }
            });
        });

        // update seatwork
        $('#updateSeatwork').click(function() {
            clearErrorMessagesSeatwork()

            var formData = new FormData();
            let id = $('#edit_id_seatwork').val();
            let student_id = $('#edit_student_id_seatwork').val();
            let student_name = $('#edit_student_name_seatwork').val();
            let date = $('#edit_date_seatwork').val();
            let semester = $('#edit_semester_seatwork').val();
            let term = $('#edit_term_seatwork').val();
            let score = $('#edit_score_seatwork').val();
            let item = $('#edit_item_seatwork').val();
            let seatwork_no = $('#edit_no_seatwork').val();

            
            formData.append('id', id);
            formData.append('student_id', student_id);
            formData.append('student_name', student_name);
            formData.append('date', date);
            formData.append('semester', semester);
            formData.append('term', term);
            formData.append('score', score);
            formData.append('item', item);
            formData.append('seatwork_no', seatwork_no);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.seatwork.update') }}',
                type: 'POST',
                contentType: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInputSeatwork()
                        $('.edit_seatwork_modal').modal('hide');
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
                            timer: 1000,
                            confirmButtonColor: "#3085d6",
                        });
                        $("#seatwork_datatable").html('')
                        displaySeatwork()
                    }else{
                        Swal.fire({
                            title: 'Oppss..',
                            text: response.message,
                            icon: "warning",
                            confirmButtonColor: "#3085d6",
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#edit_error_score_seatwork').html(xhr.responseJSON.errors.score)
                    $('#edit_error_date_seatwork').html(xhr.responseJSON.errors.date)
                }
            });
        });

        // delete grade
        const deleteGrade = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('instructor.grades.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            console.log(response)
                            if(response.success) {
                                Swal.fire({
                                    title: 'Info',
                                    text: response.message,
                                    icon: "info",
                                    timer: 1000,
                                    confirmButtonColor: "#3085d6",
                                });
                                $("#datatable").html('')
                                displayGrade()
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        };
        // delete exam
        const deleteExam = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('instructor.exams.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            console.log(response)
                            if(response.success) {
                                Swal.fire({
                                    title: 'Info',
                                    text: response.message,
                                    icon: "info",
                                    timer: 1000,
                                    confirmButtonColor: "#3085d6",
                                });
                                $("#exams_datatable").html('')
                                displayExam()
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        
        }; 
        // delete quiz
        const deleteQuiz = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('instructor.quiz.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if(response.success) {
                                Swal.fire({
                                    title: 'Info',
                                    text: response.message,
                                    icon: "info",
                                    timer: 1000,
                                    confirmButtonColor: "#3085d6",
                                });
                                $("#quizzes_datatable").html('')
                                displayQuiz()
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        };
        
        // delete assignment
        const deleteAssignment = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('instructor.assignment.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if(response.success) {
                                Swal.fire({
                                    title: 'Info',
                                    text: response.message,
                                    icon: "info",
                                    timer: 1000,
                                    confirmButtonColor: "#3085d6",
                                });
                                $("#assignment_datatable").html('')
                                displayAssignment()
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        };

        // delete seatwork
        const deleteSeatwork = (id) => {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('instructor.seatwork.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if(response.success) {
                                Swal.fire({
                                    title: 'Info',
                                    text: response.message,
                                    icon: "info",
                                    timer: 1000,
                                    confirmButtonColor: "#3085d6",
                                });
                                $("#seatwork_datatable").html('')
                                displaySeatwork()
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Request failed:', error);

                        }
                    });
                }
            });

        };
    </script>
@endsection

