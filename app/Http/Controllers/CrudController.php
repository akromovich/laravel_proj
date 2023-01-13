<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CrudController extends Controller
{
    public function create(){
        $post = ['name'=>'Akrom','desc'=>'18'];
        Post::create($post);
        dd('successfuly');
        }
    
    public function update(){
        $post = Post::find(5);
        $post->update([
            'name','MamatovSardor',
            'age',2
        ]);
        dd('successfuly');
    }
    
    public function delete(){
        $post = Post::withTrashed()->find(3);
        $post->restore();
        dd('deleted');
    }
}
