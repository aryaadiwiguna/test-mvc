<?php
 class Blog_model {
     private $blog = [
         ["penulis" => "Linux","judul" => "Belajar PHP MVC","tulisan" => "Tutorial PHP MVC"],
         ["penulis" => "Linux","judul" => "Belajar OOP PHP","tulisan" => "Tutorial PHP OOP"] ,
         ["penulis" => "Linux","judul" => "Belajar PHP Dasar","tulisan" => "Tutorial PHP Dasar"]
       ];
     public function getAllBlog() {
         return $this->blog;
     }
 }
