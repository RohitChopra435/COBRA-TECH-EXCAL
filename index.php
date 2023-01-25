<?php include "config.php" ?>
<?php include "header.php" ?>
<?php session_start(); ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome To Admin
                        <small><?php echo $_SESSION['admin_name'] ?></small>
                    </h1>

                </div>
            </div>
            <!-- /.row -->



            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    <?php

                                    $query = "SELECT * FROM medicines";
                                    $select_all_post = mysqli_query($conn, $query);
                                    $medicine_count = mysqli_num_rows($select_all_post);

                                    echo "<div class='huge'>{$medicine_count}</div>"

                                    ?>

                                    <div>Medicines</div>
                                </div>
                            </div>
                        </div>
                        <a href="admin_medicines.php?p_id=3">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php

                                    $query = "SELECT * FROM comments";
                                    $select_all_comments = mysqli_query($connection, $query);
                                    $comment_count = mysqli_num_rows($select_all_comments);
                                    echo "<div class='huge'>{$comment_count}</div>"

                                    ?>

                                    <div>Comments</div>
                                </div>
                            </div>
                        </div>
                        <a href="comments.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php

                                    $query = "SELECT * FROM users";
                                    $select_all_users = mysqli_query($conn, $query);
                                    $user_count = mysqli_num_rows($select_all_users);
                                    echo "<div class='huge'>{$user_count}</div>"

                                    ?>
                                    <div> Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="users.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">

                                    <?php

                                    $query = "SELECT * FROM categories";
                                    $select_all_category = mysqli_query($conn, $query);
                                    $category_count = mysqli_num_rows($select_all_category);
                                    echo "<div class='huge'>{$category_count}</div>"

                                    ?>

                                    <div>Categories</div>
                                </div>
                            </div>
                        </div>
                        <a href="categories.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
            <!-- /.row -->

            <?php

            $query = "SELECT * FROM medicines WHERE med_category = 'Antibiotic'";
            $select_all_Antibiotic = mysqli_query($conn, $query);
            $Antibiotic_count = mysqli_num_rows($select_all_Antibiotic);

            $query = "SELECT * FROM medicines WHERE med_category = 'Antiseptic'";
            $select_all_Antiseptic = mysqli_query($conn, $query);
            $Antiseptic_count = mysqli_num_rows($select_all_Antiseptic);

            $query = "SELECT * FROM medicines WHERE med_category = 'Antipyretics'";
            $Antipyretics_query = mysqli_query($conn, $query);
            $Antipyretics_count = mysqli_num_rows($Antipyretics_query);

            $query = "SELECT * FROM medicines WHERE med_category = 'Mood stabilizers'";
            $select_all_MoodStabilizers = mysqli_query($conn, $query);
            $MoodStabilizers_count = mysqli_num_rows($select_all_MoodStabilizers);

            $query = "SELECT * FROM medicines WHERE med_category = 'Stimulant'";
            $select_all_Stimulant = mysqli_query($conn, $query);
            $Stimulant_count = mysqli_num_rows($select_all_Stimulant);

            $query = "SELECT * FROM medicines WHERE med_category = 'Analgesic'";
            $select_all_Analgesic = mysqli_query($conn, $query);
            $Analgesic_count = mysqli_num_rows($select_all_Analgesic);

            ?>
            <div class="row">

                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],

                            <?php
                            $element_text = ['Antibiotic', 'Antiseptic', 'Antipyretics', 'Mood stabilizers', 'Stimulant', 'Analgesic'];
                            $element_count = [$Antibiotic_count, $Antiseptic_count, $Antipyretics_count, $MoodStabilizers_count, $Stimulant_count, $Analgesic_count];

                            for ($i = 0; $i < 6; $i++) {

                                echo "['{$element_text[$i]}'" . "," . "$element_count[$i]]" . ",";
                            }

                            ?>
                        ]);

                        var options = {
                            chart: {
                                title: '',
                                subtitle: '',
                            }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                    }
                </script>

                <div id="columnchart_material" style="width: auto; height: 500px;"></div>

            </div>




        </div>
        <!-- /.container-fluid -->

        <?php include "footer.php" ?>