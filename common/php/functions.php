<?php 
function getPage($url=null){
  //Load specified URL or default to current page URL
  if($url==null){
      $url=$_SERVER['REQUEST_URI'];
  }

  //Remove Query & fragments
  $url = parse_url($url);
  $url = $url['path'];

  //If URL end is slash, load index page
  if(endsWith($url, '/')){
      $url.='index';
  }

  //Remove the base directory of the site 
  $url = preg_replace('/^' . preg_quote(SITE_DIRECTORY, '/')  . '/', '', $url); 
  if(is_file(SITE_ROOT . 'pages/' . $url . '.php')){
      include  SITE_ROOT . 'pages/' . $url . '.php';
      return;
  }else{
    header("HTTP/1.1 404 Not Found");        
    include  SITE_ROOT . 'pages/404.php';
    return;
  }
}

function getHeader($title, $description, $class="page"){
  $class = ' class="' . $class . '"';
    
  include  SITE_ROOT . 'common/inc/header.php';
}

function getFooter(){
  include  SITE_ROOT . 'common/inc/footer.php';
}

function getNavigation(){
  include SITE_ROOT . 'common/inc/navigation.php';
}
function getSearch($form=null, $is_header=false){
  if(!is_null($form)){ $form = '-' . $form; }
  include SITE_ROOT . 'common/inc/search'.$form.'.php';
}
function getForm($form){
  include  SITE_ROOT . 'common/inc/form-'.$form.'.php';
}
function getTout($tout){
  include  SITE_ROOT . 'common/inc/tout-'.$tout.'.php';
}
function getAboutSubNav(){
  include  SITE_ROOT . 'pages/about/about-nav.php';
}
?>