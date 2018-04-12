
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <form action="store" enctype="multipart/form-data" method="post">
                 <label for="pname">Name</label>
                 <input type="text" name="pname" value="">
                 <br>

                 <label for="price">Price</label>
                 <input type="number" name="price" value="">
                 <br>

                 <label for="file">File</label>
                 <input type="file" name="image" value="">
                 <br>

                 <input type="hidden" name="_token" value="{{csrf_token()}}">

                 <label for=""></label>
                 <input type="submit" name="submit" value="submit">
               </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
