<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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

            <div style="padding-top: 100px;">
                @if (session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}

                    </div>
                @endif
                <table align="center">
                    <tr style="background-color: black;">
                        <th style="padding:10px;">News Title</th>
                        <th style="padding:10px;">Description</th>
                        <th style="padding:10px;">Body</th>
                        <th style="padding:10px;">Name</th>
                        <th style="padding:10px;">User Id</th>
                        <th style="padding:10px;">User Status</th>
                        <th style="padding:10px;">User Type</th>
                        <th style="padding:10px;">Image</th>
                        <th style="padding:10px;">Delete</th>
                        <th style="padding:10px;">Update</th>

                    </tr>
                    @foreach ($post as $post)
                        <tr align="center" style="background-color: skyblue;">
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->body }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->user_id }}</td>
                            <td>{{ $post->post_status }}</td>

                            <td>{{ $post->usertype }}</td>
                            <td><img src="news_image/{{ $post->image }}" height="100" width="100"></td>
                            <td> <a style="margin:30px;" class="btn btn-danger" onclick="return confirm("Are you sure
                                    you want to Delete this?")" href="{{ url('delete_post', $post->id) }}"> Delete</a>
                            </td>
                            <td><a href="{{ url('update_post', $post->id) }}" class="btn btn-success">Update</a></td>
                        </tr>
                    @endforeach

            </div>

        </div>


        @include('admin.script')
    </div>
    <!-- End custom js for this page -->
</body>

</html>
