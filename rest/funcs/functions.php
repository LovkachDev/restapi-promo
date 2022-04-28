<?php

    function getPosts()
    {
        $posts = R::findAll( 'post' );
        echo json_encode($posts);
    }
    function getPost($id)
    {   
        $post = R::findOne('post', 'id = ?', [ $id ]);

        if(!$post)
        {
            $result = [
                "status" => "false",
                "message" => "Post not found"
            ];

            http_response_code(404);
            echo json_encode($result);
        }
        else
        {
            echo json_encode($post);
        }
    }
    function addPost($data)
    {
        $title = $data['title'];
        $content = $data['content'];
        $promo = $data['promo'];

        if(!empty($title) && !empty($content) && !empty($promo))
            $add = R::dispense("post");
            $add->title = $title;
            $add->content = $content;
            $add->promo = $promo;
            R::store($add);

            http_response_code(201);

            $result = [
                "status" => "true",
                "message" => "Post successfully added"
            ];
            print_r($result);
    }
    function deletePost($data)
    {
        $id = $data['id'];


        $remove = R::load("post" , $id);
        R::trash($remove);

        http_response_code(201);

        $result = [
            "status" => "true",
            "message" => "Post successfully deleted"
        ];
        print_r($result);
    }



    function auth($data)
    {
        $login = $data['login'];
        $password = $data['password'];

        $find = R::find("admin" , "login = ? AND password = ?" , [$login , $password]);

        if($find){
            http_response_code(200);
            $result = [
                "status" => "true",
                "message" => "You successfully logged"
            ];
            echo json_encode($result);
        }else
        {
            http_response_code(401);
            $result = [
                "status" => "false",
                "message" => "Login or password is not correct"
            ];
            echo json_encode($result);
        }
    }
?>