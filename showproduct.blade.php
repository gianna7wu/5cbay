@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php 
                    foreach ($products as $product) {
                        echo $product->name;
                        echo "\n"; 
                        echo $product->price; 
                        echo "<br>"; 
                    }
                ?>
            </div>
        </div>
    </div>
</div>
@endsection
