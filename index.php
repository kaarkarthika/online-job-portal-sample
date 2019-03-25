<html>
<head>
<title>Welcome to online job search</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.container {
  position: relative;
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 170%; /* Full width */
  padding: 20px; /* Some padding */
  margin-left: -35%;
}
</style>
</head>
<body>
<div class="navbar">
  <a href="#home">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Job 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="freshreg.html">Freshers</a>
      <a href="experience.html">Experience</a>
    </div>
  </div> 
    <a href="#">Internship</a>
	  <a href="#">Need Training with placement</a>
	  <div style="margin-left:90%;"><a href="login.php">Login</a></div>
</div>
 <div class="container">
  <img src="job.jpg" alt="Notebook" style="width: 180%;height: 90%; margin-left: -40%;">
  <div class="content">
    <h1>Job</h1>
    <marquee>....</marquee>
  </div>
</div> 
</body>
</html>
