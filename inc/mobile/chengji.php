<?php
/**
 * 微教育模块
 *
 * @author 高贵血迹
 */
		require 'common.php';//调用公共函数  
        $school = pdo_fetch("SELECT * FROM " . tablename($this->table_index) . " where weid = :weid AND id=:id ORDER BY ssort DESC", array(':weid' => $weid, ':id' => $schoolid));
       include $this->template(''.$school['style2'].'/chengji');
?>