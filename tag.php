<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6832140175661332"
     crossorigin="anonymous"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9RBFRF29Z0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9RBFRF29Z0');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Yuji+Syuku&display=swap" rel="stylesheet">



	<?php wp_head(); ?>
</head>

<body id="site-width">


<!--header-->
<header class="c-blog__header">
  <div class="c-blog__header-logo">
    <img src="http://koseki-sinkyuuin.com/wp-content/uploads/2022/08/logo.jpg" class="c-blog__header-logo-img">
  </div>
  <div class="c-blog__header-title">
    <p>コセキ鍼灸院　BLOG</p>
  </div>
</header>

<!--HERO-->
<div id="blog__hero" class="p-blog__hero-img">
  <img src="http://koseki-sinkyuuin.com/wp-content/uploads/2022/10/34eeef9ad11d89fd1433c48ee18b4047.png" alt="" class="p-blog__hero-img-item">
</div>

<!--main-->
<h2 class="c-article__category-title tag--title">タグ：『<?php single_tag_title(); ?>』の記事一覧</h2>

<div class="c-article__tag-container">

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <div class="c-article__tag-contents">
        <a href="<?php the_permalink(); ?>">

        <?php
          if(has_post_thumbnail()):
            the_post_thumbnail();
        endif;
        ?>
        <h3 class="c-tag__contents-title"><?php the_title(); ?></h3>
        <time class=""><?php the_time('Y.m.d'); ?></time>
       </a>
      </div>

  <?php endwhile;endif; wp_reset_query(); ?>
</div>

<!--template bottom-->
<section id="introduction" class="p-myself c-container c-container__ornament">
  <div class="c-container__width">


    <ul class="c-foot__menu">
      <li class="c-foot__menu-item"><a href="https://koseki-sinkyuuin.com/blog/" class="c-foot__menu-link">ブログ一覧 |</a></li>
      <li class="c-foot__menu-item"><a href="https://koseki-sinkyuuin.com/" class="c-foot__menu-link">コセキ鍼灸院について |</a></li>
      <li class="c-foot__menu-item"><a href="https://koseki-sinkyuuin.com/contact/" class="c-foot__menu-link">お問い合わせ |</a></li>
      <li class="c-foot__menu-item"><a href="https://koseki-sinkyuuin.com/faq/" class="c-foot__menu-link">よくある質問 |</a></li>
      <li class="c-foot__menu-item"><a href="https://koseki-sinkyuuin.com/privacy-policy/" class="c-foot__menu-link">プライバシーポリシー・免責事項</a></li>
    </ul>


    <!--SNS-->
    <div class="c-foot__icon">
      <a href="#"><i class="fa-brands fa-square-twitter c-foot__icon-item"></i></a>
    </div>

  </div>
</section>

<!--フッター-->
<footer id="footer">
  <p>©️ コセキ鍼灸院, All rights reserved.</p>
</footer>

</body>
</html>
