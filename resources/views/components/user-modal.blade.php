<div class="modal fade bd-example-modal-lg edit_modal" tabindex="-1" role="dialog" aria-hidden="true" id="edit_modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dz-password">Role</label>
                                        <div class="input-group transparent-append">
                                            <select class="form-control" id="edit_role" placeholder="Choose a safe one.." required>
                                                <option selected disabled>(Please select a role)</option>
                                                <option>Administrator</option>
                                                <option>Instructor</option>
                                                <option>Parent</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a role.
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_role"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            <input type="text" class="form-control" id="edit_fname" placeholder="Name" required>
                                            <div class="invalid-feedback">
                                                name
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_fname"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">ID number</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            <input type="text" class="form-control id_number" id="edit_id_number" placeholder="Enter an ID number.." required>
                                            <div class="invalid-feedback">
                                                Please Enter an ID number.
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_idnumber"></span>
                                    </div>
                                    <div id="edit_inputsForParent" hidden>
                                        
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Parentname</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="edit_parent_name" placeholder="Parentname" required>
                                                        <div class="invalid-feedback">
                                                            Parentname
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_parent_name"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Address</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="edit_address" placeholder="Address" required>
                                                        <div class="invalid-feedback">
                                                            Address
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_address"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Course</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" class="form-control" id="edit_course" placeholder="course" required>
                                                <div class="invalid-feedback">
                                                    course
                                                </div>
                                            </div>
                                            <span style="color: red" id="error_course"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">BirthDate</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="date" class="form-control" id="edit_date_of_birth" placeholder="BirthDate" required>
                                                        <div class="invalid-feedback">
                                                            BirthDate
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_date_of_birth"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Year</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="edit_year" placeholder="year" required>
                                                        <div class="invalid-feedback">
                                                            year
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_year"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Block</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="edit_block" placeholder="block" required>
                                                        <div class="invalid-feedback">
                                                            block
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="dz-password">Sex</label>
                                                    <div class="input-group transparent-append">
                                                        <select class="form-control" id="edit_sex" placeholder="Choose a safe one.." required>
                                                            <option selected disabled>(Please select a sex)</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a sex.
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_sex"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Contact Number</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="edit_contact_number" placeholder="Contact Number" required>
                                                        <div class="invalid-feedback">
                                                            Contact Number
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_contact_number"></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="text-label form-label" for="dz-password">New Password *</label>
                                                <div class="input-group transparent-append">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                    <input type="password" class="form-control" id="edit_pword" placeholder="Choose a safe one.." required>
                                                    <span class="input-group-text show-pass">
                                                        <i class="fa fa-eye-slash"></i>
                                                        <i class="fa fa-eye"></i>
                                                    </span>
                                                    <div class="invalid-feedback">
                                                        Please Enter a password.
                                                    </div>
                                                </div>
                                                <span style="color: red" id="error_pword"></span>
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
                <button type="button" class="btn btn-primary" id="updateUser">Save changes</button>
            </div>
        </div>
    </div>
</div>







<div class="modal fade bd-example-modal-lg user_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dz-password">Role</label>
                                        <div class="input-group transparent-append">
                                        <input type="hidden" id="user_id">
                                            <select class="form-control" id="role" placeholder="Choose a safe one.." required>
                                                <option selected disabled>(Please select a role)</option>
                                                <option>Administrator</option>
                                                <option>Instructor</option>
                                                <option>Parent</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a role.
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_role"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Firstname</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            <input type="text" class="form-control" id="fname" placeholder="Firstname" required>
                                            <div class="invalid-feedback">
                                                firstname
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_fname"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Lastname</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            <input type="text" class="form-control" id="lname" placeholder="Lastname" required>
                                            <div class="invalid-feedback">
                                                lastname
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_lname"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">ID number</label>
                                        <div class="input-group">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            <input type="text" class="form-control id_number" id="id_number" placeholder="Enter an ID number.." required>
                                            <div class="invalid-feedback">
                                                Please Enter an ID number.
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_idnumber"></span>
                                    </div>
                                    <div id="inputsForParent" hidden>
                                        
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Parentname</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="parent_name" placeholder="Parentname" required>
                                                        <div class="invalid-feedback">
                                                            Parentname
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_parent_name"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Address</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="address" placeholder="Address" required>
                                                        <div class="invalid-feedback">
                                                            Address
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_address"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Course</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" class="form-control" id="course" placeholder="course" required>
                                                <div class="invalid-feedback">
                                                    course
                                                </div>
                                            </div>
                                            <span style="color: red" id="error_course"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">BirthDate</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="date" class="form-control" id="date_of_birth" placeholder="BirthDate" required>
                                                        <div class="invalid-feedback">
                                                            BirthDate
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_date_of_birth"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Year</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="year" placeholder="year" required>
                                                        <div class="invalid-feedback">
                                                            year
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_year"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Block</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="block" placeholder="block" required>
                                                        <div class="invalid-feedback">
                                                            block
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="dz-password">Sex</label>
                                                    <div class="input-group transparent-append">
                                                        <select class="form-control" id="sex" placeholder="Choose a safe one.." required>
                                                            <option selected disabled>(Please select a sex)</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a sex.
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_sex"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 lg-4">
                                                <div class="mb-3">
                                                    <label class="text-label form-label" for="validationCustomUsername">Contact Number</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        <input type="text" class="form-control" id="contact_number" placeholder="Contact Number" required>
                                                        <div class="invalid-feedback">
                                                            Contact Number
                                                        </div>
                                                    </div>
                                                    <span style="color: red" id="error_contact_number"></span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dz-password">Password *</label>
                                        <div class="input-group transparent-append">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            <input type="password" class="form-control" id="password" placeholder="Choose a safe one.." required>
                                            <span class="input-group-text show-pass">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please Enter a password.
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_pword"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveUser">Save changes</button>
            </div>
        </div>
    </div>
</div>

@section('user')
    <script>
        if($('#role').val() == 'Parent'){
            $('#inputsForParent').attr('hidden', false);
        }else{
            $('#inputsForParent').attr('hidden', true);
        }

        $('#role').change(function(){
            if($(this).val() == 'Parent'){
                $('#inputsForParent').attr('hidden', false);
                $('#edit_inputsForParent').attr('hidden', false);
            }else{
                $('#inputsForParent').attr('hidden', true);
                $('#edit_inputsForParent').attr('hidden', true);
            }
        });

        $('#edit_role').change(function(){
            if($(this).val() == 'Parent'){
                $('#edit_inputsForParent').attr('hidden', false);
            }else{
                $('#edit_inputsForParent').attr('hidden', true);
            }
        });
        // for clearing error messages
        const clearErrorMessages = () => {
            $('#error_role').html('')
            $('#error_fname').html('')
            $('#error_lname').html('')
            $('#error_idnumber').html('')
            $('#error_pword').html('')
            $('#error_parent_name').html('')
            $('#error_address').html('')
            $('#error_sex').html('')
            $('#error_contact_number').html('')
            $('#error_date_of_birth').html('')
            $('#error_year').html('')
            $('#error_block').html('')
            $('#error_course').html('')
        }

        // for clearing inputs
        const clearInput = () => {
            $('#fname').val(''),
            $('#lname').val(''),
            $('#id_number').val(''),
            $('#password').val(''),
            $('#role').val('(Please select a role)'),
            $('#parent_name').val(''),
            $('#address').val(''),
            $('#sex').val('(Please select a role)'),
            $('#contact_number').val(''),
            $('#date_of_birth').val(''),
            $('#year').val(''),
            $('#block').val(''),
            $('#course').val(''),

            $('#edit_fname').val(''),
            $('#edit_id_number').val(''),
            $('#edit_role').val('(Please select a role)')
            $('#edit_parent_name').val(''),
            $('#edit_address').val(''),
            $('#edit_sex').val('(Select your sex)'),
            $('#edit_contact_number').val(''),
            $('#edit_date_of_birth').val(''),
            $('#edit_year').val(''),
            $('#edit_block').val(''),
            $('#edit_pword').val(''),
            $('#edit_course').val('')
        }

        // saving user
        $('#saveUser').click(function() {
            clearErrorMessages()
            var postData = {
                fname: $('#fname').val(),
                lname: $('#lname').val(),
                id: $('#id_number').val(),
                password: $('#password').val(),
                role: $('#role').val(),

                parent_name: $('#parent_name').val(),
                address: $('#address').val(),
                sex: $('#sex').val(),
                contact_number: $('#contact_number').val(),
                date_of_birth: $('#date_of_birth').val(),
                year: $('#year').val(),
                block: $('#block').val(),
                course: $('#course').val()
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('administrator.user.save') }}',
                type: 'POST',
                data: postData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    if(response.success) {
                        clearInput()
                        $('#success_alert').css('display', 'block');
                        setTimeout(function() {
                            $('#success_alert').css('display', 'none');
                        }, 2000);
                        $('.user_modal').modal('hide');
                        $("#datatable").html('')
                        displayUser()
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#error_role').html(xhr.responseJSON.errors.role)
                    $('#error_fname').html(xhr.responseJSON.errors.fname)
                    $('#error_lname').html(xhr.responseJSON.errors.lname)
                    $('#error_idnumber').html(xhr.responseJSON.errors.id)
                    $('#error_pword').html(xhr.responseJSON.errors.password)
                    
                    $('#parent_name').html(xhr.responseJSON.errors.parent_name)
                    $('#address').html(xhr.responseJSON.errors.address)
                    $('#sex').html(xhr.responseJSON.errors.sex)
                    $('#contact_number').html(xhr.responseJSON.errors.contact_number)
                    $('#date_of_birth').html(xhr.responseJSON.errors.date_of_birth)
                    $('#year').html(xhr.responseJSON.errors.year)
                    $('#block').html(xhr.responseJSON.errors.block)
                    $('#course').html(xhr.responseJSON.errors.course)
                }
            });
        });

        // display list of users
        const displayUser = () => {
            $.ajax({
                url: '/administrator/user-display',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    response.forEach(user => {
                        user.roles.forEach(role => {
                            console.log(role)

                        const row = document.createElement('tr');

                        row.innerHTML = `
                            <td>
                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox${user.id}" required="">
                                    <label class="form-check-label" for="customCheckBox${user.id}"></label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i>${user.email}</div>
                            </td>
                            <td><strong>${user.name}</strong></td>
                            <td>${user.parent_name == null ? '' : user.parent_name}</td>
                            <td>${role.name}</td>
                            <td>
                                <div class="d-flex">
                                    <button style="border: none;" value="${user.id}" class="edit_btn" onclick="edit(${user.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${user.id}" onclick="deleteUser(${user.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#datatable").append(row);
                        });
                    });
                },
                error: function(error) {
                   console.error(error)
                }
            });
        };

        displayUser()


        // edit user
        const edit = (id) =>{
            $('#edit_modal').modal('show');
            $.ajax({
                url: '/administrator/user-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#edit_fname').val(response.name)
                    $('#edit_id_number').val(response.email)
                    $('#edit_role').val(response.roles[0].name)
                    $('#user_id').val(response.id)
                    if(response.roles[0].name == 'Parent'){
                        $('#edit_inputsForParent').attr('hidden', false)
                        $('#edit_parent_name').val(response.parent_name)
                        $('#edit_address').val(response.address)
                        $('#edit_sex').val(response.sex)
                        $('#edit_contact_number').val(response.contact_number)
                        $('#edit_date_of_birth').val(response.date_of_birth)
                        $('#edit_year').val(response.year)
                        $('#edit_block').val(response.block)
                        $('#edit_course').val(response.course)
                    }else{
                        $('#edit_inputsForParent').attr('hidden', true)
                    }
                    
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }


        // update user
        $('#updateUser').click(function() {
            clearErrorMessages()
            var postData = {
                fullname: $('#edit_fname').val(),
                user_id: $('#user_id').val(),
                id: $('#edit_id_number').val(),
                role: $('#edit_role').val(),
                password: $('#edit_pword').val(),
                parent_name: $('#edit_parent_name').val(),
                address: $('#edit_address').val(),
                sex: $('#edit_sex').val(),
                contact_number: $('#edit_contact_number').val(),
                date_of_birth: $('#edit_date_of_birth').val(),
                year: $('#edit_year').val(),
                block: $('#edit_block').val(),
                course: $('#edit_course').val()
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('administrator.user.update') }}',
                type: 'PUT',
                data: postData,
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
                        $('.edit_modal').modal('hide');
                        $("#datatable").html('')
                        displayUser()
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    // $('#error_role').html(xhr.responseJSON.errors.role)
                    // $('#error_fname').html(xhr.responseJSON.errors.fname)
                    // $('#error_lname').html(xhr.responseJSON.errors.lname)
                    // $('#error_idnumber').html(xhr.responseJSON.errors.id)
                    // $('#error_pword').html(xhr.responseJSON.errors.password)
                }
            });
        });


        // delete user
        const deleteUser = (id) => {
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
                        url: '{{ route('administrator.user.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            if(response.success) {
                                 $("#datatable").html('')
                                 displayUser()
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

