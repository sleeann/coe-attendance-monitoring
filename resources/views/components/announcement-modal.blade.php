<div class="modal fade bd-example-modal-lg edit_announcement_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Announcement</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                <input type="text" id="edit_id" hidden>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Title</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="edit_title" required>
                                            <div class="invalid-feedback">
                                                Title
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_title"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Announcement</label>
                                        <div class="input-group">
                                            <textarea id="edit_announcement" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="invalid-feedback">
                                                Announcement
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_announcement"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="edit_date" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date"></span>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Time</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" id="edit_time" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                Time
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_time"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="edit_image" required>
                                            <div class="invalid-feedback">
                                                Image
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_image"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateAnnouncement">Update</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade bd-example-modal-lg announcement_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Announcement</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Title</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="title" required>
                                            <div class="invalid-feedback">
                                                Title
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_title"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Announcement</label>
                                        <div class="input-group">
                                            <textarea id="announcement" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="invalid-feedback">
                                                Announcement
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_announcement"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Date</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="date" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Time</label>
                                        <div class="input-group">
                                            <input type="time" class="form-control" id="time" placeholder="time" required>
                                            <div class="invalid-feedback">
                                                Time
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_time"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="image" required>
                                            <div class="invalid-feedback">
                                                Image
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_image"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveAnnouncement">Save</button>
            </div>
        </div>
    </div>
</div>

@section('user')
    <script>

        // for clearing error messages
        const clearErrorMessages = () => {
            $('#error_title').html('')
            $('#error_announcement').html('')
            $('#error_date').html('')
            $('#error_time').html('')
            $('#error_image').html('')
        }
        // for clearing inputs
        const clearInput = () => {
            $('#title').val(''),
            $('#announcement').val(''),
            $('#date').val(''),
            $('#time').val(''),
            $('#image').val(''),

            $('#edit_title').val(''),
            $('#edit_announcement').val(''),
            $('#edit_date').val(''),
            $('#edit_time').val(''),
            $('#edit_image').val('')
        }


        // saving announcement
        $('#saveAnnouncement').click(function() {
            var formData = new FormData();
            let title = $('#title').val();
            let announcement = $('#announcement').val();
            let date = $('#date').val();
            let time = $('#time').val();
            let image = $('#image').prop('files')[0];

            formData.append('title', title);
            formData.append('announcement', announcement);
            formData.append('date', date);
            formData.append('time', time);
            formData.append('image', image);

            clearErrorMessages();

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('announcement.save') }}',
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
                        $('#success_alert').css('display', 'block');
                        setTimeout(function() {
                            $('#success_alert').css('display', 'none');
                        }, 2000);
                        $('.announcement_modal').modal('hide');
                        $("#datatable").html('');
                        displayUser();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    if(xhr.responseJSON && xhr.responseJSON.errors) {
                        $('#error_title').html(xhr.responseJSON.errors.title);
                        $('#error_announcement').html(xhr.responseJSON.errors.announcement);
                        $('#error_date').html(xhr.responseJSON.errors.date);
                        $('#error_time').html(xhr.responseJSON.errors.time);
                        $('#error_image').html(xhr.responseJSON.errors.image);
                    }
                }
            });
        });


        // display list of users
        const displayUser = () => {
            $.ajax({
                url: '/announcement-display',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    response.forEach(announcement => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>
                                <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox${announcement.id}" required="">
                                    <label class="form-check-label" for="customCheckBox${announcement.id}"></label>
                                </div>
                            </td>
                            <td><strong>${announcement.title}</strong></td>
                            <td><strong>${announcement.announcement}</strong></td>
                            <td><strong>${announcement.date}</strong></td>
                            <td><strong>${announcement.time}</strong></td>
                            <td>
                                <img src = '{{ asset('storage/gallery/${announcement.image}') }}' width='50px' height='50px'>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <button style="border: none;" value="${announcement.id}" class="edit_btn" onclick="edit(${announcement.id})">
                                        <a class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                    </button>
                                    <button style="border: none;" value="${announcement.id}" onclick="deleteAnnouncement(${announcement.id})">
                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </button>
                                </div>
                            </td>
                        `;
                        $("#datatable").append(row);

                    });
                },
                error: function(error) {
                   console.error(error)
                }
            });
        };

        displayUser()


        // edit announcement
        const edit = (id) =>{
            $('.edit_announcement_modal').modal('show');
            $.ajax({
                url: '/announcement-edit/' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#edit_title').val(response.title)
                    $('#edit_announcement').val(response.announcement)
                    $('#edit_date').val(response.date)
                    $('#edit_time').val(response.time)
                    // $('#edit_image').prop('value', response.image);
                    $('#edit_id').val(response.id)
                },
                error: function(error) {
                    console.error(error)
                }
            });
        }


        // update user
        $('#updateAnnouncement').click(function() {
            clearErrorMessages()

            var formData = new FormData();
            let id = $('#edit_id').val();
            let title = $('#edit_title').val();
            let announcement = $('#edit_announcement').val();
            let date = $('#edit_date').val();
            let time = $('#edit_time').val();
            let image = $('#edit_image').prop('files')[0];

            formData.append('id', id);
            formData.append('title', title);
            formData.append('announcement', announcement);
            formData.append('date', date);
            formData.append('time', time);
            formData.append('image', image);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('announcement.update') }}',
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
                        $('.edit_announcement_modal').modal('hide');
                        $("#datatable").html('')
                        displayUser()
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#edit_error_announcement').html(xhr.responseJSON.errors.announcement)
                    $('#edit_error_date').html(xhr.responseJSON.errors.date)
                }
            });
        });


        // delete user
        const deleteAnnouncement = (id) => {
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
                        url: '{{ route('announcement.delete') }}',
                        type: 'DELETE',
                        data: { id: id },
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            console.log(response)
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

