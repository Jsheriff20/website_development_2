<?php
Class dbObj{
	/* Database connection start */
	var $servername = "lochnagar.abertay.ac.uk";
	var $username = "sqlg510572";
	var $password = "password1";
	var $dbname = "sqlg510572";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}
?>