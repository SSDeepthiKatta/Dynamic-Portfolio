<?php
	define("TITLE", "Contact Me | Satya's Portfolio");
	
	include('header.php');
?>

	<div id="contact">
		<hr>
		
        <h1><em>Get in touch with me!</em></h1>
		

		<?php
	
		// Check for Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
		
		
		if (isset($_POST['contact_submit'])) {
			
			// Assign trimmed form data to variables
			// Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$msg	= $_POST['message']; // no need to trim message
		
			// Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)) {
				
				die(); // If true, kill the script
				
			}
			
			if (!$name || !$email || !$msg) {
				echo '<h4 class="error">All fields required.</h4><button><a href="contact.php" class="button block">Go back and try again</a></button>';
				exit;
			}
			
			// Add the recipient email to a variable
			$to	= "deepu.katta95@gmail.com";
			
			// Create a subject
			$subject = "$name sent a message via your contact form";
			
			// Construct the message
			$message .= "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";
			$message = wordwrap($message, 152); // Keep the message neat n' tidy
		
			// Set the mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			// Send the email!
			mail($to, $subject, $message, $headers);
		?>

            <!-- Show success message after email has sent -->
            <h2>Thank You for Viewing My Portfolio!</h2>
            <h3> Really Appreciate your time for contacting me!</h3>

            <h5><a href="/1.index.php" class="button block">&laquo; Go to Home Page</a></h5>

            <?php
        } else {
            ?>
            <div class="container">
                <form method="post" action="" id="contact-form">
                    <h3><label for="name">Your name</label></h3>
                    <input type="text" id="name" name="name" placeholder="Your name ..">
                    <br>

                    <h3><label for="email">Your email</label></h3>
                    <input type="text" id="email" name="email" placeholder="Your email..">
                    <br>

                    <h3><label for="message">Your message</label></h3>
                    <textarea id="text" name="message" placeholder="Your Message..."></textarea>

                    <input type="submit" class="button next" name="contact_submit" value="Send Message">
                </form>
            </div>

            <?php
        }
        ?>
        <hr>
    </div><!-- contact -->
			
<?php include('footer.php'); ?>
