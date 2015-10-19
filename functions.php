<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'players',
    array(
      'labels' => array(
        'name' => __( 'Players' ),
        'singular_name' => __( 'Player' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'fixtures',
    array(
      'labels' => array(
        'name' => __( 'Fixtures' ),
        'singular_name' => __( 'Fixture' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

function remove_menus(){
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );

function getTeamBadge($teamName) {
  if (strpos($teamName, 'Jolly Topers') !== false) {
    return '/img/jolly-topers-badge.png';
  } else {
    return '/img/generic-sheild.png';
  }
}
?>
