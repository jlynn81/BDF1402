<?php

class TreeView {

    public function showHeader($pageTitle = ''){
        echo<<<__HEADER__

<!DOCTYPE html>
<html>
<head><title>$pageTitle</title></head>

<body>

<h1>$pageTitle</h1>
<p>Tree Information Database</p>

__HEADER__;



    }

} 