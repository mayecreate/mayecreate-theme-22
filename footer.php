</div><!-- #page -->
</div><!-- homeContentWrap / contentwrap -->
</main>
<?php global $containerWidth; ?>
<footer id="colophon" class="site-footer">
	
<a id="footer"></a>	
	<?php get_template_part('partials/content','footerWidgets'); ?>
	<?php get_template_part('partials/content','footerMenuCredit'); ?>
	<?php $credits_text_alignment = get_field('credits_text_alignment', 'option'); ?>
	<?php if ($credits_text_alignment == "Center") { 
		$credits_text_alignment = "center";
	} elseif ($credits_text_alignment == "Right") { 
		$credits_text_alignment = "right";
	} else {
		$credits_text_alignment = "";
	} ?>
	<div id="credits">
		<div class="<?php echo $containerWidth; ?>" >
			<div class="row">
				<div class="col-12">
					<p class="<?php echo $credits_text_alignment; ?>">&copy; <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name');?></a> <?php echo date('Y');?> <span>|</span> <a href="https://mayecreate.com/website-design/" target="_blank">Web Design by MayeCreate Design</a></p>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->


</div><!-- // pagewrapper -->

<?php get_template_part('partials/content','mobileMenu'); ?>
<?php wp_footer(); ?>
<?php mc_optional_nav_overlap(); ?>
<?php mayecreate_DBD(); ?>
</body>
</html>