<?
$id = (int) $_GET['id'] ?? 0;
//$dd($id);


$post = $db->query("SELECT * FROM posts WHERE post_id = ? LIMIT 1", [$id])->findOrAbort();
$most_popular_post = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();


$header = $post['title'];
$title = $header;
$content = $post['content'];



require_once (VIEWS. '/post.tmpl.php');

