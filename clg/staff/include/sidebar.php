<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">

    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon"><i class="fas"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Sathyabama</span></div>
        </a>

        <hr class="sidebar-divider my-0">

        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>&nbsp;Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                <p class="mb-0">INTERFACE</p>
            </div>

            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">
                        <i class="fas fa-sticky-note fa-2x"></i>&nbsp;<span>Heading 1</span>
                    </a>
                    <div class="collapse" id="collapse-1">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item" href="#">Sub-Heading 1</a>
                            <a class="collapse-item" href="#">Sub-Heading 2</a>
                            <a class="collapse-item" href="#">Sub-Heading 3</a>
                        </div>
                    </div>
                </div>
			</li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#">
                    <i class="fas "></i><span>&nbsp;Heading 2</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                <p class="mb-0">Side Heading 1</p>
            </div>

            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">
                        <i class="fas fa-user"></i>&nbsp;<span>Profile</span>
                    </a>
                    <div class="collapse" id="collapse-3">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item" href="my-profile.php">My Profile</a>
                            <a class="collapse-item" href="change-password.php">Change Password</a>
                        </div>
                    </div>
                </div>

                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-controls="collapsePages">
                    <div class="bg-white border rounded py-2 collapse-inner">
                        <a class="collapse-item" href="my-profile.php">My Profile</a>
                        <a class="collapse-item" href="change-password.php">Change Password</a>
                    </div>
                </div>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i><span>&nbsp;Log Out</span>
                </a>
            </li>
            <hr class="sidebar-divider">
        </ul>

        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
        </div>
    </div>
</nav>