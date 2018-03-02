<!-- header -->
	<div class="header">
	<div class="container">
		<div class="header-info">
			<!-- <div class="logo">
				<img src="/assets/images/logo.png" alt=" " /></a>
			</div> -->

			<div class="logo-right">
				<span class="menu"><img src="/assets/images/menu.png" alt=" "/></span>
				<ul class="nav1">
					<li><a href="/">Home </a>/</li>
					<?php
					if (!isset($this->session->uid)){
					 ?>
					<li><a href="/user/login">Login </a>/</li>
					<li><a href="/user/reg">Register</a></li>
					<?php } ?>

					<?php

						if( isset( $this->session->uid ) ){
							echo  "
											<li><a href='/user/profil/". $this->session->uid ."'data-hover='Profil'>".'Profil '."</a>/</li>
											<li><a href='/signout' data-hover=' Signout' >Signout</a></li>
											<li><a href='/blog/post' data-hover=' Signout' >Post</a></li>
										";
						}
					?>
				</ul>
			</div>

			<div class="clearfix"> </div>
				<!-- script for menu -->
					<script>
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
		</div>
	</div>
	</div>
<!-- header -->
