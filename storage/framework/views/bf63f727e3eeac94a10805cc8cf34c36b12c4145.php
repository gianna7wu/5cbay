<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
</head>
<body>

<?php $__env->startSection('content'); ?>
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

                 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                 <label for=""></label>
                 <input type="submit" name="submit" value="submit">
               </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>