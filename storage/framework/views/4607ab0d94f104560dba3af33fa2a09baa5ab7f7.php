<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Universitas Muhammadiyah Malang | dari Muhammadiyah untuk Bangsa</title>
  <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/style1.css')); ?>">
  <link rel="shortcut icon" type="image/ico" href="<?php echo e(asset('admin/assets/img/favicon.ico')); ?>">
</head>

<body bgcolor="lightblue">
<div class="header">
   <!-- TOP NAV BAR -->
   <?php echo $__env->make('layouts.includes._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
   </div>  
    <!-- SIDEBAR KIRI -->
    <?php echo $__env->make('layouts.includes._barkiri', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

   <!-- SIDEBAR KANAN -->
   <?php echo $__env->make('layouts.includes._barkanan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    

   <div class="tengah">
   <?php echo $__env->yieldContent('content'); ?>
  </div> 
        

    <!-- FOOTER -->
    <?php echo $__env->make('layouts.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
 
   </body>
   <script src="<?php echo e(asset('admin/assets/js/filejs.js')); ?>"></script>
   </html><?php /**PATH C:\xampp\htdocs\tescrud\resources\views/layouts/web.blade.php ENDPATH**/ ?>