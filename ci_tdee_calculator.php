<?php
/*
Plugin Name: CI Tdee calculator
Plugin URI: https://www.calculator.io/tdee-calculator/
Description: The TDEE calculator provides an accurate estimate of your daily caloric expenditure using your BMR and several other personal characteristics. 
Version: 1.0.0
Author: TDEE Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_tdee_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for TDEE Calculator by www.calculator.io";

function display_calcio_ci_tdee_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">TDEE Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_tdee_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_tdee_calculator', 'display_calcio_ci_tdee_calculator' );