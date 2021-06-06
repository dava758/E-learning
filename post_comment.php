<?php
require('Persistence.php');

$db = new Persistence();
$added = $db->add_comment($_POST);

if($added) {
  header( 'Location: diskusi.php' );
}
else {
  header( 'Location: diskusi.php?error=komentar mengalami error' );
}
?>