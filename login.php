<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Skunk Love Microblog Login Page</title>
  <link href="styles.css" rel="stylesheet"> 
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
    </header>
<main>
<form id='login' action='index.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='login' >Login:</label>
<input type='text' name='login' id='login'  maxlength="50" />
 
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>
</main>
<footer>
  <p id="welcome">Welcome to Skunk Love Beta!  Check back soon for brand new features and more wonderful skunks!</p>
  <p class="footer-text">Made By <a class="footer_links" href="https://twitter.com/WagWeiner"> Ian Wagener</a> and <a class="footer_links" href="https://twitter.com/NWMcCann">William McCann</a></p>
</footer> 
</body>
</html>