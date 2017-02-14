<?php
   class Bid {
      /* Member variables */
      var $bid;
      var $pwd;
      var $msg;
      function __construct( $bid, $pwd, $msg ) {
         $this->bid = $bid;
         $this->pwd = $pwd;
         $this->msg = $msg;
      }
      /* Member functions */
      function getbid(){
         return $bid;
      }
      function getpwd(){
         return $pwd;
      }
      function getmsg(){
         return $msg;
      }
      function insertnewbid(){
         $q = "INSERT INTO broadcast VALUES (DEFAULT, '$this->bid', '$this->pwd')";
         return $q;
      }
      function insertfirstmsg(){
         $date = date('Y-m-d H:i:s');
         $q = "INSERT INTO msgs VALUES ('$this->bid', '$this->msg' , '$date' )";
         return $q;
      } 
   }

?>