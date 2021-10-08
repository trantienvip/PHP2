<?php
namespace Utils;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Controllers\HomeController;
use App\Controllers\Admin\CpanelController;
use App\Controllers\LoginController;
use App\Controllers\SigninController;

class Routing{
    public static function start($url){

        $router = new RouteCollector();

        //filter dangnhap
        $router->filter('auth', function(){
            if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
                header('location: '.BASE_URL.'login');
                die;
            }
        });

        $router->group(['before' => 'auth'],function($router){
            //Cpanel-All
            $router->get('/cpanel', [CpanelController::class, 'index']);
            $router->get('/cpanel-topic', [CpanelController::class, 'cpanelTopic']);

            //TOPIC
            $router->get('/cpanel-topic/add', [CpanelController::class, 'addTopicForm']);
            $router->post('/cpanel-topic/add', [CpanelController::class, 'saveAddTopic']);

            $router->get('/cpanel-topic/edit/{id}', [CpanelController::class, 'editTopicForm']);
            $router->post('/cpanel-topic/edit/{id}', [CpanelController::class, 'saveEditTopic']);

            $router->get('/cpanel-topic/del/{id}', [CpanelController::class, 'DestroyTopic']);
            
            //POST
            $router->get('/cpanel/add', [CpanelController::class, 'addPostForm']);
            $router->post('/cpanel/add', [CpanelController::class, 'saveAddPost']);

            $router->get('/cpanel/edit/{id}', [CpanelController::class, 'editPostForm']);
            $router->post('/cpanel/edit/{id}', [CpanelController::class, 'saveEditPost']);

            $router->get('/cpanel/del/{id}', [CpanelController::class, 'DestroyPost']);

        });

        $router->get('/', [HomeController::class, 'index']);
        $router->get('/detail/{slug}', [HomeController::class, 'detail']);
        $router->get('/search', [HomeController::class, 'search']);

        $router->get('/login', [LoginController::class, 'login']);
        $router->post('/login', [LoginController::class, 'postLogin']);
        $router->any('/logout', [LoginController::class, 'logout']);

        $router->get('/signin', [SigninController::class, 'signin']);
        $router->post('/signin', [SigninController::class, 'postSignin']);
        

        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}

?>