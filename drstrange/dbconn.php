
<?php
$connectstr='';


foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    $connectstr= $value;
 }
 ?>
 <?php echo $GLOBALS['MYSQLCONNSTR_localdb']; ?>   
Connection String is: <?php echo $connectstr; ?>

<?php
                   $con = mysql_connect('127.0.0.1:49257','azure','6#vWHD_$');
                   if(!$con) { echo "Cannot connect to the database ";die();}
                   mysql_select_db('dbname');
                   $result=mysql_query('show tables');
                   while($tables = mysql_fetch_array($result)) {
                            foreach ($tables as $key => $value) {
                             mysql_query("ALTER TABLE $value CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci");
                       }}
                   echo "The collation of your database has been successfully changed!";
                ?>
