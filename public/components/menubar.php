<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        .top-bar-container {
          background-color: #262626;
          position: sticky;
          top: 0;
          width: 100%;
          text-align: center;
          display: grid;
          grid-template-columns: 1fr 3fr 1fr;
          z-index: 2;
          box-shadow: 0px 0.5px 2px black;
        }

        .logo-bar {
          width: 30px;
          height: 30px;
          padding-top: 14%;
          margin: 0 auto;
        }

        .navigation-bar {
          color: #ffffff;
        }
        .navigation-bar li {
          display: inline-block;
          padding: 5%;
          font-size: large;
        }

        a:link {
          color: #ffffff;
          text-decoration: none;
        }

        a:visited {
          color: #ffffff;
        }

        a:hover {
          color: #7d80ff;
          text-shadow: 2px 2px 4px black;
        }

        .login-button {
          display: inline;
          padding-top: 2.5rem;
        }
        a.login-btn {
          padding: 3% 10%;
          border-radius: 30px;
          width: 60%;
          background: #ffffff;
          color: #262626 !important;
          font-size: large;
          border: none;
          box-shadow: 0px 0px 0px black;
        }

        .login-btn:hover {
          background: #ffa88e;
          animation: shadow 0.5s forwards;
          text-shadow: none;
        }

        @keyframes shadow {
          0% {
            box-shadow: 0px 0px 0px black;
          }
          100% {
            box-shadow: 0px 8px 20px black;
          }
        }

        .login-btn:active {
          background: #ff511c;
          color: #262626;
        }
    </style>
    </head>
  <body>
    <!--menu bar start-->
    <header class="top-bar-container">
      <img class="logo-bar" src="" alt="Logo" />
      <div class="navigation-bar">
        <li><a class="nav-item" href="/webify/public/mainpage.php">Home</a></li>
        <li><a class="nav-item" href="#about">About</a></li>
        <li><a class="nav-item" href="#contact">Contact</a></li>
      </div>
      <div class="login-button">
        <!--Need to just add the onClick function to open login / signup page-->
        <a href="./sign-in.html" class="login-btn">Login</a>
      </div>
    </header>
    <!--menu bar end-->
    </body>
</html>