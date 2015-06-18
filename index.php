<?php 
$a = pg_connect("host=localhost port=5432 dbname=test user=postgres password=root");
var_dump($a);
 $result = pg_query('select * from oo');

while ($row = pg_fetch_row($result)) {
  echo "Автор: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}
?>