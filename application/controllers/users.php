<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller {
    protected $data = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->library(array('template','form_validation'));
        $this->load->helper('form_bas');
        $this->data['title'] = 'Add Form Users';
    }
    
    public function index(){
        
        
        $this->template->load('default','users/add',$this->data);
    }
    
    public function save(){
        $this->form_validation->set_rules('Username','Username','trim|required');
        $this->form_validation->set_rules('Password','Password','required|matches[PassConf]');
        $this->form_validation->set_rules('PassConf','PassConf','required');
        $this->form_validation->set_rules('Email','Email','required|valid_email');
        
        if($this->form_validation->run()==FALSE){
            $this->template->load('default','users/add',$this->data);
        }else{
            $this->template->load('default','coba1');
        }
        
    }
    
}