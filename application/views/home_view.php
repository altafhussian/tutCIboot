<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Bootstrap Tutorial</title>

	<style type="text/css">


	</style>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />

	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery_3_1_1.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<body>

	<div class="container">
      <div class="row">
      <div class="col-md-2  toppad  pull-right">
           <A href="#" class="pad-right-10" >Back</A>

        <A href="<?php echo base_url("index.php/login/logout"); ?>" >Logout</A>
       <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info light-bd">
            <div class="panel-heading header-color">
							<?php foreach ($user as $value) { ?>
              <h3 class="panel-title"><?php echo $value->firstname . "  " . $value->lastname; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username</td>
                        <td><?php echo $value->username; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $value->email; ?></td>
                      </tr>
                      <tr>
                        <td>First Name</td>
                        <td><?php echo $value->firstname; ?></td>
                      </tr>
                      <tr>
                        <td>Last Name</td>
                        <td><?php echo $value->lastname; ?></td>
                      </tr>
                        <tr>
                        <td>Password</td>
                        <td><?php echo $value->password; ?></td>
                      </tr>
											<?php
											} ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" style="visibility: hidden"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

          </div>
        </div>
      </div>
    </div>

</body>
</html>
