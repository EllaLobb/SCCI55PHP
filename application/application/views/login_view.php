
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><span class="logo-lg"><img src="img\logosmall.png"><b>Room</B>Booker 2017</span><a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
	<?php echo $this->session->flashdata('message');?>
	<?php echo form_open('',array('class'=>'form-horizontal'));?>
	<!-- email-->
   <div class="form-group">
        <?php echo form_label('Username','identity');?>
        <?php echo form_error('identity');?>
        <?php echo form_input('identity','','class="form-control"');?>
    </div>
	<!--passowrd-->
    <div class="form-group">
        <?php echo form_label('Password','password');?>
        <?php echo form_error('password');?>
        <?php echo form_password('password','','class="form-control"');?>
    </div>
	<div class="form-group">
        <label>
          <?php echo form_checkbox('remember','1',FALSE);?> Remember me
        </label>
     </div>
     
	 <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
     <?php echo form_close();?>  
    
    <!-- /.social-auth-links -->
	
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

