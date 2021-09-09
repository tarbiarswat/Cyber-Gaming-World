    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hi, Admin <sup></sup></div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Core Interfaces
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-tasks"></i>
          <span>Tournaments</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Access Tournaments</h6>
            <a class="collapse-item" href="add_tournaments.php">Add Tournaments</a>
            <a class="collapse-item" href="view_tournaments.php">View Tournaments</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-tasks"></i>
          <span>Game Updates</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Access Game Updates</h6>
            <a class="collapse-item" href="add_game_updates.php">Add Game Updates</a>
            <a class="collapse-item" href="view_game_updates.php">View Game Updates</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-swatchbook"></i>
          <span>Games</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Access Games</h6>
            <a class="collapse-item" href="add_games.php">Add New Game</a>
            <a class="collapse-item" href="view_games.php">View Games</a>
            
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Portals
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Admin Resources</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">File Manager</h6>
            <a class="collapse-item" href="#">Add A New File</a>
            <a class="collapse-item" href="#">Uploaded Files</a>

            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="#">Send Notifications</a>
            <a class="collapse-item" href="#">Blank Page</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="gamers.php">
          <i class="fas fa-user-plus"></i>
          <span>Gamers</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="organizers.php">
          <i class="fas fa-user-plus"></i>
          <span>Organizers</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="memberslist.php">
          <i class="fas fa-user-plus"></i>
          <span>Members</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="feedbacks.php">
          <i class="fas fa-question-circle"></i>
          <span>Feedbacks</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-network-wired"></i>
          <span>Extras</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>