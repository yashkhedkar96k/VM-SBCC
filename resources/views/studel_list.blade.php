<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sanjivani Leaving Certification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/clock.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/calender.css')}}">
   
</head>

<body>
   @include('sidebar')

    <div class="container-fluid" style="margin-left: 250px;">
        <h2>Student List</h2>
        <hr>
        
        <!-- Student List Table -->
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Gr No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable({
        'processing': true,
        'serverSide': true,
        'ajax': {
            url: "{{ route('student_list') }}", // Use your Laravel route
            type: "POST",
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
        },
        'columns': [
            { data: "id" },
            { data: "GRNO" },
            { data: "NAME" },
            { data: "CLASSADMITTED" },
            { data: "action" }
        ],
    });

    // Handle delete button click (already in your code)
    $(document).on('click', '.deletbtn', function() {
        var id = $(this).data('id');
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this student record!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "{{ route('delete_student') }}",
                    type: "POST",
                    data: { id: id },
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success) {
                            swal("Poof! The student record has been deleted!", {
                                icon: "success",
                            });
                            $('#example').DataTable().ajax.reload(); // Reload DataTable
                        } else {
                            swal("Error!", "There was an issue deleting the record.", "error");
                        }
                    }
                });
            } else {
                swal("Your student record is safe!");
            }
        });
    });
});

    </script>
</body>
</html>
