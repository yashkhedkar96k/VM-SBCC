<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sanjivani Leaving Certification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/Dashboard.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
 
    @include('sidebar')
 
    <main class="page-content">
        <div class="container-fluid">
            <h2>Add New Student</h2>
            <hr>
            <div class="container">
                <div id="accordion">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3>Sanjivani College Of Engineering</h3>
                        </div>
                    </div>
                    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


                    <div class="card card-default">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    <i class="glyphicon glyphicon-lock text-gold"></i>
                                    <b>Student Details</b>
                                </a>
                            </h4>
                        </div>
                        <form method="POST" action="{{Route('students.store')}}">
                            @csrf
                            <!-- Row 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gr.No</label>
                                        <input type="number" class="form-control" name="grno" placeholder="Enter GR No" min="1" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="stud_name" placeholder="Enter Student Name" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Caste</label>
                                        <input type="text" class="form-control" name="stud_cast" placeholder="Enter Caste" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 2 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Birth Place</label>
                                        <input type="text" class="form-control" name="stud_birthplace" placeholder="Enter Birth Place" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" class="form-control" name="dob" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Institute Attended</label>
                                        <input type="text" class="form-control" name="stud_LastClg" placeholder="Enter Last Institute" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 3 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Admission</label>
                                        <input type="date" class="form-control" name="stud_adDate" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Class Admitted</label>
                                        <input type="text" class="form-control" name="stud_ClassAdmitted" placeholder="Enter Class Admitted" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Conduct</label>
                                        <input type="text" class="form-control" name="stud_conduct" placeholder="Enter Conduct" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 4 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <input type="text" class="form-control" name="stud_remark" placeholder="Enter Remarks" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn btn-success btn-lg" name="savebtn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('footer')
        </div>
    </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
