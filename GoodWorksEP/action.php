<?php
	require_once 'dbh.php';
	
	$username = $_POST['username'];
	$passwd = $_POST['passwd'];

	
	if (array_key_exists('showusername',$_POST)){
		showUsernames($conn);
	}

	if (!isEmpty($username, $passwd, $conn) AND !array_key_exists('showusername',$_POST)){ 

		$sql = "INSERT INTO userinfo (username, passwd) VALUES ('$username','$passwd');";
		mysqli_query($conn, $sql);
		header("Location: index.php");
	}
	
	else if (isEmpty($username, $passwd, $conn) ) { echo "Data not found";}

	
	function showUsernames($conn) {
		$show = "SELECT username FROM userinfo";
		$result= mysqli_query($conn, $show);
		$resultCheck = mysqli_num_rows($result);
		
	
		/*if ($resultCheck > 0) {
			echo "List of Usernames";
			echo "<ul>";
			while($row=mysqli_fetch_assoc($result)){
				echo "<li>".$row['username']."</li>";
			}
			echo "</ul>";
		}*/
	
	}
	
	function isEmpty($username, $passwd, $conn) {
		if ($username == '' OR $passwd == '') {
			$del = "DELETE FROM userinfo WHERE username='' OR passwd=''";
			mysqli_query($conn, $del);
		}
	}

	

	