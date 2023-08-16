<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-single.png" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-inner-small.png" alt="" height="100">
            </span>
        </a>
        <a href="/dashboard" class="logo logo-light">
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
                    <a href="/dashboard" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Dashboard</span> </a>
                </li>
<!--                <li class="nav-item">
                    <a class="nav-link menu-link" href="/users-list">
                        <i class="bi bi-people-fill"></i> <span data-key="t-widgets">Manage Users</span>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a href="/physical-progress" class="nav-link menu-link" > 
                        <i class="bi bi-journal-medical"></i> <span data-key="t-detached">Physical Progress(ULB)</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/financial-progress" class="nav-link menu-link"> 
                        <i class="bi bi-currency-dollar"></i> <span data-key="t-horizontal">Financial Progress</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/progress-entry" class="nav-link menu-link"> 
                        <i class="bi bi-layout-text-sidebar-reverse"></i> <span data-key="t-hovered">Progress Entry</span> </a>
                </li> 
                <li class="nav-item">
                    <a href="/project-clearance" class="nav-link menu-link" > 
                        <i class="bi bi-briefcase"></i> <span data-key="t-two-column">Project Clearance/Issues</span> 
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link menu-link"> <i class="bi bi-images"></i> 
                        <span data-key="t-contact">Photo Gallery</span> </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/configuration" >
                        <i class="bi bi-gear"></i> <span data-key="t-components">Configuration</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMasterData" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMasterData">
                        <i class="bi bi-hdd-stack"></i> <span data-key="t-advance-ui">Master Data</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMasterData">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="component-master" class="nav-link" data-key="t-sweet-alerts">Component Master</a>
                            </li>
                            <li class="nav-item">
                                <a href="task-master" class="nav-link" data-key="t-nestable-list">Task Master</a>
                            </li>
                            <li class="nav-item">
                                <a href="sub-task-master" class="nav-link" data-key="t-scrollbar">Subtask Master</a>
                            </li>
                            <li class="nav-item">
                                <a href="report-header" class="nav-link" data-key="t-swiper-slider">Report Header</a>
                            </li>                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="bi bi-file-earmark-text"></i> <span data-key="t-documentation">Reports</span> 
                    </a>
                </li>
                <li class="nav-item">
                     <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                         <i class="bx bx-droplet"></i> <span data-key="t-tables">Master Pipeline</span>
                     </a>
                     <div class="collapse menu-dropdown" id="sidebarTables">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="pipe-divisions-master" class="nav-link" data-key="t-basic-tables">Division</a>
                             </li>
                             <li class="nav-item">
                                 <a href="pipe-cities-master" class="nav-link" data-key="t-basic-tables">Cities</a>
                             </li>
                             <li class="nav-item">
                                 <a href="pipe-zones-master" class="nav-link" data-key="t-grid-js">DMA/Zone</a>
                             </li>
                         </ul>
                     </div>
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