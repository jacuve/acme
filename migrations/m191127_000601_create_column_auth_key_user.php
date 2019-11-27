<?php

use yii\db\Migration;

/**
 * Class m191127_000601_create_column_auth_key_user
 */
class m191127_000601_create_column_auth_key_user extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('user', 'auth_key', $this->string(60)->notNull()->unique()->after('contact_phone'));
    }

    public function down()
    {
        $this->dropColumn('user', 'auth_key');
    }

}
