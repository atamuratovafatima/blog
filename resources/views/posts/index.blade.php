<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="{{action('PostController@store')}}" class="form-group" method="post">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" class="form-control">

    <label for="body">Content</label>
    <input type="text" id="body" name="body" class="form-control">

    <button type="submit" class="btn btn-outline-danger">Submit</button>
</form>
</div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>