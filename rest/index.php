<?php

    require "./config/db.php";
    require "./funcs/functions.php";
    header('Content-Type: application/json;');

    $method = $_SERVER['REQUEST_METHOD'];
    
    $request = $_GET['request'];
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }

    if($method === "GET")
    {
        if($request === 'posts')
        {
            if(isset($id))
            {
                getPost($id);
            }else
            {
                getPosts(); 
            }
        }
    } elseif($method === "POST")
    {
        if($request === "addPost")
        {
            addPost($_POST);
        }
        elseif($request === "login")
        {
            auth($_POST);
        }
        elseif($request === "delete")
        {
            deletePost($_POST);
        }
    } 
?>