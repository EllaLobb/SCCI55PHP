

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
	
 
      <span class="logo-mini"><img src="img\logosmall.png"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="img\logosmall.png"><b>Room</B>Book</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


       
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="img/user/Holder.jpg" class="user-image" alt="User Image"> <!--UserID pulled in from PHP -->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> <!--PHP Code will show the users Name -->Joe Bloggs</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="img/user/Holder.jpg" class="img-circle" alt="User Image"> <!--UserID pulled in from PHP -->

                <p>
                  <!--PHP Code will show the users Name -->Joe Bloggs
                  <small><!--PHP Code will show the ID number opf the account-->BLO123456789</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">History</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Add Credit</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Blank 2</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('admin/user/logout');?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/user/Holder.jpg" class="img-circle" alt="User Image"> <!--UserID pulled in from PHP -->
        </div>
        <div class="pull-left info">
          <p> <!--PHP Code will show the users Name -->Joe Bloggs</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="ControlPannel.html"><i class="fa fa-home"></i> <span>Control Pannel</span></a></li>
		<li><a href="DormatoryList.html"><i class="fa fa-bed"></i> <span>Dormnatory Room</span></a></li>
        <li><a href="MeetingList.html"><i class="glyphicon glyphicon-blackboard"></i> <span>Meeting Room</span></a></li>
		
		<!--PHP COde will determing Wethere use is an Admin, and as such will have acsess to Admin Center  -->
        <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>Admin Center</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="MeetingAll.html">All Meeting Bookings</a></li>
            <li><a href="DormatoryAll.html">All Dormnatory Bookings</a></li>
			<li><a href="UsersAll.html">All User Accounts</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
 