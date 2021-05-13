<?php

namespace App\Mail;
use App\Mail\Mailin;


class SendInMail {

	private $mailin="";
	private $send ="";
	private $url ="" ;
	private $api_key ="";

	public function __construct()
    {    	
		$this->url ="https://api.sendinblue.com/v3.0";
		$this->api_key ="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";
        $this->mailin = new Mailin($this->url,$this->api_key);
    }


	function createUser($email){
		
		$data = array( "email" => $email,
			"attributes" => array("NAME"=>"", "SURNAME"=>""),
			"listid" => array(21)//,  // saving in identified contacts list
			//"listid_unlink" => array(2,5)
		);
		
		var_dump($this->mailin->create_update_user($data));
	}

	
	function getUser(){
		
		$data = array( "email" => "contact@avita-india.com" );

		echo "<pre>";
		print_r($this->mailin->get_user($data));
       
	}
	
	
	function sendMail($userId){		

			$data = array( "to" => array($userId=>"Subscriber"),
			"from" => array("contact@avita-india.com","AVITA India"),
			"replyto" => array("contact@avita-india.com","AVITA India"),
			"subject" => "AVITA India | Email Subscription",
			"text" => "Thank you for subscribing us!",
			"html" => "<h1>Dear Subscriber</h1><br/>
					   Thank you for subscribing with us<br/>
					   <img src=\"https://www.avita.com/images/logo.png\" alt=\"image1\" border=\"0\"><br/>
					   Some text<br/>",
			"attachment" => array(),
			"headers" => array("Content-Type"=> "text/html; charset=iso-8859-1","X-param1"=> "value1", "X-param2"=> "value2","X-Mailin-custom"=>"my custom value", "X-Mailin-IP"=> "102.102.1.2", "X-Mailin-Tag" => "My tag")
			 );

			var_dump($this->mailin->send_email($data));
	
	}
}


?>
