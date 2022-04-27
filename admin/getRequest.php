<?php
    $url = 'http://localhost:8888/rest/?request=login';
    $data = array('login' => $_POST['login'], 'password' => $_POST['password']);
    
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);
    print_r($response);

    // if($result->status == true)
    // {
    //     echo "success";
    // }else
    // {
    //     echo "denied";
    // }
?>