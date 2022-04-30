<?php
session_start();
switch($_GET["myPage"]){
	case "login":
        header("location: ". $_SESSION["path"] . "views/login/login.php");
		break;
	case "home":
		header("location: ". $_SESSION["path"] . "views/web/home.php");
		break;
	case "admin":
		header("location: ". $_SESSION["path"] . "views/admin/admin.php");
		break;
	case "heros":
		header("location: ". $_SESSION["path"] . "views/web/heros.php");
		break;
	case "newskin":
		header("location: ". $_SESSION["path"] . "views/web/newskin.php");
		break;
	case "banlist":
		header("location: ". $_SESSION["path"] . "views/web/banlist.php");
		break;
	case "store":
		header("location: ". $_SESSION["path"] . "views/web/store.php");
		break;
	case "contacts":
		header("location: ". $_SESSION["path"] . "views/web/contacts.php");
		break;
	case "infoHero":
		header("location: hero.html");
		break;
	default:
		header("location: ". $_SESSION["path"] . "views/web/home.php");
}

?>