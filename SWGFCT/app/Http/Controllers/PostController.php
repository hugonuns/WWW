<?php


namespace App\Http\Controllers;


class PostController
{
    public function show($post){

        $posts = [
            'fristpost' => 'Hello, this is the frist post',
            'secondpost' => 'and this is the second post'
        ];

        if(!array_key_exists($post,$posts)) {
            abort(404,'Hmmm, this those not exist.. Try something else');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
