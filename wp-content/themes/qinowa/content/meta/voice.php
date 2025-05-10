<?php
$name = get_field('p_name');
$position = get_field('p_position');
if ($name) {
    ?>
	<!-- ※名前記入欄（存在する場合のみ出力） -->
	<p class="single_name"><?php echo $name;?></p>
<?php
}
if ($position) {
?>
	<!-- ※補足記入欄（存在する場合のみ出力） -->
	<p class="single_data">
		<?php echo $position;?>
	</p>
<?php
}
