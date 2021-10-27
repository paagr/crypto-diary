<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <!-- <a class="link-secondary" href="#">Subscribe</a> -->
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#"><?php bloginfo( 'name' ); ?></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a id="js-modalSearchBtn" class="link-secondary" href="javascript:void(0);" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
            <title><?php esc_html_e( 'Search', 'cd' ); ?></title>
            <circle cx="10.5" cy="10.5" r="7.5" />
            <path d="M21 21l-5.2-5.2" />
          </svg>
        </a>
        <!-- <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a> -->
      </div>
    </div>
  </header>

  <?php
  $categories = get_categories( array(
    'parent'  => 0
  ) );
  if (!empty($categories)) { ?>
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php
      foreach ( $categories as $category ) {
        printf( '<a class="p-2 link-secondary" href="%1$s">%2$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_html( $category->name )
        );
      } ?>
    </nav>
  </div>
  <?php } ?>
</div>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModalLabel"><?php esc_html_e( 'Search', 'cd' ); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>