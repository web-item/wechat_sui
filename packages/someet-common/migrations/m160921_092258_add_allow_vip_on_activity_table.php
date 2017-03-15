<?php

use yii\db\Schema;
use yii\db\Migration;

class m160921_092258_add_allow_vip_on_activity_table extends Migration
{
    public function up()
    {
        $sql = <<<SQL
ALTER TABLE `activity`
ADD COLUMN `allow_vip` INT(2) NULL DEFAULT 0 COMMENT '0 不允许非vip报名 1 允许非vip报名';
SQL;
        $this->execute($sql);
        return true;
    }

    public function safeDown()
    {
        $this->dropColumn('activity', 'allow_vip');
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