<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .doc-form {
            border: 1px solid;
            padding: 10px;
            box-shadow: 3px 10px 5px 7px white;
        }

        .header {
            margin-top: 10px;
            font-weight: bold;
            font-size: large;
            background: grey;
            padding: 1rem;
        }

        .input {
            display: flex;
            flex-direction: column;
        }

        .input label {
            text-align: left;
            text-transform: uppercase;
            font-weight: bold;
            font-style: italic;
        }

        .input input {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- side-nave-bar -->
        @include('admin.sidebar')
        <!-- navbar -->
        @include('admin.navbar')
        <!-- body-container -->

        <div class="container-fluid page-body-wrapper">
            <div class="container text-center mt-4">
                <h1>Show Appointment</h1>
                <div class="table-responsive">
                <table class="table table-striped my-4 text-white">
                    <thead>
                        <tr class="bg-success">
                            <th scope="col" style="font-weight:bold;">Doctor Name</th>
                            <th scope="col" style="font-weight:bold;">Phone</th>
                            <th scope="col" style="font-weight:bold;">Speciality</th>
                            <th scope="col" style="font-weight:bold;">Room No</th>
                            <th scope="col" style="font-weight:bold;">Image</th>
                            <th scope="col" style="font-weight:bold;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)
                        <tr>
                            <td>{{$datas->username}}</td>
                            <td>{{$datas->phone}}</td>
                            <td>{{$datas->speciality}}</td>
                            <td>{{$datas->room}}</td>
                            <td><img src="doctorImage/{{$datas->image}}" alt="" style="margin:auto;"></td>
                            <td>
                                <a href="{{url('updated',$datas->id)}}"  class="btn btn-warning">Update</a>
                                <a href="{{url('deleted',$datas->id)}}"  class="btn btn-danger" onclick="return confirm('Are sure want to delete?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <!-- script -->
        @include('admin.script')

</body>

</html>