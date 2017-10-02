<?php

namespace vb\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    protected $k_rep;
    protected $r_rep;
    protected $s_rep;
    protected $s_t_rep;
    protected $u_rep;

    protected $template;
    protected $vars = array();
    protected $reg_f = FALSE;
    protected $log_f = FALSE;
    protected $f_cal = FALSE;
    protected $s_music = FALSE;
    protected $vid_slide = FALSE;

    public function __construct(){
        //
    }


    protected function renderOutPut(){

        return view($this->template)->with($this->vars);
    }

















}
