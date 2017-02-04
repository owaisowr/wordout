<?php
   class Bid {
      /* Member variables */
      var $bid;
      var $pwd;
      var $msg;
      
      function __construct( $bid ) {
		   $this->bid = $bid;
		}
      function __construct( $bid, $pwd ) {
         $this->bid = $bid;
         $this->pwd = $pwd;
      }
      function __construct( $bid, $pwd, $msg ) {
         $this->bid = $bid;
         $this->pwd = $pwd;
         $this->msg = $msg;
      }
      /* Member functions */
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }

?>