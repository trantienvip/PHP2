<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\Str;
class CpanelController extends BaseController{
    public function index(){
        $posts = Post::all();
        $title = 'Trang quản lý';
        $this->render('admin.index', compact('posts', 'title'));
    }

    // POSTS
    public function addPostForm(){
        $title = 'Thêm bài viết';
        $topics = Topic::where('status', '!=', 2)->get();
        $this->render('admin.addPost', compact('title', 'topics'));
    }
    public function saveAddPost(){
        $model = new Post();
        $model->fill($_POST);
        //Upload Image
        $uploadImage = $_FILES['image'];
        if ($uploadImage['size'] > 0) { 
            $fileName = uniqid() . '-' . $uploadImage['name'];
            move_uploaded_file($uploadImage['tmp_name'], './public/uploads/'.$fileName);
            $model->image = 'uploads/'.$fileName;
        }
        $model->slug = Str::of($_POST['title'])->slug('-');
        $model->author_id = $_SESSION['auth']['id'];
        $model->save();
        header('location: ' . BASE_URL .'cpanel');
    }
    public function DestroyPost($id){
        Post::destroy($id);
        header('Location: ' . BASE_URL .'cpanel');
    }

    //EDIT POST
    public function editPostForm($id){
        $topics = Topic::where('status', '!=', 2)->get();
        $model = Post::find($id);
        $title = 'Sửa bài viết';
        $this->render('admin.editPost', compact('title', 'model', 'topics'));
    }
    public function saveEditPost($id){
        $model = Post::find($id);
        $model->fill($_POST);

        $uploadImage = $_FILES['image'];
        if ($uploadImage['size'] > 0) { 
            $fileName = uniqid() . '-' . $uploadImage['name'];
            move_uploaded_file($uploadImage['tmp_name'], './public/uploads/'.$fileName);
            $model->image = 'uploads/'.$fileName;
        }
        $model->slug = Str::of($_POST['title'])->slug('-');
        $model->author_id = 1;
        $model->save();
        header('location: ' . BASE_URL .'cpanel');
    }

    //Cpanel Topic
    public function cpanelTopic(){
        $topics = Topic::all();
        $title = 'Quản lý chủ đề';
        $this->render('admin.cpanel-topic', compact('topics', 'title'));
    }
    // ADD TOPIC
    public function addTopicForm(){
        $title = 'Thêm topic';
        $this->render('admin.cpanel-addtopic', compact('title'));
    }
    public function saveAddTopic(){
        $model = new Topic();
        $model->fill($_POST);

        $model->owner_by = 1;
        $model->save();
        header('location: ' . BASE_URL .'cpanel-topic');
    }
    // EDIT TOPIC
    public function editTopicForm($id){
        $title = 'Sửa topic';
        $topic = Topic::find($id);
        $this->render('admin.cpanel-edittopic', compact('title', 'topic'));
    }
    public function saveEditTopic($id){
        $model = Topic::find($id);
        $model->fill($_POST);
        $model->save();
        header('location: ' . BASE_URL .'cpanel-topic');
    }
    //DestroyTopic
    public function DestroyTopic($id) {
        Topic::destroy($id);
        header('location: ' . BASE_URL .'cpanel-topic');
    }
}

?>