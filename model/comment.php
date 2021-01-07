<?PHP
class comment
{
    public $name;
    public $message;
    public $email;
    
 	public function getname()
    {
        return $this->name;
    }
    function getmessage()
    {
        return $this->message;
    }
    function getemail()
    {
        return $this->email;
    }
   
  
    // setter 
     function setname($name)
    {
        return $this->name= $name;
    }
    function setmessage($message)
    {
        return $this->message =$message;
    }
    function setemail($email)
    {
        return $this->email= $email;
    }
    function __construct($name,$message,$email)
    {   $this->name = $name; 
        $this->message = $message;
        $this->email = $email;
        
    }
    // getter 
   
 
}
  ?>
