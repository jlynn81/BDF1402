<?php

class TreeView {

    public function showTreeHeader($pageTitle = ''){

        include 'views/header.inc';

    }

    public function showTreeFooter() {
        include 'views/footer.inc';
    }

    public function showLastTree($rows) {
        include 'views/latest-plant.php';
    }

}
