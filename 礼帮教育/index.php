<?php
// if($_SERVER['HTTP_HOST'] == 'www.lbjy.top'){
//     header('Location: ./app/index.php?i=1&c=entry&do=index&m=li_bang&state=i');
// }elseif($_SERVER['HTTP_HOST'] == 'www.labedu.com.cn'){
//     header('Location: ./lao/wwwroot');
// }
/**
 * [WeEngine System] Copyright (c) 20180202150514 WE7.CC
 * WeEngine is NOT a free software, it under the license terms, visited http://www.we7.cc/ for more details.
 */

require './framework/bootstrap.inc.php';

$host = $_SERVER['HTTP_HOST'];
if (!empty($host)) {
	$bindhost = pdo_fetch("SELECT * FROM ".tablename('site_multi')." WHERE bindhost = :bindhost", array(':bindhost' => $host));
	if (!empty($bindhost)) {
		header("Location: ". $_W['siteroot'] . 'app/index.php?i='.$bindhost['uniacid'].'&t='.$bindhost['id']);
		exit;
	}
}
if($_W['os'] == 'mobile' && (!empty($_GPC['i']) || !empty($_SERVER['QUERY_STRING']))) {
	header('Location: ./app/index.php?' . $_SERVER['QUERY_STRING']);
} else {
	//header('Location: ./web/index.php?' . $_SERVER['QUERY_STRING']);
header('Location: ./app/index.php?i=1&c=entry&do=index&m=li_bang&state=i');
}

?>