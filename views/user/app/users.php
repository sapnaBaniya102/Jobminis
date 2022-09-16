<?php 
  session_start();
  include_once "../../connection/config.php";
  if(!isset($_SESSION['userId'])){
    header("location: ../../auth/login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <?php echo $_SESSION['userId'];?>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM user WHERE id = {$_SESSION['userId']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
           <a href="dashboard.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <div class="details">
            <span><?php echo $row['email'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="../../../assets/js/users.js"></script>

</body>
</html>
