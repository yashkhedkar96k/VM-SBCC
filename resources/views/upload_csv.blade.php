<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 4">
    <title>Sanjivani Leaving Certification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/Dashboard.css') }}">

    <style>
        body {
            background-color: #f7f9fc;
        }
        .page-content {
            padding: 30px;
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control-lg {
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .supported-file {
            margin-top: 30px;
            background-color: #e9ecef;
            padding: 20px;
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .supported-file ul {
            list-style-type: none;
            padding: 0;
        }
        .supported-file li {
            margin-bottom: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
    @include('sidebar')

    <main class="page-content">
        <div class="container-fluid">
            <h2>Sanjivani College Of Engineering</h2>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="importData.php" method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow">
                        <div class="form-group">
                            <label for="formFileLg" class="form-label">Upload Students List</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block" name="importSubmit">Submit</button>
                        
                        <div class="supported-file mt-4">
                            <h5>For Uploading file:</h5>
                            <ul>
                                <li>Your file must have a .csv extension</li>
                                <li>Your file must have the following columns: <strong>GR NO, NAME, CASTE, PLACE OF BIRTH, DATE OF BIRTH, LAST INSTITUTION ATTENDED, DATE OF ADMISSION, CLASS ADMITTED, CONDUCT, REMARKS</strong></li>
                                <li>If you want to download a sample file, <a href="sample.csv" download>click here</a>.</li>
                            </ul>
                        </div>
                    </form>
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
