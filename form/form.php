<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ここにキャッチフレーズが入る">
<title>サイトのタイトル|formページ</title>
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

<li><a href="../works/works.html">実績紹介</a></li>
<li><a href="#">採用情報</a></li>
<li><a href="#">ブログ</a></li>
<li><a href="#">お問い合わせ</a></li>
</ul>
</nav>
</header>

<main>
<div class="main-img">
<img src="https://placehold.jp/960x350.png" alt="">
</div>

<section id="form-wrapper">
<h2 class="gradation">お問い合わせ</h2>
<dl>
<dt>お問い合わせ内容</dt>
<dd>
<label for="list-1">
<input type="radio" name="form-list" value="カタログ請求" id="list-1">カタログ請求
</label>
<label for="list-2">
<input type="radio" name="form-list" value="採用について" id="list-2">採用について
</label>
<label for="list-3">
<input type="radio" name="form-list" value="製品について" id="list-3">製品について
</label>
<label for="list-4">
<input type="radio" name="form-list" value="その他" id="list-4">その他
</label>
</dd>
<dt>お名前</dt>
<dd><input type="text" name="onamae" placeholder="お名前を入力して下さい" required></dd>
<dt>フリガナ</dt>
<dd><input type="text" name="kana" placeholder="カタカナで入力して下さい" required></dd>
<dt>メールアドレス</dt>
<dd><input type="email" name="email" placeholder="メールアドレスを入力して下さい" required></dd>
<dt>お電話番号</dt>
<dd><input type="text" name="tel" placeholder="ハイフン無しで入力して下さい"></dd>

<dt>興味のある技術分野<span>複数選択可</span></dt>
<dd>
<label for="check-1">
<input type="checkbox" name="check" id="check-1" value="外観CGパース">外観CGパース
</label>
<label for="check-2">
<input type="checkbox" name="check" id="check-2" value="内観CGパース">内観CGパース
</label>
<label for="check-3">
<input type="checkbox" name="check" id="check-3" value="BIM">BIM
</label>
<label for="check-4">
<input type="checkbox" name="check" id="check-4" value="VR/AR">VR/AR
</label>
</dd>
<dt>備考欄</dt>
<dd>
<textarea name="message"></textarea>
</dd>
</dl>

<div class="button02">
<button type="submit">送信</button>
</div>


</section><!-- /.form-wrapper -->

</main>
<footer>
<nav class="footer-nav">
<ul>
<li><a href="../front-page.html">トップ</a></li>
<li><a href="../works/works.html">実績紹介</a></li>
<li><a href="#">採用情報</a></li>
<li><a href="#">ブログ</a></li>
<li><a href="#">お問い合わせ</a></li>
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