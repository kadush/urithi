<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Aug 2014 13:01:36 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
    <!-- <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon" /> -->
    <title>Urithi : Login</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/select2/select2.css" />
    
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading"><!-- sign in now --></h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="User ID" required required>
                <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="<?php echo base_url(); ?>assets/#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

            <div class="registration">
                Don't have an account yet?
                <a data-toggle="modal" href="<?php echo base_url(); ?>assets/#reg">
                    Create an account
                </a>
            </div>

        </div>

          <!-- Modal forgot password -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->
          
           <!-- Modal registration -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="reg" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Registration Now</h4>
                      </div>
                      <div class="modal-body">
                      	  <p>Enter your personal details below</p>
                      	   <div class="row">
	                      	   	<div class="col-lg-6"><input type="text" class="form-control" placeholder="Full Name" required></div>
					            <div class="col-lg-6"><input type="text" class="form-control" placeholder="Address" required></div>
				           </div>
				           <div class="row">
					            <div class="col-lg-6"><input type="text" class="form-control" placeholder="Email" required></div>
					            <div class="col-lg-6"><input type="text" class="form-control" placeholder="Phone Number" required></div>
				           </div>
				           <div class="row">
				                <div class="form-group">
                                
                                <div class="col-lg-6">
                                    <select id="e1" class="populate " style="width: 250px">
                                        <optgroup label="Branch">
                                            <option value="AK">Nairobi</option>
                                            <option value="HI">Thika</option>
                                        </optgroup>
                                      
                                    </select>
                                </div>
                            </div>
				           </div>
				            <div class="row">
				            	<div class="radios">
				              
						              <div class="col-lg-6">  
						              	<label class="label_radio col-lg-6 col-sm-6" for="radio-01">
						                    <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Male
						                </label>
						                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
						                    <input name="sample-radio" id="radio-02" value="1" type="radio" /> Female
						                </label>
						               </div>
						            </div>
				            </div>
				
				            <p> Enter your account details below</p>
				            <div class="row">
				            	<div class="col-lg-6"><input type="text" class="form-control" placeholder="User Name" required></div>
				            </div>
				            <div class="row">
					           <div class="col-lg-6"> <input type="password" class="form-control" placeholder="Password"></div>
					           <div class="col-lg-6"> <input type="password" class="form-control" placeholder="Re-type Password"></div>
					        </div>
				            
				            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- Placed js at the end of the document so the pages load faster -->

    <!--Core js-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/select-init.js"></script>

  </body>

<!-- Mirrored from bucketadmin.themebucket.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Aug 2014 13:01:36 GMT -->
</html>
