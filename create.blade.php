@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="Utf-8">
    <title>Create</title>
</head>
<body>

<form action="store" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" value=""> 
    <br>

    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" value="">
    <br>

    <!-- <label for="file">Picture</label>
    <input type="file" name="file" value="">
    <br> -->

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>