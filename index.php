<?php
$users = [
array("id" => 1, "username" => "user1", "password" => "password1", "full_name" => "User 1"),
array("id" => 2, "username" => "user2", "password" => "password2", "full_name" => "User 2"),
array("id" => 3, "username" => "user3", "password" => "password3", "full_name" => "User 3"),
];
function userExists($username, $password, $users)
{
  foreach ($users as $value) {
    if ($value['username'] == $username) {
      if ($value['password'] == $password) {
        return $value["full_name"];
      }
    }
  }
  return false;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Skunk Love Microblog Main Page</title>
  <link href="styles.css" rel="stylesheet"> 
  <script src="post_a_status.js"></script>
  <script src="reply.js"></script>
  <script src="toggle.js"></script>
  <script src="load_more.js"></script>
  <script src="ajax.js"></script>
</head>


<body>
  <div id="Master_container">
    <!-- Header -->

    <header>
      <div id="logo_title_tagline">
        <img id="logo" src="http://sweetclipart.com/multisite/sweetclipart/files/skunk_line_art.png" alt="Lineart skunk logo" height="44" width="55">
        
        <h2 id="main_title">Skunk Love</h2>
        <h3 id="tagline">Black and White and Read All Over</h3>
      </div>  
      <ul id="user_nav">
        <li class="user_nav_li"><a href="http://ianwagener.github.io/twitter-clone-Ian-William">Home</a></li>
        <li class="user_nav_li"><a href="http://ianwagener.github.io/twitter-clone-Ian-William/user-page.html">My Statuses</a></li>
        <li class="user_nav_li"><a href="http://ianwagener.github.io/twitter-clone-Ian-William/all_users.html">All Users</a></li>
        <li class="user_nav_li"><a href="MapsWM.html">Map</a></li>
      </ul>

      <ul id="profile_nav">
        <li id ="pipe_free" class="profile_nav_li"><a href="lb">Edit my profile</a></li>
        <li id="pipe_me" class="profile_nav_li"><a href="lb">Logout</a></li>
      </ul>      
    </header>
    
    <!--Main section-->
    
    <main>

      <!--Blog post area-->
      <article>
        <div>
          <p id="Hello_user">
            <?php
            if ($_POST["username"]){
              if (userExists($_POST["username"], $_POST['password'], $users) == false) {
                echo "Hello, there!";
                echo "<br>";
                echo "<p id='error'>Invalid credentials</p>";
              }
              else {
                echo "Hello, " . userExists($_POST["username"], $_POST['password'], $users);
                echo "Your rot13’d login is: " . str_rot13($_POST["username"]) . ",";
                echo " and the length of your login is: " . strlen($_POST["username"]);
              }
            } else {
              echo "Hello, there!";
            }
            ?></p>
          </div>

          <!--"Post a status" box-->
          <input type="button" id="buttonTriggersChange" value="Post a Status">
          <div id="post_a_status">
            <form id="status_form" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
            enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
            <fieldset>
              <legend>Post a status:</legend>
              <textarea name="test" id="box_of_text">
                What's your skunk status?
              </textarea>
              <input type="submit" value="Post" id="post_button">
              <label for="check_box1">Include location
               <input type="checkbox" name="vehicle" value="Bike" id="check_box1"> 
             </label>
           </fieldset>
         </form>
       </div>    


       <h5 id="nbsp">&nbsp;</h5>

       <!--STATUS 1-->      
       <div class="status_div">    
        <img class="user_photo" src="https://lh3.googleusercontent.com/-KYuxgGUbyHk/Vp8PCOq_c2I/AAAAAAAAAA4/GQ3pWZQ_uZg/w280-h280-p/20151215_151935-1.jpg" alt="Ian Wagener user picture">
        <p class="user_bold">
          Ian Wagener
        </p>
        <p class="date_posted">
          1/29/16
        </p>
        <p class="status">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, 
          consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <input type="button" class="buttonreply" id="replybutton1" data-order="status_1_reply" value="Reply">
        <div class="reply_div" id="status_1_reply">
          <form id="reply_form_1" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
          enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
          <fieldset>
            <legend>Post a reply:</legend>
            <textarea name="test" class="box_of_text">
              What's your skunk reply?
            </textarea>
            <input type="submit" value="Post" class="post_button">
            <label for="check_box2">Include location
             <input type="checkbox" name="vehicle" value="Bike" id="check_box2"> 
           </label>
         </fieldset>
       </form>
     </div>     
   </div>

   <!--STATUS 2--> 
   <div class="status_div">
    <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
    <p class="user_bold">
      William McCann
    </p>
    <p class="date_posted">
      1/20/16
    </p>
    <p class="status">
      Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur.
    </p>
    <input type="button" class="buttonreply" id="replybutton2" data-order="status_2_reply" value="Reply">
    <div class="reply_div" id="status_2_reply" >
      <form id="reply_form_2" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
      enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
      <fieldset>
        <legend>Post a reply:</legend>
        <textarea name="test" class="box_of_text">
          What's your skunk reply?
        </textarea>
        <input type="submit" value="Post" class="post_button">
        <label for="check_box3">Include location
         <input type="checkbox" name="vehicle" value="Bike" id="check_box3"> 
       </label>
     </fieldset>
   </form>
 </div> 
</div>
<!--STATUS 3--> 
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/EracF3j.jpg?1" alt="SkunkyMcSkunkerson user picture">   
  <p class="user_bold">
    SkunkyMcSkunkerson
  </p>
  <p class="date_posted">
    1/16/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <input type="button" class="buttonreply" id="replybutton3" data-order="status_3_reply" value="Reply">
  <div class="reply_div" id="status_3_reply">
    <form id="reply_form_3" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box4">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box4"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>

<!--STATUS 4--> 
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/huIPviu.jpg?1" alt="LoveMySkunk user picture">   
  <p class="user_bold">
    LoveMySkunk007
  </p>
  <p class="date_posted">
    1/11/16
  </p>
  <p class="status">
    Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <input type="button" class="buttonreply" id="replybutton4" data-order="status_4_reply" value="Reply">
  <div class="reply_div" id="status_4_reply">
    <form id="reply_form_4" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box5">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box5"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>

<!--STATUS 5--> 
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/dM0KkL4.png" alt="Skunkman123 user picture">   
  <p class="user_bold">
    SkunkMan123
  </p>
  <p class="date_posted">
    1/10/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, 
    consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  <input type="button" class="buttonreply" id="replybutton5" data-order="status_5_reply" value="Reply">
  <div class="reply_div" id="status_5_reply">
    <form id="reply_form_5" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box6">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box6"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
  <p class="user_bold">
    William McCann
  </p>
  <p class="date_posted">
    1/20/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur.
  </p>
  <input type="button" class="buttonreply" id="replybutton6" data-order="status_6_reply" value="Reply">
  <div class="reply_div" id="status_6_reply" >
    <form id="reply_form_6" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box7">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box7"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
  <p class="user_bold">
    William McCann
  </p>
  <p class="date_posted">
    1/20/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur.
  </p>
  <input type="button" class="buttonreply" id="replybutton7" data-order="status_7_reply" value="Reply">
  <div class="reply_div" id="status_7_reply" >
    <form id="reply_form_7" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box8">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box8"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
  <p class="user_bold">
    William McCann
  </p>
  <p class="date_posted">
    1/20/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur.
  </p>
  <input type="button" class="buttonreply" id="replybutton8" data-order="status_8_reply" value="Reply">
  <div class="reply_div" id="status_8_reply" >
    <form id="reply_form_8" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box9">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box9"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
  <p class="user_bold">
    William McCann
  </p>
  <p class="date_posted">
    1/20/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur.
  </p>
  <input type="button" class="buttonreply" id="replybutton9" data-order="status_9_reply" value="Reply">
  <div class="reply_div" id="status_9_reply" >
    <form id="reply_form_9" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box10">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box10"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
  <p class="user_bold">
    William McCann
  </p>
  <p class="date_posted">
    1/20/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur.
  </p>
  <input type="button" class="buttonreply" id="replybutton10" data-order="status_10_reply" value="Reply">
  <div class="reply_div" id="status_10_reply" >
    <form id="reply_form_10" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box11">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box11"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div class="status_div">
  <img class="user_photo" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture">   
  <p class="user_bold">
    William McCann
  </p>
  <p class="date_posted">
    1/20/16
  </p>
  <p class="status">
    Lorem ipsum dolor sit amet, consectetur adipisicing  elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur.
  </p>
  <input type="button" class="buttonreply" id="replybutton11" data-order="status_11_reply" value="Reply">
  <div class="reply_div" id="status_11_reply" >
    <form id="reply_form_11" action="action_page.php" method="post" target="_blank" accept-charset="UTF-8"
    enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
    <fieldset>
      <legend>Post a reply:</legend>
      <textarea name="test" class="box_of_text">
        What's your skunk reply?
      </textarea>
      <input type="submit" value="Post" class="post_button">
      <label for="check_box12">Include location
       <input type="checkbox" name="vehicle" value="Bike" id="check_box12"> 
     </label>
   </fieldset>
 </form>
</div> 
</div>
<div id="extra_statuses">
  <input type="button" class="showmore" id="showmore1" data-order="show_more_1" value="Show more">
</div>
</article>
<!--user bios-->
<aside>
  <div>
    <img class="aside_picture" src="https://lh3.googleusercontent.com/-KYuxgGUbyHk/Vp8PCOq_c2I/AAAAAAAAAA4/GQ3pWZQ_uZg/w280-h280-p/20151215_151935-1.jpg" alt="Ian Wagener user picture"> 
    <p class="aside_bio">
      <b>Ian Wagener</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.  Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
  <div>
    <img class="aside_picture" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture"> 
    <p class="aside_bio">
      <b>William McCann</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
    </p>
  </div>
</aside>
<aside>
  <div>
    <img class="aside_picture" src="https://lh3.googleusercontent.com/-KYuxgGUbyHk/Vp8PCOq_c2I/AAAAAAAAAA4/GQ3pWZQ_uZg/w280-h280-p/20151215_151935-1.jpg" alt="Ian Wagener user picture"> 
    <p class="aside_bio">
      <b>Ian Wagener</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.  Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>
  <div>
    <img class="aside_picture" src="http://i.imgur.com/6w6wT6l.jpg?1" alt="William McCann user picture"> 
    <p class="aside_bio">
      <b>William McCann</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
    </p>
  </div>
</aside>
</main> 

<!--Footer area-->   
<!--make names clickable links to twitter page-->
<footer>
  <p id="welcome">Welcome to Skunk Love Beta!  Check back soon for brand new features and more wonderful skunks!</p>
  <p class="footer-text">Made By <a class="footer_links" href="https://twitter.com/WagWeiner"> Ian Wagener</a> and <a class="footer_links" href="https://twitter.com/NWMcCann">William McCann</a></p>
</footer> 
</div> 
</body>
</html>