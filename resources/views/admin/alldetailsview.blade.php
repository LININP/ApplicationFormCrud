<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Applicants</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <!-- Datatable with tools menu -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h6 class="panel-title">
                    <i class="icon-table"></i>
                    <a href="applicant-mgmt.php">
                        <i class="fa fa-plus-square-o"></i> View Applicants
                    </a>
                </h6>
            </div>

            <table class="table table-striped table-bordered mt-3">
                <tbody>
                    @foreach ($applications as $application)
                    <tr>
                        <td><strong>Course</strong></td>
                        <td colspan="2">{{ $application->course }}</td>
                        <td rowspan="5" class="text-center">
                            <img src="{{ asset('uploads/' . $application->photo) }}" width="100" height="90" alt="Applicant Photo">
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Admission No</strong></td>
                        <td colspan="2">{{ $application->admission_no }}</td>
                    </tr>

                    <tr>
                        <td><strong>College</strong></td>
                        <td colspan="2">{{ $application->college }}</td>
                    </tr>

                    <tr>
                        <td><strong>Applicant Name</strong></td>
                        <td colspan="2">{{ $application->applicant_name }}</td>
                    </tr>

                    <tr>
                        <td><strong>Gender</strong></td>
                        <td colspan="2">{{ $application->gender }}</td>
                    </tr>

                    <tr>
                        <td><strong>DOB</strong></td>
                        <td colspan="2">{{ $application->date_of_birth }}</td>
                    </tr>

                    <tr>
                        <td><strong>Age</strong></td>
                        <td colspan="2">{{ $application->age }}</td>
                    </tr>

                    <tr>
                        <td><strong>Nationality</strong></td>
                        <td colspan="2">{{ $application->nationality }}</td>
                    </tr>

                    <tr>
                        <td><strong>Father's Name</strong></td>
                        <td colspan="2">{{ $application->father_name }}</td>
                    </tr>

                    <tr>
                        <td><strong>Signature</strong></td>
                        <td colspan="3">
                            <img src="{{ asset('uploads/' . $application->signature) }}" width="100" height="90" alt="Applicant Signature">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Adding Bootstrap and Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
