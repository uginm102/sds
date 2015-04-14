<div class="main-container">
<?php
 
switch ($page) {
    case "home":
           require 'data/home.php';
        break;
    case "our_services":
           require 'data/our_services.php';
        break;
    case "about_us":
           require 'data/about_us.php';
        break;
    case "mission_vision":
           require 'data/mission_vision.php';
        break;
    case "projects":
           require 'data/projects.php';
        break;
    case "contact_us":
           require 'data/contact_us.php';
        break;

    default:
        require 'data/home.php';
        break;
}
?>
</div>
