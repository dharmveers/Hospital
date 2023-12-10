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
                <!-- alert message on form submit -->
                @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    <button type='button' class="close" data-dismiss="alert">X</button>
                    <p>{{session()->get('message')}}</p>
                </div>
                @endif
                <!-- alert message on form submit -->
                <form action="{{url('uploads_doctor')}}" method="POST" enctype="multipart/form-data" class="doc-form">
                    @csrf
                    <div class="header">Add Doctor</div>
                    <div class="input p-2">
                        <label for="username">Doctor Name</label>
                        <input type="text" name="username" placeholder="Enter Name Here">
                    </div>
                    <div class="input p-2">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" placeholder="Enter phone Here">
                    </div>
                    <div class="input p-2">
                        <label for="speciality">Speciality</label>
                        <select name="speciality" style="color:black">
                            <option value="" selected>select</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>
                        </select>
                    </div>
                    <div class="input p-2">
                        <label for="room">Room Number</label>
                        <input type="number" name="room" placeholder="Enter room number">
                    </div>
                    <div class="input p-2">
                        <label for="file">Image </label>
                        <input class="w-100" type="file" name="file" style="color:white;">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save</button>
                </form>
            </div>
        </div>

        <!-- script -->
        @include('admin.script')

</body>

</html>