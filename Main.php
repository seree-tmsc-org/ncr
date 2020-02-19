<?php
    include_once('include/chk_Session.php');
    if($user_email == "")
    {
        echo "<script> 
                alert('Warning! Please Login!'); 
                window.location.href='login.php'; 
            </script>";
    }
    else
    {
        if($user_user_type == "A" || $user_user_type == "P")
        {
?>        
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>NCR</title>
                <link rel="icon" href="images/tmsc-logo-128.png" type="image/x-icon" />
                <link rel="shortcut icon" href="images/tmsc-logo-128.png" type="image/x-icon" />
              
                <?php require_once("include/library.php"); ?>

                <style>
                    body {
                        font-family:Arial;
                    }
                    h2 {
                        margin:5px;
                    }
                    .contain-header {
                        text-align:center;
                        width: 15%;
                        float:left;
                        clear: right;
                        margin-left:1%;
                        margin-right:1%;
                        border-radius: 5px;
                        border: 2px solid black;
                    }
                    .contain-detail {
                        text-align:center;
                        width: 47%;
                        float:left;
                        clear: right;
                        margin-left:1%;
                        margin-right:1%;
                        border-radius: 5px;
                        border: 2px solid black;
                    }
                    .sortable-1 {
                        list-style-type: none; 
                        margin:0; 
                        padding:5px; 
                        min-height:30px; 
                        border-radius: 5px;
                        border: 1px solid grey;
                    }
                    .sortable-1 li { 
                        margin: 1px 1px 4px 1px;
                        /*padding: 0.4em; */
                        /*padding-left: 1em;*/
                        /*font-size: 1em;*/
                        /*height: 20px;*/
                        border: 1px solid black;
                    }
                    /*
                    .sortable-1 li span {
                        position: absolute;
                        margin-left: -1.3em;
                    }
                    */
                    .card-1 {
                        background-color:white;
                    }
                </style>
                
                <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                <script>
                    $(function() {
                        /*
                        $( ".sortable-1" ).sortable({
                            connectWith: ".connectedSortable",
                            receive: function( event, ui ) {
                                $(this).css({"background-color":"whitesmoke"});
                            }
                        }).disableSelection();
                        */

                        $( ".sortable-1 li" ).mouseover(function(){
                            $(this).css('cursor', 'pointer');
                            $("#ul-detail").append("<p style='color:red'>-- Detial of NC --</p>");
                        })

                        $( ".sortable-1 li" ).mouseleave(function(){
                            $(this).css('cursor', 'default');
                            $("#ul-detail").empty();
                        })
                    });
                </script>
            </head>
            
            <!--<body style='background-color:black;'>-->
            <body class="p-3 mb-2 bg-danger text-white" style='background-color:white;'>
                <!-- Begin Body page -->
                <div class="container">
                    <br>
                    <!-- Begin Static navbar -->
                    <?php require_once("include/menu_navbar.php"); ?>
                    <!-- End Static navbar -->

                    <!-- Begin content page-->
                    <div class="row">
                        <!-- date picker-->
						<div class="col-md-12 form-group">
							<label class="col-md-4 control-label" for="textinput">วันที่เปิด NC</label>
							<div class="col-md-1">
								<input id="datepicker" width="150" />
							</div>
						</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p></p>
                            <h5>-- Main Page --</h5>                            

                            <div>
                                <div class="contain-header" style="background-color:green;">
                                    <h2>Open</h2>
                                    <ul class="sortable-1 connectedSortable">
                                        <li class="card-1">Activity A1</li>
                                        <li class="card-1">Activity A2</li>
                                        <li class="card-1">Activity A3</li>
                                    </ul>
                                </div>

                                <div class="contain-header" style="background-color:orange;">
                                    <h2>Waiting</h2>
                                    <ul class="sortable-1 connectedSortable" >
                                        <li class="card-1">Activity B1</li>
                                        <li class="card-1">Activity B2</li>
                                    </ul>
                                </div>

                                <div class="contain-header" style="background-color:pink;">
                                    <h2>Close</h2>
                                        <ul class="sortable-1 connectedSortable" >
                                    </ul>
                                </div>

                                <div class="contain-detail" style="background-color:lightgray;">
                                    <h2>Detail</h2>
                                        <ul class="sortable-1 connectedSortable" id='ul-detail'>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- End content page -->
                </div>  
                <!-- End Body page -->

                <!-- Logout Modal-->
                <?php require_once("include/modal_logout.php"); ?>

                <!-- Change Password Modal-->
                <?php require_once("include/modal_chgpassword.php"); ?>

                <script>
                    $(document).ready(function(){
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap'
                        });
                    })
                </script>
            </body>
        </html>
<?php
        }
        else
        {
            echo "<script> alert('You are not authorization for this menu ... Please contact your administrator!'); window.location.href='pMain.php'; </script>";
        }
    }
?>