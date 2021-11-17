<div class="d-flex justify-content-between align-items-center mb-3">
  <div>
    <p class="blog-post-meta mb-1"><?php esc_html_e( ' by ', 'cd' ); ?><?php echo get_the_author_link(); ?></p>
    <p class="blog-post-meta mb-0 lh-1"><small><?php the_time( 'F j, Y' ); ?></small></p>
  </div>
  <div class="dropdown">
    <a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" id="dropdownSharingLink"
      data-bs-toggle="dropdown" aria-expanded="false"><?php esc_html_e( 'Share', 'cd' ); ?></a>

    <ul class="dropdown-menu" aria-labelledby="dropdownSharingLink">
      <?php
      $obj_id = get_queried_object_id();
      $current_url = get_permalink( $obj_id );
      $site_url = $current_url; ?>
      <li>
        <a class="dropdown-item"
          href="http://www.facebook.com/sharer.php?u=<?php echo $site_url; ?>"><?php esc_html_e( 'Facebook', 'cd' ); ?></a>
      </li>
      <li>
        <a class="dropdown-item"
          href="https://twitter.com/share?url=<?php echo $site_url; ?>"><?php esc_html_e( 'Twitter', 'ol' ); ?></a>
      </li>
      <li>
        <a class="dropdown-item"
          href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $site_url; ?>"><?php esc_html_e( 'LinkedIn', 'ol' ); ?></a>
      </li>
      <li>
        <a class="dropdown-item" href="<?php
        if ( wp_is_mobile() ) {
          echo 'whatsapp://send?text=' . $site_url . '';
        } else {
          echo 'https://api.whatsapp.com/send?text=' . $site_url . '';
        } ?>" data-action="share/whatsapp/share"><?php esc_html_e( 'Whatsapp', 'ol' ); ?></a>
      </li>
    </ul>
  </div>


</div>