<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
                    <?php dynamic_sidebar( 'footer-widget-1' );?>
					<!-- <div class="footer-logo">
						<a href="#">
							<img src="assets/images/logo.png" alt="University Animal Clinic" />
						</a>
					</div>
					<div class="footer-social">
						<ul>
							<li>
								<a href="#" class="icon-facebook"></a>
							</li>
							<li>
								<a href="#" class="icon-instagram"></a>
							</li>
							<li>
								<a href="#" class="icon-youtube"></a>
							</li>
							<li>
								<a href="#" class="icon-tiktoc"></a>
							</li>
						</ul>
					</div> -->
				</div>
				<div class="col-lg-3 col-md-6">
                    <?php dynamic_sidebar('footer-widget-2');?>
					<!-- <div class="footer-contact">
						<h4>CONTACT INFORMATION</h4>
						<p>
							8239 Cooper Creek Blvd <br /> Bradenton, FL34201 <br />
							<a class="learn-more" href="#">Get Directions <span class="icon-arrow-right"></span></a>
						</p>
						<p>
							Phone: <a class="color-body" href="tel:9413557707">941-355-7707</a>
						</p>
					</div> -->
				</div>
				<div class="col-lg-3 col-md-6">
                <?php dynamic_sidebar('footer-widget-3');?>
                
            </div>
            <div class="col-lg-3 col-md-6">
                    <?php dynamic_sidebar('footer-widget-4');?>
				
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="bottom-wrap">
					<div class="footer-left">
						<ul class="footer-menu">
							<li>
								<a href="#">Site Credits</a>
							</li>
							<li>
								<a href="#">Sitemap</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
						</ul>
						<div class="copyright">
							Copyright © 2020. All Rights Reserved
						</div>
					</div>
					<div class="back-top">
						<a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
        <?php wp_footer(); ?>
    </body>
</html>