<?php
  /*  public means accessible outside this class.
   *  protected means only accessible to this class or anything that extends it.
   *  private means only accessible this class
   */

   class Database {
     public $host = DB_HOST;
     public $username = DB_USER;
     public $password = DB_PASS;
     public $db_name = DB_NAME;

     public $link;
     public $error;

     public function __construct() {
       // Call Connect function
       $this->connect();
     }

     private function connect() {
       $this->link = new mysqli(
        $this->host,
        $this->username,
        $this->password,
        $this->db_name
       );

       if(!$this->link) {
         $this->error = "Connection Failed: ".$this->link->connect_error;
         return false;
       }
     }

     public function select($query) {
       // effectively the same as $mysqli->($query)
       $result = $this->link->query($query) or
        die($this->link->error.__LINE__);

       // handle empty responses
       if ($result->num_rows > 0) {
         return $result;
       } else {
         return false;
       }
     }

     public function insert($query) {
       $insert_row = $this->link->query($query) or
        die($this->link->error.__LINE__.$this->link->errno);

       // validate insert
       if($insert_row) {
         header('Location: index.php?msg="'.urlencode("Record Added.").'"');
         exit();
       } else {
         die('Error : ('.$this->link->errno.') '.$this->link->error);
       }
     }

     public function update($query) {
       $update_row = $this->link->query($query) or
        die($this->link->error.__LINE__);

       // validate update
       if($update_row) {
         header('Location: index.php?msg="'.urlencode("Record Updated.").'"');
         exit();
       } else {
         die('Error : ('.$this->link->errno.') '.$this->link->error);
       }
     }

     public function delete($query) {
       $delete_row = $this->link->query($query) or
        die($this->link->error.__LINE__);

       // validate delete
       if($delete_row) {
         header('Location: index.php?msg="'.urlencode("Record Deleted.").'"');
         exit();
       } else {
         die('Error : ('.$this->link->errno.') '.$this->link->error);
       }
     }
   }
