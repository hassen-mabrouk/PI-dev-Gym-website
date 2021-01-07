<?PHP
class categorie
{
    public $name;
    public $creation;
    public $description;
    
 	public function getname()
    {
        return $this->name;
    }
    function getcreation()
    {
        return $this->creation;
    }
    function getdescription()
    {
        return $this->description;
    }
   
  
    // setter 
     function setname($name)
    {
        return $this->name= $name;
    }
    function setcreation($creation)
    {
        return $this->creation =$creation;
    }
    function setdescription($description)
    {
        return $this->description= $description;
    }
    function __construct($name,$creation,$description)
    {   $this->name = $name; 
        $this->creation = $creation;
        $this->description = $description;
        
    }
    // getter 
   
 
}
  ?>
