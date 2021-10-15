<?php
namespace App\Controllers;
use App\Models\Post;

class HomeController extends BaseController{
    public function index(){
        $posts = Post::where('deleted_at', '!=', 'true')->get();
        $title = 'Trang chủ';
        $this->render('home.index', compact('posts', 'title'));
    }
    public function detail($slug){
        // $post = Post::find($id);
        $post = Post::where('slug', $slug)->first();
        $title = 'Trang chi tiết';
        $this->render('home.detail', compact('post', 'title'));
    }
    public function search() {
        $keySearch = $_GET['q'];
        $title = 'Trang tìm kiếm';
        $posts = Post::where('title', 'like', "%".$keySearch."%")->get();
        $this->render('home.search', compact('posts', 'title', 'keySearch'));
    }
}

?>