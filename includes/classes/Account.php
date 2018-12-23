<?php 
	class Account{

		public function __construct(){

		}

		public function register(){
			$this->validateUserName($username);
			$this->validateFirstName($firstname);
			$this->validateLastName($lastname);
			$this->validateEmails($email, $email2);
			$this->validatePasswords($password, $password2);
		}

		private function validateUserName($un){
			echo 'username function called';
		}

		private function validateFirstName($fn){

		}

		private function validateLastName($ln){

		}

		private function validateEmails($em, $em2){

		}

		private function validatePasswords($pw, $pw2){
			
		}

	}

?>