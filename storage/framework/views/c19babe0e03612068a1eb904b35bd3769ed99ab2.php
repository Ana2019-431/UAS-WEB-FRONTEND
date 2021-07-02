

<?php $__env->startSection('content'); ?>
<section class="banner-area relative about-banner" id="home" style="background: url('<?php echo e(config('sekolah.image_banner_url')); ?>');">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								NEWS		
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
                            <img class="img-fluid" src="<?php echo e($author->getPicture()); ?>" alt="">
							</div>
							<div class="jq-tab-wrapper horizontal-tab" id="horizontalTab">
	                            <h1><?php echo e($author->title); ?></h1>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
                                    
                                        <?php echo e($author->content); ?>

                                                                    
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.laysite', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\tescrud\resources\views/homes/gambar.blade.php ENDPATH**/ ?>