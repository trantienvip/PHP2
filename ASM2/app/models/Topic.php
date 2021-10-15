<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Topic extends Model{
    protected $table = 'topics';
    public $fillable = ['name', 'status'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class,'owner_by', 'id');
    }
    public function StatusBnt() {
        return $this-> status == 1 ? 'checked' : '';
    }
    public function post(){
        return $this->hasMany(Post::class,'topic_id', 'id');
    }
}


?>