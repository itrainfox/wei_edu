<?php
/**
 * 微教育模块
 *
 * @author 高贵血迹
 */
		require 'common.php';//调用公共函数
        $item = pdo_fetch("SELECT * FROM " . tablename($this->table_kcbiao) . " where weid = :weid AND id=:id", array(':weid' => $weid, ':id' => $id));
        $school = pdo_fetch("SELECT * FROM " . tablename($this->table_index) . " where weid = :weid AND id=:id ORDER BY ssort DESC", array(':weid' => $weid, ':id' => $item['schoolid'])); 
        if (empty($item)) {
            message('参数错误');
        }
		include $this->template(''.$school['style2'].'/mykcdetial');
?>