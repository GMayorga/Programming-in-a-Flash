<?php 


require_once('Connect.php');
         require_once('debughelp.php');
          
         $dbh = ConnectDB();
          
if(isset($_POST['voteup'] ) ) 		  
		  {
			  
			  $id= $_POST['cardID'];

						  
         try {
         	$query = "update cplusplus set vote= vote+'1' where card_id = '$id';" ;
         
         			 
         	$stmt = $dbh->prepare($query);
         	$stmt->execute();
         	$result = $stmt->fetchAll(PDO::FETCH_OBJ);
             $stmt = null;
			 
         	}
        
         catch(PDOException $e)
         {
             die ('PDO error updating vote": ' . $e->getMessage() );
         }
		 
      header("Location: ./vote_c++.php");
		 
		  }
		  
		  
		  
		  
		  elseif(isset($_POST['votedown'] ) ) 		  
		  {
			  
			  $id= $_POST['cardID'];

						  
         try {
         	$query = "update cplusplus set vote= vote-'1' where card_id = '$id';" ;
         
         			 
         	$stmt = $dbh->prepare($query);
         	$stmt->execute();
         	$result = $stmt->fetchAll(PDO::FETCH_OBJ);
             $stmt = null;
			 
         	}
        
         catch(PDOException $e)
         {
             die ('PDO error updating vote": ' . $e->getMessage() );
         }
		 
      header("Location: ./vote_c++.php");
		 
		  }
		 ?>