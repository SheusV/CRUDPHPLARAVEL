<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function create(Request $request){
        $new_post=[
            'title'=>'Meu primeiro Post',
            'content'=>'Counteudo qualquer',
            'author'=>'Willian',
        ];
        // Forma mais convenciional de criar registro
        //$post= new Post($new_post);
       // $post-> save();

       $post= new Post();
       $post->title = 'Segundo post';
       $post->content = 'Outro conteudo qualquer';
       $post->author = 'Sheus';
       $post->save();



        dd($post);
    }

    public function read(Request $r){
        $post = new Post();

        $post = $post->find(2);

        return $post;
    }

    public function all(Request $r){
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request){
        $posts= Post::where('id','=','10')->update([
            'title'=>'novo titulo'
        ]);
        return $posts;
    }

    public function delete(Request $request){
        $post= Post::find(2);
        if($post){
            return $post-> delete();
        }



    }

}
