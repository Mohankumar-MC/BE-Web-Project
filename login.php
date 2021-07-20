<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
		$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$pass=md5($p);	

		$sql=mysqli_query($conn,"select * from user where email='$e' and pass='$pass'");

		$r=mysqli_num_rows($sql);

		if($r==true)
		{
			$_SESSION['user']=$e;
			header('location:user');
		}
		else
		{
			$err="<font color='red'>Invalid login details</font>";
		}
	}
}
?>
        <div class="row" style="width:80%;">
            <div>
                <div class="login-panel panel panel-default" style="border-color:maroon;">
                    <div class="panel-heading" style="background-color:maroon;color:white;text-align:center;">
                        <h3 class="panel-title">User Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
								
							<div class="row">
								<div class="col-sm-4"></div>
								<div class="col-sm-4"><?php echo @$err;?></div>
							</div>
                                <div class="form-group">
                                    <input class="form-control" name="e" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="p" type="password" required>
                                </div>
                                <div class="row" style="margin-top:10px;">
									<div class="col-sm-4"></div>
									<div class="col-sm-8">
										<input type="submit" value="Login" name="save" class="btn btn-success" style="background-color:maroon;"/>
										<div class="form-group">
                                    		<label>
												<?php echo @$err;?>
											</label>
										</div>
                    				</div>
                				</div>
						</form>
            		</div>
    			</div>
			</div>
		</div>