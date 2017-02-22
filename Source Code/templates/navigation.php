<ul class="nav nav-tabs">
   <?php $query="SELECT * FROM pages";
			$result=mysqli_query($conn, $query);
			while($nav=mysqli_fetch_assoc($result)){ ?>
                <li role="presentation" <?php if($pageid==$nav['id'] ){echo 'class="active"';} ?>><a href="?page=<?php echo $nav['id']; ?>">
        <?php echo $nav['label']; ?>
    </a>
    <?php } ?>

        <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $user['fullname']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="presentation"><a href="profile.php">Profile</a></li>
            <li role="presentation"><a href="logout.php">Logout</a></li> 
          </ul>
    </li>
</ul>