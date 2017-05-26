<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('template_url')) {

    function template_url($template_file) {
        return base_url() . 'assets/plugins/template/' . $template_file;
    }

}

if (!function_exists('custom_js_url')) {

    function custom_js_url($js_file) {
        return base_url() . 'assets/custom_js/' . $js_file;
    }

}

