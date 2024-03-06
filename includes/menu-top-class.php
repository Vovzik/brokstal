<?php

// свой класс построения меню:
class brockStal_Header_menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = NULL ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0



        $classes = array(
            ( $display_depth === 1 ? 'submenu__list' : '' ),
            ( $display_depth === 2 ? 'submenu level-more' : '' ),
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            'menu-depth-' . $display_depth
        );



        $classesNav = array(
            ( $display_depth === 1 ? 'submenu' : '' ),
        );




        $class_names = implode( ' ', $classes);
        $class_namesNav = implode( '', $classesNav );

        $htmlNav = array(
            ( $display_depth === 1 ? '<nav class="'.$class_namesNav.'">' : '' ),
        );

        $htmlNavStroka = implode( '', $htmlNav );



        // build html
        $output .=  $htmlNavStroka  .  '<ul class="' . $class_names . '">';
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        global $wp_query;

        // Restores the more descriptive, specific name for use within this method.
        $item = $data_object;

        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth === 0 ? 'menu__item' : '' ),
            ( $depth === 1 ? 'submenu__item' : '' ),
            ( $depth === 2 ? 'submenu__item' : '' ),
            ( $depth === 3 ? 'header__level-three-item' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $attributes .= ' class="' .
            ( $depth === 0 ? 'menu__link' : '')
            .
            ( $depth === 1 ? 'submenu__link' : '')
            .
            ( $depth === 2 ? 'submenu__link' : '')
            .
            ($depth === 3 ? 'header__level-three-item-link' : '') . '"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

}

class brockStal_Header_menu_left extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = NULL ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0



        $classes = array(
            ( $display_depth === 1 ? 'submenu-left open' : '' ),
            ( $display_depth === 2 ? 'submenu-left level-more' : '' ),
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            'menu-depth-' . $display_depth
        );



        $class_names = implode( ' ', $classes);


        // build html
        $output .= '<ul class="' . $class_names . '">';
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        global $wp_query;

        // Restores the more descriptive, specific name for use within this method.
        $item = $data_object;

        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth === 0 ? 'menu-left__item' : '' ),
            ( $depth === 1 ? 'submenu-left__item' : '' ),
            ( $depth === 2 ? 'submenu-left__item' : '' ),
            ( $depth === 3 ? 'header__level-three-item' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $attributes .= ' class="' .
            ( $depth === 0 ? 'menu-left__link' : '')
            .
            ( $depth === 1 ? 'submenu-left__link' : '')
            .
            ( $depth === 2 ? 'submenu-left__link' : '')
            .
            ($depth === 3 ? 'header__level-three-item-link' : '') . '"';

        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

}



