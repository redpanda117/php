<?php
require 'database/connection.php';
require 'database/queryBuilder.php';

/*you can use :: insted of
you don't need an instance when using a static (in connection file)
when you don't need an instance of a class but run some logic
$connection = new Connection();
$connection->make()*/ 

return new QueryBuilder(Connection::make());