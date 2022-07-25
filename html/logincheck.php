              <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              require_once 'Connection.php';
              $user = $_POST['email'];
              $pass = $_POST['password'];
              require_once 'Connection.php';
              $sql = "select * from admin where Email='$user' && Password='$pass' ";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  session_start();
                  $_SESSION['User'] = $_POST['email'];
                  $_SESSION['status'] = 'logedin';
                  echo "<script>alert('Logged in Successfully !')</script>";
                  header('Location: index.php');
              } else {
                  echo "<script>alert('Username/Password Invalid')</script>";
                  header('Location:auth-login-basic.php');

              }
          }

