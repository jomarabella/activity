<?php
    class val
    {
        private $countError;
        private $errorMessage;
        
        public function token()

        {
            $_SESSION["token"]= bin2hex (random_bytes(32));
            return $_SESSION["token"];
        }
        
        public function validate_submit()
        {
            if( $_POST && $_SESSION)
            {
                if($_SESSION['token'] == $_POST['token'])
                unset ($_SESSION['token']);
                return true;
            }
            else
            {
                return false;
            }
        }
        public function character($fd, $min,$ermsg)
        {
        if(strlen($_POST[$fd]) <= $min){
            $this->countError++;
            $this->errorMessage['min'][$fd]=$ermsg;
         
        }
        }
        public function required($fd,$ermsg)
        {
            if(empty($_POST[$fd]))
            {
                $this->countError++;
                $this->errorMessage['required'][$fd]=$ermsg;
            }
            
        }
        public function validate()
        {
            if($this->countError < 1)
            {
                return true;
            }
        
             else
             {
            return false;
             }
        }
    }