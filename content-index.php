<div class='content'>
	<?php
		if(isset($_GET['nav'])){
	   		$nav = $_GET['nav'];
	   		switch ($nav) {
	   			case 'our-services':
	   				include "text/our-services.php";
	   				break;
	   			case 'logout':
	   				//Clear session
	   				session_unset(); 
					session_destroy();
	   				header("Location: /CampCare/?action=login");
	   				break;
	   			case 'about-us':
	   				include "text/about-us.php";
	   				break;
	   			case 'contact-us':
	   				include "text/contact-us.php";
	   				break;
	   			case 'autobiography-theoneste':
	   				include "text/autobiography-theoneste.php";
	   				break;
	   			case 'marc-ndimukaga':
	   				include "text/autobiography-marc- ndimukaga.php";
	   				break;
	   			case 'jean-nepomuscene-namugize':
	   				include "text/autobiography-jean-nepomuscene-namugize.php";
	   				break;
	   			case 'mission-vision':
	   				include "text/mission-vision.php";
	   				break;
	   			case 'projects':
	   				include "text/projects.php";
	   				break;
	   			case 'team':
	   				include "text/team.php";
	   				break;
	   			case 'gabriel-habiyaremye':
	   				include "text/autobiography-gabriel-habiyaremye.php";
	   				break;
	   			default:
	   				include "text/welcome.php";
	   				break;
	   		}
	   }
	   else
	   	{
	   		include "text/welcome.php";
	  	}
	   ?>
</div>