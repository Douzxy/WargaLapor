<?php

class Home extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/layouts/navbar");
        $this->view("frontend/beranda/index");
        $this->view("frontend/layouts/footer");
        $this->view("frontend/layouts/script");
    }
}
