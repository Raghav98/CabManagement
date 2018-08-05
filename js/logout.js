function warning(){
 var choice=confirm("Warning: Loging out will destroy the entire session. Are you sure you want to log out?");
 if(choice)
  window.location.assign("des.php");

}
