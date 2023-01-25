<?php @include 'config.php'; ?>
<?php session_start(); ?>

<?php include "header.php"; ?>

<?php
if (isset($_SESSION['admin_name'])) {
  include "admin_navigation.php";
  $username = $_SESSION['admin_name'];
} else {
  include "user_navigation.php";
  $username = $_SESSION['user_name'];
}
?>
<?php


$query = "SELECT * FROM user_form WHERE username = '{$username}'";
$select_user_profile_query = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($select_user_profile_query)) {
  $user_id = $row['user_Id'];
  $user_fullname = $row['user_fullname'];
  $user_phone_number = $row['user_phone'];
  $user_address = $row['user_address'];
  $username = $row['username'];
  $user_city = $row['user_email'];
  $user_ZIP_Code = $row['user_type'];
}

if (isset($_POST['update'])) {
  $user_name = $_POST['name'];
  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_phone_number = $_POST['user_phone_number'];
  $user_country = $_POST['user_country'];
  $user_address = $_POST['user_address'];
  $user_state = $_POST['user_state'];
  $user_city = $_POST['user_city'];
  $user_ZIP_Code = $_POST['user_ZIP-Code'];

  $query = "UPDATE user_form SET ";

  $query .= "user_firstname = '{$user_firstname}', ";
  $query .= "user_lastname = '{$user_lastname}', ";
  $query .= "user_phoneno = '{$user_phone_number}', ";
  $query .= "user_country = '{$user_country}', ";
  $query .= "user_address = '{$user_address}', ";
  $query .= "user_state = '{$user_state}', ";
  $query .= "user_city = '{$user_city}', ";
  $query .= "user_postalcode = '{$user_ZIP_Code}' ";


  $query .= "WHERE user_id = {$user_id} ";

  $select_user_profile_query = mysqli_query($conn, $query);
  if (!$select_user_profile_query) {
    die("Query Failed" . mysqli_error($conn));
  }
  $_SESSION['profile'] = 'ok';
}
?>


<body>
  <div class="form-container">

    <form action="" method="post">
      <h3>Profile</h3>
      <h4>Username</h4>
      <input type="text" name="name" value="<?php echo $username; ?>">
      <?php
      if (isset($_SESSION['profile'])) {
        echo "<h4>User_firstname</h4>";
        echo "<input type='text' name='user_firstname' value='$user_firstname'>";
        echo "<h4>user_lastname</h4>";
        echo "<input type='text' name='user_lastname' value='$user_lastname'>";
        echo "<h4>User_Phone Number</h4>";
        echo "<input type='text' name='user_phone_number' value='$user_phone_number'>";
        echo "<h4>User_Country</h4>";
        echo "<input type='text' name='user_country' value='$user_country'>";
        echo "<h4>User Address</h4>";
        echo "<input type='text' name='user_address' value='$user_address'>";
        echo "<h4>User_state</h4>";
        echo "<input type='text' name='user_state' value='$user_state'>";
        echo "<h4>User City</h4>";
        echo "<input type='text' name='user_city' value='$user_city'>";
        echo "<h4>User_postal_code/ZIP-Code</h4>";
        echo "<input type='text' name='user_city' value='$user_ZIP_Code'>";
      } else {
        echo "<h4>User_firstname</h4>";
        echo "<input type='text' name='user_firstname' required placeholder='Enter firstname''>";
        echo "<h4>user_lastname</h4>";
        echo "<input type='text' name='user_lastname' required placeholder='Enter lastname''>";
        echo "<h4>User_Phone Number</h4>";
        echo "<input type='text' name='user_phone_number' required placeholder='Enter phone number'''>";
        echo "<h4>User_Country</h4>";
        echo "<input type='text' name='user_country' required placeholder='Enter Your country''>";
        echo "<h4>User Address</h4>";
        echo "<input type='text' name='user_address' required placeholder='Enter Address''>";
        echo "<h4>User_state</h4>";
        echo "<input type='text' name='user_state' placeholder='Enter your state''>";
        echo "<h4>User City</h4>";
        echo "<input type='text' name='user_city' required placeholder='Enter Your City''>";
        echo "<h4>User_postal_code/ZIP-Code</h4>";
        echo "<input type='text' name='user_city' required placeholder='Enter Your Zip-code''>";
      }
      ?>



      <!-- <h4></h4> -->
      <input type="submit" name="update" value="Update Now" class="form-btn">
    </form>

  </div>


  <?php include "footer.php"; ?>