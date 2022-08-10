<?php

class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Home";
        $data["nama"] = "arya adi wiguna";

        $this->view("templates/header", $data);
        $this->model("User_model")->getUser();
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}
