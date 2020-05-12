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
        <p class="mb-0">Academia</p>
      </div>

      <li class="nav-item" role="presentation">
        <div>
          <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">
            <i class="fas fa-graduation-cap fa-2x"></i>&nbsp;<span>Common Stuff</span>
          </a>
          <div class="collapse" id="collapse-1">
            <div class="bg-white border rounded py-2 collapse-inner">
              <a class="collapse-item" href="manage-schools.php">Schools</a>
              <a class="collapse-item" href="manage-degrees.php">Degrees</a>
              <a class="collapse-item" href="manage-batches.php">Batches</a>
              <a class="collapse-item" href="manage-departments.php">Departments</a>
              <a class="collapse-item" href="manage-programmes.php">Programmes</a>
              <a class="collapse-item" href="manage-courses.php">Courses</a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item" role="presentation">
        <div>
          <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">
            <i class="fas fa-calendar fa-2x"></i>&nbsp;<span>Timetables</span>
          </a>
          <div class="collapse" id="collapse-2">
            <div class="bg-white border rounded py-2 collapse-inner">
              <a class="collapse-item" href="add-time-table.php">Add Timetable</a>
              <a class="collapse-item" href="view-time-table.php">View Timetable</a>
              <a class="collapse-item" href="edit-time-table.php">Edit Timetable</a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item" role="presentation">
        <div>
          <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">
            <i class="fas fa-sticky-note fa-2x"></i>&nbsp;<span>Meetings</span>
          </a>
          <div class="collapse" id="collapse-3">
            <div class="bg-white border rounded py-2 collapse-inner">
              <a class="collapse-item" href="add-meeting.php">Add Meeting</a>
              <a class="collapse-item" href="view-meetings.php">View Meetings</a>
            </div>
          </div>
        </div>
      </li>

      <li class="nav-item" role="presentation">
        <div>
          <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button">
            <i class="fas fa-sticky-note fa-2x"></i>&nbsp;<span>Online Classroom</span>
          </a>
          <div class="collapse" id="collapse-4">
            <div class="bg-white border rounded py-2 collapse-inner">
              <a class="collapse-item" href="add-online-classroom.php">Add Classroom</a>
              <a class="collapse-item" href="view-online-classrooms.php">View Classrooms</a>
            </div>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        <p class="mb-0">User-Stuff</p>
      </div>

      <li class="nav-item" role="presentation">
        <div>
          <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-5" href="#collapse-5" role="button">
            <i class="fas fa-user"></i>&nbsp;<span>Profile</span>
          </a>
          <div class="collapse" id="collapse-5">
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
        <a class="nav-link" href="user-session-logs.php">
          <i class="fas fa-sticky-note"></i><span>&nbsp;User&nbsp;Logs</span>
        </a>
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