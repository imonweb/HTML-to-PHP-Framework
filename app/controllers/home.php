<?php 

class Home extends Controller
{
  function index()
  {
   
    $data['page_title'] = "Home";

    $posts = $this->loadModel("posts");
    $result = $posts->get_all();

    $data['posts'] = $result;
    $image_class = $this->loadModel("image_class");

    if(is_array($data['posts']))
    {
      foreach($data['posts'] as $key => $value){
        $data['posts'][$key]->image = $image_class->get_thumbnail($data['posts'][$key]->image);
      }
    }
    $this->view("minima/index", $data);
  }

}