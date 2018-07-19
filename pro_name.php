<?php
	
	define("TITLE", "Projects | Satya's Portfolio");
	
	include('header.php');

	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['result'])) {
		$prodkey = strip_bad_chars( $_GET['result'] );
		$prodvalue = $projItems[$prodkey];
	}
	?>
	<hr>
	
	<div id="proj_list2">

        <h1><?php echo $prodvalue["title"]; ?>
            <span class="period"> <?php echo $prodvalue["period"]; ?></span></h1>
        <p><?php echo $prodvalue["resp"]; ?></p>
        <br>
        <p><strong>Technologies: <?php echo $prodvalue["tech"]; ?></strong></p>
        <p />

	</div><!-- project description -->
	<hr>

	<a href="3.project.php" class="button previous">&laquo; Back to Projects</a>
<hr>


<?php include('footer.php'); ?>
