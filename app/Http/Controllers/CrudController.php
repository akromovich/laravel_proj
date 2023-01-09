<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CrudController extends Controller
{
    public function create(){
        $appData = [
            [
                'name'=>'Munisa',
                'age'=>17
            ],
            [
                'name'=>'Sardor',
                'age'=>23
            ],
            [
                'name'=>'Akmal',
                'age'=>12
            ],
            [
                'name'=>'Aziz',
                'age'=>45
            ],
            ];
            foreach($appData as $data){
                Post::create($data);
            }
            dd('successfuly');
        }
    
    public function update(){
        $post = Post::find(5);
        $post->update([
            'name'=>'MamatovSardor',
            'age'=>2
        ]);
        dd('successfuly');
    }
    
    public function delete(){
        $post = Post::withTrashed()->find(3);
        $post->restore();
        dd('deleted');
    }
}
