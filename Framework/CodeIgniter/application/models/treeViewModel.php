<?php

class treeViewModel {

    public function __constract(){

    }

    public function getView($pagename='', $data=array()){
        include $pagename;
    }

}


