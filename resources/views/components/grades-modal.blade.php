<div class="modal fade bd-example-modal-lg upload_grade_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Grade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upload Grade</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation"  id="uploadForm" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Grade</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="upload_grade" name="upload_grade" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                            <div class="invalid-feedback">
                                                Grade
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
                <button type="button" class="btn btn-primary" id="uploadGrade">Upload</button>
            </div>
        </div>
    </div>
</div>
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
        }
        // for clearing inputs
        const clearInput = () => {
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
            $('#edit_semester').val(''),
            $('#edit_term').val(''),
            $('#edit_grade').val(''),
            $('#edit_remarks').val('')


            $('#upload_grade').val(''),
            $('#score_type').val("Select Type"),
            $('#score_term').val("Select Term"),
            $('#score_semester').val("Select Semester")
        }

        //uploading grade
        $('#uploadGrade').click(function(){
            var formData = new FormData($('#uploadForm')[0]);
            formData.append('score_type', $('#score_type').val());
            formData.append('score_term', $('#score_term').val());
            formData.append('score_semester', $('#score_semester').val());
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('instructor.grades.upload') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success){
                        clearInput();
                        $('.upload_grade_modal').modal('hide');
                        $("#datatable").html('');
                        displayGrade();
                        Swal.fire({
                            title: 'Info',
                            text: response.message,
                            icon: "info",
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
                    $('#result').html('File upload failed. Please try again.');
                }
            });
        })

        // saving grade
        $('#saveGrade').click(function() {
            console.log('test')
            var formData = new FormData();
            let student_id = $('#student_id').val();
            let student_name = $('#student_name').val();
            let date = $('#date').val();
            let semester = $('#semester').val();
            let term = $('#term').val();
            let grade = $('#grade').val();
            let remarks = $('#remarks').val();
            console.log(date)
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
                    console.log(response)
                    if(response.success) {
                        clearInput();
                        $('#success_alert').css('display', 'block');
                        setTimeout(function() {
                            $('#success_alert').css('display', 'none');
                        }, 2000);
                        $('.grade_modal').modal('hide');
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
                                <div class="d-flex">
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

        displayGrade()


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


        // update user
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
                    console.log(response)
                    if(response.success) {
                        clearInput()
                        $('#edit_success_alert').css('display', 'block');
                        setTimeout(function() {
                            $('#edit_success_alert').css('display', 'none');
                        }, 2000);
                        $('.edit_grade_modal').modal('hide');
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


        // delete user
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

    </script>
@endsection

