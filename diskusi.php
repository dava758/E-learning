<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>PEMBELAJARAN KARAKTER</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/main.css" type="text/css" />

	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		<script src="js/IE8.js" type="text/javascript"></script><![endif]-->	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->

</head>

<style>
    body{
            background-image: url('images/gradient-geometric-shape-background_78532-374.jpg');
    }
    </style>


<body id="index" class="home">
	
	<header id="banner" class="body">
		<h1><a href="#">Pembelajaran karakter <strong> <ins>E-learning</ins></strong></a></h1>
	</header>
	
	<section id="content" class="body">
	  
	  <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="karakter.php" rel="bookmark" title="Pendidikan karakter dalam pembelajaran daring">Pendidikan karakter dalam pembelajaran daring</a></h2>
			</header>
			
			<footer class="post-info">
				<abbr class="published" title="2012-02-10T14:07:00-07:00">
					4 Mei 2021
				</abbr>

				<address class="vcard author">
					oleh<a class="url fn" href="#">Robieth</a>
				</address>
			</footer>
			
			<div class="entry-content">
                <p>Pada masa pandemi seperti sekarang, kegiatannya belajar-mengajar di sekolah dilakukan secara daring <strong>Online</strong>. hal ini dipandang sebagian orang kurang efektif karena sekolah bukan hanya mengajarkan ilmu tetapi juga membina akhlak dan karakter siswa. Jangan sampai siswa melakukan tindakan buruk, anarkis, sampai tindakan kriminal. bagaimana tanggapanmu berdasarkan materi yang anda lihat</p>
			</div>
		</article>
			
	</section>
	
	<section id="comments" class="body">
	  
	  <header>
			<h2>Komentar</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Belum ada komentar</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						oleh <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3>Tuliskan komentar anda</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Nama</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Komentar</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Tambahkan Komentar" />
        
      </form>
      
    </div>
			
	</section>
</body>
</html>