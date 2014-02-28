	      	</article>

          <?php get_sidebar(); ?>
 		</main>

		<footer>
      <div class="container cloud-tag">
        <?php
          wp_tag_cloud( array( 'smallest' => '10' ,'largest' => '50', 'unit' => 'px', 'number' => '45', 'orderby' => 'count', 'order' => 'RAND') );
        ?>
      </div>
    </footer>

  </body>
</html>
