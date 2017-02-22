<p class="lead">Please enter your activity and the duration.</p>
<form class="form-inline" action="index.php?page=5" method="post">
    <div class="form-group">
        <label for="activity">Activity</label>
        <select class="form-control" name="activity">
            <?php include('calories_burned_options.php'); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <div class="input-group">
            <input type="number" class="form-control" name="duration" id="duration" step="0.001" placeholder="Duration" autocomplete="no" />
            <div class="input-group-addon">hours</div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" onclick="location.href = 'index.php?page=5';" class="btn">Reset</button>
</form>
<?php
    if($_POST){
        if($_POST['activity']&& $_POST['duration']){
            $calories_burned=round($_POST['activity']*$_POST['duration']*$user['weight'],0);
?>
               <!-- MAIN PAGE AREA-->
               <h3>You burned:</h3>
<h1 class="text-center" style="font-size:15em;"><?php echo $calories_burned;?><span style="font-size:30pt;">calories</span></h1>
        <?php }
    }
?>