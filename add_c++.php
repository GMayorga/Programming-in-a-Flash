
      <?php
         # add_c++.php - add the term/definition from the form to the table
         
         require_once('debughelp.php');
         require_once('Connect.php');
         
         $dbh = ConnectDB();
         
         echo "<pre>\n";
         echo $_SERVER['QUERY_STRING'] . "\n";
         echo "</pre>\n";
         
         if ( empty($_REQUEST['term']) && empty($_REQUEST['definition'])) {
         	die('not enough info to add card');
         }
         
         try {
         	if ( !empty($_REQUEST['term']) && !empty($_REQUEST['definition'])) {
         		$query = "insert into cplusplus " .
         		         "set term=:term, definition=:definition, vote='0'";
         		$stmt = $dbh->prepare($query);
         		
         		$stmt->bindValue(':term', $_REQUEST['term']);
         		$stmt->bindValue(':definition', $_REQUEST['definition']);

                $stmt->execute();
                $stmt = null;
         	}
         }
         catch(PDOException $e)
         {
             die ('PDO error adding flashcard": ' . $e->getMessage() );
         }
               
         header("Location: ./submit_c++.php");
			   
         ?>