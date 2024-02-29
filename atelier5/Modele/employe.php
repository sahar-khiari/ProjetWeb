<?php
class employe
{
    private $lastname;
    private $firstname;
    private $password;
    private $phone;
    private $email;
    private $dob;

    public function getLastname()
    {
        return $this->lastname;
    }
    public function setlastname($a)
    {
        $this->lastname=$a;
    }
    public function getfirstname()
    {
        return $this->firstname;
    }
    public function setfirstname($a)
    {
        $this->firstname=$a;
    }
    
    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($a)
    {
        $this->password=$a;
    }
    public function getphone()
    {
        return $this->phone;
    }
    public function setphone($a)
    {
        $this->phone=$a;
    } 
    public function getemail()
    {
        return $this->email;
    }
    public function setemail($a)
    {
        $this->email=$a;
    }  
    
    public function getdob()
    {
        return $this->dob;
    }
    public function setdob($a)
    {
        $this->dob=$a;
    } 
    /*public function __construct()//constructeur par defaut
    {
        $this->firstname="";
        $this->lastname="";
        $this->password="";
        $this->phone="";
        $this->email="";
        $this->dob="";
    }*/
    public function __construct($a,$b,$c,$d,$e,$f)//constructeur 
    {
        $this->firstname=$a;
        $this->lastname=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dob=$f;
    }
    public function afficher()
    {
        echo "nom".$this->firstname;
        echo "prenom".$this->lastname;   
        echo "pwd".$this->password;
        echo "tel".$this->phone;
        echo "email".$this->email;
        echo "dob".$this->dob;
    }
}

//$personne=new employe();//constructeur
$personne1=new employe("m","m","a","a","e","e");
$personne1->afficher();
?>