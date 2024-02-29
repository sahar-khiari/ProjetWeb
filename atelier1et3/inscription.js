//Question 1
function validerDateOfBirth()
{
    var dateNaissance =document.getElementById('date');
    var dateNaissanceVal=new Date(dateNaissance.value);
    var aujourdhuiDate=new Date();
    //console.log(dateNaissanceVal); //pour tester des error avec inspect 
    if(dateNaissanceVal>=aujourdhuiDate)
    {
        alert("la date de naissance doit etre anterieur à la date d'aujoud'hui");
        
    }
    else
       alert("la date de naissance est valider");
}
//partie 2
const form=document.getElementById('myForm');//or utilise QuerySelector(#tel);
const nom=document.getElementById('nom');
const prenom=document.getElementById('prenom');
const tel=document.getElementById('tel');
const date=document.getElementById('date');
const passeword=document.getElementById('pwd');
const e_mail=document.getElementById('email');

const errornom=document.getElementById('errornom');
const errorprenom=document.getElementById('errorprenom');
const errortel=document.getElementById('errortel');
const errordate=document.getElementById('errordate');
const errorpwd=document.getElementById('errorpwd');
const erroremail=document.getElementById('erroremail');


form.addEventListener('submit',function(event)
{
   event.preventDefault();
   validerNom();
   validerPrenom();
   validerTel();
   validerDate();
   validerPwd();
})
function validerNom()
{
  const nomVal=nom.value;
  //const pattern=/^[A-Za-z]+$/;
  const pattern=/^[A-Za-zA-ÖØ-öø-ÿ\s']+$/;
  //match ()
  if(!nomVal.match(pattern))
  {
    //alert("veuillez entrer un nom valide(lettre uniquement)");
    errornom.innerHTML="veuillez entrer un nom valide(lettre uniquement)";
  }
  else 
   {
    //alert("correct");
    errornom.innerHTML="<span style='color:green'>correct</span>";
   }
    
}
function validerPrenom()
{
  const nomVal=prenom.value;
  //const pattern=/^[A-Za-z]+$/;
  const pattern=/^[A-Za-zA-ÖØ-öø-ÿ\s']+$/;
  //match ()
  if(!nomVal.match(pattern))
  {
    errorprenom.innerHTML="veuillez entrer un prenom valide(lettre uniquement)";
  }
  else 
   {
    errorprenom.innerHTML="<span style='color:green'>correct</span>";
   }  
}

function validerTel()
{
    const telephone=tel.value;
    const telRegex=/^[0-9]{8}$/;
    if (!telephone.match(telRegex))
    {
         errortel.innerHTML="veuillez entre un num de tel valide";

    }
    else
    {
        errortel.innerHTML="<span style='color:green'>correct</span>";
    } 
}
function validerDate()
{
    var dateNaissance =document.getElementById('date');
    var dateNaissanceVal=new Date(dateNaissance.value);
    var aujourdhuiDate=new Date();
    //console.log(dateNaissanceVal); //pour tester des error avec inspect 
    if(dateNaissanceVal>=aujourdhuiDate ||dateNaissanceVal=="invalide date")
    {
        //alert("la date de naissance doit etre anterieur à la date d'aujoud'hui");
        errordate.innerHTML="veuillez entre une date  valide"
    }
    else
    {
        errordate.innerHTML="<span style='color:green'>correct</span>";
    }
       //alert("la date de naissance est valider");
}
function validerPwd()
{
    const passeword=pwd.value;
    const pwdRegex= /^[a-z]{5}$/;   
    if (!passeword.match(pwdRegex))
    {
         errorpwd.innerHTML="veuillez entre un mot de passe correct valide";

    }
    else
    {
        errorpwd.innerHTML="<span style='color:green'>correct</span>";
    } 
}
//Partie 3
//recupere la val de email et la l'erroremail (ligne 23 et 30)
e_mail.addEventListener('keyup',function()
{
    valideremail();
})
function valideremail()
{
    const emailvalue=email.value.trim();
    const emailRegex=/^\S+@esprit.tn+$/;
    if(!emailvalue.match(emailRegex))
    {
        erroremail.innerHTML="veuillez entre un e_mail valide";
    }
    else
    {
        erroremail.innerHTML="<span style='color:green'>correct</span>";
    }
}