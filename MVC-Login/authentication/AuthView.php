<?php
/**
 * Created by PhpStorm.
 * User: jlynn81
 * Date: 2/16/14
 * Time: 11:12 AM
 */

class AuthView {

    public function show($temp) {

        $templatePath = "views/${temp}.inc";
        if (file_exists($templatePath)){
            include $templatePath;
        }

    }

} 