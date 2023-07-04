<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css');
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
                    <h1 align="center" style="font-size: 30px;">Update Post</h1>
                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session()->get('message') }}

                        </div>
                    @endif
                    <form action="{{ url('update_news', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="color" value="{{ $post->title }}"
                                placeholder="Write the Name" required>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="color" value="{{ $post->description }}"
                                placeholder="Write Description" required>
                        </div>

                        <div class="form-group">
                            <label>Body</label>

                            <textarea name="body" class="color" placeholder="Explain your story" style=" width: 100%; height: 150px;">{{ $post->body }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Old Image</label>
                            <img height="200px" width="250px" src="/news_image/{{ $post->image }}">
                        </div>

                        <div class="form-group">
                            <label>Update Old Image</label>
                            <input type="file" name="image" id="">
                        </div>

                        <div class="">
                            <input type="submit" value="Update" class="btn btn-success">
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- plugins:js -->
        @include('admin.script')
    </div>
    <!-- End custom js for this page -->
</body>

</html>
