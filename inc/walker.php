<?php
/* collection of walker classes */


class Walker_Nav_Primary extends Walker_Nav_Menu{

	//ul
	function start_lvl( &$output, $depth ){
		$indent = str_repeat("\t" , $depth);
		$submenu = ($depth > 0 ) ? 'sub-menu' : '' ;
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";

	}
	//li a span
//	function start_el(){}

//	function end_el() {
//	}//cosing li a span
//
//	function end_lvl() {
//	}//closing ul

}