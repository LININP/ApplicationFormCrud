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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h6 class="panel-title">
                    <i class="icon-table"></i>
                    <a href="#"><i class="fa fa-plus-square-o"></i> View Applicants</a>
                </h6>
            </div>
            <div class="datatable-tools mt-3">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Admission No</th>
                            <th>Applicant Name</th>
                            <th>Course</th>
                            <th>College</th>
                            <th>Photo</th>
                            <th>Gender</th>
                            <th>Mobile No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $key => $application)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $application->admission_no }}</td>
                            <td>{{ $application->applicant_name }}</td>
                            <td>{{ $application->course }}</td>
                            <td>{{ $application->college }}</td>
                            <td>
                                <img
                                    src="{{ asset('uploads/' . $application->photo) }}"
                                    width="130"
                                    height="70"
                                    alt="Applicant Photo">
                            </td>
                            <td>{{ $application->gender }}</td>
                            <td>{{ $application->mobile_no }}</td>
                            <td>
                                <a href="{{route('edit_application',['application'=>$application])}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-info btn-sm">View</a>
                                <form action="{{route('deleted_application',['application'=>$application])}}" method="post"><button>Delete</button>

                                    @csrf
                                    @method('DELETE')
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Adding Bootstrap and Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
