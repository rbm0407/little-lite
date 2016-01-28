<?php
class PostModel
{
    private $posts;
    
    function __construct() {
        $jsonData = file_get_contents('http://jsonplaceholder.typicode.com/posts');
        $posts = json_decode($jsonData,true);
        $this->posts = $posts;
    }

    public function getPosts() {
        return $this->posts;
    }

    public  function  getPostByID($id) {
        return $this->posts[$id];
    }
}
?>