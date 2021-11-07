<?php
    require_once '../../functions/helpers.php';
    require_once '../../functions/pdo_connection.php';



    global $pdo;

        if(isset($_GET['post_id']) and $_GET['post_id'] !== '')
        {

        //check for exists post id
        $query = 'SELECT * FROM php_project.posts WHERE id = ?';
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['post_id']]);
        $post = $statement->fetch();
        if($post !== false)
        {
           $status = ($post->status == 10) ? 0 : 10;
        //    if($post->status == 10)
        //    {
        //        $status = 0
        //    }
        //    else{
        //        $status = 10
        //    }
           $query = 'UPDATE  php_project.posts SET status = ? WHERE id = ? ;';
            $statement = $pdo->prepare($query);
            $statement->execute([$status, $_GET['post_id']]);
        }
          
        }

        redirect('panel/post');
