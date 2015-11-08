<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $data["name"]; ?></title>
		<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
		<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />
		<meta name="author" content="BurnBabyBurn71" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="templates/burnbabyburn71/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="templates/burnbabyburn71/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="templates/burnbabyburn71/css/icons.css" />
		<link rel="stylesheet" type="text/css" href="templates/burnbabyburn71/css/component.css" />
        <link rel="stylesheet" type="text/css" href="templates/burnbabyburn71/css/cs-select.css" />
		<script src="//cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="templates/burnbabyburn71/libs/mmc.js"></script>
		<script src="templates/burnbabyburn71/js/modernizr.custom.js"></script>
	</head>
	<body>

		<div style="height:100%;" id="st-container" class="st-container">
			<nav class="st-menu st-effect-11" id="menu-11">
				<h2 class="icon icon-lab">Sidebar</h2>
				<ul>
					<li><a class="icon icon-data" href="#">Data Management</a></li>
					<li><a class="icon icon-location" href="#">Location</a></li>
					<li><a class="icon icon-study" href="#">Study</a></li>
					<li><a class="icon icon-photo" href="#">Collections</a></li>
					<li><a class="icon icon-wallet" href="#">Credits</a></li>
					
					
					
					<!-- AD2 -->
					<img src="templates/burnbabyburn71/img/AD7.png" style="padding:8%;">
					
					
					
				</ul>
			</nav>
			

			<!-- content push wrapper -->
			<div class="st-pusher">
			
				
				
            <div class="fs-form-wrap" id="fs-form-wrap">
            <header style=" z-index: 0;margin-top: 0px;position: absolute;right:0;left:0;" class="codrops-header">
			    <!-- OLD HEADER <h1> <?php echo $data["name"]; ?> <span> <?php echo $data["short"]; ?> </span></h1> -->
				
				<!-- Placeholder Logo -->
				<img src="templates/burnbabyburn71/img/LOGO.png" style="margin-top:-2%;" height="150px" width="150px">
				
				
                </header>

                <!-- Burger Button  -->
                <div style="z-index: 999999;position: absolute" id="st-trigger-effects">
                <button style="padding: 0em 0em;margin:40px;" data-effect="st-effect-11"><div id="nav-toggle"><a style="float:left;" id="nav-toggle" href="#"><span></span></a></div></button>
                </div>
				
			
				<div class="st-content"><!-- this is the wrapper for the content -->
				
                    <div style="padding-top:180px;" class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->

						<div class="main clearfix">
                        <div class="container">
                        <form id="myform" class="fs-form fs-form-full" autocomplete="off">
					    <ol class="fs-fields">
						<li style="text-align:center;">
							<label style="padding-top:0%;" class="fs-field-label fs-anim-upper" for="q1">What's your Bitcoin address?</label>
							
							<input type="text" name="address" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                            <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                            <input class="fs-anim-lower" id="q1" type="text" name="<?php echo $data["address_input_name"]; ?>" class="main-input <?php if($data['custom_input_style']==1) echo 'normal'; ?>" placeholder="1CgKaPZusxuDKEENoJAEjbwkeCsNocg1md" value="<?php echo $data["address"]; ?>" autocomplete="off" required>
						
						<img class="fs-anim-lower bbb71-ad1" id="ad0" src="templates/burnbabyburn71/img/AD6.png">
						
						</li>
						
						
						<li style="text-align:center;">
						
							<label class="fs-field-label fs-anim-upper" for="q2">Are you a Robot?</label>		
							
							
							
							
							<!-- AD1 for center width: 304px; margin: 0 auto; display block; -->
							<img class="fs-anim-lower bbb71-ad2" id="ad" src="templates/burnbabyburn71/img/AD3.png">
							<img class="fs-anim-lower bbb71-ad3" id="ad2" src="templates/burnbabyburn71/img/AD3.png">
							 
							 <!-- captcha -->
							<div class="fs-anim-lower fs-field-label" id="recaptchaContainer" style="width: 304px; margin: 0 auto; display block;z-index:999999999999; transform:scale(1);transform-origin:0 0%">
								<?php echo $data["captcha"]; ?>
										<?php
										if (count($data['captcha_info']['available']) > 1) {
											foreach ($data['captcha_info']['available'] as $c) {
												if ($c == $data['captcha_info']['selected']) {
													echo '<b>' .$c. '</b> ';
												} else {
													echo '<a href="?cc='.$c.'">'.$c.'</a> ';
												}
											}
										}
										?>
							</div>	
							<div class="st-pusher">
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Submit!</button>
				</form><!-- /fs-form -->
				


						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<script src="templates/burnbabyburn71/js/classie.js"></script>
		<script src="templates/burnbabyburn71/js/sidebarEffects.js"></script>
		<script src="templates/burnbabyburn71/js/selectFx.js"></script>
		<script src="templates/burnbabyburn71/js/fullscreenForm.js"></script>
                <script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>
