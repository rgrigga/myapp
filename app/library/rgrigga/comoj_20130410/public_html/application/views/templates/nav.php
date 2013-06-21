<div class='navbar'>
  you are logged in as: 
<?php
echo $user->first_name;
echo "|";
echo anchor('auth/logout', "Log Out");?>
</div>