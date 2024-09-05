<?php
    class Common
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

        public function validate_Email($ve)
       {
           if(!filter_var($_POST[$ve], FILTER_VALIDATE_EMAIL) ) 
            {
                $this->countError++;
            }
        } 
    
       
        public function validate_gender($vg)
        {
            if(!isset($_POST[$vg])) {
                $this->countError++;
             } 
        }
        public function error_message($validation, $fd)
        {
        if(isset($this->errorMessage[$validation][$fd]))
        {
            return $this->errorMessage[$validation][$fd];
        }
    }
        
    }
?>