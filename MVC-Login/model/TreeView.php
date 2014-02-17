<?php

class TreeView {

    public function showTreeHeader($pageTitle = ''){
        include 'views/html/header.inc';

    }

    public function showTreeFooter() {
        include 'views/html/footer.inc';
    }

    public function showLastTree($rows) {
        include 'views/html/latest-tree.inc';
    }

    public function showLastFlower($rows) {
        include 'views/html/latest-flower.inc';
    }

    public function show($temp, $data = array()) {

        $templatePath = "views/${temp}.inc";
        if (file_exists($templatePath)){
            include $templatePath;
        }

    }

}
