<nav class="top-bar navbar-fixed-top" role="navigation">
			<div class="logo-area">
				<a href="/"> <img class="img-fluid" sizes="10x10" src="<?php echo e(asset('admin/assets/img/umm.png')); ?>" alt=""></a>
				
			</div>
			<form class="form-inline searchbox hidden-xs" role="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="icon ion-ios-search"></i></span>
						<input type="search" class="form-control" placeholder="search the site ...">
					</div>
				</div>
			</form>
			<div class="top-bar-right pull-right">
				<div class="action-group hidden-xs hidden-sm">
					<ul>
						<!-- skins -->
						
						<!-- end skins -->
						<!-- notification: inbox -->
						
						<!-- end notification: inbox -->
						<!-- notification: general -->
						<li class="action-item skins">
							<form id="style-switcher">
								<div class="btn-group open">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="icon ion-ios-gear-outline"></i>
									</a>
									<div class="arrow"></div>
									<ul class="dropdown-menu" role="menu">
										<li>
											<p><strong>Dark Side Nav</strong></p>
											<button type="button" class="btn-skin nav-dark full-dark" data-skin="<?php echo e(asset('admin/assets/css/skins/full-dark.css')); ?>"></button>
											<button type="button" class="btn-skin nav-dark green" data-skin="<?php echo e(asset('admin/assets/css/skins/green.css')); ?>"></button>
											<button type="button" class="btn-skin nav-dark blue" data-skin="<?php echo e(asset('admin/assets/css/skins/blue.css')); ?>"></button>
											<button type="button" class="btn-skin nav-dark darkorange" data-skin="<?php echo e(asset('admin/assets/css/skins/darkorange.css')); ?>"></button>
											<button type="button" class="btn-skin nav-dark seagreen" data-skin="<?php echo e(asset('admin/assets/css/skins/seagreen.css')); ?>"></button>
										</li>
										<li>
											<p><strong>Light Side Nav</strong></p>
											<button type="button" class="btn-skin nav-light full-white" data-skin="<?php echo e(asset('admin/assets/css/skins/full-white.css')); ?>"></button>
											<button type="button" class="btn-skin nav-light green green-light-nav" data-skin="<?php echo e(asset('admin/assets/css/skins/green-light-nav.css')); ?>"></button>
											<button type="button" class="btn-skin nav-light blue blue-light-nav" data-skin="<?php echo e(asset('admin/assets/css/skins/blue-light-nav.css')); ?>"></button>
											<button type="button" class="btn-skin nav-light darkorange darkorange-light-nav" data-skin="<?php echo e(asset('admin/assets/css/skins/darkorange-light-nav.css')); ?>"></button>
											<button type="button" class="btn-skin nav-light seagreen seagreen-light-nav" data-skin="<?php echo e(asset('admin/assets/css/skins/seagreen-light-nav.css')); ?>"></button>
										</li>
										<li>
											<label class="fancy-checkbox">
												<input type="checkbox" id="fixed-top-nav" checked="checked"><span>Fixed Top Navigation</span></label>
										</li>
										<li data-toggle="popover" data-placement="top" data-container="body" data-content="If checked, try expanding <strong>Pages</strong> menu item on left sidebar. Disabled on minified sidebar." data-trigger="hover">
											<label class="fancy-checkbox">
												<input type="checkbox" id="fixed-left-nav"><span>Fixed Left Navigation</span></label>
										</li>
										<li class="menu-item-footer"><a href="#" title="Reset Style" class="reset-style">Reset Style</a></li>
									</ul>
								</div>
							</form>
						</li>
						<!-- end notification: general -->
					</ul>
				</div>
				<div class="logged-user">
					<div class="btn-group">
						<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo e(asset('admin/assets/img/pngegg - Copy.png')); ?>" alt="Sebastian" /><span class="name"><?php echo e(auth()->user()->name); ?></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">
									<i class="icon ion-ios-person"></i>
									<span class="text">Profile</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon ion-ios-gear"></i>
									<span class="text">Settings</span>
								</a>
							</li>
							<li>
								<a href="/logout">
									<i class="icon ion-power"></i>
									<span class="text">Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="action-group visible-lg-inline-block">
					
				</div>
			</div>
		</nav><?php /**PATH C:\xampp\htdocs\UAS\resources\views/layouts/includes/_navbar.blade.php ENDPATH**/ ?>