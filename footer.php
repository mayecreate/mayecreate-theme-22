</div><!-- #page -->
</div><!-- homeContentWrap / contentwrap -->
</main>
<?php global $containerWidth; ?>
<footer id="colophon" class="site-footer">
	
<a id="footer"></a>	
	<?php get_template_part('partials/content','footerWidgets'); ?>
	<?php get_template_part('partials/content','footerMenuCredit'); ?>

</footer><!-- #colophon -->

<div id="credits">
	<div class="<?php echo $containerWidth; ?>" >
		<div class="row">
			<div class="col-12">
				<p>&copy; <a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('name');?></a> <?php echo date('Y');?> <span>|</span> <a href="https://mayecreate.com/website-design/" target="_blank">Web Design by MayeCreate Design</a></p>
			</div>
		</div>
	</div>
</div>

</div><!-- // pagewrapper -->

<?php get_template_part('partials/content','mobileMenu'); ?>
<?php wp_footer(); ?>

<?php mayecreate_DBD(); ?>
</body>
</html>