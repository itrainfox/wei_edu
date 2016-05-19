<?php
/**
 * 微教育模块
 *
 * @author 高贵血迹
 */
		require 'common.php';//调用公共函数
        
        //查询是否用户登录		

		$item = pdo_fetch("SELECT * FROM " . tablename($this->table_news) . " where :id = id", array(':id' => $leaveid));
		$school = pdo_fetch("SELECT * FROM " . tablename($this->table_index) . " where weid = :weid AND id=:id", array(':weid' => $weid, ':id' => $schoolid));
		$picarr = iunserializer($item['picarr']);
		include $this->template(''.$school['style1'].'/new');       
?>