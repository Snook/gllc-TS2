<?php
/*
****************************************************************
* gllcTS2 for TeamSpeak 2 © Ghryphen (ghryphen@gmail.com) https://github.com/ghryphen *
****************************************************************
*
* $Id: index.php 5 2005-10-26 23:19:04Z ghryphen $
* $Rev: 5 $
* $LastChangedBy: ghryphen $
* $Date: 2005-10-26 16:19:04 -0700 (Wed, 26 Oct 2005) $
*/

include("./admin/db_inc.php");

if ($setting["showgroups"] == 'yes') {
  header ("location: groups.php");
} else {
  header ("location: listing.php");
}
?>