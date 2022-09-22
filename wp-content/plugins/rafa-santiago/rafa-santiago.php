<?php
/**
 * Main file.
 *
 * @package OtterBlocks
 *
 * Plugin Name:       Rafa Santiago plugin complemento tema Rafa Santiago
 * Plugin URI:        https://rafasantiago.mx
 * Description:       Complemento al tema Rafa Santiago
 * Version:           1.0.0
 * Author:            Rafael Santiago Cruz
 * Author URI:        https://rafaelsantiagocruz.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rafa-santiago
 * WordPress Available:  yes
 * Requires License:    no
 */
add_filter( 'the_title', 'rafasantiago_cambiar_titulo', 10, 2 );

function rafasantiago_cambiar_titulo( $title, $id ) {
  $title = ' Rafa Santiago ' . $title;
  return $title;
}
function my_custom_menu() {
  add_menu_page ( 'Rafa Santiago', 'Rafa Santiago', 'read', 'colores.php', '', '', 5);
  add_submenu_page( 'colores.php', 'Rojo', 'Rojo', 'read', 'rojo.php', '');
  add_submenu_page( 'colores.php', 'Azul', 'Azul', 'upload_files', 'azul.php', '');
  add_submenu_page( 'colores.php', 'Amarillo', 'Amarillo', 'read', 'amarillo.php', '');
  remove_submenu_page( 'colores.php','colores.php' );
  }
  add_action( 'admin_menu', 'my_custom_menu');