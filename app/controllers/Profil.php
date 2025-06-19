<?php

class Profil extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/layouts/navbar");
        $this->view("frontend/profil/index");
        $this->view("frontend/layouts/footer");
        $this->view("frontend/layouts/script");
    }
}
