<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php

$sigle = substr(get_the_title(),0,7);
$session = substr($sigle,4,1);

$titre = substr(get_the_title(),7);
echo '<div class="entry-title'
 . ' session-' . $session
 . '  "><a href="'; 
echo esc_url( get_permalink()) . '"';
echo ' rel="bookmark"><h3>' . $sigle .'</h3><h4>' . $titre . '</h4></a></div>';
// the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
?>

