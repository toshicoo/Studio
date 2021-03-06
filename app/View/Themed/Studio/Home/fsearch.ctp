<?php
	// このページ限定のCSS,JS
	$this->Html->script(array('drawPieChart', 'jquery.glide.min'), array('inline' => false));
	$this->Html->css(array('pieChart', 'glide'), null, array('inline' => false));
?>
<script type="text/javascript" src="<?php echo rootUrl . 'js/fsearch/'; ?>"></script>
<article id="fsearch" class="clearfix">
	<div class="result">
		<section class="profile">
			<p>ここに検索結果が表示されます</p>
		</section>
		<section class="graphArea">
			<h2>勉強時間の推移</h2>
			<script src="http://ccchart.com/js/ccchart.js" charset="utf-8"></script>
			<canvas width="984" id="hoge" style="width: 492px"></canvas>
			<!-- カレンダー -->
			<div class="clearfix">
				<div><a id="prevMonth" href="#">←</a></div>
				<h3 class="calHeader">2013年 12月</h3>
				<div><a id="nextMonth" href="#">→</a></div>
			</div>
		</section>
	</div>
	<div id="fsearchArea">
		<ul class="tab clearfix">
			<li name="target_search" class="current"><h1>志望校・資格で探す</h1></li>
			<li name="name_search"><h1>名前で探す</h1></li>
		</ul>
		<form id="fsearchForm" action="#" method="post">
			<input id="txtFsearch" type="text">
			<input id="submitFsearch" type="submit" value="">
		</form>
		<ul class="result">
		</ul>
	</div>
</article>
