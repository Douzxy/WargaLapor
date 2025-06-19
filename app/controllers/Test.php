<?php

class Test extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/layouts/navbar");
        $this->view("test/index");
        $this->view("frontend/layouts/footer");
        $this->view("frontend/layouts/script");
    }
}
