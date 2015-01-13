<?php
/*
 * Required form_bas_helper
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * digunakan untuk membuat conversi array to attribut
 */
if (!function_exists('conv_array')) {

    function conv_array($array = '') {
        $c = '';
        if (!is_null($array) || $array != false || $array != '') {
            if (is_array($array)) {
                foreach ($array as $s => $x) {
                    $c .= ' ' . $s . '="' . $x . '"';
                }
            } else {
                $c = $array;
            }
        }
        return $c;
    }

}

/*
 * Use .container for a responsive fixed width container.
 */

if (!function_exists('bs_container')) {

    function bs_container($modify = '') {
        return '<div class="container"' . conv_array($modify) . '>';
    }

}

/*
 * Use .container-fluid for a full width container, spanning the entire width of your viewport.
 */

if (!function_exists('bs_container_fluid')) {

    function bs_container_fluid($modify = '') {
        return '<div class="container-fluid"' . conv_array($modify) . '>';
    }

}

/*
 * use for create empty div
 */
if (!function_exists('bs_div')) {

    function bs_div($modify) {
        return '<div' . conv_array($modify) . '>';
    }

}

/*
 * use for create row
 */
if (!function_exists('bs_row')) {

    function bs_row($modify) {
        return '<div class="row"' . conv_array($modify) . '>';
    }

}

/*
 * use for call class col
 */
if (!function_exists('bs_col')) {

    function bs_col($size, $value, $class = FALSE) {
        $value = ($value > 12 || $value < 1) ? '1' : '2';
        $cl = ($class == FALSE) ? 'col-' . $size . '-' . $value : ' class="' . 'col-' . $size . '-' . $value . '"';
        return $cl;
    }

}

if (!function_exists('bs_headings')) {
    /*
     * use for create headings
     * @access	public
     * @param	int
     * @param	string
     * @param       mixed
     * @return	string
     */

    function bs_headings($size, $content, $modify = '') {
        return '<h' . $size . conv_array($modify) . '>' . $content . '</h' . $size . '>';
    }

}
