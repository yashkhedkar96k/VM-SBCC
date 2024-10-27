

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sanjivani Leaving Certification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- link css -->
    <link rel="stylesheet" href="{{asset('assets/css/Dashboard.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
 
    @include('sidebar');
   
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Add New Student</h2>
      <hr>

      <!-- Start code here -->
      <div class="container">
<div id="accordion">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <h3>Sanjivani College Of Engineering</h3>
            </div>
        </div>
    </div>

   
    <div class="card card-default">
        <div class="card-header">
            <h4 class="card-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    <i class="glyphicon glyphicon-lock text-gold"></i>
                    <b>Student Details</b>
                </a>
            </h4>
        </div>
        <form method="POST">
<!-- row 1 -->
                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Gr.No</label>
                            <input type="number" class="form-control" name="grno" value=""  min="1"required/>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="stud_name" value=""  required/>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Caste</label>
                            <input type="text" class="form-control" name="stud_cast" value="" required/>
                        </div>
                    </div>
                </div>
<!-- row 2 -->
                <div class="row">
                    <div class="col-md-2 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Birth Place</label>
                            <input type="text" class="form-control" name="stud_birthplace" value="" required/>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value="" required/>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Last Institute Attended</label>
                            <input type="text" class="form-control" name="stud_LastClg" value="" required/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Date Of Admission</label>
                            <input type="date" class="form-control" name="stud_adDate" value="" required/>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Class Admitted</label>
                            <input type="text" class="form-control" name = "stud_ClassAdmitted"value="" required/>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Conduct</label>
                            <input type="text" class="form-control" name="stud_conduct" value="" required/>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="form-group">
                            <label class="control-label">Remarks</label>
                            <input type="text" class="form-control" name="stud_remark" value="" required/>
                        </div>
                    </div>
                </div>

<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <input type="submit" class="btn btn-success btn-lg" id="btnSubmit" name = "savebtn" value="Save">
        </div>
    </div>
</div>
</div>
</form>
                 <footer class="text-center">
                    <div class="mb-2">
                    <small>
                    Academic Year 2024-25 © Designed And Developed by - Department of Information Technology
                        </a>
                    </small>
                    </div>
                </footer>
       
    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>


</html>