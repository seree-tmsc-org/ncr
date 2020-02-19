<?php
    //echo $_POST['code'];

    include('include/db_Conn.php');

    $strSql = "SELECT * ";
    $strSql .= "FROM MAS_NCR ";
    $strSql .= "WHERE nc_no ='" . $_POST['code'] . "' ";
    //echo $strSql . "<br>";

    $statement = $conn->prepare( $strSql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));  
    $statement->execute();  
    $nRecCount = $statement->rowCount();
    //echo $nRecCount;
    
    $cOutput = "<div class='table-responsive'>";
    $cOutput .= "<table class='table table-bordered'>";
    $cOutput .= "<thead>";
    $cOutput .= "<th class='text-center' style='width:20%;'>หมายเลข NCR</th>";
    $cOutput .= "<th class='text-center' style='width:20%;'>หน่วยงาน<br>การจัดการ NC</th>";
    $cOutput .= "<th class='text-center' style='width:20%;'>หน่วยงาน<br>การหาสาเหตุ NC</th>";
    $cOutput .= "<th class='text-center' style='width:20%;'>หน่วยงาน<br>การหาแนวทางป้องกัน NC</th>";
    $cOutput .= "<th class='text-center' style='width:20%;'>หน่วยงาน<br>QC</th>";
    $cOutput .= "<thead>";
    $cOutput .= "<tbody>";

    if ($nRecCount == 1)
    {
        $ds = $statement->fetch(PDO::FETCH_NAMED);
        $cOutput .= "<tr>";
        $cOutput .= "<td class='text-center'>" . $ds['nc_no'] . "</td>";
        $cOutput .= "<td style='background-color:green;'>" . $ds['nc_manage_by_dept'] . "</td>";
        $cOutput .= "<td>" . $ds['nc_analyst_by_dept'] . "</td>";
        $cOutput .= "<td style='background-color:lightgray;'>" . $ds['nc_protect_by_dept'] . "</td>";
        $cOutput .= "<td></td>";
        $cOutput .= "</tr>";
        $cOutput .= "</tbody>";
        $cOutput .= "</table>";
        $cOutput .= "</div>";

        $cOutput .= "<div class='checkbox'>";
        $cOutput .= "<label><input type='checkbox' value='Y'>Close NC</label>";
        $cOutput .= "</div>";
    }
    echo $cOutput;
?>