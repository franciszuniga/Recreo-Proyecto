<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                 <!-- Sidenav Link (Dashboard)-->
                <li class="nav-item mt-2">
                    <a class="nav-link active" href="/admin/main">
                        <div class="nav-link-icon"><em class='bx bx-home'></em></div>
                        Dashboard
                    </a>
                </li>
                <!-- Sidenav Menu Heading (admin)-->
                <div class="sidenav-menu-heading">Administacion</div>
                <!-- Sidenav Link (Home)-->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="nav-link-icon"><em class='bx bx-user-circle'></em></div>
                        Perfil
                    </a>
                </li>
                <!-- Sidenav Link (About)-->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout">
                    <div class="nav-link-icon"><em class='bx bx-book-alt'></em></div>
                    About
                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down' style="color:gray; font-size:16px;"></em></div>
                </a>
                <div class="collapse" id="collapseAbout" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                            <a class="nav-link" href="#">Educations</a>
                            <a class="nav-link" href="#">Experiences</a>
                        </li>
                    </nav>
                </div>


                
                <!-- Sidenav Link (Portafolio)-->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <div class="nav-link-icon"><em class='bx bx-book-content'></em></div>
                        Portafolio
                    </a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Conectado como:</div>
                <div class="sidenav-footer-title">{{Auth::user()->name}}</div>
            </div>
        </div>
    </nav>
</div>