<?php
	define("TITLE", "Projects | Satya's Portfolio");
	
	include('header.php');
?>
	
	<div id="project-items">
	
		<h1>Academic Project Experience</h1>
		<p>I have used multiple technologies in each project.</p>
		<p><em>Click on project to learn more!</em></p>
		
		<hr>

        <div id="proj_list">
            <ul>
                <!--
                    syntax: foreach ($array as $key => $value)
                    http://www.tuxradar.com/practicalphp/5/3/0
                -->
                <?php foreach ($projItems as $prod => $result) { ?>
                    <li><a href="pro_name.php?result=<?php echo $prod; ?>"><?php echo $result["title"]; ?></a></li>

                    <p />
                <?php } ?>
            </ul>
        </div>

	</div><!-- team-members -->
	
	<hr>
			
<?php include('footer.php'); ?>
