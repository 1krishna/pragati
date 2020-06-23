	<script src="js/custom.js"></script>

	<header class="header">
	    <div class="logo-container">
	        <a href="dashboard.php" class="logo">
	            <img src="img/logo.png" width="130" height="40" alt="Porto Admin" />
	        </a>
	        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
	            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
	        </div>
	    </div>
	    <?php
        if (!isset($_SESSION['user_name']) || isset($_GET['lo'])) {
            session_destroy();
            header('Location: index.php');
        }
        $user = "SELECT * FROM `users` WHERE `user_name`='{$_SESSION['user_name']}'";
        $user = mysqli_query($conn, $user);
        $user = mysqli_fetch_assoc($user);
        ?>
	    <!-- start: search & user box -->
	    <div class="header-right">
	        <span class="separator"></span>
	        <div id="userbox" class="userbox">
	            <a href="#" data-toggle="dropdown">
	                <div class="profile-info" data-lock-name="John Doe" data-lock-email="<?php echo $user['email']; ?>">
	                    <span class="name"><?php echo $user['name']; ?></span>
	                    <span class="role"><?php echo $user['designation']; ?></span>
	                </div>

	                <i class="fa custom-caret"></i>
	            </a>

	            <div class="dropdown-menu">
	                <ul class="list-unstyled mb-2">
	                    <li class="divider"></li>
	                    <li>
	                        <a role="menuitem" tabindex="-1" href="<?php echo $_SERVER['PHP_SELF'] . "?lo"; ?>"><i class="fas fa-power-off"></i> Logout</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	  </header>