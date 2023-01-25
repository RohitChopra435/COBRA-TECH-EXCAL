<?php

$username = $_SESSION['delivery_name'];

?>
<?php
if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
} else {
    $p_id = 0;
}
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class=" container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <img src="/images/logo.png" alt="img" class="logo" width="2" height="2">
                    </li> -->
                    <li class="nav-item">
                        <a style=" font-size: 25px color: #013;;" class="nav-link"> Welcome <?php echo $username; ?></a>
                    </li>
                    <?php
                    if ($p_id == 1) {

                        echo "<li class='nav-item'>
                        <a class='nav-link active' aria-current='page' href='/delivery-home.php?p_id=1'>Home</a>
                    </li>";
                    } else {
                        echo "<li class='nav-item'>
                    <a class='nav-link' aria-current='page' href='/delivery-home.php?p_id=1'>Home</a>
                </li>";
                    }
                    if ($p_id == 2) {
                        echo "<li class='nav-item'>
                           <a class='nav-link active' href='/account.php?p_id=2'>Account</a>
                       </li>";
                    } else {
                        echo "<li class='nav-item'>
                           <a class='nav-link ' href='/account.php?p_id=2'>Account</a>
                       </li>";
                    }
                    if ($p_id == 3) {
                        echo "<li class='nav-item'>
                    <a class='nav-link active' href='/delivery-hist.php?p_id=3'>Delivery History</a>
                </li>";
                    } else {
                        echo "<li class='nav-item'>
                    <a class='nav-link ' href='/delivery-hist.php?p_id=3'>Delivery History</a>
                </li>";
                    }
                    echo "<li class='nav-item'>
                    <a href='logout.php' class='nav-link '><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#signUpModal'>log out </button></a>
                </li>";
                    ?>

                </ul>

            </div>
        </div>
</div>
</nav>
</div>