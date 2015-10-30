<?php

    namespace App\Controller;

    use Dez\Mvc\Controller;

    class IndexController extends Controller
    {

        public function indexAction()
        {

        }

        public function helloAction()
        {
            $this->flash->info( "welcome!!!" )->error( "and fuck u!!!" );
        }

    }