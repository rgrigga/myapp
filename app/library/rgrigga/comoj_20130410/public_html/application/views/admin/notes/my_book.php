<?php
//redundancy is simplicity and simplicity is redundancy.  you could say that backwards, too, but it's true either way.
//
//Authentication and Authorization, however,  are two very different things.  I enjoy studying security and best practices, so I have done a bunch of research on this lately.
//
//Hi, my name is Secure_Controller.
//
//In my project, I have (admin, guest) & >1 usergroups: {partners, agents, clients,...}
//
//Sometimes I will be asked, "is this thing an admin?"  That's easy (usually no), unless it's me.  
//
//"Is this thing a member of this group?"
//
//We have a groups table, so we can just ask the DB.
//
//<code>
//    function is_auth($group){
//      $this->is_admin() ? $this->in_group($group) : FALSE
//    }
//
//    function is_admin($user){
//      return $this->ion_auth->is_admin();
//
//</code>
//
//I had started making some inherited classes to handle things, but I got frustrated with the time it took me to copy all these functions and regurgitate the logic... then it dawned on me: simplify to "Auth" and "Admin".  That's what I really wanted to know, anyway.
//
//My new Auth and Admin care not what kind of thing they're being asked about, they have no problem telling you NO.
//
//Ion Auth provides both of those functions in the ion_auth library: 
//*is_admin() 
//* in_group();
//
//I am the decision-maker, but i don't actually look stuff up.  Like <a href="http://bit.ly/YYWjLc" >Rob Blavoigovich</a>: that's what librarian's do.  
//
//If I need help, I could look in up in a library... Or I could get a helper to help... Hmm, I wish i had a library or a helper... i'll look there if I get stuck. 
//
//Anyway, Admin's status is special because he is allowed to do anything a guest or otherwise authorized use can do.  I have many groups, some will be ok to go here or there, but they're all different.
//
//
//
<code>
class Auth_Controller extends MY_Controller
{
  //must be authorized
  function __construct()
  {
    parent::__construct();
    
    if( ! $this->ion_auth->logged_in())
    {
      redirect(base_url() . 'home/home');
      exit;
    }
    
    function is_admin(){
      return $this->ion_auth->is_admin();
    elseif{
    
      }
    }
    function is_auth(){
      return $this->in_group();
    }
    
    function in_group($p);
      return $this->ion_auth->in_group($p);
    }
    
    //switch (TRUE){
    //  case $this->ion_auth->in_group():
    //    exit;
    //  case $this->ion_auth->is_admin():
    //    exit;
    //  //case $this->ion_auth->something else
    //}
    
    if( ! $this->ion_auth->logged_in())
    {
      redirect(base_url() . 'guest/home');
      exit;
    }
    
  }
}
?></code>
...spaghettiing out of control.  bad decisions. no good. must. use. small. words.

switch: bad idea.  extensible, but high maintenance.

<code><?php
class Partner_Controller extends Secure_Controller
{
  function __construct(){
    parent::__construct();
    if( ! $this->ion_auth->is_admin()){ //if admin, OK!
      if( ! $this->ion_auth->in_group('partners'))//if partner, OK
      {
        //else is a guest
        redirect(base_url() . 'auth/login');
      }
    }
  }
}

class Admin_Controller extends Secure_Controller
{
  function __construct(){  
    parent::__construct();
      
        if( ! $this->ion_auth->is_admin())
        {
          redirect(base_url() . 'auth/login');
        }
  }
}
?></code>
Better, and can be made to work, It is not the most correct solution to the problem, though.

I am tempted to press on, but it dawned on me that I or someone like me could use a
solution to this problem.  Besides, I will definitely run in to this later.  If this project will
never get bigger, it won't matter, but if I am going to use this again...

I decided to re-factor it.

http://ellislab.com/codeigniter/user-guide/general/core_classes.html
->Extending Core Class

So, it dawned on me to simply push the decision further up the model ladder.


These 3 functions:

      public function is_admin($user){
          return $this->ion_auth->is_admin();
        
      public function is_auth($group){
          $this->is_admin() ? $this->in_group($group) : FALSE
        }
        
      public function is_group($group){
          return $this->ion_auth->is_group();
          
and this one:
      
      public function is_post()
      {
        return $_SERVER['REQUEST_METHOD'] == 'POST' ? TRUE : FALSE;
      }
      
can go in the parent.

I had to think about this one, too:

      public function is_group($group){
          return $this->ion_auth->is_group();
      }

at one point, i wrote:

    function in_group($p);
      return parent::->in_group($p);    
    }
    
now that's just dumb, because i could simply delete
the whole thing, since I'm inherited, the parent would look it up for me anyway!

But wait.. the ion-auth thing... if left in the child object, Auth, this one would be the
decision-makers.

there's no real reason to have or not have it one place or the other, although it's twice the code to leave it here.
Highlight it and look at it: then push delete.  The parent of the class should decide what to say to the object
above it, and our job is to interpret the data we receive and pass it to whoever asked for it.
Therefore, it is better and cleaner design to push it up.  


http://php.net/manual/en/language.operators.comparison.php
Manual said: Note:

It is recommended that you avoid "stacking" ternary expressions. PHP's behaviour when using more than one ternary operator within a single statement is non-obvious:


However, after a little thought and effort to be sure it's correct, and the ternary operator becomes very powerful.
very elegant, cool, etc.  I think i'll use it more often.




Lots more reading to do here:
http://ellislab.com/codeigniter/user-guide/general/core_classes.html


What about all those engines that I thought i needed?  Didn't the former complexity
help to keep things more secure?  More complex = harder to hack?

No.  Complicated design is not security.  If fact, it is greatly more dangerous, because it is easier to make
mistakes.  Yes/no, keep it simple.
  
TRUE ? (redundancy = simplicity) : (simplicity is redundancy) //you know that's right!
you could say that backwards, too, but it's true either way.
  
?>
  