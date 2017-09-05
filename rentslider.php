<div class="row col s12 white-text" style="width: 96.5%; height: 30px;">
    <p class="teal-text " style="font-size: 20px; font-weight: bold;">Houses for Rent</p>
    <div class="divider white z-depth-1" style="margin-top: -25px;"></div>
</div>
<div class="slider" style="margin-top: 20px; width: 98%; margin: auto; z-index: -1;">
    <ul class="slides  center-align" style="background-color: rgba(234, 233, 233, 0.42);">
        <?php
        $rent = "Rent";
        $result = SmarthouseDB::getInstance()->get_houses_for_rent($rent);
        $num_rows = mysqli_num_rows($result);
        $sliders = $num_rows%4;
     for ($i = 0; $i < $sliders; $i++) {
         
                ?>

                <li>
                    <div class="row">
                        <?php
                    
                              for ($y = 0; $y < 4; $y++) {
                                  $row = mysqli_fetch_array($result);
                             ?>
                      <div class="col m3 s12">
                            <img src="images/uploads/<?php echo $row["image_path"]; ?>" class="responsive-img" style="height: 300px;" style="margin-left: 10px;"/>
                            <div class=" col s12 white left-align" style="margin-top: -8px;border: 1px solid #ddd; ">
                                <div class="col s12">
                                    <p class="orange-text"> <?php echo substr($row["title"], 0, 30); ?></p> 
                                </div>
                               
                                <div class="col s6">
                                    <p class="blue-text" style="margin-top: -15px;"> Ksh. <?php echo $row["actual_cost"]; ?></p>
                                </div>
                                <div class="col s6">
                                    <a class=" orange darken-4 white-text" href="index.php" style="float: right;  border-radius: 2px;"> Details  <i class="material-icons" style="vertical-align: bottom;">send</i> </a>
                                </div>
                            </div>
                        </div>
                        <?php
                         }
                        
                 
                        ?>
                       
                    </div>
                </li>
                <?php
           
                }
        ?>


    </ul>
    
</div>
<button class="next btn left" style="background: rgba(130,130,130,.3) !important; margin-left: 2%; margin-top: -300px;z-index: 1000;height: 2%; z-index: 1; width: 1%;"><i class="material-icons">chevron_left</i></button>
<button class="next btn  right" style="background: rgba(130,130,130,.3) !important; margin-right: 2%; margin-top: -300px;z-index: 1000;height: 2%; z-index: 1; width: 1%;"><i class="material-icons">chevron_right</i></button>
