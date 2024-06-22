<!DOCTYPE html>
<html lang="en">
<head>
    <title>State</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-4 mb-4">
                <h3 class="text-primary">Data Pendaftaran Site Kulega</h3>
                <!-- Custom search input container -->
                <div id="customSearchInput" class="mb-3">
                    <input type="text" id="customSearchBox" class="form-control form-input" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-12 mt-4 mb-4">
                <table class="table table-bordered" id="y_dataTables">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama PIC</th>
                            <th>Perusahaan</th>
                            <th>Email</th>
                            <th>Waktu Pengumpulan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="editForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="editId" name="id">
                        <div class="form-group">
                            <label for="editPicName">Nama PIC</label>
                            <input type="text" class="form-control" id="editPicName" name="pic_name" required>
                        </div>
                        <div class="form-group">
                            <label for="editIndustri">Perusahaan</label>
                            <input type="text" class="form-control" id="editIndustri" name="industri" required>
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Setup CSRF token for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#y_dataTables').DataTable({
                processing: true
                , serverSide: true
                , ajax: "{{ route('stat') }}"
                , columns: [{
                        data: 'id'
                        , name: 'id'
                    }
                    , {
                        data: 'pic_name'
                        , name: 'pic_name'
                    }
                    , {
                        data: 'industri'
                        , name: 'industri'
                    }
                    , {
                        data: 'email'
                        , name: 'email'
                    }
                    , {
                        data: 'created_at'
                        , name: 'created_at'
                    }
                    , {
                        data: 'action'
                        , name: 'action'
                        , orderable: false
                        , searchable: false
                        , render: function(data, type, row) {
                            return `
                                <button class="btn btn-primary edit-btn" data-id="${row.id}">Edit</button>
                                <button class="btn btn-danger delete-btn" data-id="${row.id}">Delete</button>
                            `;
                        }
                    }
                ]
            });

            // Apply custom search behavior
            $('#customSearchBox').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Edit button click event
            $('#y_dataTables').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: '/stat/' + id + '/edit', // Adjust the URL as needed
                    method: 'GET'
                    , success: function(data) {
                        $('#editId').val(data.id);
                        $('#editPicName').val(data.pic_name);
                        $('#editIndustri').val(data.industri);
                        $('#editEmail').val(data.email);
                        $('#editModal').modal('show');
                    }
                });
            });

            // Save changes on edit form submit
            $('#editForm').on('submit', function(e) {
                e.preventDefault();
                var id = $('#editId').val();
                $.ajax({
                    url: '/stat/' + id, // Adjust the URL as needed
                    method: 'PUT'
                    , data: $(this).serialize()
                    , success: function(data) {
                        $('#editModal').modal('hide');
                        table.ajax.reload();
                        alert('Record updated successfully');
                    }
                });
            });

            // Delete button click event
            $('#y_dataTables').on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                if (confirm('Are you sure you want to delete this record?')) {
                    $.ajax({
                        url: '/stat/' + id, // Adjust the URL as needed
                        method: 'DELETE'
                        , data: {
                            _token: '{{ csrf_token() }}' // Include CSRF token if required
                        }
                        , success: function(data) {
                            table.ajax.reload();
                            alert('Record deleted successfully');
                        }
                    });
                }
            });
        });

    </script>
</body>
</html>
