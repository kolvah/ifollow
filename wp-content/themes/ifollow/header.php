<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ifollow
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body>
<?php
$userID = get_current_user_id();

$account_link = get_user_meta($userID,'account_link', true);
$payment_type = get_user_meta($userID,'payment_type', true);
$social_account = get_user_meta($userID,'social_account', true);

print_r([$account_link, $payment_type, $social_account]);

?>


