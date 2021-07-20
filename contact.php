<div class="row" style="width:80%;">
	<div>
   		<div class="login-panel panel panel-default" style="border-color:maroon;">
        	<div class="panel-heading" style="background-color:maroon;color:white;text-align:center;">
            	<h3 class="panel-title">Quick Contact</h3>
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
                       	<input class="form-control" placeholder="Phone Number" name="p" type="number" required>
                    </div>
					<div class="form-group">
                    	<input class="form-control" placeholder="Message" name="msg" type="text" required>
                    </div>
                    <div class="row" style="margin-top:10px;">
						<div class="col-sm-4"></div>
							<div class="col-sm-8">
								<input type="submit" value="Connect" name="save" class="btn btn-success" style="background-color:maroon;"/>
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
