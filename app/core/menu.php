<body id="home">
<!-- Navigation bar starts-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<a class="navbar-brand" href="home.php" style="color:#fff;font-weight:600;"> DHARISANA MADHA ACCOUNTS MANAGEMENT SYSTEM</a>
        <ul class="nav navbar-nav">
           <li class="dropdown">
                <a href="#" role="button" aria-expanded="false"> Church<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="church_add_income.php"><span class="glyphicon glyphicon-plus"></span> Income</a></li>
                    <li><a href="church_add_expenditure.php"><span class="glyphicon glyphicon-minus"></span> Expenditure</a></li>
                    <li><a href="church_view_record.php"><span class="glyphicon glyphicon-eye-open"></span> View Records</a></li>
                  </ul>
            </li>
            <li class="dropdown">
                <a href="#" role="button" aria-expanded="false"> School<span class="caret"></span>
                </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="school_add_income.php"><span class="glyphicon glyphicon-plus"></span> Income</a></li>
                    <li><a href="school_add_expenditure.php"><span class="glyphicon glyphicon-minus"></span> Expenditure</a></li>
                    <li><a href="school_view_record.php"><span class="glyphicon glyphicon-eye-open"></span> View Records</a></li>
                  </ul>
            </li>
            <li class="dropdown">
                <a href="#" role="button" aria-expanded="false"> Bank<span class="caret"></span>
                </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="bank_view_income.php"><span class="glyphicon glyphicon-plus"></span> Income</a></li>
                    <li><a href="bank_view_expenditure.php"><span class="glyphicon glyphicon-minus"></span> Expenditure</a></li>
                  </ul>
            </li>
            <?php $db = new SQLite3('../db/core.db') or die('Unable to open database');
            $count= $db->querySingle("SELECT count(id) FROM record WHERE strftime('%d-%m-%Y',date) IS NULL") or ($count=0);
            if($count>0)
            { ?>
            
            <li role="presentation" style="background-color: #d9534f;"><a href="database_error.php" style="color:#fff">Error <span class="badge"><?php echo $count;?></span></a></li>
            
            <?php }?>
        </ul>
          <div class="btn-group navbar-right" style="margin-right:50px">
			<button type="button" class="btn btn-success dropdown-toggle navbar-btn" data-toggle="dropdown"><?php echo $_COOKIE['admin_fname']; ?> <span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="admin_account_setting.php"><span class="glyphicon glyphicon-wrench"></span> Account Settings</a></li>
        <li><a href="admin_add_admin.php"><span class="glyphicon glyphicon-plus"></span> Add new User</a></li>
			  <li><a href="admin_delete.php"><span class="glyphicon glyphicon-trash"></span> Delete User</a></li>
        <li><a href="database_backup.php"><span class="glyphicon glyphicon glyphicon-download-alt"></span> Backup/Restore Database</a></li>
			  <li class="divider"></li>
			  <li><a href="login.php?logout"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
              <li class="divider"></li>
              <li style="text-align:center">v1.3.0</li>
              <li style="text-align:center">Made with <span class="glyphicon glyphicon-heart" style="color:#c7254e"></span> at <br/><span class="glyphicon glyphicon-fire" style="color:#ec971f"></span><strong>Kode</strong>Ignite<li>
			</ul>
		  </div><!-- /btn-group -->	
</nav>
<!-- Navigation bar ends-->
