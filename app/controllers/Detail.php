<?php

class Detail extends Controller
{
    function index()
    {
        $this->view("frontend/layouts/header");
        $this->view("frontend/layouts/navbar");
        $this->view("frontend/detail/index");
        $this->view("frontend/layouts/footer");
        $this->view("frontend/layouts/script");
    }
}
