<?php

use yii\db\Schema;
use yii\db\Migration;

class m160616_085611_add_subscribe_fields extends Migration
{
    public function up()
    {
        $sql = <<<SQL
ALTER TABLE `user`
ADD COLUMN `subscribe` TINYINT(1) NULL DEFAULT 0 COMMENT '是否关注服务号 0 未关注 1 已关注' AFTER `access_token`,
ADD COLUMN `subscribe_time` INT(11) NULL DEFAULT 0 COMMENT '关注服务号的时间' AFTER `subscribe`;
SQL;
        $this->execute($sql);
        return true;
    }

    public function down()
    {
        $this->dropColumn('user', 'subscribe');
        $this->dropColumn('user', 'subscribe_time');
        return true;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
