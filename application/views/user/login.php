    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="form-errors" class="alert alert-danger col-sm-12"></div>
                        <div style="display:none" id="form-success" class="alert alert-success col-sm-12"></div>
                            
                        <form action="<?php echo site_url('login')?>" method="post" id="loginform" class="form-horizontal" role="form">
                            <div class="col-sm-12 controls">                                    
                            <div class="form-group">
                                <label for="email">Email</label>
                                    <input type="text" class="form-control required" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control required" name="password">
                            </div>
                            </div>  

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" id="btn-login" class="btn btn-success">Login  </button>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                             <div id="signupalert" style="display:none" class="alert alert-danger">
                                </div>
                                    
                                 <div id="signupsuccess" style="display:none" class="alert alert-success">
                                </div>
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo site_url() ?>register">
                                
                               
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control required" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label required">Confirm password</label>
                                    <div class="col-md-9">
                                        <input type="password" id="conf_password" class="form-control required" name="conf_password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="contact_number" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Date of birth</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="dob" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">CNIC</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="cnic" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Driving license number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control required" name="dln" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-md-3 control-label">Gender</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline"><input type="radio" name="gender" value="male" checked="checked">Male</label>
                                        <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                            </form>
                         </div>
                    </div>
         </div> 
         <div class="loading" style="display:none;">Loading&#8230;</div>
<script src="<?php echo site_url();?>assets/js/jquery.validate.min.js"></script>
<script>
    $(function(){
    $('#btn-login').click(function() { 
        // validate and process form here  
        $('#loginform').validate({
            
            submitHandler:function(form) {
                 var dataString = $(form).serialize();
                // The AJAX
                $.ajax({  
                  type: 'POST',
                  url: $(form).attr('action'),
                  data: dataString,
                  dataType: "json",
                  success:function(data) {
                    $('.loading').hide();
                    if(data.status == 'success'){
                        $('#form-errors').hide();
                        $('#loginform').hide();
                        var success_msg = '<p>' + data.message + '<br>You will be redirected to dashboard in 5 seconds...</p>';
                        $('#form-success').show();
                        $('#form-success').html(success_msg);
                        setTimeout(function() {
                            window.location = "<?php echo site_url() ?>dashboard";    
                        }, 5000);
                        
                    }else {
                        $('#form-errors').show();
                        $('#form-errors').html(data.message);
                    }
                  },
                  beforeSend: function(){
                    $('.loading').show();
                  },
                    error:function(){
                        alert('Whoops! This didn\'t work. Please contact us.')
                    }
                });
            }
        });
    });
});

        $(function(){
    $('#btn-signup').click(function() { 
        // validate and process form here  
        $('#signupform').validate({
            rules: {
                password:'required',
                conf_password:{
                    equalTo:'#password'
                }
            },
            submitHandler:function(form) {
                 var dataString = $(form).serialize();
                // The AJAX
                $.ajax({  
                  type: 'POST',
                  url: $(form).attr('action'),
                  data: dataString,
                  dataType: "json",
                  success:function(data) {
                    $('.loading').hide();
                    if(data.status == 'success'){
                        $('#signupalert').hide();
                        $('#signupform').hide();
                        var success_msg = '<p>' + data.message + '<br>You will be redirected to dashboard in 5 seconds...</p>';
                        $('#signupsuccess').show();
                        $('#signupsuccess').html(success_msg);
                        setTimeout(function() {
                            window.location = "<?php echo site_url() ?>dashboard";    
                        }, 5000);
                        
                    }else {
                        $('#signupalert').show();
                        $('#signupalert').html(data.message);
                    }
                  },
                  beforeSend: function(){
                    $('.loading').show();
                  },
                    error:function(){
                        alert('Whoops! This didn\'t work. Please contact us.')
                    }
                });
            }
        });
    });
});
</script>
    