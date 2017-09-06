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
        <p class=" white-text" style="font-size: 20px; font-weight: bold;">Search Results:- House for <?php echo $land_for . ': ' . $house_size . ' ' . $house_type . ' ' . $cost . ' ' . $county; ?></p>
    </div>

    <?php
    if ($county == "" && $land_for == ""  && $cost == "") {
        $result = SmarthouseDB::getInstance()->get_land();
    }
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="col s12 m3" style="margin-top: 5px;">
                <div class="card" style="min-height: 450px;">
                    <div class="card-image">
                        <img src="images/uploads/<?php echo $row["image_path"]; ?>">
                    </div>
                    <div class="card-content">
                        <p class="orange-text"><?php echo substr($row["title"], 0, 95); ?> </p>
                        <p><?php echo $row["type_of_house"]; ?></p>
                        <p><?php echo $row["category"]; ?></p>
                        <p><?php echo $row["neighbourhood"]; ?></p>
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