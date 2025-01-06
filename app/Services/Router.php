<?php
namespace App\Services;
// определим, к какому пространству имен принадлежит класс
// и вызовем его в route/routes.php
class Router
{
  // список всех url у нас на сайте
  private static $list = [];	
  
  // статический метод, выведет страницу, которую мы укажем
  // вызывая метод page(), пополним $list списком url's, которые есть
  // на сайте
  public static function page($uri, $page_name){
  	//обратимся к массиву $list через self и пополним его 
   	self::$list[] = [
		"uri" => $uri,
		"page" => $page_name
	];
  }

// проверить get-запрос и, если запрашиваемая страница есть на сайте,
// то вывести ее 
  public static function enable(){
  	$query = $_GET['q'];

	foreach(self::$list as $route){
	   if($route["uri"] === '/' . $query){
	    // укзан путь, относительно index.php
		   require_once "views/pages/" . $route['page'] . ".php";
		   die();
	   }
	}

	self::not_found_page();	
  } 

  private static function not_found_page(){
  	require_once "views/errors/404.php";
  }

}
