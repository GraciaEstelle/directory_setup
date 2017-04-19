<?php

require "database/Connection.php";
require "database/QueryBuilder.php";
$config = require "config.php";

return new QueryBuilder(
    Connection::Make($config['database'])
);
