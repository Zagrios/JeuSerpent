<?php

class homeController extends Controller{

    function init(){
        session_destroy();
        parent::render("homeView");
    }

}

?>