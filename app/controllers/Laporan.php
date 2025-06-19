<?php

class Laporan extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/layouts/navbar");
        $this->view("frontend/laporan/index");
        $this->view("frontend/layouts/footer");
        $this->view("frontend/layouts/script");
    }

}
