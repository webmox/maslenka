		</div><!--main-container-->
		<div class="footer">
			
			<div class="container">
				
				<div class="left-footer-section pull-left">
					<div class="footer-logo">
						<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
					</div>
					<ul class="social-btns">
						<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="vk"><a href="#"><i class="fa fa-vk"></i></a></li>
						<li class="inst"><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div><!--right-footer-section-->

				<div class="right-footer-section pull-right">
					<div class="phones-header pull-right">
						<p>
							<span><a href="tel:044 338 08 48">+380 044 338 08 48</a></span>
							<span><a href="tel:095 257 11 88">+380 095 257 11 88</a></span>
							<span><a href="tel:093 328 92 85">+380 093 328 92 85</a></span>
						</p>
					</div>
					<div class="address-footer pull-right">
						<p> 
							<span>Киев</span>
							<span>ул. Глубочицкая, 101</span>
							<span>ул. Полярная, 19 б.</span>
						</p>
					</div>
				</div><!--right-footer-section-->
			</div>

		</div><!--end footer-->
	</div><!--end layout-->

	<div id="order_service" class="white-popup-block zoom-anim-dialog  mfp-hide">
		<?php echo do_shortcode('[contact-form-7 id="137" title="Заказ услуги"]'); ?>
	</div>

	<div id="order" class="white-popup-block zoom-anim-dialog  mfp-hide">
		<?php echo do_shortcode('[contact-form-7 id="138" title="Записаться"]'); ?>
	</div> 





	<?php wp_footer(); ?>
</body>
</html>