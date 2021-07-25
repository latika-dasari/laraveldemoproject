<?php
 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // connect to mysqli database
    try
	{
       $connect = mysqli_connect("localhost", "root", "", "demodb");
    }
	catch (mysqli_sql_exception $ex) 
	{
       echo 'Error';
	}
?>