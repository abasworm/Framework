<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class template {

    public $ci;
    protected $asset_css = array();
    protected $asset_js = array();
    protected $__css ='';
    protected $__js ='';
    

    public function __construct() {
        $this->ci = & get_instance();
        $this->ci->load->helpers(array('url','form'));
    }

    public function load_view($tpl_view, $body_view = null, $data = null) {
        if (!is_null($body_view)) {
            if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $body_view)) {
                $body_view_path = $tpl_view . '/' . $body_view;
            } else if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $body_view . '.php')) {
                $body_view_path = $tpl_view . '/' . $body_view . '.php';
            } else if (file_exists(APPPATH . 'views/' . $body_view)) {
                $body_view_path = $body_view;
            } else if (file_exists(APPPATH . 'views/' . $body_view . '.php')) {
                $body_view_path = $body_view . '.php';
            } else {
                show_error('Unable to load the requested file: ' . $tpl_view . '/' . $body_view . '.php');
            }

            $body = $this->ci->load->view($body_view_path, $data, TRUE);

            if (is_null($data)) {
                $data = array('body' => $body);
            } else if (is_array($data)) {
                $data['body'] = $body;
            } else if (is_object($data)) {
                $data->body = $body;
            }
        }
        $data['__javascript'] = $this->get_js();
        $data['__css'] = $this->get_css();
        $this->ci->load->view('template/' . $tpl_view, $data);
    }

    public function load_css($filename,$filepath=NULL) {
        $filepath = is_null($filepath) ? $filepath = '': $filepath = $filepath.'/';
        $this->asset_css[] = $filepath.$filename;
    }

    public function load_js($filename,$filepath=NULL) {
        $filepath = is_null($filepath) ? $filepath = '': $filepath = $filepath.'/';
        $this->asset_js[] = $filepath.$filename;
    }

    public function get_js($name=null) {
        if (is_null($name)){
            foreach($this->asset_js as $x=>$data){
                $this->__js .= '<SCRIPT src="'.base_url().'assets/js/'.$data.'" type="text/javascript"></SCRIPT>';
            }
        }
        return $this->__js;
    }
    
    public function get_css($name=null) {
        if (is_null($name)){
            foreach($this->asset_css as $x=>$data){
                $this->__css .= '<link href="'.base_url().'assets/css/'.$data.'" type="text/css" rel="stylesheet">';
            }
        }
        return $this->__css;
    }

}
