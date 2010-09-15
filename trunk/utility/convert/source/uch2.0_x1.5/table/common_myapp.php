<?php

/**
 * DiscuzX Convert
 *
 * $Id: common_myapp.php 15720 2010-08-25 23:56:08Z monkey $
 */

$curprg = basename(__FILE__);

$table_source = $db_source->tablepre.'myapp';
$table_target = $db_target->tablepre.'common_myapp';

$limit = $setting['limit']['myapp'] ? $setting['limit']['myapp'] : 500;
$nextid = 0;

$start = getgpc('start');
if($start == 0) {
	$db_target->query("TRUNCATE $table_target");
}

$query = $db_source->query("SELECT  * FROM $table_source WHERE appid>'$start' ORDER BY appid LIMIT $limit");
while ($app = $db_source->fetch_array($query)) {

	$nextid = $app['appid'];

	$app  = daddslashes($app, 1);

	$data = implode_field_value($app, ',', db_table_fields($db_target, $table_target));

	$db_target->query("INSERT INTO $table_target SET $data");
}

if($nextid) {
	showmessage("繼續轉換數據表 ".$table_source." appid> $nextid", "index.php?a=$action&source=$source&prg=$curprg&start=$nextid");
}

?>