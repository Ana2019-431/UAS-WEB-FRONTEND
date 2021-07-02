

<?php $__env->startSection('content'); ?>
<div class="col-right" >
    <div class="container-fluid primary-content">
        <div class="primary-content-heading clearfix">
					<h2>DATA WARGA RT 02</h2>
                    
	<!-- quick task modal -->
    	
					<!-- end quick task modal -->
				</div>
                <div class="widget">
					
					<div class="widget-content">
						<div class="table-responsive">
							<div class="alert alert-warning"><i class="icon ion-alert-circled"></i> Requires Flash plugin</div>
							<div id="datatable-data-export_wrapper" class="dataTables_wrapper form-inline no-footer">
                            <div class="clearfix"></div><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-data-export_length"><label><select name="datatable-data-export_length" aria-controls="datatable-data-export" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div>
                            <div class="col-sm-6">
                                <div id="datatable-data-export_filter" class="dataTables_filter">
                                   <form class="d-flex" method="GET" action="/warga/rt02">
                                    <input name="cari" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="ionicon-fill-none" type="submit"></button>
                                </form>
                                </div>
                            </div></div>
                            <button  class="btn btn-primary btn-sm" style='float: right;' data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tambah Data Warga
                            </button> 
                            
                            <table id="datatable-data-export" class="table table-sorting table-striped table-hover table-bordered datatable dataTable no-footer" role="grid" aria-describedby="datatable-data-export_info">
                            
								<thead>
									<tr role="row">
                                        <th style="width: 100px; ">NIK</th>
                                        <th style="width: 130px;">Nama</th>
                                        <th style="width: 100px;">TTL</th>
                                        <th style="width: 55px;">Jenis Kelamin</th>
                                        <th style="width: 150px;">Alamat</th>
                                        <th style="width: 70px;">Agama</th>
                                        <th style="width: 40px;">RW</th>
                                        <th style="width: 40px;">RT</th>
                                        <th style="width: 80px;">Aksi</th>
                                    </tr>
								</thead>
								<tbody>
                                <?php $__currentLoopData = $data_warga1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
                        <td><?php echo e($warga->NIK); ?></td>
                        <td><?php echo e($warga->Nama); ?></td>
                        <td><?php echo e($warga->Tempat_lahir); ?>, <?php echo e($date = date('d-m-Y',strtotime($warga->TTL))); ?></td>
                        <td><?php echo e($warga->Jenis_Kelamin); ?></td>
                        <td><?php echo e($warga->Alamat); ?></td>
                        <td><?php echo e($warga->Agama); ?></td>
                        <td><?php echo e($warga->RW); ?></td>
                        <td><?php echo e($warga->RT); ?></td>
                        <td>
                            <a href="/warga/<?php echo e($warga->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/warga/<?php echo e($warga->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data tersebut?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
							</table>
                
				</div>
    </div>
    
</div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">Modal title</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="/warga/create" method="POST"> 
                                <?php echo e(csrf_field()); ?>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                                    <input name="NIK" type="number" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="NIK" required>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama"required>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm">
                                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                                        <input name="Tempat_lahir" type="text" class="form-control " id="tempat" aria-describedby="emailHelp" placeholder="Tempat Lahir" required>
                                        <div class="invalid-feedback">Example invalid select feedback</div>
                                    </div>
                                    <div class="col-sm">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                        <input name="TTL" type="date" class="form-control float-right" id="tanggal" aria-describedby="emailHelp" required> 
                                        <div class="invalid-feedback">Example invalid select feedback</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <select name="Agama" class="form-select" id="agama" aria-label="Default select example">
                                    <option selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea name="Alamat" class="form-control" id="alamat" rows="3" required></textarea>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                        



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tescrud\resources\views/warga/rt02.blade.php ENDPATH**/ ?>