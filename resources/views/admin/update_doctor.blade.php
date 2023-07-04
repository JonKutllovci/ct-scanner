<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <base href="/public">

    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css');
</head>

<body>
    <div class="container-scroller">


        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.nav')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding:100px;">
                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}

                </div>

                @endif

                <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div style="padding: 15px;"><label>Doctor Name</label>
                        <input type="text" name="name" value="{{$data->name}}" style="color:black;">
                    </div>
                    <div style="padding: 15px;"><label>Phone</label>
                        <input type="number" name="phone" value="{{$data->phone}}" style="color:black;">
                    </div>
                    <div style="padding: 15px;"><label>Speciality</label>
                        <input type="text" name="speciality" value="{{$data->speciality}}" style="color:black;">
                    </div>
                    <div style="padding: 15px;"><label>Room</label>
                        <input type="text" name="room" value="{{$data->room}}" style="color:black;">
                    </div>
                    <div style="padding: 15px;"><label>Old Image</label>
                        <img src="doctor_image/{{$data->image}}" height="150" width="150">
                    </div>
                    <div style="padding: 15px;">
                        <label>Change Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 15px;">

                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>


        </div>


        @include('admin.script')
    </div>
    <!-- End custom js for this page -->
</body>

</html>