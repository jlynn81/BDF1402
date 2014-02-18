<?php

class TreeView {

    public function showTreeHeader($pageTitle = ''){
        include 'views/html/header.inc';

    }

    public function showTreeFooter() {
        include 'views/html/footer.inc';
    }

    public function showLastTree($rows) {
        include 'views/html/tree_details.inc';
    }

    public function showLastFlower($rows) {
        include 'views/html/flower_details.inc';
    }

    public function showLoginForm() {
        include 'views/html/form.inc';
    }

}
