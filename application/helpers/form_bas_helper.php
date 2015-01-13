<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('finput'))
{
    function finput($name,$value='',$extra='')
    {
        
        $e = '';
        if(is_array($extra)){
            foreach($extra as $i=>$x){$e .= ' '.$i.'="'.$x.'"';}
            $extra=$e;
            
        }
        $value = ($value=='')?'':'value = "'.$value.'"';
        return '<input type="text" name="'.$name.'" id="'.$name.'" '.$value.' '.$extra.'>';
    }
}

if ( ! function_exists('fpassword'))
{
    function fpassword($name,$value='',$extra='')
    {
        $e = '';
        if(is_array($extra)){
            foreach($extra as $i=>$x){$e .= ' '.$i.'="'.$x.'"';}
            $extra=$e;
            
        }
        $value = ($value=='')?'':'value = "'.$value.'"';
        return '<input type="password" name="'.$name.'" id="'.$name.'" '.$value.' '.$extra.'>';
    }
}

if ( ! function_exists('fbutton_submit'))
{
    function fbutton_submit($name,$value='',$extra=''){
        $e = '';
        if(is_array($extra)){
            foreach($extra as $i=>$x){$e .= ' '.$i.'="'.$x.'"';}
            $extra=$e;
            
        }
        $value = ($value=='')?'':'value = "'.$value.'"';
        return '<input type="submit" name="'.$name.'" id="'.$name.'" '.$value.' '.$extra.'>';
    }
}