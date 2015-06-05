<?php
/** get database connection **/
require_once 'connectMap.php';

  if (isset($_GET["country_name"])) { 
  	$country_name = $_GET["country_name"];
	
	/** run prepare to select records **/	
	$stmt = $dbh->prepare("SELECT firstname, lastname, email, photo FROM reps WHERE country = :country_name");
	$stmt->bindParam(':country_name', $country_name, PDO::PARAM_STR);
	$stmt->execute();
		
	/** Values to fill up the form **/		
	$result = $stmt->fetch();  	
  	}
	
	/** create the array **/
	$json_data=array();
		 
	/** Check if there is data, if not give default data **/		
	if(empty($result)) {
    $json_data  = array( 'firstname' => 'www.aeegroup.co.za',
	                     'lastname' => '',
					     'email' => 'africa@aeegroup.co.za',
					     'photo' => '../images/Afrizone2.png');
  	} 
	else {		//******* How do I build this array from database results? *******//
	$json_data  = array( 'firstname' => $result['firstname'],
	                     'lastname' => $result['lastname'],
					     'email' => $result['email'],
					     'photo' => $result['photo']);

		echo $json_data['firstname'] . " " . $json_data['lastname'] . '<br />';
		echo $json_data['email'] . '<br />';		
	}
	/** built in PHP function to encode the data in to JSON format 	**/	
	 header('Content-Type: application/json');    
 	 echo json_encode($json_data);
	 return $json_data;	
	/*** close the database connection ***/
	$dbh = null;	
	
		
 
?>