<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CombatController extends Controller
{
    public function firstorcreate(){
        // $post = Post::all();
        $post = Post::firstOrCreate([
            'desc'=>'19'
        ],
        [
            'name'=>'Ali',
            'desc'=>'19'
        ]);
            dd($post);
    }
    public function updateorcreate(){
        $post = Post::updateOrCreate(['name'=>'aravay'],
        [
            'name'=>'aravay',
            'desc'=>'20'
        ]);
            dump($post);
    }
}
