<?php
require_once 'model/post.php';
class PostController {
    public function list() {
        $select_post = new Post();
        $posts = $select_post->get_all();

        require_once "views/Post/list.php";
        
        // echo "<pre>";
        // var_dump($display);
        // echo "</pre>";
        // die();
    }

    // public function detailPost() {
    //     $detaeo = new Post();
    //     $detail = $detaeo->detailPost();
    //     require_once;
    // }
}
?>