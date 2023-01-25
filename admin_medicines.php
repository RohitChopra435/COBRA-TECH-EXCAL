<?php @include 'config.php'; ?>
<?php @include 'header.php'; ?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['admin_name']))
    include "admin_navigation.php";
else
    include "user_navigation.php";
?>
<?php
if (isset($_POST['search'])) {
    $hint = $_POST['med'];
    header("Location: admin_med_search.php?hint=$hint&p_id=3");
}
?>
<div class="container">
    <div class="search-bar">
        <div id="select">
            <p id="selectText">All categories</p>
            <img src="./images/arrow.png">
            <ul id="list">
                <li class="options">All Categories</li>
                <li class="options">Electronics</li>
                <li class="options">Furniture</li>
                <li class="options">Sports</li>
                <li class="options">Fashion</li>
            </ul>
        </div>
        <input id="inputField" type="text" placeholder="Search Medicine">
        <button name="search" class="btn btn-primary">Search</button>
    </div>
</div>
<script>
    let select = document.getElementById("select");
    let list = document.getElementById("list");
    let selectText = document.getElementById("selectText");
    let inputField = document.getElementById("inputField");
    let options = document.getElementsByClassName("options");
    select.onclick = function() {
        list.classList.toggle("open");
    }
    for (option of options) {
        option.onclick = function() {
            selectText.innerHTML = this.innerHTML;
            inputField.placeholder = "Search In " + selectText.innerHTML;
        }
    }
</script>

<form action="" method="post">
    <center>
        <hr>
        <h4>Medicines Records List</h4>
        <hr>
    </center>


    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Medicine Name</th>
                <th>Expiry Date</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Available Quantity</th>
                <th>Quantity Requested</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $query = "SELECT * FROM medicines ORDER BY med_id DESC";
                $select_posts = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($select_posts)) {
                    $med_id = $row['med_id'];
                    $med_name = $row['med_name'];
                    $med_category = $row['med_category'];
                    $med_date = $row['med_expiryDate'];
                    $med_brand = $row['med_brand'];
                    $med_availableQuant = $row['med_availableQuant'];
                    $med_requestedQuant = $row['med_requestedQuant'];
                    $med_status = $row['med_status'];

                ?>

                <?php
                    echo "<td></td>";
                    echo "<td>{$med_name}</td>";
                    echo "<td>{$med_date}</td>";
                    echo "<td>{$med_category}</td>";
                    echo "<td>{$med_brand}</td>";
                    echo "<td>{$med_availableQuant}</td>";
                    echo "<td>{$med_requestedQuant}</td>";
                    echo "</tr>";
                } ?>
        </tbody>
    </table>

</form>
<?php include "footer.php" ?>