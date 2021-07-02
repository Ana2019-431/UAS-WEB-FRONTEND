<div id="col-left" class="col-left">
			<div class="main-nav-wrapper">
				<nav id="main-nav" class="main-nav">
					<h3>MAIN</h3>
					<ul class="main-menu">
						<li>
							<a href="/homes" class="submenu-toggle"><i class="icon ion-home"></i><span class="text">Authors</span></a>
						</li>
						
						<?php if(auth()->user()->role == 'kasun'): ?>
						<li class="has-submenu">
							<a href="/warga" class="submenu-toggle"><i class="icon ion-ios-paper-outline"></i><span class="text">News</span></a>
							<ul class="list-unstyled sub-menu collapse">
								
										<li><a href="/warga"><span class="text">Sport</span></a></li>
										<li><a href="/warga/rt06"><span class="text">Politic</span></a></li>
										<li><a href="/warga/rt03"><span class="text">Religi</span></a></li>
									
							</ul>
						</li>
						<?php elseif(auth()->user()->role == 'RT_06'): ?>
						<li><a href="/warga/rt06"><i class="icon ion-ios-paper-outline"></i><span class="text">RT 06</span></a>
						</li>
						<?php endif; ?>
					</ul>
					
				</nav>
			</div>
		</div><?php /**PATH C:\xampps\htdocs\tescrud\resources\views/layouts/includes/_sidebar.blade.php ENDPATH**/ ?>