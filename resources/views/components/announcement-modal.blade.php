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
                                            <input type="datetime-local" class="form-control" id="edit_date" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="edit_error_date"></span>
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
                                            <input type="datetime-local" class="form-control" id="date" placeholder="date" required>
                                            <div class="invalid-feedback">
                                                date
                                            </div>
                                        </div>
                                        <span style="color: red" id="error_date"></span>
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
            $('#error_announcement').html('')
            $('#error_date').html('')
        }
        // for clearing inputs
        const clearInput = () => {
            $('#announcement').val(''),
            $('#date').val(''),
            $('#edit_announcement').val(''),
            $('#edit_date').val('')
        }

        // saving announcement
        $('#saveAnnouncement').click(function() {
            clearErrorMessages()
            var postData = {
                announcement: $('#announcement').val(),
                date: $('#date').val(),
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('announcement.save') }}',
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
                        $('.announcement_modal').modal('hide');
                        $("#datatable").html('')
                        displayUser()
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Request failed:', error);
                    $('#error_announcement').html(xhr.responseJSON.errors.announcement)
                    $('#error_date').html(xhr.responseJSON.errors.date)
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
                            <td><strong>${announcement.announcement}</strong></td>
                            <td>${announcement.date}</td>
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
                    $('#edit_announcement').val(response.announcement)
                    $('#edit_date').val(response.date)
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
            var postData = {
                id: $('#edit_id').val(),
                announcement: $('#edit_announcement').val(),
                date: $('#edit_date').val()
            };
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('announcement.update') }}',
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

