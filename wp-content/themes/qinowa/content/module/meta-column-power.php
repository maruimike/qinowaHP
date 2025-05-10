<?php
$percentage = get_field('p_power');
if ($percentage !== false && mb_strpos($percentage,'表示無し') === false) {
    ?>
    <dl class="column_charge">
        <dt>体力残量</dt>
        <dd>
            <div class="charge_percentage percentage-<?php echo $percentage; ?>">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </dd>
    </dl>
<?php
}
