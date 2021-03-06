<?php

class create_users_table
{
    public function up()
    {
        $db = \core\Application::$app->db;
        $SQL = "
            CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=INNODB;";
        $db->connect->exec($SQL);
    }

    public function down()
    {
        echo "Down migrations " . PHP_EOL;
    }
}
