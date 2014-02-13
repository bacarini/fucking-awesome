	      	</div>

	      	<div id="sidebar">
	        	<?php get_sidebar(); ?>
	      	</div>
 		</div>

  		<div id="links">
  			<a href="#" id="old_posts">Posts + velhos</a>
  			<a href="#" id="new_posts">Posts + novos</a>
  		</div>

  		<div id="footer">
  		  <?php wp_footer(); ?>
  		  <?php
  			echo do_shortcode( '[contact-form-7 id="40" title="contact-footer"]' ); 
  		   ?>
  		</div>
  	</div>
  </body>
</html>