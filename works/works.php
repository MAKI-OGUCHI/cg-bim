<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ここにキャッチフレーズが入る">
<title>サイトのタイトル|worksページ</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../css/main.css">
</head>
<body id="top">
<header>
<h1>CG-BIM Studio</h1>
<nav id="g-nav">
<ul>
<li><a href="../front-page.html">トップ</a>
<div class="drop-menu">
<div class="drop-inner">
<p class="drop-list"><a href="../front-page.html#service">
<img src="https://placehold.jp/200x150.png" alt="">
サービス</a></p>
<p class="drop-list"><a href="../front-page.html#pick-up">
<img src="https://placehold.jp/200x150.png" alt="">
おすすめ</a></p>
<p class="drop-list"><a href="../front-page.html#voice">
<img src="https://placehold.jp/200x150.png" alt="">
お客様の声</a></p>
<p class="drop-list"><a href="../front-page.html#about">
<img src="https://placehold.jp/200x150.png" alt="">
私達について</a></p>
</div><!-- /.drop-inner -->
</div><!-- /#drop-menu -->
</li>

<li><a href="#">実績紹介</a></li>
<li><a href="#">採用情報</a></li>
<li><a href="#">ブログ</a></li>
<li><a href="../form/form.html">お問い合わせ</a></li>
</ul>
</nav>
</header>

<main>
<div class="main-img">
<img src="https://placehold.jp/960x350.png" alt="">
</div>

<div class="works-page-wrapper">
<h2 class="gradation">実績紹介</h2>
<input type="radio" id="btn-all" name="filter-btn" checked>
<label for="btn-all">ALL</label>
<input type="radio" id="btn-ex" name="filter-btn">
<label for="btn-ex">外観CGパース</label>
<input type="radio" id="btn-in" name="filter-btn">
<label for="btn-in">内観CGパース</label>
<input type="radio" id="btn-bim" name="filter-btn">
<label for="btn-bim">BIM</label>
<input type="radio" id="btn-vr" name="filter-btn">
<label for="btn-vr">VR/AR</label>

<div class="works-item-wrapper">
<div class="works-box" data-category="cate-1 cate-3">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">外観CGパース</a></li>
<li><a href="#">BIM</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-2 cate-4">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">内観CGパース</a></li>
<li><a href="#">VR/AR</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-3">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">BIM</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-4">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">VR/AR</a></li>
</ul>
</div><!-- /.works-box -->

<div class="works-box" data-category="cate-1 cate-2 cate-3 cate-4">
<a href="#">
<h3>投稿記事の見出し</h3>
<p><img src="https://placehold.jp/800x600.png" alt=""></p>
</a>
<ul>
<li><a href="#">外観CGパース</a></li>
<li><a href="#">内観CGパース</a></li>
<li><a href="#">BIM</a></li>
<li><a href="#">VR/AR</a></li>
</ul>
</div><!-- /.works-box -->



</div><!-- /.works-item-wrapper -->
</div><!-- /.works-page-wrapper -->

</main>



<div class="to-form-wrapper">
<div class="to-catalog">
  <a href="#">
    <p>カタログ請求<span>詳しくはこちらから</span></p>
  </a>
</div><!-- /.to-catalog -->
<div class="to-message">
<a href="#">
<p>お問い合わせ<span>詳しくはこちらから</span></p>
</a>
</div><!-- /.to-message -->
</div><!-- /.to-form-wrapper -->


<footer>
<nav class="footer-nav">
<ul>
<li><a href="../front-page.html">トップ</a></li>
<li><a href="#">実績紹介</a></li>
<li><a href="#">採用情報</a></li>
<li><a href="#">ブログ</a></li>
<li><a href="../form/form.html">お問い合わせ</a></li>
<li><a href="#">サイトポリシー</a></li>
</ul>
</nav>
<p><small>&copy; 2024 CG-BIM Studio</small></p>
</footer>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="js/my-particles.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
<script>
$(function(){
$(window).on('scroll resize',function(){
let scrTop = $(window).scrollTop();
let winHeight = $(window).outerHeight();

$('.pick-img').each(function(){
let elmTop = $(this).offset().top;
let h = $(this).outerHeight();

if(scrTop > elmTop - winHeight + h){
$(this).addClass('scroll');
}


});
});
});
</script>


</body>
</html>