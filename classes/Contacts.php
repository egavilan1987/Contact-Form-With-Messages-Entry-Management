<?php 
	class Contacts{

		public function addMessage($messageData){

			$c=new Connect();
			$connection=$c->connection();

			$sql = "INSERT INTO tbl_contacts (
								firstname,
								lastname,
								email,
								phone,
								subject,
								message,								
								sentDate)
						VALUES ('$messageData[0]',
								'$messageData[1]',
								'$messageData[2]',
								'$messageData[3]',
								'$messageData[4]',
								'$messageData[5]',
								NOW())";
								
			return mysqli_query($connection,$sql);
		}







		public function getMessageData($idContact){

			$c=new Connect();
			$connection=$c->connection();

			$sql="SELECT contact_id,
							firstname,
							lastname,
							email,
							phone,
							subject,
							message,
							sentDate
					FROM tbl_contacts 
					WHERE contact_id='$idContact'";
					
			$result=mysqli_query($connection,$sql);
			
			$row=mysqli_fetch_row($result);
			
			$userArray=array(
							'contact_id' => $row[0],
							'firstname' => $row[1],
							'lastname' => $row[2],
							'email' => $row[3],
							'phone' => $row[4],
							'subject' => $row[5],
							'message' => $row[6],
							'sentDate' => $row[7]
						);
			return $userArray;
		}


		public function deleteMessage($idContact){
			
			$c = new Connect();
			$connection = $c->connection();
			
			$sql = "DELETE FROM tbl_contacts 
					WHERE contact_id = '$idContact'";
			return mysqli_query($connection,$sql);
		}

	}
 ?>
