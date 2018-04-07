<?php 
/* collection of walker file*/

  class Walker_Nav_Primary extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth ) {// open ul
        $indent = str_repeat("\t", $depth);
        $submenu = ( $depth > 0 ) ? ' sub-menu': '';
        $output .= "\n$indent<ul class=\"b-none dropdown-menu animated fadeInUp$submenu depth_$depth\">\n";
    } 
 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0){ // open li a span
      $indent = ( $depth ) ? str_repeat("\t", $depth) : '';
      $li_attributes = '';
      $classes_names = $value = '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;

      $classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
      $classes[] = ( $item->current || $item->current_item_anchestor ) ? 'active' : '';
      $classes[] = 'menu-item-' . $item->ID;
      if( $depth && $args->walker->has_children ){
          $classes[] = 'dropdown-submenu';
      }
      $classes_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ));
      $classes_names = ' class="' . esc_attr( $classes_names ) . '"';

      $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
      $id = strlen( $id ) ? ' id="'. esc_attr( $id ) . '"' : '';

      $output .= $indent . '<li' . $id . $value . $classes_names . $li_attributes . '>';

      $attributes = ! empty( $item->attr_title  ) ? 'title="'. esc_attr( $item->attr_title ) . '"' : '';
      $attributes .= ! empty( $item->attr_target  ) ? 'target="'. esc_attr( $item->attr_target ) . '"' : '';
      $attributes .= ! empty( $item->attr_xfn  ) ? 'rel="'. esc_attr( $item->attr_xfn ) . '"' : '';
      $attributes .= ! empty( $item->attr_url  ) ? 'href="'. esc_attr( $item->attr_url ) . '"' : '';

      $attributes .= ( $args->walker->has_children ) ? 'class="dropdown-toggle" data-toggle="dropdown"' : '';
     
      $item_output = $args->before;
      $item_output .= '<a ' . $attributes . '>';
      $item_output .= $args->link_before . apply_filters( 'the-title', $item->title, $item->ID ) . $args->link_after;
      $item_output .= ($depth == 0 && $args->walker->has_children) ? '<b class="caret"></b></a>' : '</a>';
      $item_output .= $args->after;

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

}