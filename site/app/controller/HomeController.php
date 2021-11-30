<?php

    class HomeController
    {
        public function index()
        {
            $templete = file_get_contents('app/view/home.html');

            echo $templete;

        }
    }