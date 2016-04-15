<?php

return [

    'install' => function ($app) {

        $util = $app['db']->getUtility();

        if ($util->tableExists('@teasers_teasers') === false) {
            $util->createTable('@teasers_teasers', function ($table) {
                $table->addColumn('id', 'integer', ['unsigned' => true, 'length' => 10, 'autoincrement' => true]);
                $table->addColumn('page_id', 'integer', ['unsigned' => true, 'length' => 10, 'default' => 0]);
                $table->addColumn('user_id', 'integer', ['unsigned' => true, 'length' => 10, 'default' => 0]);
                $table->addColumn('status', 'smallint');
                $table->addColumn('date', 'datetime', ['notnull' => false]);
                $table->addColumn('modified', 'datetime');
                $table->addColumn('content', 'text');
                $table->setPrimaryKey(['id']);

                $table->addIndex(['user_id'], '@BLOG_POST_USER_ID');
                $table->addIndex(['page_id'], '@SYSTEM_PAGE');
                $table->addIndex(['date'], '@BLOG_POST_DATE');
            });
        }
    },

    'uninstall' => function ($app) {

        $util = $app['db']->getUtility();

        if ($util->tableExists('@teasers_teasers')) {
            $util->dropTable('@teasers_teasers');
        }

    }
];
