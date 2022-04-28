<?php
    function createPost()
    {
        $submit = $_POST['submit'];
        if(isset($submit))
        {
            $url = 'http://localhost:8888/rest/?request=addPost';
            $data = array('title' => $_POST['title'], 'content' => $_POST['content'], 'promo' => $_POST['promo']);
            
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $response = json_decode($result, false);

        }
    }
    function deletePost()
    {
        $submit = $_POST['submit'];
        if(isset($submit))
        {
            $url = 'http://localhost:8888/rest/?request=delete';
            $data = array('id' => $_POST['id']);
            
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $response = json_decode($result, false);
        }
    }

?>