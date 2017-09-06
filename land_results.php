<?php
include 'db.php';
include 'header.php';
include 'nav.php';
include 'search3.php';
include 'notification.php';
?>
<style>
    .card-image img{
        height: 250px !important;
    }
</style>


<?php
$county = (!empty($_POST['county']) ? $_POST['county'] : '');
$cost = (!empty($_POST['cost']) ? $_POST['cost'] : '');
$land_for = (!empty($_POST['land_for']) ? $_POST['land_for'] : '');
?>

<div class="row" style="width: 96%; margin: auto;">
    <div class="row col s12 blue lighten-1 valign-wrapper" style="height: 40px;">
        <p class=" white-text" style="font-size: 20px; font-weight: bold;">Search Results:- Land for <?php
            if ($land_for == '') {
                echo 'Sale or Lease';
            } echo $land_for . ': ' . $county . ' ' . $cost;
            ?></p>
    </div>

    <?php
    if ($county == "" && $land_for == "" && $cost == "") {
        $result = SmarthouseDB::getInstance()->get_land();
    } if ($county != "" && $land_for == "" && $cost == "") {
        $result = SmarthouseDB::getInstance()->get_land1($county);
    }
    if ($county == "" && $land_for != "" && $cost == "") {
        $result = SmarthouseDB::getInstance()->get_land2($land_for);
    }
     if ($county != "" && $land_for != "" && $cost == "") {
        $result = SmarthouseDB::getInstance()->get_land4($county, $land_for);
    }
    if ($county == "" && $land_for == "" && $cost != "") {
        if ($cost == "100,000-200,000") {
            $min = 100000;
            $max = 200000;
            $result = SmarthouseDB::getInstance()->get_land3($min, $max);
        }
         if ($cost == "200,000 - 500,000") {
            $min = 200000;
            $max = 500000;
            $result = SmarthouseDB::getInstance()->get_land3($min, $max);
        }
         if ($cost == "500,000 - 1,000,000") {
            $min = 500000;
            $max = 1000000;
            $result = SmarthouseDB::getInstance()->get_land3($min, $max);
        }
         if ($cost == "1,000,000 - 5,000,000") {
            $min = 1000000;
            $max = 5000000;
            $result = SmarthouseDB::getInstance()->get_land3($min, $max);
        }
         if ($cost == "5,000,000 - 50,000,000") {
            $min = 5000000;
            $max = 50000000;
            $result = SmarthouseDB::getInstance()->get_land3($min, $max);
        }
         if ($cost == "50,000,000 - Above") {
            $min = 50000000;
            $max = 100000000000000;
            $result = SmarthouseDB::getInstance()->get_land3($min, $max);
        }
    }
     if ($county != "" && $land_for == "" && $cost != "") {
       
        if ($cost == "100,000-200,000") {
            $min = 100000;
            $max = 200000;
            $result = SmarthouseDB::getInstance()->get_land5($county,$min, $max);
        }
         if ($cost == "200,000 - 500,000") {
            $min = 200000;
            $max = 500000;
            $result = SmarthouseDB::getInstance()->get_land5($county,$min, $max);
        }
         if ($cost == "500,000 - 1,000,000") {
            $min = 500000;
            $max = 1000000;
            $result = SmarthouseDB::getInstance()->get_land5($county,$min, $max);
        }
         if ($cost == "1,000,000 - 5,000,000") {
            $min = 1000000;
            $max = 5000000;
            $result = SmarthouseDB::getInstance()->get_land5($county,$min, $max);
        }
         if ($cost == "5,000,000 - 50,000,000") {
            $min = 5000000;
            $max = 50000000;
            $result = SmarthouseDB::getInstance()->get_land5($county,$min, $max);
        }
         if ($cost == "50,000,000 - Above") {
            $min = 50000000;
            $max = 100000000000000;
            $result = SmarthouseDB::getInstance()->get_land5($county,$min, $max);
        }
    }
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col s12 m3" style="margin-top: 5px;">
                <div class="card" style="min-height: 400px;">
                    <div class="card-image">
                        <img src="images/uploads/<?php echo $row["image_path"]; ?>">
                    </div>
                    <div class="card-content">
                        <p class="orange-text"><?php echo substr($row["title"], 0, 35); ?> </p>
                        <p>For: <?php echo $row["land_for"]; ?></p>
                        <p>County: <?php echo $row["county"]; ?></p>
                        <p>Size: <?php echo $row["size"]; ?></p>
                        <p>KSh. <?php echo $row["actual_cost"]; ?></p>
                        <a href="#"> Details</a>
                    </div>

                </div>
            </div>              
            <?php
        }
        mysqli_free_result($result);
    } else {
        ?>

        <div class="col s12" style="margin-top: 20px;">
            <h4>No results found.</h4>
        </div>

        <?php
    }
    ?>
</div>

<?php
include 'whoweare.php';
include 'footer.php';
include 'scripts.php';
?>  