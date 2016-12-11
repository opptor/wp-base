</div> <!-- /.container -->

</div>
<footer class="blog-footer">
	<p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by
		<a href="https://twitter.com/mdo">@opptor</a>.</p>
	<p>
		<a href="#">Back to top</a>
	</p>
</footer>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/jquery-3.1.1.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('a[href="' + this.location.pathname + '"]').parents('li,ul').addClass('active');
	console.log(this.location.pathname);

</script>
<?php wp_footer(); ?>
</body>
</html>