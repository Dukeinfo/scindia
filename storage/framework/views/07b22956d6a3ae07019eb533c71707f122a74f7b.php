<div data-simplebar class="h-100">
	<!--- Sidemenu -->
	<div id="sidebar-menu">
		<!-- Left Menu Start -->
		<ul class="metismenu list-unstyled" id="side-menu">
			<li class="menu-title">General</li>

			<li>
				<a href="<?php echo e(route('admin_dashboard')); ?>" class="waves-effect">
					<i class="bx bx-home-circle"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				 <a href="<?php echo e(route('home.homepage')); ?>" target="_blank" class="waves-effect"> 
		
					<i class='bx bx-globe'></i>
					<span>Website</span>
				</a>
				
			</li>


            <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Master</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						<li><a href="<?php echo e(route('view_menu')); ?>">Menu</a></li>
						<li><a href="<?php echo e(route('view_subnmenu')); ?>">Sub Menu</a>
							<li><a href="<?php echo e(route('view_class')); ?>">Class</a></li>
						<li><a href="<?php echo e(route('view_section')); ?>">Section</a></li>
					</ul>
			
			   </li>

			
			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Pages</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">

						<li><a href="<?php echo e(route('create_page')); ?>">Create Page</a></li>
						<li><a href="<?php echo e(route('page_headings')); ?>">Page Headings</a></li>
						<li><a href="<?php echo e(route('page_content')); ?>">Page Content</a></li>

						
					   
					</ul>
			
			</li>

			<li class="menu-title">Home Section</li>
			<li>

            <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Section First</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_first')); ?>">Section First</a></li>
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Principal's Desk</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_second')); ?>">Principal's Desk </a></li>
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Notice Board</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_third')); ?>">Notice Board</a></li>
				</ul>
			</li>

			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Life @ SKV</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_fourth')); ?>">Explore More</a></li>
					<li><a href="<?php echo e(route('view_fifth')); ?>">Boarding Life</a></li>
					<li><a href="<?php echo e(route('view_sixth')); ?>">Academics</a></li>
					<li><a href="<?php echo e(route('view_seventh')); ?>">Heritage</a></li>
					<li><a href="<?php echo e(route('view_eight')); ?>">Infrastructure</a></li>
					<li><a href="<?php echo e(route('view_nineth')); ?>">Leadership</a></li>
					<li><a href="<?php echo e(route('view_tenth')); ?>">Sports</a></li>
				</ul>
			</li>

		  <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Facilities</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_facilities')); ?>">Facilities Slider</a></li>
					<li><a href="<?php echo e(route('view_facilities_other')); ?>">Facilities Other</a></li>
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Testimonials</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					 <li><a href="<?php echo e(route('view_testimonials')); ?>">Add Testimonials</a></li>	
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>News Events</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						
						<li><a href="<?php echo e(route('view_boardmembers')); ?>">News Events</a></li>
						
					   
					</ul>
			
			</li>

		    <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Explore SHIVA</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_explore_shiva')); ?>">Add Detail</a></li>
					
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Why SHIVA?</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('view_whyshiva_slider')); ?>">Add Slider Detail</a></li>
					<li><a href="<?php echo e(route('view_whyshiva_detail')); ?>">Add Other Detail</a></li>
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Testimonials</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
					 <li><a href="<?php echo e(route('view_testimonials')); ?>">Add Testimonials</a></li>	
				</ul>
			</li>

			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>About School</span>
				</a>
			  <ul class="sub-menu" aria-expanded="false">
			  	     <li><a href="<?php echo e(route('school_image')); ?>"> School Image</a></li>	
					 <li><a href="<?php echo e(route('senior_school')); ?>"> Senior School</a></li>	
					 <li><a href="<?php echo e(route('junior_school')); ?>"> Junior School</a></li>	
				</ul>
			</li>

			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-file'></i>
					<span>Blog</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('add_blog_category')); ?>">Category</a></li>
					<li><a href="<?php echo e(route('add_blog')); ?>">Add Blog</a></li>
					<li><a href="<?php echo e(route('manage_blog')); ?>">Manage Blog</a></li>
				</ul>
			</li>
			
			
				<li class="menu-title">Enquiries</li>
			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Enquiries</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('enquiries')); ?>">View Enquiries</a></li>
					
				</ul>
			</li>

<li class="menu-title">Gallery</li>

         <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Gallery</span>
				</a>
				
				
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="<?php echo e(route('view_category')); ?>">Category</a></li>
						<li><a href="<?php echo e(route('manage_gallery')); ?>">Manage Gallery</a></li>
						
					</ul>
					
				
			</li>

	 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>News</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						
						<li><a href="<?php echo e(route('view_boardmembers')); ?>">News Events</a></li>
						
					   
					</ul>
			
			</li>		

		<li class="menu-title">Widget Section</li>	

		<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-file'></i>
					<span>Widget</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('add_widget')); ?>">Add Widgets</a></li>
					
				</ul>
			</li>		
			
			
			<li class="menu-title">Search Engine Optimization</li>
			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-line-chart'></i>
					<span>SEO Markups</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="<?php echo e(route('manage_metadata')); ?>">Meta Details</a></li>
					<li><a href="<?php echo e(route('manage_snippets')); ?>">Header Snippets</a></li>
					<li><a href="<?php echo e(route('manage_footer_snippets')); ?>">Footer Snippets</a></li>
				</ul>
			</li>
			

		</ul>
	</div>
	<!-- Sidebar -->
</div><?php /**PATH C:\xampp\htdocs\scindia\resources\views/livewire/backend/common/sidenav.blade.php ENDPATH**/ ?>