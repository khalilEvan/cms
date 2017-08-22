<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 8/22/17
 * Time: 1:44 PM
 */

require 'app/start.php';
if (empty($_GET['post_type'])) {

    $post = false;

}else{

    $post_type = $_GET['post_type'];

    $post = $db->prepare("select * from cms_2.pages where post_type  = :post_type limit 1");
    $post->execute(['post_type'=>$post_type]);
    $posts = $post->fetchAll(PDO::FETCH_ASSOC);
}


require VIEWS.'page.show.php';







