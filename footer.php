	      	</div>

	      	<aside id="sidebar">
	        	<?php get_sidebar(); ?>
	      	</aside>
 		</div>

    <?php if (will_paginate()): ?>     
      <div id="links" class="container">
          <div class="alignleft" id="old_posts"><?php next_posts_link('Posts + velhos','') ?></div>
          <div class="alignright" id="new_posts"><?php previous_posts_link('Posts + novos') ?></div>
      </div>
    <?php endif; ?>

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