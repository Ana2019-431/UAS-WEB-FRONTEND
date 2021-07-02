

<?php $__env->startSection('content'); ?>
<div class="col-right" >
    <div class="container-fluid primary-content">
        <div class="primary-content-heading clearfix">
					<h2>AUTHOR</h2>
                    
	<!-- quick task modal -->
    	
					<!-- end quick task modal -->
				</div>
                <div class="widget">
					
					<div class="widget-content">
						<div class="table-responsive">
                        <?php if(session('sukses')): ?>
                            <div class="alert alert-warning"><i class="icon ion-alert-circled"></i> <?php echo e(session('sukses')); ?> <?php endif; ?></div>
							<div id="datatable-data-export_wrapper" class="dataTables_wrapper form-inline no-footer">
                            <div class="clearfix"></div><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-data-export_length"><label><select name="datatable-data-export_length" aria-controls="datatable-data-export" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div>
                            <div class="col-sm-6">
                            
                            <div id="datatable-column-interactive_filter" class="dataTables_filter">
                                <form  method="GET" action="/homes">
                                <label>Search:<input name="cari" type="search" class="form-control input-sm" aria-controls="datatable-column-interactive"></label>
                                </form>
                            </div>

                               

                            </div></div>
                            <button  type="button" class="btn btn-primary btn-sm" style='float: right;' data-toggle="modal" data-target="#quick-task-modal">
                                Tambah Data
                            </button>
                            
                            <table id="datatable-data-export" class="table table-sorting table-striped table-hover table-bordered datatable dataTable no-footer" role="grid" aria-describedby="datatable-data-export_info">
                            
								<thead>
									<tr role="row">
                                        <th style="width: 50px; ">No</th>
                                        <th style="width: 100px; ">Title</th>
                                        <th style="width: 130px;">Content</th>
                                        <th style="width: 80px;">published</th>
                                        <th style="width: 130px;">dibuat pada</th>
                                        <th style="width: 100px;">aksi</th>
                                        
                                    </tr>
								</thead>
								<tbody>
                                <?php $no=1 ?>
                                <?php $__currentLoopData = $data_author1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
                        <td><?php echo e($no++); ?></td>
                        <td><a href="/homes/<?php echo e($author->id); ?>/gambar"><?php echo e($author->title); ?></td>
                        <td><?php echo e($author->content); ?></td>
                        <td><?php echo e($author->published); ?></td>
                        <td><?php echo e($author->created_at); ?></td>
                        
                        
                       
                        <td>
                            <a href="/homes/<?php echo e($author->id); ?>/edit_author" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/homes/<?php echo e($author->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data tersebut?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
							</table>
                
				</div>
    </div>
    
</div>
                <div class="modal fade" id="quick-task-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Modal title</h3>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" aria-hidden="true"></button>
                            </div>
                            <div class="modal-body">
                            <form action="/homes/create" method="POST" id="form1"> 
                                <?php echo e(csrf_field()); ?>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="title" required>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                                    <textarea name="content" class="form-control" id="content" rows="3" required></textarea>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div> 

                                <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Published</label>
                                <select name="published" class="form-select" id="published" aria-label="Default select example">
                                    <option selected>Pilih opsi</option>
                                    <option value="publish">publish</option>
                                    <option value="notpublished">Not published</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Gambar</label>
                                    <input type="file" name="picture" class="form-control" id="picture" >
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div> 

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
                        </div>

                    
        
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content1'); ?>
            <?php if(session('sukses')): ?>
            <div class="alert alert-success" role="alert">
               <?php echo e(session('sukses')); ?>

            </div>
            <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tescrud\resources\views/homes/index.blade.php ENDPATH**/ ?>