<?php

require_once CORE. '/classes/Validator.php';

$most_popular_post = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();
$title = 'New post';
$header = 'Create new post';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fillable = ['title', 'excerpt', 'content'];
    $data = loadReqData($fillable);

    $errors = [];

    $rules =[
        'title' => [
            'required' => true,
            'min' => 7,
            'max' => 30
        ],
        'excerpt' => [
            'required' => true,
            'min' => 15,
            'max' => 100
        ],
        'content' => [
            'required' => true,
            'min' => 15,    
            'max' => 300
        ]
        ];

        $validator = new Validator();
        $validation = $validator->validate($data, $rules);


    if(! $validator->hasErrors()){
      if($db->query("INSERT INTO posts (title, excerpt, content) VALUE (?, ?, ?)", [$data['title'], $data['excerpt'], $data['content']])){
        echo"Succes";
      }
        else{
             echo "DB error";
            }
        }
}


require_once VIEWS. '/create-post.tmpl.php';