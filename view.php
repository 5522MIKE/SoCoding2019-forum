<?php
// 查看某个帖子
// dirty hack

$id = $_GET['id'];
include './view/view-head.html';
echo "<a href=\"controller/delAction.php?id=" .$id. "\">删除帖子</a> <a href=\"edit.php?id=" .$id. "\">编辑帖子</a><br /><br />";
include "./controller/detailsAction.php";
include './view/view-mid.html';
include "./controller/commentListAction.php";
include './view/view-foot.html';