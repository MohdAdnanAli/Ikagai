<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
    <section class="form signup">
      <header>🧿 Ikagai Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" class="form_main">
      <p class="heading">Signup</p>
        <div class="error-text"></div>

        <div class="name-details">
          <div class="field input">
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          </div>

          <div class="field input">
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>


        <div class="inputContainer">
          <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg"
            class="inputIcon">
            <path
              d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43-.199-1.354-.328-2.29-.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
            </path>
          </svg>
          <div class="field input">
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
        </div>

        <div class="inputContainer">
          <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg"
            class="inputIcon">
            <path
              d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
            </path>
          </svg>
          <div class="field input">
            <input placeholder="Password" name="password" id="password" class="inputField" type="password">
          </div>
        </div>

        
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat" style="
            position: relative;
            width: 100%;
            border: 2px solid #8000ff;
            background-color: #8000ff;
            height: 40px;
            color: white;
            font-size: .8em;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 30px;
            margin: 10px;
            cursor: pointer;
            overflow: hidden;
              ">
        </div>
      </form>
      <div class="signupContainer">
        <p>Already signed up?</p>
        <a href="login.php">Login now</a>
      </div>
    </section>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
