<?php
include('session.php');
include('weburl_config.php')
?>

<?php include('header.php');?>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        WELCOME TO BridgeIRIS Portal!
                    </div>
                </div>
            </div>

		<div class="row">
		 <div class="col-md-2 col-sm-3 col-xs-6">
			<div class="dashboard-div-wrapper bk-clr-one">
				<i  class="fa fa-edit dashboard-div-icon" ></i>
				<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
		</div>
		</div>
				 <?php echo "<h5><a target='_blank' href=" .$highlander. ">HIGHLANDER</font></a></h5>" ?>
			</div>
		</div>


		<div class="col-md-2 col-sm-3 col-xs-6">
		<div class="dashboard-div-wrapper bk-clr-one">
			<i  class="fa fa-edit dashboard-div-icon" ></i>
			<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
		</div>
		</div>
			 <?php echo "<h5><a target='_blank' href=" .$cliniphenome. ">CliniPhenome</font></a></h5>" ?>
		</div>
		</div>


		<div class="col-md-2 col-sm-3 col-xs-6">
			<div class="dashboard-div-wrapper bk-clr-one">
				<i  class="fa fa-edit dashboard-div-icon" ></i>
				<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
		</div>
		</div>
				 <?php echo "<h5><a target='_blank' href=" .$dida. ">DIDA</font></a></h5>" ?>
			</div>
		</div>


		<div class="col-md-2 col-sm-3 col-xs-6">
		<div class="dashboard-div-wrapper bk-clr-three">
			<i  class="fa fa-cogs dashboard-div-icon" ></i>
			<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
		</div>
		</div>
			 <?php echo "<h5><a target='_blank' href=" .$digest. "><font color = 'white'>DiGeST</font></a></h5>" ?>
		</div>
		</div>

		<div class="col-md-2 col-sm-3 col-xs-6">
		<div class="dashboard-div-wrapper bk-clr-three">
			<i  class="fa fa-cogs dashboard-div-icon" ></i>
			<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
		</div>
		</div>
			 <?php echo "<h5><a target='_blank' href=" .$gevact. "><font color = 'white'>GeVaCT</font></a></h5>" ?>
		</div>
		</div>


		<div class="col-md-2 col-sm-3 col-xs-6">
			<div class="dashboard-div-wrapper bk-clr-four">
				<i  class="fa fa-bell-o dashboard-div-icon" ></i>
				<div class="progress progress-striped active">
		<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
		</div>
		</div>
				 <h5>Alerts</h5>
			</div>
		</div>
		</div>


            <div class="row">
                <div class="col-md-6">
                      <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                           Active  Notice Panel
                                <div class="pull-right" >
                                    <div class="dropdown">
  <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    <span class="glyphicon glyphicon-cog"></span>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Refresh</a></li>
    <!--li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li-->
  </ul>
</div>
                                </div>
                            </div>
                            <div class="panel-body">

                                <ul >


                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Refresh</a>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="text-center alert alert-success">
                        <h3> Job Status </h3>
                    </div>
                     <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ref. No.</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th># #</th>
                                        </tr>
                                    </thead>
                                    <!--tbody>

                                        <tr>
                                            <td># 2501</td>
                                            <td>01/22/2015 </td>
                                            <td><label class="label label-success">Completed</label></td>
                                             <td> <a href="#"  class="btn btn-xs btn-success"  >View</a> </td>
                                        </tr>
                                        <tr>
                                            <td># 15091</td>
                                            <td>12/12/2014 </td>
                                            <td>
                                                <label class="label label-warning">Completed</label></td>
                                             <td> <a href="#"  class="btn btn-xs btn-danger"  >Failed</a> </td>
                                        </tr>
                                        <tr>
                                            <td># 11291</td>
                                            <td>12/03/2014 </td>
                                            <td>
                                                <label class="label label-primary"">Progess</label></td>
                                             <td> <a href="#"  class="btn btn-xs btn-info"  >Not Available</a> </td>
                                        </tr>
                                    </tbody-->
                                </table>
                            </div>

                    <hr />
                    <br><br><br><br><br><br><br><br><br><br>
                    	   <div class="container">
           					 <div class="row" align = "center">
                            <div class="text-center alert alert-warning">
							                        <a href="#" class="btn btn-social btn-facebook">
							                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
							                        <a href="#" class="btn btn-social btn-google">
							                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
							                        <a href="#" class="btn btn-social btn-twitter">
							                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
							                        <a href="#" class="btn btn-social btn-linkedin">
							                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-danger">
                        Facing Issues? Drop us a message using the form below.
                    </div>
                    <hr />
                     <div class="Compose-Message">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Compose New Message
                    </div>
                    <div class="panel-body">

                        <label>Enter Recipient Name : </label>
                        <input type="text" class="form-control" />
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control" />
                        <label>Enter Message : </label>
                        <textarea rows="9" class="form-control"></textarea>
                        <hr />
                        <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Send Message </a>&nbsp;
                      <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-tags"></span>  Save To Drafts </a>
                    </div>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                    </div>
                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>
</html>
