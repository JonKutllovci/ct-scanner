<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <style type="text/css">
        .container {
            display: flex;
            justify-content: center;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            padding: 15px;
        }

        .form-group label {
            text-align: right;
            margin-right: 20px;
        }

        .form-group input,
        .form-group select {

            width: 200px;
        }

        .color {
            color: black;
        }
    </style>

    @include('admin.css');
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 50px;">
                <div class="form-container">
                    @if(session()->has('message'))

                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}

                    </div>

                    @endif
                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input type="text" name="name" class="color" placeholder="Write the Name" required>
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="number" class="color" placeholder="Write the Number" required>
                        </div>

                        <div class="form-group">
                            <label>Speciality</label>
                            <select name="speciality" class="color" required>
                                <option>--Select--</option>
                                <option value="skin">Skin</option>
                                <option value="nose">Nose</option>
                                <option value="heart">Heart</option>
                                <option value="eye">Eye</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Room Number</label>
                            <input type="text" name="room" class="color" placeholder="Write the Room Number" required>
                        </div>

                        <div class="form-group">
                            <label>Doctor Image</label>
                            <input type="file" name="file" id="" required>
                        </div>

                        <div class="">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
    </div>
    <!-- End custom js for this page -->
</body>

</html>