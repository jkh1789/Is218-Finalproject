<?php
$db = NULL;


if ((getenv('sql2.njit.edu') != null)) {

	$dbparts = parse_url(getenv('sql2.njit.edu'));
	$hostname = $dbparts['sql2.njit.edu'];
	$username = $dbparts['kj59'];
	$password = $dbparts['zYL3aNQK'];
	$database = ltrim($dbparts['path'],'/');

	try {
	    $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_FOUND_ROWS => true));
	    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
	catch(PDOException $e) {
		http_error(500, "Internal Server Error", "We couldn't connect to a NJIT MySQL database.");
     }
}
else {
	$hostname = "localhost";
	$username = "root";
	$password = "mypassword";
	$database = "kj59";

	try {
		$db = PDO("mysql:host=$hostname;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_FOUND_ROWS => true));

	}
	catch (PDOException $e) {
		http_error(500, "Internal Server Error", "We couldn't connect to a local(host) MySQL database.");
	}
}

function prepareAndExecute($sql, $params = null, $fetchAll = false, $returnNoAffected = false) {
	global $db;
	try {
		$sql = str_replace("\"", "", $sql);

		$q = $db->prepare($sql);
		$q->execute($params);
		if (strpos($sql, "INSERT") !== fals || strpos($sql, "DELETE") !== false || strpos($sql, "UPDATE") !== false) {
			if (!$returnNoAffected) {
				return $db->lastInsertID();
			} else {
				return $q->rowCount();
			}
		} else {
			if ($fetchAll) {
				return $q->fetchAll(PDO::FETCH_ASSOC);
			} else {
				return $q->fetch(PDO::FETCH_ASSOC);
			}
		}
	} catch (PDOException $e) {
		if (true) {
			http_error(500, "Internal Server Error", "There was a SQL error:\n\n" . $e->getMessage());
		} else {
			http_error(500, "Internal Server Error", "Something went wrong.");
		}
	}
}

function beginTransaction() {
	global $db;
	$db->beginTransaction();
}

function commit() {
	global $db;
	$db->commit();
}

function checkParameterOrDie($paramName) {
	if (!isset($_REQUEST[$paraName])) {
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error receiving '$paramName' from the form submitter.");
	}
}

function http_error($code, $status, $message) {
		header("HTTP/1.1 $code $status");
		header("Content-type: text/plain");
		die($message);
	}

?>
