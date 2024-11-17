<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaving Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .certificate-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .certificate-content {
            margin-top: 20px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        table td {
            padding: 5px;
        }

        .certificate-footer {
            text-align: right;
            margin-top: 30px;
        }
    </style>
</head>
<body onload="window.print()">
    <div class="certificate-header">
        <h2>Sanjivani College of Engineering, Kopargaon</h2>
        <h3>Leaving Certificate</h3>
        <p>Post: Shingnapur, Tal: Kopargaon, Dist. Ahmednagar, Pin: 423 603</p>
    </div>

    <div class="certificate-content">
        <table>
            <tr>
                <td><strong>1) TC NO:</strong></td>
                <td><b>{{ $student->tc_no }}</b></td>
            </tr>
            <tr>
                <td><strong>2) General Registration Number:</strong></td>
                <td><b>{{ $student->gr_no }}</b></td>
            </tr>
            <tr>
                <td><strong>3) Name of Candidate (in full):</strong></td>
                <td><b>{{ $student->name }}</b></td>
            </tr>
            <tr>
                <td><strong>4) Caste:</strong></td>
                <td><b>{{ $student->caste }}</b></td>
            </tr>
            <tr>
                <td><strong>5) Nationality:</strong></td>
                <td><b>Indian</b></td>
            </tr>
            <tr>
                <td><strong>6) Place of Birth:</strong></td>
                <td><b>{{ $student->place_of_birth }}</b></td>
            </tr>
            <tr>
                <td><strong>7) Date of Birth:</strong></td>
                <td><b>{{ \Carbon\Carbon::parse($student->date_of_birth)->format('d/m/Y') }}</b></td>
            </tr>
            <tr>
                <td><strong>8) Institution Last Attended:</strong></td>
                <td><b>{{ $student->last_institution_attended }}</b></td>
            </tr>
            <tr>
                <td><strong>9) Date of Admission:</strong></td>
                <td><b>{{ \Carbon\Carbon::parse($student->date_of_admission)->format('d/m/Y') }}</b></td>
            </tr>
            <tr>
                <td><strong>10) Class Admitted to:</strong></td>
                <td><b>{{ $student->class_admitted }}</b></td>
            </tr>
            <tr>
                <td><strong>11) Conduct:</strong></td>
                <td><b>{{ $student->conduct }}</b></td>
            </tr>
            <tr>
                <td><strong>12) Remarks:</strong></td>
                <td><b>{{ $student->remarks }}</b></td>
            </tr>
        </table>

      
    </div>
</body>
</html>
