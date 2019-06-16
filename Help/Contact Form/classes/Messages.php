<?php 
	class Messages{

		public function addMessages($data){

			$c = new Connect();
			$connection = $c->connection();

			$sql = "INSERT INTO messages (
					name,
					phone,
					email,
					subject,
					message,							
					send_date)
				VALUES (        
					'$data[0]',
					'$data[1]',
					'$data[2]',
					'$data[3]',
					'$data[4]',
					NOW())";
								
			return mysqli_query($connection, $sql);
		}



		public function getMessageData($id){

			$c = new Connect();
			$connection = $c->connection();

			$sql = "SELECT id,
					name,
					phone,
					email,
					subject,
					message,
					updated_date
				FROM messages 
				WHERE id = '$id'";
					
			$result = mysqli_query($connection, $sql);
			
			$row = mysqli_fetch_row($result);
			
			$messageData = array(
					'id' => $row[0],
					'name' => $row[1],
					'phone' => $row[2],
					'email' => $row[3],
					'subject' => $row[4],
					'message' => $row[5],
					'send_date ' => $row[6]
						);
			return $messageData;
		}


		public function deleteMessage($id){
			
			$c = new Connect();
			$connection = $c->connection();
			
			$sql = "DELETE FROM messages 
					WHERE id = '$id'";
			return mysqli_query($connection, $sql);
		}

	}
 ?>
