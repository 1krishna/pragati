<div class="nano">
	<div class="nano-content">
		<nav id="menu" class="nav-main" role="navigation">

			<ul class="nav nav-main">
				<li>
					<a class="nav-link" href="dashboard.php">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fas fa-user-lock" aria-hidden="true"></i>
						<span>Meetings</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="meeting-create.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Create Meetings
							</a>
						</li>
						<li>
							<a class="nav-link" href="meeting-view.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								View Meetings
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-parent">
					<a class="nav-link" href="#">
						<i class="fas fa-user-lock" aria-hidden="true"></i>
						<span>Profile Details</span>
					</a>
					<ul class="nav nav-children">
						<li>
							<a class="nav-link" href="profile-upd.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Update Profile
							</a>
						</li>
						<li>
							<a class="nav-link" href="profile-pic.php">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
								Profile Picture Update
							</a>
						</li>
						<li>
							<a class="nav-link" href="passwd-upd.php">
								<i class="fas fa-key" aria-hidden="true"></i>
								Change Password
							</a>
						</li>
						<li>
							<a class="nav-link" href="tabs-add.php">
								<i class="fa fa-tags" aria-hidden="true"></i>
								Add New Profile Tab
							</a>
						</li>
						<li>
							<a class="nav-link" href="tabs-view.php">
								<i class="fa fa-eye" aria-hidden="true"></i>
								Tabs View
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] . "?lo"; ?>">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>LogOut</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>