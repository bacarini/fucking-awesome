	      	</div>

	      	<aside id="sidebar">
	        	<?php get_sidebar(); ?>
	      	</aside>
 		</div>

  		<div id="links" class="container">
  			<a href="#" id="old_posts">Posts + velhos</a>
  			<a href="#" id="new_posts">Posts + novos</a>
  		</div>

  		<footer id="footer">
        <div class="container">
    		  <?php wp_footer(); ?>
    		  <?php
    			echo do_shortcode( '[contact-form-7 id="40" title="contact-footer"]' ); 
    		   ?>
          </div>
  		</footer>

  </body>
</html>