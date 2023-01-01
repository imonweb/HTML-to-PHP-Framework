<?php 

class Contact extends Controller
{
  function index()
  {
   
    $data['page_title'] = "Contact Us";
    $this->view("minima/contact", $data);
  }

}