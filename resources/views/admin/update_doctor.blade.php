<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                
                <form action="{{url('edit_doctor',$data->id)}}" method="POST" enctype="multipart/form-data" class="doc-form">
                    @csrf
                    <div class="header">Add Doctor</div>
                    <div class="input p-2">
                        <label for="username">Doctor Name</label>
                        <input type="text" name="username" value="{{$data->username}}">
                    </div>
                    <div class="input p-2">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" value="{{$data->phone}}">
                    </div>
                    <div class="input p-2">
                        <label for="speciality">Speciality</label>
                        <input type="text" class="bg-secondary"name="speciality" value="{{$data->speciality}}">
                    </div>
                    <div class="input p-2">
                        <label for="room">Room Number</label>
                        <input type="number" name="room" value="{{$data->room}}">
                    </div>
                    <div class="input p-2">
                        <img src="doctorImage/{{$data->image}}" alt="" style="width:160px; height:160px;">
                        <label for="file">Image </label>
                        <input class="w-100" type="file" name="file" style="color:white;">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 bg-warning">Update</button>
                </form>
            </div>
        </div>

        <!-- script -->
        @include('admin.script')

</body>

</html>