<?php
include 'db.php';
include 'header.php';
include 'nav.php';
include 'search.php';
include 'notification.php';
?>
<style>
    .card-image img{
        height: 250px !important;
    }
</style>

<?php
$county = (!empty($_POST['county']) ? $_POST['county'] : '');
$house_type = (!empty($_POST['house_type']) ? $_POST['house_type'] : '');
$house_size = (!empty($_POST['house_size']) ? $_POST['house_size'] : '');
$cost = (!empty($_POST['cost']) ? $_POST['cost'] : '');
$house_for = (!empty($_POST['house_for']) ? $_POST['house_for'] : '');
$search = (!empty($_POST['search']) ? $_POST['search'] : '');
?>

<div class="row" style="width: 96%; margin: auto;">
    <div class="row col s12 blue lighten-1 valign-wrapper" style="height: 40px;">
        <p class=" white-text" style="font-size: 20px; font-weight: bold;">Search Results:- House for <?php echo $house_for . ': ' . $house_size . ' ' . $house_type . ' ' . $cost . ' ' . $county; ?></p>
    </div>
    <?php
    if ($search == "ok") {
        if ($county == "" && $house_type == "" && $house_size == "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale1($house_for);
        } if ($county != "" && $house_type == "" && $house_size == "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale2($house_for, $county);
        } if ($county == "" && $house_type != "" && $house_size == "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale3($house_for, $house_type);
        }if ($county == "" && $house_type == "" && $house_size != "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale4($house_for, $house_size);
        }if ($county != "" && $house_type != "" && $house_size == "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale6($house_for, $county, $house_type);
        }if ($county != "" && $house_type == "" && $house_size != "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale7($house_for, $county, $house_size);
        }if ($county != "" && $house_type != "" && $house_size != "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale9($house_for, $county, $house_size, $house_type);
        }
        if ($county == "" && $house_type != "" && $house_size != "" && $cost == "") {
            $result = SmarthouseDB::getInstance()->get_houses_for_sale11($house_for, $house_size, $house_type);
        }
        if ($county == "" && $house_type == "" && $house_size == "" && $cost != "") {
            if ($cost == "0 - 10,000") {
                $min = 0;
                $max = 10000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            } elseif ($cost == "10,000 - 20,000") {
                $min = 10000;
                $max = 20000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            } elseif ($cost == "20,000 - 30,000") {
                $min = 20000;
                $max = 30000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            } elseif ($cost == "30,000 - 40,000") {
                $min = 30000;
                $max = 40000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            } elseif ($cost == "40,000 - 50,000") {
                $min = 40000;
                $max = 50000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            } elseif ($cost == "50,000 - 100,000") {
                $min = 50000;
                $max = 100000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            } elseif ($cost == "100,000 - Above") {
                $min = 100000;
                $max = 100000000000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale5($house_for, $min, $max);
            }
        }if ($county != "" && $house_type == "" && $house_size == "" && $cost != "") {
            if ($cost == "0 - 10,000") {
                $min = 0;
                $max = 10000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            } elseif ($cost == "10,000 - 20,000") {
                $min = 10000;
                $max = 20000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            } elseif ($cost == "20,000 - 30,000") {
                $min = 20000;
                $max = 30000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            } elseif ($cost == "30,000 - 40,000") {
                $min = 30000;
                $max = 40000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            } elseif ($cost == "40,000 - 50,000") {
                $min = 40000;
                $max = 50000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            } elseif ($cost == "50,000 - 100,000") {
                $min = 50000;
                $max = 100000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            } elseif ($cost == "100,000 - Above") {
                $min = 100000;
                $max = 100000000000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale8($house_for, $min, $max, $county);
            }
        }

        if ($county != "" && $house_type != "" && $house_size == "" && $cost != "") {
            if ($cost == "0 - 10,000") {
                $min = 0;
                $max = 10000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            } elseif ($cost == "10,000 - 20,000") {
                $min = 10000;
                $max = 20000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            } elseif ($cost == "20,000 - 30,000") {
                $min = 20000;
                $max = 30000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            } elseif ($cost == "30,000 - 40,000") {
                $min = 30000;
                $max = 40000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            } elseif ($cost == "40,000 - 50,000") {
                $min = 40000;
                $max = 50000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            } elseif ($cost == "50,000 - 100,000") {
                $min = 50000;
                $max = 100000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            } elseif ($cost == "100,000 - Above") {
                $min = 100000;
                $max = 100000000000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale10($house_for, $min, $max, $county, $house_type);
            }
        }

        if ($county == "" && $house_type != "" && $house_size == "" && $cost != "") {

            if ($cost == "0 - 10,000") {
                $min = 0;
                $max = 10000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            } elseif ($cost == "10,000 - 20,000") {
                $min = 10000;
                $max = 20000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            } elseif ($cost == "20,000 - 30,000") {
                $min = 20000;
                $max = 30000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            } elseif ($cost == "30,000 - 40,000") {
                $min = 30000;
                $max = 40000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            } elseif ($cost == "40,000 - 50,000") {
                $min = 40000;
                $max = 50000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            } elseif ($cost == "50,000 - 100,000") {
                $min = 50000;
                $max = 100000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            } elseif ($cost == "100,000 - Above") {
                $min = 100000;
                $max = 100000000000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale12($house_for, $min, $max, $house_type);
            }
        }
        
         if ($county != "" && $house_type != "" && $house_size != "" && $cost != "") {
           
            if ($cost == "0 - 10,000") {
                $min = 0;
                $max = 10000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            } elseif ($cost == "10,000 - 20,000") {
                $min = 10000;
                $max = 20000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            } elseif ($cost == "20,000 - 30,000") {
                $min = 20000;
                $max = 30000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            } elseif ($cost == "30,000 - 40,000") {
                $min = 30000;
                $max = 40000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            } elseif ($cost == "40,000 - 50,000") {
                $min = 40000;
                $max = 50000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            } elseif ($cost == "50,000 - 100,000") {
                $min = 50000;
                $max = 100000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            } elseif ($cost == "100,000 - Above") {
                $min = 100000;
                $max = 100000000000;
                $result = SmarthouseDB::getInstance()->get_houses_for_sale13($house_for, $min, $max, $county, $house_type,$house_size);
            }
        }
        if (mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>

                <div class="col s12 m3" style="margin-top: 5px;">
                    <div class="card" style="min-height: 535px;">
                        <div class="card-image">
                            <img src="images/uploads/<?php echo $row["image_path"]; ?>">
                        </div>
                        <div class="card-content">
                            <p class="orange-text"><?php echo substr($row["title"], 0, 95); ?> </p>
                            <p><?php echo $row["type_of_house"]; ?></p>
                            <p><?php echo $row["category"]; ?></p>
                            <p><?php echo $row["neighbourhood"]; ?></p>
                            <p>KSh. <?php echo $row["actual_cost"]; ?></p>
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