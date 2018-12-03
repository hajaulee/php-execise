<?php
/**
 * Created by PhpStorm.
 * User: hajaulee
 * Date: 09/10/2018
 * Time: 13:59
 */
include_once ('page.php');

$mini_post = new Page("My minipost", 2018, "Copyright of Lee");
$mini_post->addContent("Hello world!");
echo $mini_post->get();
