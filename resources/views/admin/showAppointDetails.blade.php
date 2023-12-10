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
                <table class="table table-striped my-4">
                    <thead>
                        <tr>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)
                        <tr>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->email}}</td>
                            <td>{{$datas->mob}}</td>
                            <td>{{$datas->doctor}}</td>
                            <td>{{$datas->desc}}</td>
                            <td>{{$datas->date}}</td>
                            <td>{{$datas->status}}</td>
                            <td>
                                <a href="{{url('approved',$datas->id)}}"  class="btn btn-success">Approved</a>
                                <a href="{{url('cancled',$datas->id)}}"  class="btn btn-danger">Cancel</a>
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