<?php
/**
 * li_bang模块微站定义
 *
 * @author hanbaoge
 * @url 
 */
defined('IN_IA') or exit('Access Denied');

class Li_bangModuleSite extends WeModuleSite {

	// 首页
	public function doMobileIndex() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		//获取一级分类
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");

		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		// echo '<pre>';
		// print_r($first);die;
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		foreach($prointro as $key=>$value){
			for($i=0;$i<count($procate);$i++){
				if($procate[$i]['id'] == $value['cateid']){
					$procate[$i]['intro'][$key] = $value['image'];
				}
			}
		}
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['intro'] = join(',',$procate[$j]['intro']);
			$procate[$j]['intro'] = explode(',',$procate[$j]['intro']);
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
		// echo '<pre>';
		// print_r($procate);die;
		// 关于我们
		$libang = pdo_get('li_ban_cate', array('id' => 1));
		$libintro = pdo_get('li_ban_intro', array('cateid' => 2));
		$libintro['image'] = explode(',',$libintro['image']);
		// if(mb_strlen($libintro['intro']) > 510){
		// 	$libintro['intro'] = mb_substr($libintro['intro'], 0, 510, 'utf-8').'......';
		// }else{
		// 	$libintro['intro'] = mb_substr($libintro['intro'], 0, 510, 'utf-8');
		// }
		$libintro['intro'] = str_replace('&lt;','<',$libintro['intro']);
		$libintro['intro'] = str_replace('&gt;','>',$libintro['intro']);
		$libintro['intro'] = str_replace('&quot;','"',$libintro['intro']);
      //二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		// var_dump($libintro['intro']);die;
		// $libintro['intro'] = str_replace('&lt;','<',$libintro['intro']);
		// $libintro['intro'] = str_replace('&gt;','>',$libintro['intro']);
		// $libintro['intro'] = str_replace('&quot;','"',$libintro['intro']);
		//客户案例
		$client = pdo_get('li_ban_cate', array('id' => 6));

		$clicate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=6");
//		echo "<pre>";
//			print_r($clicate);die;
		
		$cliintro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=6 order by cateid asc");
		foreach($cliintro as $key=>$value){
			for($i=0;$i<count($clicate);$i++){
				if($clicate[$i]['id'] == $value['cateid']){
					$clicate[$i]['intro'][$key] = $value;
				}
			}
		}
		for($j=0;$j<count($clicate);$j++){
			$clicate[$j]['first'] = reset($clicate[$j]['intro']);
			$clicate[$j]['end'] = end($clicate[$j]['intro']);
		}
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 礼邦商城
		$shop = pdo_get('li_ban_cate', array('id' => 10));
		$link = pdo_getall('li_ban_link');
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
		$zs = pdo_get('li_ban_cate', array('id' => 7));
		array_push($ablib,$zs);
		include $this->template("index");
	}
	// 列表页
	public function doMobileLiebiao() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
      //二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		//获取一级分类
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");

		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 礼邦商城
		$shop = pdo_get('li_ban_cate', array('id' => 10));
		$link = pdo_getall('li_ban_link');
//		echo "<pre>";
//			print_r($shop);die;
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
$zs = pdo_get('li_ban_cate', array('id' => 7));
		array_push($ablib,$zs);
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		foreach($prointro as $key=>$value){
			for($i=0;$i<count($procate);$i++){
				if($procate[$i]['id'] == $value['cateid']){
					$procate[$i]['intro'][$key] = $value;
				}
			}
		}
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
		//客户案例
		$clicate = pdo_getall('li_ban_cate', array('pid' => 6));
//		echo '<pre>';
//			print_r($client);die;
		// 底部新闻中心
		$new = pdo_get('li_ban_cate', array('id' => 8));
		$news = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=8 order by id desc limit 6");
		for($i=0;$i<count($news);$i++){
			$news[$i]['intro'] = str_replace('&lt;','<',$news[$i]['intro']);
			$news[$i]['intro'] = str_replace('&gt;','>',$news[$i]['intro']);
			$news[$i]['intro'] = str_replace('&quot;','"',$news[$i]['intro']);
			// if(mb_strlen($news[$i]['intro']) > 50){
			// 	$news[$i]['intro'] = mb_substr($news[$i]['intro'], 0, 50, 'utf-8').'......';
			// }else{
			// 	$news[$i]['intro'] = mb_substr($news[$i]['intro'], 0, 50, 'utf-8');
			// }
		}
		// 关于礼邦
		if($_GET['id'] == 1){
			$company = pdo_getall('li_ban_intro', array('cateid' => 7));
			$comcate = pdo_get('li_ban_cate', array('id' => 7));
			//$cfirst = reset($company['image']);
			//$cend = end($company['image']);
			// 关于我们
			$libang = pdo_get('li_ban_cate', array('id' => 2));
			$libintro = pdo_get('li_ban_intro', array('cateid' => 2));
			$libintro['intro'] = str_replace('&lt;','<',$libintro['intro']);
			$libintro['intro'] = str_replace('&gt;','>',$libintro['intro']);
			$libintro['intro'] = str_replace('&quot;','"',$libintro['intro']);
			$libintro['image'] = explode(',',$libintro['image']);
			// echo mb_strlen($libintro['intro']);die;
			// if(mb_strlen($libintro['intro']) > 410){
			// 	$libintro['intro'] = mb_substr($libintro['intro'], 0, 410, 'utf-8').'......';
			// }else{
			// 	$libintro['intro'] = mb_substr($libintro['intro'], 0, 410, 'utf-8');
			// }
			// $libintro['intro'] = substr($libintro['intro'],0,1248).'......';
			// 企业文化
			$wen = pdo_get('li_ban_cate', array('id' => 2));
			$det = pdo_get('li_ban_detail', array('id' => 30));
			$det['content'] = str_replace('&lt;','<',$det['content']);
			$det['content'] = str_replace('&gt;','>',$det['content']);
			$det['content'] = str_replace('&quot;','"',$det['content']);
			$image = pdo_get('li_ban_intro', array('id' => $det['introid']),array('image'));
			// 主营业务
			$main1 = pdo_getall('li_ban_intro',array('cateid' => 4));

			for($i=0;$i<count($main1);$i++){
				$main1[$i]['intro'] = str_replace('&lt;','<',$main1[$i]['intro']);
				$main1[$i]['intro'] = str_replace('&gt;','>',$main1[$i]['intro']);
				$main1[$i]['intro'] = str_replace('&quot;','"',$main1[$i]['intro']);
				$main1[$i]['image'] = explode(',',$main1[$i]['image']);
			}
			// echo '<pre>';
			// print_r($main1);die;
			include $this->template("about");
		// 产品服务
		}elseif($_GET['id'] == 5){
			$libintro = pdo_get('li_ban_cate', array('id' => $_GET['id']));
			$proserver = pdo_getall('li_ban_cate', array('pid' => $_GET['id']));
			$cateid = $_GET['id'];
			// *************分页实现****************
			$sql = "select * from ".tablename('li_ban_intro')." where catepid=$cateid";
			$all = pdo_fetchall($sql);
			// 分页开始
			$total = count($all);
			$pageindex = max($_GPC['page'],1);
			$pagesize = 6;
			$pager = pagination($total,$pageindex,$pagesize);
			// 从第几页开始
			$p = ($pageindex - 1) * 6;
			$sql .= " order by id desc limit ".$p." , ".$pagesize;
			$all = pdo_fetchall($sql);
			for($i=0;$i<count($all);$i++){
				$all[$i]['intro'] = str_replace('&lt;','<',$all[$i]['intro']);
				$all[$i]['intro'] = str_replace('&gt;','>',$all[$i]['intro']);
				$all[$i]['intro'] = str_replace('&quot;','"',$all[$i]['intro']);
				// if(mb_strlen($all[$i]['intro']) > 70){
				// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8').'......';
				// }else{
				// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8');
				// }
				$all[$i]['image'] = explode(',',$all[$i]['image']);
				$all[$i]['first'] = reset($all[$i]['image']);
				$all[$i]['last'] = end($all[$i]['image']);
			}
			// 分页结束
			if($_GPC['pid']){
				$cateid = $_GPC['id'];
				$pid = $_GPC['pid'];
				// *************分页实现****************
				$sql = "select * from ".tablename('li_ban_intro')." where cateid=$pid and catepid=$cateid";
				$all = pdo_fetchall($sql);
				// 分页开始
				$total = count($all);
				$pageindex = max($_GPC['page'],1);
				$pagesize = 6;
				$pager = pagination($total,$pageindex,$pagesize);
				// 从第几页开始
				$p = ($pageindex - 1) * 6;
				$sql .= " order by id desc limit ".$p." , ".$pagesize;
				$all = pdo_fetchall($sql);
				for($i=0;$i<count($all);$i++){
					$all[$i]['intro'] = str_replace('&lt;','<',$all[$i]['intro']);
					$all[$i]['intro'] = str_replace('&gt;','>',$all[$i]['intro']);
					$all[$i]['intro'] = str_replace('&quot;','"',$all[$i]['intro']);
					$all[$i]['image'] = explode(',',$all[$i]['image']);
					$all[$i]['first'] = reset($all[$i]['image']);
					$all[$i]['last'] = end($all[$i]['image']);
					// if(mb_strlen($all[$i]['intro']) > 70){
					// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8').'......';
					// }else{
					// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8');
					// }
				}
				
				// var_dump($all);die;
			// 分页结束
			}
			// var_dump($all);die;
			load() -> func('tpl');
			include $this->template("product");
		// 客户案例
		}elseif($_GET['id'] == 6){
			$libintro = pdo_get('li_ban_cate', array('id' => $_GET['id']));
			$proserver = pdo_getall('li_ban_cate', array('pid' => $_GET['id']));
			$cateid = $_GET['id'];
			// *************分页实现****************
			$sql = "select * from ".tablename('li_ban_intro')." where catepid=$cateid";
			$all = pdo_fetchall($sql);
			// 分页开始
			$total = count($all);
			$pageindex = max($_GPC['page'],1);
			$pagesize = 6;
			$pager = pagination($total,$pageindex,$pagesize);
			// 从第几页开始
			$p = ($pageindex - 1) * 6;
			$sql .= " order by id desc limit ".$p." , ".$pagesize;
			$all = pdo_fetchall($sql);
			for($i=0;$i<count($all);$i++){
				$all[$i]['intro'] = str_replace('&lt;','<',$all[$i]['intro']);
				$all[$i]['intro'] = str_replace('&gt;','>',$all[$i]['intro']);
				$all[$i]['intro'] = str_replace('&quot;','"',$all[$i]['intro']);
				// if(mb_strlen($all[$i]['intro']) > 70){
				// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8').'......';
				// }else{
				// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8');
				// }
			}
			// 分页结束
			if($_GPC['pid']){
				$cateid = $_GPC['id'];
				$pid = $_GPC['pid'];
				// *************分页实现****************
				$sql = "select * from ".tablename('li_ban_intro')." where cateid=$pid and catepid=$cateid";
				$all = pdo_fetchall($sql);
				// 分页开始
				$total = count($all);
				$pageindex = max($_GPC['page'],1);
				$pagesize = 6;
				$pager = pagination($total,$pageindex,$pagesize);
				// 从第几页开始
				$p = ($pageindex - 1) * 6;
				$sql .= " order by id desc limit ".$p." , ".$pagesize;
				$all = pdo_fetchall($sql);
				for($i=0;$i<count($all);$i++){
					$all[$i]['intro'] = str_replace('&lt;','<',$all[$i]['intro']);
					$all[$i]['intro'] = str_replace('&gt;','>',$all[$i]['intro']);
					$all[$i]['intro'] = str_replace('&quot;','"',$all[$i]['intro']);
					// if(mb_strlen($all[$i]['intro']) > 70){
					// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8').'......';
					// }else{
					// 	$all[$i]['intro'] = mb_substr($all[$i]['intro'], 0, 70, 'utf-8');
					// }
				}
			// 分页结束
			}
			load() -> func('tpl');

			include $this->template("client");
		// 企业证书
		}elseif($_GET['id'] == 7){
			$libintro = pdo_get('li_ban_cate', array('id' => $_GET['id']));
			$cateid = $_GET['id'];
			// *************分页实现****************
			$sql = "select * from ".tablename('li_ban_intro')." where cateid=$cateid";
			$all = pdo_fetchall($sql);
			// 分页开始
			$total = count($all);
			$pageindex = max($_GPC['page'],1);
			$pagesize = 6;
			$pager = pagination($total,$pageindex,$pagesize);
			// 从第几页开始
			$p = ($pageindex - 1) * 6;
			$sql .= " order by id desc limit ".$p." , ".$pagesize;
			$all = pdo_fetchall($sql);
			// var_dump($all);die;
			include $this->template("certificate");
		}elseif($_GET['id'] == 8){
			// 底部新闻中心
			$new = pdo_get('li_ban_cate', array('id' => 8));
			$newcate = pdo_getall('li_ban_cate', array('pid' => 8));
			// var_dump($_POST);die;
			// $news = pdo_getall('li_ban_intro', array('cateid' => 8));
			// *************分页实现****************
			$sql = "select * from ".tablename('li_ban_intro')." where catepid=8";
			if($_GPC['action'] == 'newscate'){
				$cateid = $_GPC['cateid'];
				$sql = "select * from ".tablename('li_ban_intro')." where cateid=$cateid";
			}
			if($_POST['title']){
				$title = $_POST['title'];
				$sql = "select * from ".tablename('li_ban_intro')." where title like '%$title%' and (catepid=5 or catepid=8)";
			}
			$news = pdo_fetchall($sql);
			// 分页开始
			$total = count($news);
			$pageindex = max($_GPC['page'],1);
			$pagesize = 8;
			$pager = pagination($total,$pageindex,$pagesize);
			// 从第几页开始
			$p = ($pageindex - 1) * 8;
			$sql .= " order by id desc limit ".$p." , ".$pagesize;
			$news = pdo_fetchall($sql);
			
			for($i=0;$i<count($news);$i++){
				$news[$i]['intro'] = str_replace('&lt;','<',$news[$i]['intro']);
				$news[$i]['intro'] = str_replace('&gt;','>',$news[$i]['intro']);
				$news[$i]['intro'] = str_replace('&quot;','"',$news[$i]['intro']);
				
			}
			if($_POST['title']){
				include $this->template("sousuo");
			}
			include $this->template("news");
		}elseif($_GET['id'] == 9){
			$libintro = pdo_get('li_ban_cate', array('id' => $_GET['id']));
			$address = pdo_get('li_ban_intro', array('id' => 53));
			$address['intro'] = str_replace('&lt;','<',$address['intro']);
			$address['intro'] = str_replace('&gt;','>',$address['intro']);
			$address['intro'] = str_replace('&quot;','"',$address['intro']);
			$cuntry = pdo_get('li_ban_intro', array('id' => 54));
			$cuntry['intro'] = str_replace('&lt;','<',$cuntry['intro']);
			$cuntry['intro'] = str_replace('&gt;','>',$cuntry['intro']);
			$cuntry['intro'] = str_replace('&quot;','"',$cuntry['intro']);
			// $phone = pdo_get('li_ban_intro', array('id' => 55));
			// $phone['intro'] = str_replace('&lt;','<',$phone['intro']);
			// $phone['intro'] = str_replace('&gt;','>',$phone['intro']);
			// $phone['intro'] = str_replace('&quot;','"',$phone['intro']);
			// $fax = pdo_get('li_ban_intro', array('id' => 56));
			// $fax['intro'] = str_replace('&lt;','<',$fax['intro']);
			// $fax['intro'] = str_replace('&gt;','>',$fax['intro']);
			// $fax['intro'] = str_replace('&quot;','"',$fax['intro']);
			$wang = pdo_get('li_ban_intro', array('id' => 57));
			$wang['intro'] = str_replace('&lt;','<',$wang['intro']);
			$wang['intro'] = str_replace('&gt;','>',$wang['intro']);
			$wang['intro'] = str_replace('&quot;','"',$wang['intro']);
			// $you = pdo_get('li_ban_intro', array('id' => 58));
			// $you['intro'] = str_replace('&lt;','<',$you['intro']);
			// $you['intro'] = str_replace('&gt;','>',$you['intro']);
			// $you['intro'] = str_replace('&quot;','"',$you['intro']);
			// $tu = pdo_get('li_ban_detail', array('id' => 33));

			$tu['content'] = str_replace('&lt;','<',$tu['content']);
			$tu['content'] = str_replace('&gt;','>',$tu['content']);
			$tu['content'] = str_replace('&quot;','"',$tu['content']);
			// var_dump($tu);die;
			include $this->template("contact");
		}else{
			echo '<h1>页面还未开发</h1>';
		}
	}
	// 关于我们
	public function doMobileAbout() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		$cate = pdo_getall('li_ban_cate', array('pid' => 0));
		include $this->template("about");
	}
	// 搜索
	public function doMobileSousuo() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		//获取一级分类
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");

		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
      //二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		$detail = pdo_get('li_ban_detail', array('introid' => $_GET['id']));
		$detail['content'] = str_replace('&lt;','<',$detail['content']);
		$detail['content'] = str_replace('&gt;','>',$detail['content']);
		$detail['content'] = str_replace('&quot;','"',$detail['content']);
		// *************分页实现****************
		$sql = "select * from ".tablename('li_ban_intro')." where catepid=8";
		if($_POST['title']){
			$title = $_POST['title'];
			$sql = "select * from ".tablename('li_ban_intro')." where title like '%$title%' and (catepid=5 or catepid=8)";
		}
		$news = pdo_fetchall($sql);
		// 分页开始
		$total = count($news);
		$pageindex = max($_GPC['page'],1);
		$pagesize = 8;
		$pager = pagination($total,$pageindex,$pagesize);
		// 从第几页开始
		$p = ($pageindex - 1) * 8;
		$sql .= " order by id desc limit ".$p." , ".$pagesize;
		$news = pdo_fetchall($sql);
		for($i=0;$i<count($news);$i++){
			$news[$i]['image'] = explode(',',$news[$i]['image']);
			$news[$i]['image'] = reset($news[$i]['image']);
			$news[$i]['intro'] = str_replace('&lt;','<',$news[$i]['intro']);
				$news[$i]['intro'] = str_replace('&gt;','>',$news[$i]['intro']);
				$news[$i]['intro'] = str_replace('&quot;','"',$news[$i]['intro']);
			// if(mb_strlen($news[$i]['intro']) > 80){
			// 	$news[$i]['intro'] = mb_substr($news[$i]['intro'], 0, 80, 'utf-8').'......';
			// }else{
			// 	$news[$i]['intro'] = mb_substr($news[$i]['intro'], 0, 80, 'utf-8');
			// }
		}
		include $this->template("sousuo");
	}
	// 关于我们更多
	public function doMobileAboutmore() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		//获取一级分类
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");
		//二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		foreach($prointro as $key=>$value){
			for($i=0;$i<count($procate);$i++){
				if($procate[$i]['id'] == $value['cateid']){
					$procate[$i]['intro'][$key] = $value;
				}
			}
		}
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
		$detail = pdo_get('li_ban_detail', array('introid' => $_GET['id']));
		$detail['content'] = str_replace('&lt;','<',$detail['content']);
		$detail['content'] = str_replace('&gt;','>',$detail['content']);
		$detail['content'] = str_replace('&quot;','"',$detail['content']);
		// var_dump($detail);die;
		// 礼邦商城
		$shop = pdo_get('li_ban_cate', array('id' => 10));
		$link = pdo_getall('li_ban_link');
		//客户案例
		$client = pdo_get('li_ban_cate', array('id' => 6));
		$clicate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=6");
		
		include $this->template("aboutmore");
	}
	// 产品服务
	public function doMobileProduct() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		include $this->template("product");
	}
	// 产品服务更多
	public function doMobileProductmore() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		//获取一级分类
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");
		//二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		foreach($prointro as $key=>$value){
			for($i=0;$i<count($procate);$i++){
				if($procate[$i]['id'] == $value['cateid']){
					$procate[$i]['intro'][$key] = $value;
				}
			}
		}
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
		// 礼邦商城
		$shop = pdo_get('li_ban_cate', array('id' => 10));
		$link = pdo_getall('li_ban_link');
		//客户案例
		$client = pdo_get('li_ban_cate', array('id' => 6));
		$clicate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=6");
		// 底部新闻中心
		$new = pdo_get('li_ban_cate', array('id' => 8));
		$news = pdo_fetchall("select * from".tablename('li_ban_intro')." where cateid=8 order by id desc limit 6");
		for($i=0;$i<count($news);$i++){
			$news[$i]['intro'] = str_replace('&lt;','<',$news[$i]['intro']);
			$news[$i]['intro'] = str_replace('&gt;','>',$news[$i]['intro']);
			$news[$i]['intro'] = str_replace('&quot;','"',$news[$i]['intro']);
		}

		$promore = pdo_get('li_ban_detail', array('introid' => $_GPC['id']));
		$promore['content'] = str_replace('&lt;','<',$promore['content']);
		$promore['content'] = str_replace('&gt;','>',$promore['content']);
		$promore['content'] = str_replace('&quot;','"',$promore['content']);
		if($promore['content'] == ''){
			$promore['content'] = '暂无数据';
		}
		include $this->template("productmore");
	}
	// 搜索
	public function doMobileSearch() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		include $this->template("contact");
	}
	// 客户案例
	public function doMobileClient() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		include $this->template("client");
	}
	// 产品介绍
	public function doMobileJieshao() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		//获取一级分类
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");
		//二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		if($_GPC['action'] == 'get'){
			$jieshao = pdo_get('li_ban_link', array('id' => $_GPC['id']));
			$jieshao['link'] = str_replace('&lt;','<',$jieshao['link']);
			$jieshao['link'] = str_replace('&gt;','>',$jieshao['link']);
			$jieshao['link'] = str_replace('&quot;','"',$jieshao['link']);

		}		
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		foreach($prointro as $key=>$value){
			for($i=0;$i<count($procate);$i++){
				if($procate[$i]['id'] == $value['cateid']){
					$procate[$i]['intro'][$key] = $value;
				}
			}
		}
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
		$detail = pdo_get('li_ban_detail', array('introid' => $_GET['id']));
		$detail['content'] = str_replace('&lt;','<',$detail['content']);
		$detail['content'] = str_replace('&gt;','>',$detail['content']);
		$detail['content'] = str_replace('&quot;','"',$detail['content']);
		// 礼邦商城
		$shop = pdo_get('li_ban_cate', array('id' => 10));
		$link = pdo_getall('li_ban_link');
		//客户案例
		$client = pdo_get('li_ban_cate', array('id' => 6));
		$clicate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=6");
		include $this->template("jieshao");
	}
	// 新闻中心
	public function doMobileNews() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		include $this->template("news");
	}
	// 预定
	public function doMobileYuyue() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		// var_dump($_GPC);die;
      //二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		$data1 = array(
			'name' => $_GPC['name'],
			'phone' => $_GPC['phone'],
			'email' => $_GPC['email'],
			'linkid' => $_GPC['linkid'],
			'addtime' => time()
		);
		$result = pdo_insert('li_ban_order', $data1);  
		if (!empty($result)) {
			// include $this->template("news");
			message('添加成功',$this->createMobileUrl('index'),'success');
		}else{
			message('添加失败',$this->createMobileUrl('index'),'error');
		}
		// include $this->template("news");
	}
	// 新闻中心更多
	public function doMobileNewsmore() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		//获取一级分类
      //二维码
      	$code = pdo_get('li_ban_intro', array('id' => 150));
		$cate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=0");
		// 联系我们
		$address = pdo_get('li_ban_intro', array('id' => 53));
		$phone = pdo_get('li_ban_intro', array('id' => 55));
		$fax = pdo_get('li_ban_intro', array('id' => 56));
		$wang = pdo_get('li_ban_intro', array('id' => 57));
		$email = pdo_get('li_ban_intro', array('id' => 58));
		$qq = pdo_get('li_ban_intro', array('id' => 70));
		// 产品服务
		$product = pdo_get('li_ban_cate', array('id' => 5));
		$procate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=5");
		$prointro = pdo_fetchall("select * from".tablename('li_ban_intro')." where catepid=5 order by cateid asc");
		foreach($prointro as $key=>$value){
			for($i=0;$i<count($procate);$i++){
				if($procate[$i]['id'] == $value['cateid']){
					$procate[$i]['intro'][$key] = $value;
				}
			}
		}
		// 关于礼邦
		$ablib = pdo_getall('li_ban_cate', array('pid' => 1));
		for($j=0;$j<count($procate);$j++){
			$procate[$j]['first'] = reset($procate[$j]['intro']);
			$procate[$j]['end'] = end($procate[$j]['intro']);
		}
		$slide = pdo_getall('li_ban_slide');
		$first = reset($slide);
		$end = end($slide);
		$introid = $_GPC['id'];
		$newsmore = pdo_get('li_ban_detail', array('introid' => $_GPC['id']));
		$prev = pdo_fetchall("select * from".tablename('li_ban_intro')." where id<$introid and catepid=8 order by id desc");
		$next = pdo_fetchall("select * from".tablename('li_ban_intro')." where id>$introid and catepid=8 order by id asc");
		$newsmore['content'] = str_replace('&lt;','<',$newsmore['content']);
		$newsmore['content'] = str_replace('&gt;','>',$newsmore['content']);
		$newsmore['content'] = str_replace('&quot;','"',$newsmore['content']);
		// 礼邦商城
		$shop = pdo_get('li_ban_cate', array('id' => 10));
		$link = pdo_getall('li_ban_link');
		//客户案例
		$client = pdo_get('li_ban_cate', array('id' => 6));
		$clicate = pdo_fetchall("select * from".tablename('li_ban_cate')." where pid=6");
		// var_dump($next);die;
		include $this->template("newsmore");
	}
	// 联系我们
	public function doMobileContact() {
		//这个操作被定义用来呈现 功能封面
		global $_GPC,$_W;
		include $this->template("contact");
	}
	
	// 轮播图
	public function doWebSlide() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_GPC,$_W;
		$image = pdo_getall('li_ban_slide');
		if ($_GPC['action'] == 'edit') {
			$image = pdo_get('li_ban_slide', array('id' => $_GPC['id']));
			include $this->template("slideedit");die;
		}
		if ($_GPC['action'] == 'save') {
        	$data = array(
                'image' => $_GPC['image'],
			);
			if($_GPC['id']){
				$way = pdo_get('li_ban_slide', array('id' => $_GPC['id']));
				$result = pdo_update('li_ban_slide', $data, array('id' => $_GPC['id']));
			}else{
				$result = pdo_insert('li_ban_slide', $data);  
			}              
            if (!empty($result)) {
				// if (!empty($way)) {
				// 	unlink('../attachment/'.$way['image']);
				// }
                message('更新成功',$this->createWebUrl('slide'),'success');
            }
		}
		// *************删除单条数据****************
		if ($_GPC['action'] == 'del') {
			// $way = pdo_get('li_ban_slide', array('id' => $_GPC['id']));
			// unlink('../attachment/'.$way['image']);
			$result = pdo_delete('li_ban_slide',array('id'=>$_GPC['id']));
			if (!empty($result)) {
				message('删除成功',$this->createWebUrl('slide'),'success');
			}
		}
		include $this->template("slide");
	}
	//调整导航类别顺序
    public function getCates(){
		$data = pdo_fetchall("select *,concat(path,',',id) as path from".tablename('li_ban_cate')."order by path");
        //遍历
        foreach($data as $key=>$value){
            //转为数组
            $arr=explode(',',$value['path']);
            //获取逗号个数
            $len=count($arr)-2;
            //字符串重复函数
            $data[$key]['class_name']=str_repeat('--|',$len).$value['name'];
        }
        return $data;
    }
	// 导航分类
	public function doWebCate() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_GPC,$_W;
		$cate=$this->getCates();
		// *************修改****************
		if ($_GPC['action'] == 'edit') {
			$result = pdo_get('li_ban_cate',array('id'=>$_GPC['id']));
			include $this->template("cateedit");die;
		}	
		// *************添加修改操作****************
		if ($_GPC['action'] == 'save') {
			$pid = $_GPC['pid'];
			// 判断是一级分类还是二级以上分类
			if($pid == 0){
				//拼接path
				$data['path'] = 0;
			}else{
				//否则获取分类信息
				$info = pdo_get('li_ban_cate', array('id' => $pid));
				//拼接path
				$data['path'] = $info['path'].','.$info['id'];
			}
			$data['name'] = $_GPC['name'];
			$data['ename'] = $_GPC['ename'];
			$data['pid'] = $pid;
			// 以id的存在判断是修改还是添加
			if($_GPC['id']){
				$result = pdo_update('li_ban_cate', $data, array('id' => $_GPC['id']));
			}else{
				$result = pdo_insert('li_ban_cate', $data);  
			}              
            if (!empty($result)) {
                message('更新成功',$this->createWebUrl('cate'),'success');
            }
		}
		// *************删除单条数据****************
		if ($_GPC['action'] == 'del') {
			$result = pdo_delete('li_ban_cate', array('id' => $_GPC['id']));
			if (!empty($result)) {
				message('删除成功',$this->createWebUrl('cate'),'success');
			}
		}
		include $this->template("cate");
	}
	// 简介
	public function doWebIntro() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_GPC,$_W;
		load()->func('tpl');
		$cate = pdo_getall('li_ban_cate',array('pid'=>0));
		if($_POST['id']){
			$id = $_POST['id'];
			$intro = pdo_fetchall("select * from".tablename('li_ban_intro')." where cateid=$id or catepid=$id");
			foreach($intro as $key=>$value){
				$intro[$key]['catepid1'] = $intro[$key]['catepid'];
				if($value['catepid'] == 0){
					$info = pdo_get('li_ban_cate', array('id' => $value['cateid']));
					$intro[$key]['pid'] = $intro[$key]['catepid'];
					$intro[$key]['catepid'] = $info['name'];
					$intro[$key]['cateid'] = $info['name'];
				}else{
					$info = pdo_get('li_ban_cate',array('id'=>$intro[$key]['catepid']));
					$info1 = pdo_get('li_ban_cate', array('id' => $value['cateid']));
					$intro[$key]['pid'] = $intro[$key]['catepid'];
					$intro[$key]['catepid'] = $info['name'];
					$intro[$key]['cateid'] = $info1['name'];
				}
			}
		}
		$cate1=$this->getCates();
		unset($cate1[4]);
		unset($cate[6]);
		// var_dump($cate1);die;
		// $intro = pdo_fetchall("select i.id,i.title,i.image,i.intro,i.catepid,c.name as catename from".tablename('li_ban_intro')." as i,".tablename('li_ban_cate')." as c where i.cateid=c.id");
		// foreach($intro as $key=>$value){
		// 	if($value['catepid'] == 0){
		// 		$intro[$key]['catepid'] = $intro[$key]['catename'];
		// 	}else{
		// 		$data = pdo_get('li_ban_cate',array('id'=>$intro[$key]['catepid']));
		// 		$intro[$key]['catepid'] = $data['name'];
		// 	}
		// }
		if($_GPC['action'] == 'introadd'){
			include $this->template("introadd");die;
		}
		// // var_dump($intro);die;
		// *************修改****************
		if ($_GPC['action'] == 'edit') {
			$result = pdo_get('li_ban_intro',array('id'=>$_GPC['id']));
			$result['intro'] = str_replace('&lt;','<',$result['intro']);
			$result['intro'] = str_replace('&gt;','>',$result['intro']);
			$result['intro'] = str_replace('&quot;','"',$result['intro']);
			if($_GPC['pid'] == 1 || $_GPC['pid'] == 5){
				$img['image'] = explode(',',$result['image']);
			}else{
				$img = $result['image'];
			}
			include $this->template("introedit");die;
		}		
		if ($_GPC['action'] == 'save') {
			if($_GPC['image1']){
				$_GPC['image'] = join(',',$_GPC['image1']);
			}				
			$pid = pdo_get('li_ban_cate', array('id' => $_GPC['cateid']));
			// if($pid['pid'] == 5){
			// 	$image = join(',',$_GPC['image']);
			// }else{
			// 	$image = $_GPC['image'];
			// }
			if($pid['pid'] == 0){
				$pid['pid'] = $pid['id'];
			}
        	$data = array(
				'title' => $_GPC['title'],
                'image' => $_GPC['image'],
                'intro' => $_GPC['intro'],
				'cateid' => $_GPC['cateid'],
				'catepid' => $pid['pid'],
			);
			if($_GPC['id']){
				if(is_array($_GPC['image'])){
					$data['image'] = join(',',$_GPC['image']);
				}
			// *************执行修改****************
				$result = pdo_update('li_ban_intro', $data, array('id' => $_GPC['id']));
			}else{
				$data['addtime'] = date('Y-m-d',time());
				// echo '<pre>';
				// print_r($_GPC);
				// print_r($data);die;
				$result = pdo_insert('li_ban_intro', $data);  
			}              
            if (!empty($result)) {
                message('更新成功',$this->createWebUrl('intro'),'success');
            }else{
				message('更新失败',$this->createWebUrl('intro'),'error');
			}
		}
		// *************删除单条数据****************
		if ($_GPC['action'] == 'del') {	
			$user = pdo_get('li_ban_intro', array('id' => $_GPC['id']), array('image'));
			$result = pdo_delete('li_ban_intro', array('id' => $_GPC['id']));
			$detail = pdo_delete('li_ban_detail', array('introid' => $_GPC['id']));
			// if(strstr($user['image'],',')){
			// 	$image = explode(',',$user['image']);
			// 	for($i=0;$i<count($image);$i++){
			// 		unlink('../attachment/'.$image[$i]);
			// 	}
			// }else{
			// 	unlink('../attachment/'.$user['image']);
			// }
			message('删除成功',$this->createWebUrl('intro'),'success');
		}
		// *************添加详情****************
		if ($_GPC['action'] == 'detail') {
			$data = array(
					'title' => $_GPC['title'],
					'content' => $_GPC['content'],
					'introid' => $_GPC['introid'],
					'english' => $_GPC['english'],
				);
			if($_GPC['detailid'] !== ''){
				$result = pdo_update('li_ban_detail', $data, array('id' => $_GPC['detailid']));
			}else{				
				$result = pdo_insert('li_ban_detail', $data);  
			}
			if (!empty($result)) {
                message('更新成功',$this->createWebUrl('intro'),'success');
            }else{
				message('更新失败',$this->createWebUrl('intro'),'error');
			}
		}
		if ($_GPC['action'] == 'check') {
			$introid = $_GPC['id'];
			$detail = pdo_get('li_ban_detail', array('introid' => $introid));
			$detail['content'] = str_replace('&lt;','<',$detail['content']);
			$detail['content'] = str_replace('&gt;','>',$detail['content']);
			$detail['content'] = str_replace('&quot;','"',$detail['content']);
			include $this->template("detailedit");die;
		}
		
		include $this->template("intro");
	}
	// 详情
	public function doWebDetail() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_GPC,$_W;
		$intro = pdo_getall('li_ban_intro');
		$detail = pdo_fetchall("select i.title as introtitle,c.title,c.content,c.id,c.english from".tablename('li_ban_intro')." as i,".tablename('li_ban_detail')." as c where i.id=c.introid");
		// var_dump($detail);die;
		// *************修改****************
		if ($_GPC['action'] == 'edit') {
			$result = pdo_get('li_ban_detail',array('id'=>$_GPC['id']));
			include $this->template("detailedit");die;
		}		
		if ($_GPC['action'] == 'save') {
        	$data = array(
				'title' => $_GPC['title'],
                'content' => $_GPC['content'],
                'introid' => $_GPC['introid'],
                'english' => $_GPC['english'],
			);
			if($_GPC['id']){
				// *************执行修改****************
				$result = pdo_update('li_ban_detail', $data, array('id' => $_GPC['id']));
			}else{
				$result = pdo_insert('li_ban_detail', $data);  
			}              
            if (!empty($result)) {
                message('更新成功',$this->createWebUrl('detail'),'success');
            }else{
				message('更新失败',$this->createWebUrl('detail'),'error');
			}
		}
		// *************删除单条数据****************
		if ($_GPC['action'] == 'del') {
			$result = pdo_delete('li_ban_detail', array('id' => $_GPC['id']));
			if (!empty($result)) {
				message('删除成功',$this->createWebUrl('detail'),'success');
			}
		}

		load()->func('tpl');
		include $this->template("detail");
	}
	// 预约
	public function doWebOrder() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_GPC,$_W;
		$order = pdo_getall('li_ban_order', array(), array() , '' , 'addtime DESC' , array());
		// $order = pdo_fetchall("select * from".tablename('li_ban_order')." order by addtime desc");
		for($i=0;$i<count($order);$i++){
			$res = pdo_get('li_ban_link', array('id' => $order[$i]['linkid']));
			$order[$i]['linkid'] = $res['image'];
			$order[$i]['addtime'] = date('Y-m-d H:i:s',$order[$i]['addtime']);
		}

		// *************删除单条数据****************
		if ($_GPC['action'] == 'del') {
			$result = pdo_delete('li_ban_order', array('id' => $_GPC['id']));
			if (!empty($result)) {
				message('删除成功',$this->createWebUrl('order'),'success');
			}
		}
		if ($_GPC['action'] == 'adel') {
			$result = pdo_delete('li_ban_order', array('id' => $_GPC['id']));
		}
		include $this->template("order");
	}
	// 礼邦商城
	public function doWebShop() {
		//这个操作被定义用来呈现 管理中心导航菜单
		global $_GPC,$_W;
		$image = pdo_getall('li_ban_link');
		// var_dump($image);die;
		if ($_GPC['action'] == 'edit') {
			$image = pdo_get('li_ban_link', array('id' => $_GPC['id']));
			$image['link'] = str_replace('&lt;','<',$image['link']);
			$image['link'] = str_replace('&gt;','>',$image['link']);
			$image['link'] = str_replace('&quot;','"',$image['link']);
			include $this->template("shopedit");die;
		}
		if ($_GPC['action'] == 'editimg') {
			$image = pdo_get('li_ban_link', array('id' => $_GPC['id']));
			include $this->template("shopimg");die;
		}
		if ($_GPC['action'] == 'save') {
			if($_GPC['image']){
				$data['image'] = $_GPC['image'];
			}
			if($_GPC['link']){
				$data['link'] = $_GPC['link'];
			}
			if($_GPC['name']){
				$data['name'] = $_GPC['name'];
			}
			if($_GPC['id']){
				// $way = pdo_get('li_ban_link', array('id' => $_GPC['id']));
				$result = pdo_update('li_ban_link', $data, array('id' => $_GPC['id']));
			}else{
				$result = pdo_insert('li_ban_link', $data);  
			}              
            if (!empty($result)) {
				// if ($_GPC['image1']) {
				// 	unlink('../attachment/'.$_GPC['image1']);
				// }
                message('更新成功',$this->createWebUrl('shop'),'success');
            }
		}
		// *************删除单条数据****************
		if ($_GPC['action'] == 'del') {
			// $way = pdo_get('li_ban_link', array('id' => $_GPC['id']));
			// unlink('../attachment/'.$way['image']);
			$result = pdo_delete('li_ban_link',array('id'=>$_GPC['id']));
			if (!empty($result)) {
				message('删除成功',$this->createWebUrl('shop'),'success');
			}
		}
		include $this->template("shop");
	}
}