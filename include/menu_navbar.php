<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" 
                class="navbar-toggle collapsed" 
                data-toggle="collapse" 
                data-target="#navbar" 
                aria-expanded="false" 
                aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<img src="images/tmsc-logo-128.png" width="96" class="img-responsive center-block">-->
            <img src="images/tmsc-logo-128.png" width="96">
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="Main.php">
                        <span class="fa fa-home fa-lg" style="color:blue"></span>
                        Home
                    </a>                            
                </li>                
            </ul>            

            <!-- Menu NC Data -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-sticky-note-o fa-lg" style="color:blue"></span> 
                        NC
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="NCR_Main.php">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Open NCR
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="#">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Close NCR
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="#">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Follow Up Closed NCR
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Menu Input Data -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-clone fa-lg" style="color:blue"></span> 
                        Input Support Data
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="NCR_Manage.php">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Record Manage-Section
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="NCR_Root.php">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Record Root Cause-Section
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="NCR_Protect.php">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Record Protection-Section
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="#">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Record QC-Section
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Menu Approval -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-check-square-o fa-lg" style="color:blue"></span> 
                        Approval
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Approval Manage-Section
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="#">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Approval Root Cause-Section
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="#">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Approval Protection-Section
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="approveQC.php">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Approval QC-Section
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Menu Report -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-print fa-lg" style="color:blue"></span> 
                        Report
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                ใบรายงานสิ่งที่ไม่เป็นไปตามข้อกำหนด
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                               Non Conforming Product Action Request
                            </a>
                        </li>
                        <li class="divider">
                        <li>
                            <a href="">
                                <span class='fa fa-square-o fa-lg' style="color:navy"></span>
                                Monitoring Screen To Follow up NC Status 
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-wrench fa-lg" style="color:blue"></span> 
                        Tools
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="pMA_User.php">
                                <span class='fa fa-address-card-o' style="color:blue"></span>
                                User Management
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class='fa fa-user-circle-o fa-lg' style="color:blue"></span> 
                        Login as ... 
                        <?php echo $_SESSION["ses_email"];?> 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>                                
                            <a href="#" data-toggle="modal" data-target="#chgpasswordModal">
                                <span class='fa fa-pencil-square-o fa-lg'></span> 
                                Change Password
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>                                
                            <a href="#" data-toggle="modal" data-target="#logoutModal">
                                <span class="fa fa-sign-out fa-lg"></span> 
                                logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>