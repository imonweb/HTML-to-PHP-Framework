<?php 

class Upload extends Controller
{
  function index()
  {
   
    $data['page_title'] = "Upload";
    $this->view("minima/upload", $data);
  }

  function image()
  {
   
    $data['page_title'] = "Upload";
    $this->view("minima/upload", $data);
  }

}