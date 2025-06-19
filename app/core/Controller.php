<?php

class Controller
{
    public function view($view, $data = [])
    {
        // Menyusun path tampilan dengan benar
        $viewPath = '../app/views/' . $view . '.php';

        // Memastikan file tampilan ada sebelum dimuat
        if (file_exists($viewPath)) {
            require_once $viewPath;
            return $data;
        } else {
            die("View file '$view' not found.");
        }
    }

    public function model($model)
    {
        // Menyusun path model dengan benar
        $modelPath = '../app/models/' . $model . '.php';

        // Memastikan file model ada sebelum dimuat
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $model;
        } else {
            die("Model file '$model' not found.");
        }
    }
}
