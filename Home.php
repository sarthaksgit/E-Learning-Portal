<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your E-Learning Portal</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Adjust the height of the logo */
            margin-right: 15px; /* Add margin to separate the logo from navigation links */
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 16px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: red;
        }

        .search-bar {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            width: 300px; /* Increase the width of the search bar */
            border: none;
            border-radius: 5px;
            margin-right: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-bar button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-bar button:hover {
            background-color: #45a049;
        }

        .login-register button{
  background-color: #FF8C00;
  font-size: 16px;
  font-weight: 550;
  padding: 4px 12px;
  border: 2px solid #000;
  border-radius: 5px;
  outline: none;
  margin-left: 20px;
}

.login-register button:last-child{
  background-color: #FF8C00;
}

div.popup-container{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2);
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  display: none;
}

div.popup-container div.popup{
  background-color: #f0f0f0;
  width: 350px;
  border-radius: 5px;
  padding: 20px 25px 30px 25px;
}

div.popup-container div.popup h2{
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 30px;
  color: #fa9579;
}

div.popup-container div.popup h2 button{
  border: none;
  background-color: transparent;
  outline: none;
  font-size: 18px;
  font-weight: 550;
  color: #fa9579;
}

div.popup-container div.popup input{
  width: 100%;
  margin-bottom: 20px;
  background-color: transparent;
  border: none;
  border-bottom: 2px solid #fa9579;
  border-radius: 0;
  padding: 5px 0;
  font-weight: 550;
  font-size: 14px;
  outline: none;
}
div.popup-container div.popup button.login-btn,div.popup-container div.register button.register-btn{
  font-weight: 550;
  font-style: 15px;
  color: white;
  background-color: #fa9579;
  padding: 4px 10px;
  border: none;
  outline: none;
  margin-top: 5px;
}

div.popup-container div.register{
  background-color: #edeef7;
}

div.popup-container div.register h2{
  color: #fa9579;
}

div.popup-container div.register input{
  border-bottom-color: #fa9579;
}

div.popup-container div.register button.register-btn{
  background-color: #fa9579;
}

div.user{
  color: #30475e;
  background-color: #75cfb8;
  padding: 5px 15px;
  border-radius: 5px;
  font-weight: 500;
}
div.user a{
  color: #30475e;
}

        /* Dropdown Styles */
        .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            
            

            .search-bar input[type="text"] {
                width: 100%; /* Make the search bar full width on small screens */
            }
        }

<!--//hero section css-->

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: lightblue;
    text-align: center;
    padding: 50px 0; /* Adjust the padding to make the hero section smaller */
        }

        .box {
            background-color: orange;
            border-radius: 10px;
            padding: 10px; /* Adjust the padding to make the boxes smaller */
            margin: 20px;
            display: inline-block;
            width: 120px; /* Adjust the width of the boxes */
            height: 120px; /* Adjust the height of the boxes */
            cursor: pointer;
            transition: transform 0.3s;
        }

        .box:hover {
            transform: scale(1.05);
            background-color:red;
        }

        h3 {
            margin-bottom: 10px;
        }

        p {
            font-size: 8px; /* Adjust the font size of the text */
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .box {
                width: 100%;
            }
        }
    /*ends here(hero css)*/

/*course card css*/

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .featured-courses {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #90EE90; /* Light green color, change as needed */
        }

        .course-cards-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .course-card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
            transition: transform 0.3s;
            cursor: pointer;
            width: 300px;
        }

        .course-card:nth-child(odd) {
            background-color: #3498db; /* Blue color, change as needed */
        }

        .course-card:nth-child(even) {
            background-color: #e74c3c; /* Red color, change as needed */
        }

        .course-card:hover {
            transform: scale(1.05);
        }

        .course-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .course-details {
            padding: 15px;
        }

        .section-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333; /* Pick your choice for the heading color */
        }

        .course-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333; /* Pick your choice for the heading color */
        }

        .course-description {
            font-size: 14px;
            color: #555;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .course-card {
                width: 100%;
            }
        }
/* course card css ends*/


/*about us css*/

.color {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #4E54C8; /* Background color */
    }

    .container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 20px;
    }

    .card {
      position: relative;
      width: 200px;
      height: 300px;
      margin: 10px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background: linear-gradient(45deg, #3949ab, #1e88e5); /* Gradient for 3D effect */
      color: #fff;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      height: 60%;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
    }

    .card-content {
      padding: 10px;
    }

    h2, h3, p {
      margin: 0;
    }

    /* Responsive Styles */
    @media screen and (max-width: 600px) {
      .card {
        width: 100%;
        height: auto;
      }
    }



/*about us css ends*/

/*footer css*/

footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer-logo {
            max-width: 100px; /* Adjust the max-width of the logo */
            margin-bottom: 10px;
        }

        .college-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .college-link {
            color: #fff;
            text-decoration: none;
        }

        .college-address {
            font-size: 14px;
        }


/*footer css ends*/


    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="https://cutm.ac.in/wp-content/uploads/2020/01/fav-icon.png" alt="Logo"> <!-- Replace "your-logo.png" with the path to your logo image -->
    </div>
    <a href="#home">Home</a>
    <div class="dropdown">
        <a href="#tutorials" class="dropbtn">Tutorials</a>
        <div class="dropdown-content">
            <a href="cp.html">Cloud Practioner</a>
            <a href="saa.html">AWS Solution Architect</a>
            <a href="devops.html">AWS DevOps</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#quizzes" class="dropbtn">Quizes</a>
        <div class="dropdown-content">
            <a href="cp-quiz.htm">AWS CP</a>
            <a href="saa-quiz.htm">AWS SAA</a>
            <a href="devops-quiz.htm">AWS DEVOPS</a>
        </div>
    </div>
    <a href="certification.php">Get Certification</a>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="button">Search</button>
    </div>
    <div class='login-register'>
      <button type='button' onclick="popup('login-popup')">LOGIN</button>
      <button type='button' onclick="popup('register-popup')">REGISTER</button>
    </div>
</div>

<div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>

  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>

<!-- Page content -->

<!--//hero section bodypart-->

<div class="hero-section">
<h2><marquee direction=right>WELCOME TO OUR LEARNING PLATFORM</marquee></h2>
    <div class="box" onclick="redirectTo('read.html')">
        <h3>Read</h3>
        <p>Expand your knowledge by reading high-quality content from experts.</p>
    </div>

    <div class="box" onclick="redirectTo('write.html')">
        <h3>Write</h3>
        <p>Enhance your understanding by expressing your thoughts and ideas through writing.</p>
    </div>

    <div class="box" onclick="redirectTo('practice.html')">
        <h3>Practice</h3>
        <p>Apply what you've learned through hands-on practice and real-world scenarios.</p>
    </div>

    <div class="box" onclick="redirectTo('learn.html')">
        <h3>Learn</h3>
        <p>Engage in interactive lessons and courses to acquire new skills and knowledge.</p>
    </div>

    <div class="box" onclick="redirectTo('revise.html')">
        <h3>Revise</h3>
        <p>Review and reinforce your learning through revision and self-assessment.</p>
    </div>
</div>

<!--body of course card css-->

<div class="featured-courses">
    <div class="section-heading">Pick Your Choice</div>

    <div class="course-cards-container">
        <div class="course-card" onclick="redirectTo('cp.html')">
            <div class="course-details">
                <div class="course-title">Course 1: Cloud Practitioner</div>
                <div class="course-description">Description of Course 1.</div>
            </div>
        </div>

        <div class="course-card" onclick="redirectTo('saa.html')">
            <div class="course-details">
                <div class="course-title">Course 2: Solution Architect</div>
                <div class="course-description">Description of Course 2.</div>
            </div>
        </div>

        <div class="course-card" onclick="redirectTo('devops.html')">
            <div class="course-details">
                <div class="course-title">Course 3: DevOps</div>
                <div class="course-description">Description of Course 3.</div>
            </div>
        </div>
    </div>
</div>

<script>
    function redirectTo(url) {
        // Redirect to the specified URL
        window.location.href = url;
    }
</script>

<!--body of course card ends-->

<!--about us body-->

<div class="color">
  <h2 style="text-align: left; color: #fff; margin-top: 00px;">About Developers</h2>
  <div class="container">
    <!-- Developer 1 -->
    <div class="card">
      <img src="Sarthak's pic.jpeg" alt="Developer 1">
      <div class="card-content">
        <h3>Founder</h3>
        <p>Hopefully you'll get something valuable content in this page.</p>
      </div>
    </div>

    <!-- Developer 2 -->
    <div class="card">
      <img src="Somesh's pic.jpeg" alt="Developer 2">
      <div class="card-content">
        <h3>Co-founder</h3>
        <p>😀</p>
      </div>
    </div>

    <!-- Developer 3 -->
    <div class="card">
      <img src="Arya.jpeg" alt="Developer 3">
      <div class="card-content">
        <h3>Co-founder</h3>
        <p>Hey!!</p>
      </div>
    </div>

    <!-- Developer 4 -->
    <div class="card">
      <img src="Rabi.jpeg" alt="Developer 4">
      <div class="card-content">
        <h3>Co-founder</h3>
        <p>Just smile and study.</p>
      </div>
    </div>

    <!-- Developer 5 -->
    <div class="card">
      <img src="Soumya.jpeg" alt="Developer 5">
      <div class="card-content">
        <h3>Co-founder</h3>
        <p>😀</p>
      </div>
    </div>
  </div>
 </div>

<!--about us body ends-->

<!--footer body-->

<footer>
    <img src="https://cutm.ac.in/wp-content/uploads/2020/01/fav-icon.png" alt="College Logo" class="footer-logo">
    <div class="college-name">CENTURION UNIVERSITY OF TECHNOLOGY AND MANAGEMENT</div>
    <a href="https://www.yourcollegelink.com" class="college-link" target="_blank">www.cutm.ac.in</a>
    <div class="college-address">Bhubaneswar, Odisha
 </div>
</footer>

<!--footer body ends here-->

</body>
</html>

