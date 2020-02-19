<?php
    try
    {
        include('include/db_Conn.php');
        
        $strSql = "INSERT INTO MAS_NCR ";
        $strSql .= "VALUES(";
        $strSql .= "'" . $_POST["ncr_no"] . "',";
        $strSql .= "'" . $_POST["ncr_titile"] . "',";
        $strSql .= "'" . $_POST["ncr_open_date"] . "', ";
        $strSql .= "'" . $_POST["ncr_open_by"] . "', ";
        $strSql .= "'" . $_POST["enter_by"] . "') ";
        //echo $strSql ;

        $statement = $conn->prepare( $strSql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
        $statement->execute();  
        $nRecCount = $statement->rowCount();
        //echo $nRecCount . "<br>";
    }
    catch(PDOException $e)
    {        
        echo substr($e->getMessage(),0,105) ;
    }
?>