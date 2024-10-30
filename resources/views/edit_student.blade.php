<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/Dashboard.css')}}">
</head>
<body>
<div class="container mt-5">
    @include('sidebar')
    <h2>Edit Student Details</h2>
    <hr>
    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')
       
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Gr.No</label>
                    <input type="number" class="form-control" name="grno" value="{{ $student->gr_no }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="stud_name" value="{{ $student->name }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Caste</label>
                    <input type="text" class="form-control" name="stud_cast" value="{{ $student->caste }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>Birth Place</label>
                    <input type="text" class="form-control" name="stud_birthplace" value="{{ $student->place_of_birth }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="{{ $student->date_of_birth }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Last Institute Attended</label>
                    <input type="text" class="form-control" name="stud_LastClg" value="{{ $student->last_institution_attended }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Date Of Admission</label>
                    <input type="date" class="form-control" name="stud_adDate" value="{{ $student->date_of_admission }}" required>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Class Admitted</label>
                    <input type="text" class="form-control" name="stud_ClassAdmitted" value="{{ $student->class_admitted }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Conduct</label>
                    <input type="text" class="form-control" name="stud_conduct" value="{{ $student->conduct }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" class="form-control" name="stud_remark" value="{{ $student->remarks }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

@if(session('success'))
<script>
    swal({
        title: "Good job!",
        text: "{{ session('success') }}",
        icon: "success",
        button: "Done",
    });
</script>
@endif

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
