<?php 

class Signup extends Controller
{
  function index()
  {
   
    $data['page_title'] = "Sigup";
    $this->view("minima/signup", $data);
  }

}