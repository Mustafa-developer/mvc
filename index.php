<?php 
error_reporting(E_ALL);
// use App\Controller;
use Core\Route;
use Twig\Environment;
use Twig\Loader\ArrayLoader;
use Twig\Loader\FilesystemLoader;

require_once "vendor/autoload.php";


$loader = new FilesystemLoader('App/View');
$twig = new Environment($loader);
echo $twig->render(
    'post/rendering-twig.html.twig',
    [
      'title'  => 'mustafa',
      'body'   => 'This is the example body of the page.',
      'footer' => 'Our custom blocks.',
    ]
  );

  $route = new Route();

    $route->add('',['controller'=>'welcome', 'action'=> 'wel' ,'namespace' => 'Home']);
    $route->add('Insert',['controller'=>'Admin', 'action'=>'findex', 'namespace' => 'Admin' ]);
    // $router->add('user', ['controller'=> 'User', 'action' => 'index', 'namespace' => 'User']);
    $route->add('Data',['controller'=>'Data', 'action'=>'select_data', 'namespace' => 'Select' ]);
    


    
 $route->dispatch($_SERVER['QUERY_STRING']);

?>