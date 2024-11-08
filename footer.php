<footer id="Footer" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<hr class="no_line" style="margin:0 auto 120px"> </div>
					<div class="col-md-4">
						<figure class="wp-block-image size-full wp-image-21"><img loading="lazy" width="142" height="48" src="content/kurnia/images/kurnia_logo.png" class="wp-image-150" /> </figure>
						<p>Mitra terpercaya dalam menciptakan solusi konstruksi dan desain yang inovatif. Dengan pengalaman lebih dari 10 tahun.</p>
					</div>

					<div class="col-md-3">
						<h5>Product</h5>
						<p> <a href="interior.php">Interior Design</a>
							<br> <a href="construction.php">Construction</a>
							<br> <a href="furniture.php">Furniture</a>
							<br> <a href="porto.php">Porto</a> 
						</p>
					</div>
					<div class="col-12">
                       <a href="https://www.instagram.com/kurnia.project/" target="_blank">
 							<i class="fa fa-instagram"  style="font-size:30px"> </i> 
					   </a>
					   <a href="https://www.tiktok.com/@kurnia.project">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 1 16 22">
							<path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
							</svg>
					   </a>
					     <a href="https://www.facebook.com/profile.php?id=61566782942967" target="_blank">
 							<i class="fa fa-facebook"  style="font-size:30px"> </i> 
					   </a>
					   
						<hr class="no_line" style="margin:0 auto 80px"> </div>
				</div>
			</div>
			<div class="footer_copy">
				<div class="container">
					<div class="column one"> <a id="back_to_top" class="footer_button" href="#"><i class="icon-up-open-big"></i></a>
						<div class="copyright"> &copy; <b>Kurnia Project</b></div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="Side_slide" class="right light" data-width="250">
		<div class="close-wrapper"> <a href="#" class="close"><i class="icon-cancel-fine"></i></a> </div>
		<div class="extras">
			<div class="extras-wrapper"></div>
		</div>
		<div class="menu_wrapper"></div>
	</div>
	<div id="body_overlay"></div>
	<!-- JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-migrate-3.4.0.min.js"></script>
	<script src="js/mfn.menu.js"></script>
	<script src="js/jquery.plugins.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/animations/animations.js"></script>
	<script src="js/translate3d.js"></script>
	<script src="js/scripts.js"></script>
	<script src="plugins/rs-plugin-6.custom/js/revolution.tools.min.js"></script>
	<script src="plugins/rs-plugin-6.custom/js/rs6.min.js"></script>
	<script type="text/javascript">
	var revapi1, tpj;

	function revinit_revslider11() {
		jQuery(function() {
			tpj = jQuery;
			revapi1 = tpj("#rev_slider_1_1");
			if(revapi1 == undefined || revapi1.revolution == undefined) {
				revslider_showDoubleJqueryError("rev_slider_1_1");
			} else {
				revapi1.revolution({
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1240,778,778",
					gridwidth: "1400,1400,778,778",
					gridheight: "950,950,1100,1100",
					spinner: "spinner12",
					perspective: 600,
					perspectiveType: "global",
					spinnerclr: "#13d5ff",
					editorheight: "950,768,1100,720",
					responsiveLevels: "1240,1240,778,778",
					progressBar: {
						disableProgressBar: true
					},
					navigation: {
						onHoverStop: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});
			}
		});
	} // End of RevInitScript
	var once_revslider11 = false;
	if(document.readyState === "loading") {
		document.addEventListener('readystatechange', function() {
			if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
				once_revslider11 = true;
				revinit_revslider11();
			}
		});
	} else {
		once_revslider11 = true;
		revinit_revslider11();
	}
	</script>