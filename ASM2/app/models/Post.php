<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    protected $table = 'posts';
    public $fillable = ['title', 'content', 'topic_id', 'author_id'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id', 'id');
    }
}


?>