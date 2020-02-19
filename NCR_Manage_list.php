<?php
    try
    {        
        include('include/db_Conn.php');

        $strSql = " SELECT  ";
        $strSql .= " MAS_NCR.nc_no,";
        $strSql .= " MAS_NC_MANAGE.mgt_howto,";
        $strSql .= " MAS_NC_MANAGE.mgt_other,";
        $strSql .= "  MAS_NC_MANAGE.mgt_detail,";
        $strSql .= "  MAS_NC_MANAGE.mgt_by_dept,";
        $strSql .= "  MAS_NC_MANAGE.mgt_pic,";
        $strSql .= "  MAS_NC_MANAGE.mgt_approve_by,";
        $strSql .= "  MAS_NC_MANAGE.mgt_qa_approve_by,";
        $strSql .= "  MAS_NCR.nc_material_name,";
        $strSql .= "  DET_NCR.nc_lot_no,";
        $strSql .= "  DET_NCR.nc_qty,";        
        $strSql .= "  MAS_NCR.nc_problem ";
        $strSql .= "FROM MAS_NCR ";
        $strSql .= "INNER JOIN MAS_NC_MANAGE ON MAS_NCR.nc_no = MAS_NC_MANAGE.nc_no ";
        $strSql .= "INNER JOIN DET_NCR ON DET_NCR.nc_no = MAS_NCR.nc_no ";
        //echo $strSql . "<br>"  ;
        
  

        $statement = $conn->prepare( $strSql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));  
        $statement->execute();  
        $nRecCount = $statement->rowCount();
        if ($nRecCount >0)
        {
            echo "<div class='table-responsive'>";
            echo "<table class='table table-striped table-bordered' style='width:100%' id='myncr_table'>";        
            echo "<thead style='background-color:hsl(275,100%,40%);'>";

            echo "<tr>";
            echo "<th class='text-center' style='color:white'>NCR No.</th>";
            echo "<th class='text-center' style='color:white'>วิธีการจัดการกับ NC</th>";
            echo "<th class='text-center' style='color:white'>อื่นๆ กรุณาระบุ</th>";
            echo "<th class='text-center' style='color:white'>รายละเอียด(ระบุรายละเอียดของวิธีการจัดการ)</th>";
            echo "<th class='text-center' style='color:white'>หน่วยงาน</th>";
            echo "<th class='text-center' style='color:white'>ผู้ปฎิบัติงาน</th>";
            echo "<th class='text-center' style='color:white'>ผจก./ผจก.อวุโส</th>";
            echo "<th class='text-center' style='color:white'>ผจก.QA/ผอ.เทคนิค(Incase off blending rule request)</th>";
            echo "<th class='text-center' style='color:white'>Material Name</th>";
            echo "<th class='text-center' style='color:white'>Lot No.</th>";
            echo "<th class='text-center' style='color:white'>น้ำหนัก</th>";
            echo "<th class='text-center' style='color:white'>ปัญหาที่พบ</th>";
            echo "<th class='text-center' style='color:white'>Mode</th>";
            echo "</tr>";

            echo "</thead>";
            echo "<tbody>";            

            while ($ds = $statement->fetch(PDO::FETCH_NAMED))
            {
                echo "<tr>";
                echo "<td>" . $ds['nc_no'] . "</td>";
                echo "<td>" . $ds['mgt_howto'] . "</td>";
                echo "<td>" . $ds['mgt_other'] . "</td>";
                echo "<td>" . $ds['mgt_detail'] . "</td>";
                echo "<td>" . $ds['mgt_by_dept'] . "</td>";
                echo "<td>" . $ds['mgt_pic'] . "</td>";
                echo "<td>" . $ds['mgt_approve_by'] . "</td>";
                echo "<td>" . $ds['mgt_qa_approve_by'] . "</td>";
                echo "<td>" . $ds['nc_material_name'] . "</td>";
                echo "<td>" . $ds['nc_lot_no'] . "</td>";
                echo "<td class='text-right'>" . number_format($ds['nc_qty'],2,'.',',') . "</td>";
                echo "<td>" . $ds['nc_problem'] . "</td>";

                echo "<td class='text-center'>";
                echo "<a href='#' class='view_data' category_code='" . $ds['nc_no'][0] . "' >";
                echo "<span class='fa fa-sticky-note-o fa-lg'></span>";
                echo "</a>";
                echo "<br>";
                echo "<a href='#' class='edit_data' category_code='" . $ds['nc_no'][0] . "'>";
                echo "<span class='fa fa-pencil-square-o fa-lg'></span>";
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