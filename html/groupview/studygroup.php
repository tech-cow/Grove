<<<<<<< HEAD
<?php session_start(); ?>
=======
<?php

/*! @mainpage Grove Study Group Page
*
* @author Simon R-G
*
* @brief This is where users will see details about a certain Study Group, including its topic, its members, its maximum capacity, and when/where it meets.  
* @return Again, there isn't much of a return here, technically speaking, but the user can join the study group and learn about other Grove users here.  Another potential feature to be added in the future would be a group forum, so that all members could communicate from this page.
*
*/

/*! @param No parameters necessary here, as the group, by this point, has already been created.
 *  @result A session ID is stored for this specific group for future reference.
*/

require_once '../../php/include/global.inc.php';
session_start();

//test value, remove for production
$_SESSION['groupID'] = 1;

echo $_SESSION['groupID'];
//$groupTools = new GroupTools();

//$currentGroup = $groupTools->get($_SESSION['groupID']);
//$_COOKIE['group'] = json_encode($currentGroup);
?>

>>>>>>> 0a6e16ac8ba58e37cf325c1ed3b180de3e82a010
<!DOCTYPE html>
<html>
	<head>
		<meta content="utf-8" http-equiv="encoding">
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		

		<link rel="stylesheet" href="../../css/groupview/studygroup_style.css"/>
		<link rel="stylesheet" href="../../css/bootstrap/bootstrap.css"/>
		<link rel="stylesheet" href="../../css/bootstrap/bootstrap-theme.css"/>

		<script data-main="../../js/groupviewer.js" src="../../js/lib/require.js"></script>
	</head>
	<div class="hidden" id="groupInfo"></div>

	<body>
		<!--h1 class="header">Hello world hooray</h1-->
        
        <!--div class="header">
        	<img src="http://s27.postimg.org/eatxsc3ab/logo.png" alt="Grove" align="middle"style="width:65px;height:65px">
            <div class="button">
                <div>Home</div>
            </div>
            <div class="button">
                Profile
            </div>
            <div class="button">
                Search
            </div>
        </div-->
        <?php
        
		require_once '../../php/include/global.inc.php';
		//require_once '/php/include/global.inc.php';

		//test value, remove for production
		$_SESSION['groupID'] = 1;

		//echo $_SESSION['groupID'];
		//$groupTools = new GroupTools();

		//$currentGroup = $groupTools->get($_SESSION['groupID']);
		//$_COOKIE['group'] = json_encode($currentGroup);

		?>
        
		<div id="groupMembers">
			<div class="groupmemberContainer">
			
			</div>
		</div>

		<div id="groupInfo">
			<div class="groupinfoContainer">

			</div>
		</div>

		<div id="groupNewsfeed">
			<div class="groupnewsfeedContainer">

			</div>
		</div>

	</body>



</html>
