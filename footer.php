	      	</div>

	      	<aside id="sidebar">
	        	<?php get_sidebar(); ?>
	      	</aside>
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