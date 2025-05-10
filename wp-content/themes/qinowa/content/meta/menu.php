<?php
$time_total = get_field('p_time_total');
$time = get_field('p_time');
$price = get_field('p_price');
if ($time_total || $time) {
    ?>
	<!-- ※時間記入欄（存在する場合のみ出力） -->
	<p class="single_time">
		<?php echo $time_total ? "トータル所要時間：{$time_total}<br>" : ""; ?>
		<?php echo $time ? "施術時間：{$time}" : ""; ?>
	</p>
<?php
}
if ($price) {
?>
	<!-- ※料金記入欄（存在する場合のみ出力） -->
	<p class="single_price">施術料金：<?php echo $price;?>（税抜）</p>
<?php
}
