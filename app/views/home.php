<?php
/**
 * Created by PhpStorm.
 * User: khalil
 * Date: 8/22/17
 * Time: 1:37 PM
 */
$stmt =  $db->prepare('select * from cms_2.pages');
$stmt->execute();
$items  = $stmt->fetchALl(PDO::FETCH_ASSOC);