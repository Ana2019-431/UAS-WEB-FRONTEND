

<?php $__env->startSection('content'); ?>

    <div class="container-fluid primary-content">
        <div class="primary-content-heading clearfix">
            <h2>EDIT DATA</h2>
        </div>
                            <?php if(session('sukses')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('sukses')); ?>

                                </div>
                            <?php endif; ?>
                         
            <div class="row">
            <div class="col-md-8">
            <div class="widget">
            <div class="widget-header clearfix">
								<h3><i class="icon ion-ios-compose-outline"></i> <span>Masukkan Data Baru</span></h3>
							</div>
                            <div class="widget-content">
                            <form action="/homes/<?php echo e($author->id); ?>/update_author" method="POST" id="form1"> 
                             <?php echo e(csrf_field()); ?>

                                <div class="form-horizontal" >
									
                                    <div class="form-group">
										<label class="col-md-2 control-label">Title</label>
										<div class="col-md-10">
                                        <input name="title" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="<?php echo e($author->title); ?>"required>
										</div>
									</div>
   
                                    <div class="form-group">
										<label class="col-md-2 control-label">Publish</label>
										<div class="col-md-10">
											<select class="form-control" name="published" class="form-select" id="published" aria-label="Default select example">
                                                <option selected disabled>Pilih Opsi</option>
                                                <option value="publish" <?php if($author->published == 'publish'): ?> selected <?php endif; ?>>publish</option>
                                                <option value="notpublished" <?php if($author->published == 'notpublished'): ?> selected <?php endif; ?>>notpublished</option>
											</select>
										</div>
                                    </div>  

									<div class="form-group">
										<label class="col-md-2 control-label">Content</label>
										<div class="col-md-10">
											<textarea class="form-control" name="content" class="form-control" id="content" rows="3" required><?php echo e($author->content); ?></textarea>
										</div>
									</div>

                                    <button type="submit" class="btn btn-warning btn-sm">Update</button>	
								</div>
                                </form>
							</div>
						</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content1'); ?>
            <h1>Edit data warga</h1>
            <?php if(session('sukses')): ?>
            <div class="alert alert-success" role="alert">
               <?php echo e(session('sukses')); ?>

            </div>
            <?php endif; ?>
            <div class="row">
           
            
            
            <form action="/homes/<?php echo e($author->id); ?>/update" method="POST"> 
                    <?php echo e(csrf_field()); ?>

                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" value="<?php echo e($author->title); ?>"required>
                </div>
                
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">publish</label>
                            <select name="published" class="form-select" id="published" aria-label="Default select example" >
                                <option selected>Pilih Opsi</option>
                                <option value="publish" <?php if($author->published == 'publish'): ?> selected <?php endif; ?>>publish</option>
                                <option value="notpublished" <?php if($author->published == 'notpublished'): ?> selected <?php endif; ?>>notpublished</option>
                            </select>
                    </div>
                    
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="3" required><?php echo e($author->content); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\tescrud\resources\views/homes/edit_author.blade.php ENDPATH**/ ?>