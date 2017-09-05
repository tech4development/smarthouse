<?php
include 'db.php';
include 'header.php';
include 'nav.php';
include 'search.php';
include 'notification.php';
?>
<style>
    .card-image img{
        height: 320px !important;
    }
</style>

<?php
$county = (!empty($_POST['county']) ? $_POST['county'] : '');
$house_type = (!empty($_POST['house_type']) ? $_POST['house_type'] : '');
$house_size = (!empty($_POST['house_size']) ? $_POST['house_size'] : '');
$cost = (!empty($_POST['cost']) ? $_POST['cost'] : '');
$house_for = (!empty($_POST['house_for']) ? $_POST['house_for'] : '');
?>

<div class="row" style="width: 96%; margin: auto;">
    <div class="row col s12 blue lighten-1 valign-wrapper" style="height: 40px;">
        <p class=" white-text" style="font-size: 20px; font-weight: bold;">Search Results: House for <?php echo $house_for. ' '.$house_size.' '.$house_type.' '.$cost; ?></p>
    </div>
    <?php
    if ($house_for == "Sale") {
        if ($county == "" && $house_type == "" && $house_size == "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale1($house_for);
        }
        if (mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>

                <div class="col s12 m4" style="margin-top: 5px;">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/uploads/<?php echo $row["image_path"]; ?>">
                            <span class="card-title"><?php echo $row["title"]; ?></span>
                        </div>
                        <div class="card-content">
                            <p><?php echo $row["type_of_house"]; ?></p>
                            <p><?php echo $row["category"]; ?></p>
                            <p><?php echo $row["neighbourhood"]; ?></p>
                            <p><?php echo $row["actual_cost"]; ?></p>
                        </div>
                        <div class="card-action">
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
    }
    ?>
</div>

<?php
include 'whoweare.php';
include 'footer.php';
include 'scripts.php';
?>   