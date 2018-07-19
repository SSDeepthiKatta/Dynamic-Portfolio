<?php

	// Navigation Menu Items
	
	$navItems = array(
				
					array(
						"slug"	=> "1.index.php",
						"title"	=> "Home"
					),
				
					array(
						"slug"	=> "2.exp.php",
						"title"	=> "Experience"
					),
					
					array(
						"slug"	=> "3.project.php",
						"title"	=> "Projects"
					),
					array(
					    "slug" => "4.skills.php",
                        "title" => "Skills"
                    ),
					array(
						"slug"	=> "contact.php",
						"title"	=> "Contact"
					),
				
				);



	// Project List
	
	$projItems = array(
					
					"Multipost" => array(
						
						"title"	=> "Multipost",
						"period"	=> "January 2018 – May 2018",
						"resp"	=> "•	Worked on integrating multiple media platforms to a single web application using Hootsuite API.
                                   •	Responsible for sending social media posts at scheduled time and date by the user.",
						"tech"	=> "HTML, CSS, JavaScript, Hootsuite, Node.js, AngularJS"


						
					),
					 "Web Scraping" => array(
						
						"title"	=> "Web Scraping",
						"period"	=> "January 2018 – May 2018",
						"resp"	=> "•	Extracted table information from HTML page and saved it in data frames using Pandas.
                                   •	Parsed source code using Beautiful Soup library, printed reference links from the Wikipedia.",
                        "tech"	=> "Python, Pycharm IDE, bs4"

					 ),
					 "Emergency Vehicle Dispatch System" => array(
						
						"title"	=> "Emergency Vehicle Dispatch System",
						"period"	=> "October 2017 – December 2017",
						"resp"	=> "•	Developed a system using Dijkstra’s algorithm to dispatch an emergency vehicle to a desired location.
                                   •	Implemented JTables to store information about vehicle ID and locations.",
						"tech"	=> "Java, Eclipse Oxygen IDE"
						
					 ),
					"Planovac" => array(
						
						"title"	=> "Planovac",
						"perios"	=> "January 2017 – May 2017",
						"resp"	=> "•	Designed a web application for students to keep track of deadlines for students who can access their account using Gmail OAuth Login. 
                                   •	Created Email Alert system to send notifications to students at scheduled times.
                                   •	Implemented Mongo Database to store user information.",
						"tech"	=> "HTML5, CSS3, JavaScript, Mongo DB, RESTful API, AngularJS, Node.js"
						
					),
                    "Twitter Data Analysis" => array(

                        "title"	=> "Twitter Data Analysis",
                        "period"	=> "August 2016 – December 2017",
                        "resp"	=> "•	Developed a search engine using Spark written in IntelliJ IDE with Scala plugin which scaled large data like 5GB in less than 2 minutes. 
                                   •	Provided visualization items like Bar charts and Pi Charts for showing analytical results by running different queries based on hashtags, time zone, location in SQL.",
                        "tech"	=> "Apache Spark, Scala, Python, Hadoop, IntelliJ IDE, Cloudera, SQL"

                    ),
					
				 );

?>