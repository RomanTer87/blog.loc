<?

$title = "Blog/Home";
$header = "Recent Posts";


$sql = "SELECT * FROM posts ORDER BY post_id DESC";

$posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC")->findAll();

$most_popular_post = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();

require_once (VIEWS. '/index1.tmpl.php');