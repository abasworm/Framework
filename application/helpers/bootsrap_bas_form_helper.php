<?php

/*
 * Required form_bas_helper, bootstrap_bas_helper
 */

if (!function_exists('bs_form_open')) {
    /*
     * use for create tag form
     * @access	public
     * @param	int
     * @param	string
     * @param   mixed
     * @return	string
     */

    function _form_open($modify = '') {
        return '<form ' . conv_array($modify) . '>';
    }

}

if (!function_exists('bs_form_open')) {
    /*
     * use for create tag form
     * @access	public
     * @param	string url
     * @param	get|post
     * @param   horizontal|inline
     * @return	string
     */

    function bs_fopen($action = NULL, $method = NULL, $type = NULL, $modify='') {
        $s = array(
            'action'=>(!is_null($action))?$action:NULL,
            'method'=>(!is_null($method))?$method:NULL
            
        );
    }

}