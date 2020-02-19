<?php
    try
    {        
        include('include/db_Conn.php');

        $strSql = "SELECT * ";
        $strSql .= "FROM MAS_NCR M ";
        $strSql .= "JOIN DET_NCR D ON D.nc_no = M.nc_no AND D.nc_material_code = M.nc_material_code ";
        $strSql .= "ORDER BY M.nc_no ";
        //echo $strSql . "<br>";

        $statement = $conn->prepare( $strSql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));  
        $statement->execute();  
        $nRecCount = $statement->rowCount();
        if ($nRecCount >0)
        {
            echo "<div class='table-responsive'>";
            echo "<table class='table table-hover table-bordered' id='myncr_table'>";
            echo "<thead style='background-color:hsl(275,100%,40%);'>";

            echo "<tr>";
            echo "<th class='text-center' style='color:white'>NCR No.</th>";
            echo "<th class='text-center' style='color:white'>วันที่เปิด NC</th>";
            echo "<th class='text-center' style='color:white'>สถานที่พบ NC</th>";
            echo "<th class='text-center' style='color:white'>ประเภท NC</th>";
            echo "<th class='text-center' style='color:white'>Material Name</th>";
            echo "<th class='text-center' style='color:white'>Lot No.</th>";
            echo "<th class='text-center' style='color:white'>น้ำหนัก</th>";
            echo "<th class='text-center' style='color:white'>ปัญหาที่พบ</th>";
            //echo "<th class='text-center' style='color:white'; width:5%>การจัดการ - หน่วยงาน</th>";
            //echo "<th class='text-center' style='color:white'; width:5%>หาสาเหตุ - หน่วยงาน</th>";
            echo "<th class='text-center' style='color:white'>Mode</th>";
            echo "</tr>";

            echo "</thead>";
            echo "<tbody>";            

            while ($ds = $statement->fetch(PDO::FETCH_NAMED))
            {
                echo "<tr>";
                echo "<td>" . $ds['nc_no'][0] . "</td>";
                echo "<td class='col-lg-2'>" . date('d-M-Y', strtotime($ds['nc_open_date'])) . "</td>";
                echo "<td>" . $ds['nc_found_location'] . "</td>";
                echo "<td>" . $ds['nc_type'] . "</td>";
                echo "<td class='col-lg-3'>" . $ds['nc_material_name'] . "</td>";
                echo "<td>" . $ds['nc_lot_no'] . "</td>";
                echo "<td class='text-right'>" . number_format($ds['nc_qty'],2,'.',',') . "</td>";
                echo "<td class='col-lg-3'>" . $ds['nc_problem'] . "</td>";
                //echo "<td>" . $ds['nc_manage_by_dept'] . "</td>";
                //echo "<td>" . $ds['nc_analyst_by_dept'] . "</td>";

                echo "<td class='text-center'>";
                echo "<a href='#' class='view_data' nc_no='" . $ds['nc_no'][0] . "' >";
                echo "<span class='fa fa-sticky-note-o fa-lg'></span>";
                echo "</a>";
                echo "<br>";
                echo "<a href='#' class='edit_data' nc_no='" . $ds['nc_no'][0] . "'>";
                echo "<span class='fa fa-pencil-square-o fa-lg'></span>";
                echo "</a>";
                echo "<br>";
                echo "<a href='#' class='delete_data' nc_no='" . $ds['nc_no'][0] . "'>";
                echo "<span class='fa fa-trash-o fa-lg'></span>";
                echo "</a>";
                echo "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            echo "<script> $(document).ready(function() { $('#myncr_table').DataTable(); } ); </script>";
        }
        else
        {
            echo "Data not found ...!";
            //echo "<script> alert('Warning! No Data ! ... ); window.location.href='pMain.php'; </script>";
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>    