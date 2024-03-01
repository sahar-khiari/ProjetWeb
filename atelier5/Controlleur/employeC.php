<?php
class employeC
{
    

public function showEmploye()
{
  echo '<tableborder=1 width="100%>
  <tr align="center">
    <td> lastname</td>
    <td> firstname </td>
    <td> phone</td>
    <td>email</td>
    <td>daten</td>
    
   </tr>
   <tr>
      <td>'.$employe->getLastname().'</td>
      <td>'.$employe->getfirstname().'</td>
      <td>'.$employe->getpassword().'</td>
      <td>'.$employe->getphone().'</td>
      <td>'.$employe->getemail().'</td>
      <td>'.$employe->getdob().'</td>
     </tr> 
    <table>';
}
}
?>