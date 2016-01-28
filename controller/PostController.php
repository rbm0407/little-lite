<?php
include('model/PostModel.php');

include_once('system/view.php');

class PostController
{
    private $posts;
    private $view;

    function __construct() {
        $this->posts = new PostModel();
        $this->view = new View();
    }
    
    public function index() {
        $posts = $this->posts->getPosts();
        
        $this->view->assign('posts',$posts);

        $this->view->display('view/posts.php');
    }

    public function postView($id) {
        $this->view->assign('posts', $this->model->getPostByID($id));
        $this->view->display('view');
    }
}
?>