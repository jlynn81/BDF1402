<?php
//class created for view model creation to include respective pages
class viewModel{
    public function _constract(){

    }

    public function getView($pagename='', $data=array()){
        include $pagename;
    }
}
