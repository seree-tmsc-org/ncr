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
?>        
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>NCR System [v.1.0]</title>
                <link rel="icon" href="images/tmsc-logo-128.png" type="image/x-icon" />
                <link rel="shortcut icon" href="images/tmsc-logo-128.png" type="image/x-icon" />

                <!--
                <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
                <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">  
                -->

                <style>
                    body {font-family:Arial;}
                    h2 {margin:5px;}
                    input[type=text] {margin:10px}
                    input[type=button] {margin:10px}  
                    .containxx {width: 20%; float:left;clear: right;margin:10px; border-radius: 5px;}
                    .sortable1 { list-style-type: none; margin:0; padding:2px; min-height:30px; border-radius: 5px;}
                    .sortable1 li { margin: 3px 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px;}
                    .sortable1 li span { position: absolute; margin-left: -1.3em; }

                    .card1 {background-color:white; border-radius:10px;}
                </style>

                <?php require_once("include/library.php"); ?>

                <script>
                    $(function() {
                        $( ".sortable" ).sortable({
                            connectWith: ".connectedSortable",
                            receive: function( event, ui ) {
                                $(this).css({"background-color":"blue"});
                            }
                        }).disableSelection();

                        $('.add-button').click(function() {
                            var txtNewItem = $('#new_text').val();
                            $(this).closest('div.containxx').find('ul').append('<li class="card1">'+txtNewItem+'</li>');
                        });
                    });
                </script>  
            </head>
            
            <!--<body style='background-color:black;'>-->
            <body>
                <!-- Begin Body page -->
                <!--<div class="Container">-->
                    <br>
                    <!-- Begin Static navbar -->
                    <?php require_once("include/menu_navbar.php"); ?>
                    <!-- End Static navbar -->

                    <!-- Begin content page-->
                    <div>
                        <div class="containxx" style="background-color:pink;">
                            <h2>TODO</h2>
                            <ul class="sortable1 connectedSortable">
                            <li class="card1">Activity A1</li>
                            <li class="card1">Activity A2</li>
                            <li class="card1">Activity A3</li>
                            </ul>
                        </div>

                        <div class="containxx" style="background-color:orange;">
                            <h2>In Progress</h2>
                            <ul class="sortable1 connectedSortable" >
                            <li class="card1">Activity B1</li>
                            <li class="card1">Activity B2</li>
                            </ul>
                        </div>
                        
                        <div class="containxx" style="background-color:yellow;">
                            <h2>Verification</h2>
                            <ul class="sortable1 connectedSortable" >
                            <li >Activity C1</li>
                            <li >Activity C2</li>
                            </ul>
                        </div>

                        <div class="containxx" style="background-color:green;">
                            <h2>Done</h2>
                            <ul class="sortable1 connectedSortable" >
                            </ul>
                        </div>
                    </div>

                    <!-- End content page -->
                <!--</div>-->
                <!-- End Body page -->
                    
                <!-- Logout Modal-->
                <?php require_once("include/modal_logout.php"); ?>

                <!-- Change Password Modal-->
                <?php require_once("include/modal_chgpassword.php"); ?>
                
                <!--
                <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
                <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                -->
                
            </body>
        </html>
<?php
    }
?>