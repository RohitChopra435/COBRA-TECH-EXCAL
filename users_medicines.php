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
    $med_name = $_POST['med'];
    header("Location: med_search.php?m_name=$med_name");
}

?>
<?php



?>
<form action="" method="post">
    <hr>
    <div id="bulkOptionsContainer" class="col-xs-4">

        <select class="form-control" name="bulk_options" id="">
            <option value="">Select Options</option>
            <option value="approve">Approve</option>
            <option value="unapprove">Unapprove</option>
        </select>
        <input type="submit" name="submit" class="btn btn-success" value="Apply">
    </div>

    <table class="table table-bordered table-hover">
        <div class="container">
            <div class="search-bar">
                <div id="select">
                    <p id="selectText">All categories</p>
                    <img src="./images/arrow.png">
                    <ul id="list">
                        <li class="options">All Categories</li>
                        <li class="options">Antibiotics</li>
                        <li class="options">Antiseptic</li>
                        <li class="options">Antipyretics</li>
                        <li class="options">Mood stabilizers</li>
                        <li class="options">Stimulant</li>
                        <li class="options">Analgesic</li>
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



        <thead>
            <tr>
                <th><input type="checkbox" id="selectAllBoxes"></th>
                <th>Medicine Name</th>
                <th>Expiry Date</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Available Quantity</th>
                <th>Status</th>
                <th>Action</th>
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
                    $med_quantity = $row['med_availableQuant'];
                    $med_status = $row['med_status'];
                ?>
                    <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="<?php echo $med_id; ?>"></td>

                <?php
                    echo "<td>{$med_name}</td>";
                    echo "<td>{$med_date}</td>";
                    echo "<td>{$med_category}</td>";
                    echo "<td>{$med_brand}</td>";
                    echo "<td>{$med_quantity}</td>";
                    echo "<td>Available</td>";

                    $the_user_name = $_SESSION['user_name'];
                    $query = "SELECT * FROM user_form WHERE username = '$the_user_name'";
                    $run_query = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($run_query);
                    $the_user_Id = $row['user_Id'];


                    $query = "SELECT * FROM order_list WHERE order_med_Id = $med_id AND order_user_Id = $the_user_Id";
                    $run_query = mysqli_query($conn, $query);
                    $the_query = "SELECT * FROM medicines m JOIN order_list o ON m.med_Id = o.order_med_Id AND o.order_user_Id = {$the_user_Id}";
                    $the_run_query = mysqli_query($conn, $the_query);
                    while ($the_row = mysqli_fetch_array($the_run_query))
                        $order_id = $the_row['order_Id'];

                    if (mysqli_num_rows($run_query) <= 0)
                        echo "<td><a href='requested_form.php?m_id={$med_id}'>Request</a></td>";
                    else {
                        $row = mysqli_fetch_array($run_query);
                        if ($row['order_status'] == 'Pending')
                            echo "<td><a href='users_req_med.php?cancel={$order_id}'>Cancel Request</a></td>";
                        else
                            echo "<td><a href='requested_form.php?m_id={$med_id}'>Request</a></td>";
                    }
                    echo "</tr>";
                } ?>
        </tbody>
    </table>

</form>

<?php include "footer.php" ?>