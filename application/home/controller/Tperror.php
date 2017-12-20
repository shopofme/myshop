<?php

namespace app\home\controller;
use think\Controller;
class Tperror extends Controller {

	public function tp404($msg='',$url=''){
		$msg = empty($msg) ? '您可能输入了错误的网址，或者该页面已经不存在了哦。' : $msg;
		$this->assign('error',$msg);		
		$my_shop_config = array();
		$my_config = M('config')->cache(true,MYSHOP_CACHE_TIME)->select();
		foreach($my_config as $k => $v)
		{
			if($v['name'] == 'hot_keywords'){
                $my_shop_config['hot_keywords'] = explode('|', $v['value']);
			}
            $my_shop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
		}
		$this->assign('goods_category_tree', get_goods_category_tree());
		$brand_list = M('brand')->cache(true,MYSHOP_CACHE_TIME)->field('id,parent_cat_id,logo,is_hot')->where("parent_cat_id>0")->select();
		$this->assign('brand_list', $brand_list);
		$this->assign('my_shop_config', $my_shop_config);
		return $this->fetch('public/tp404');
	}
	
}