<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php echo meta($this->meta_info); ?>
    <meta name="google-site-verification" content="A1apfAi0jhhTGLxePS3Kq_yC7uvQCdTbir8AbEHcrGU" />
    <link rel="icon" type="image/x-icon"  sizes="16x16" href="<?php echo base_url().$this->template_path ; ?>/assets/images/icons/favicon.ico" hreflang="en-us" />

    <title><?php echo $this->meta_title; ?></title>

    <link rel="alternate" hreflang="en-us" href="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" hreflang="en-us" crossorigin="anonymous">
    <link rel="stylesheet" hreflang="en-us" href="/<?php echo $this->template_path ; ?>/assets/css/base.css">
    <link rel="stylesheet" hreflang="en-us" href="/<?php echo $this->template_path ; ?>/assets/css/ie10-viewport-bug-workaround.css">
	<?php if (isset( $css_global )) echo $css_global; ?>
	<?php if (isset( $css )) echo $css; ?>
   
	<script src="https://use.fontawesome.com/09fa6f8027.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php 
	    if($this->ga_tracking) echo $this->ga_tracking ;
	    if( isset($map['js']) ) echo $map['js']; 
	?>
    
  </head>
  <body <?php if( isset( $onload ) ) echo $onload; ?>>
	
	 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  
	  
  	<?php if(isset($partial)) echo $partial ; ?>
  	
  	
  	<footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>
  		
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>window.jQuery || document.write('<script src="/<?php echo $this->template_path ; ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="/<?php echo $this->template_path ; ?>/assets/js/vendors/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript" src="/<?php echo $this->template_path ; ?>/assets/js/vendors/bootstrap-toolkit.min.js"></script>
	<script type="text/javascript" src="/<?php echo $this->template_path ; ?>/assets/js/application.js"></script>
	
	
    <?php if (isset( $js_global )) echo $js_global; ?>
    <?php if (isset( $js )) echo $js; ?>

  </body>
</html>