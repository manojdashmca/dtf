<?php
(isset($_REQUEST['division'])) ? $linkdiv = $_REQUEST['division'] : $linkdiv = '';
(isset($_REQUEST['city'])) ? $linkcity = $_REQUEST['city'] : $linkcity = '';
?>
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-single.png" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-inner-small.png" alt="" height="100">
            </span>
        </a>
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-single.png" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-inner-small.png" alt="" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="pipe-dashboard" class="nav-link menu-link">
                        <i class="ri-home-7-fill"></i> <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sliderProgressdata" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sliderProgressdata">
                        <i class="bi bi-hdd-stack"></i> 
                        <span data-key="t-advance-ui">Progress Update</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sliderProgressdata">
                        <ul class="nav nav-sm flex-column">
             
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link" data-key="t-sweet-alerts">Construction</a>
                            </li>
                            <li class="nav-item">
                                <a href="/getPipeMeterConnection" class="nav-link active" data-key="t-sweet-alerts">House Connection</a>
                            </li>
                            <li class="nav-item">
                                <a href="getAlljalsathi?pager=<?= $pagerid ?>&division=<?= $linkdiv ?>&city=<?= $linkcity ?>&transactionid=<?= $session->get('trnid') ?>" class="nav-link" data-key="t-sweet-alerts">Jalsathi</a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="/getAllrevenueCollection" class="nav-link" data-key="t-sweet-alerts">Revenue Collection</a>
                            </li>
                            <li class="nav-item">
                                <a href="/getAllGrievanceCustomer" class="nav-link" data-key="t-sweet-alerts">Grievance Redressal</a>
                            </li>
                            <li class="nav-item">
                                <a href="/getAllWaterQuality" class="nav-link" data-key="t-sweet-alerts">Water Quality</a>
                            </li>
                            <li class="nav-item">
                                <a href="/DmaInfoPage" class="nav-link" data-key="t-sweet-alerts">DMA Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-sweet-alerts">Realtime Monitoring</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sliderProgressdataentry" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sliderProgressdataentry">
                        <i class="bi bi-hdd-stack"></i> 
                        <span data-key="t-advance-ui">Progress Entry</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sliderProgressdataentry">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="/configuration" class="nav-link" data-key="t-sweet-alerts">Construction</a>
                            </li>
                            <li class="nav-item">
                                <a href="/progress-entry" class="nav-link" data-key="t-grid-js">Progress Entry</a>
                            </li>
                            <li class="nav-item">
                                <a href="/addNewdma" class="nav-link" data-key="t-grid-js">Dma/Zone</a>
                            </li>
                            <li class="nav-item">
                                <a href="pageJalasathi" class="nav-link" data-key="t-sweet-alerts">Jalasathi</a>
                            </li>
                            <li class="nav-item">
                                <a href="/getRevenuePage" class="nav-link" data-key="t-sweet-alerts">Revenue Collection</a>
                            </li>
                            <li class="nav-item">
                                <a href="/getGrievanceCustomerPage" class="nav-link" data-key="t-sweet-alerts">Grievance Redressal</a>
                            </li>
                            <li class="nav-item">
                                <a href="/waterQualityPage" class="nav-link" data-key="t-sweet-alerts">Water Quality</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-sweet-alerts">Photogallery</a>
                            </li>
                           
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link menu-link">
                        <i class="bi bi-receipt"></i> <span data-key="t-two-column">Report Generation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link menu-link">
                        <i class="bi bi-people"></i> <span data-key="t-two-column">Review Meeting</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="bx bx-droplet"></i> <span data-key="t-tables">Organiser</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            
                            <li class="nav-item">
                                <a href="/component-master" class="nav-link" data-key="t-basic-tables">Component Master</a>
                            </li>
                            <li class="nav-item">
                                <a href="/task-master" class="nav-link" data-key="t-basic-tables">Task Master</a>
                            </li>
                            <li class="nav-item">
                                <a href="/sub-task-master" class="nav-link" data-key="t-grid-js">Subtask Master</a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="/addNewdma" class="nav-link" data-key="t-grid-js">Add New Dma/Zone</a>
                            </li>
                            <li class="nav-item">
                                <a href="pipe-divisions-master" class="nav-link" data-key="t-basic-tables">Division</a>
                            </li>
                            <li class="nav-item">
                                <a href="cityTablePage" class="nav-link" data-key="t-basic-tables">Cities</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/project-clearance" class="nav-link menu-link" > 
                        <i class="bi bi-briefcase"></i> <span data-key="t-two-column">Project Clearance/Issues</span> 
                    </a>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">