<?php
/**
 * Created by PhpStorm.
 * User: jlynn81
 * Date: 2/16/14
 * Time: 4:39 PM
 */

class viewModel {

    public function __constract(){

    }

    public function getView($pagename='', $data=array()){
        include $pagename;
    }

} 