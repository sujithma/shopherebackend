@extends('layout.default')



@section('content')
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body">

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                         {!! Form::open(array('method'=>'post')) !!} 
                                        {!! Form::text('email','',array('class'=>'form-control','placeholder'=>'username or email')) !!}                                      
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                       <!-- <input id="login-password" type="password" class="form-control" name="password" placeholder="password"> -->
                                        {!! Form::password('password',array('class'=>'form-control','placeholder'=>'password')) !!} 
                                    </div>
                                    

                                
                          <!--     <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                       <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
                                        </label>
                                      </div>
                                    </div>-->


                                <div style="margin-top:10px" class="form-group">
                                      @if (!$msg == "")                         
                                        <h3 style="color:red">{!! $msg !!}</h3>
                                    @endif

                                    <div class="col-sm-12 controls">
                                    <!-- Button 	-->
                                   
                                    <!--  <a id="btn-login" href="#" class="btn btn-primary">Login  </a>-->
                                      {!! Form::submit('sign In', array('class' => 'btn btn-primary')) !!}
                                      {!! Form::close() !!}
                                   <!--   <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a> -->

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Don't have an account! 
                                        <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>















@stop