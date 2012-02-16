<html>
	
  <head>

    <!-- Favicon -->
    <link rel="SHORTCUT ICON" href='<?php echo($directoryPath); ?>/themes/berry/favicon.ico' />

    <!-- Javascript CSS Hacks -->
    <script src="<?php echo($directoryPath); ?>/themes/berry/scripts/cssTricks.js"></script> 

    <!-- CSS -->
    <link href="<?php echo($directoryPath); ?>/themes/<?php echo($pageTools->getTheme("base")); ?>/stylesheets/cssReset.css" rel="stylesheet" />  	
    <link href="<?php echo($directoryPath); ?>/themes/<?php echo($pageTools->getTheme("base")); ?>/stylesheets/base.css" rel="stylesheet" />
  	<link href="themes/berry/stylesheets/downloadStyle.css" rel="stylesheet" />

    <!--[if IE]>
      <link href="<?php echo($directoryPath); ?>/themes/berry/stylesheets/ie.css" rel="stylesheet" />
    <![endif]-->

  	<title><?php echo($title." : ".$pageTitle); ?></title>

	</head>

	<body>

		<div id="mainContainer">

  		<div id="title">
	
  			<?php 
					require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/title.inc.php"); 
				?>
	
  		</div>

      <div class='brownSpacer'></div>
	
  		<div id='navBar'>
	
  			<?php 
					require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/links.inc.php"); 
				?>
	
  		</div>
	
      <div class='brownSpacer'></div>

  		<div id='body' class='faux'>
 
        <div class='sidebar'>
 
     			<?php
		  	  	require_once("includes/downloadLinks.inc.php");
		    	?>

        </div>
			
				<div class="sideBody">
		
			  <?php

					echo("<h1>".$heading."</h1>");
					
					if (isset($help)) {
						
						echo("<div class='help'>".$help."</div>");

					}

					if (isset($content)) {

						echo($content);

					}

          if (isset($include)) {

						include($include);

					}

        ?>

				
				</div>
	
  		</div>
	
	
    <div class='brownSpacer'></div>
  	
    <div id="footer">
	
  			<?php 
					require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/footer.inc.php"); 
				?>
	
  	</div>

  	</div>
    
    <script type='text/javascript'>

      setCSSHeight();

    </script>
	
  </body>

</html>
