<div id="index-banner" class="parallax-container hide-on-med-and-down" style="">
    <div class="section no-pad-bot" style="width: 84%; margin: auto;">
        <button class="tablink" onclick="openCity('London', this, 'rgb(245, 127, 23)')">House For Sale</button>
        <button class="tablink" onclick="openCity('Paris', this, 'rgb(245, 127, 23)')">House For Rent</button>
        <button class="tablink" onclick="openCity('Tokyo', this, 'rgb(245, 127, 23)')" id="defaultOpen">Land</button>
        <button class="tablink" onclick="openCity('Oslo', this, 'rgb(245, 127, 23)')">Tell us what you are looking for</button>
        <div id="London" class="tabcontent">
            <?php include 'house_for_sale_form.php'; ?>
        </div>
        <div id="Paris" class="tabcontent">
            <?php include 'house_for_rent_form.php'; ?>
        </div>
        <div id="Tokyo" class="tabcontent">
            <?php include 'search_land_form.php'; ?>
        </div>
        <div id="Oslo" class="tabcontent">
            <?php include 'tell_us_form.php'; ?>
        </div>
    </div>
    <div class="parallax"><img src="images/photo1.jpg" alt="Unsplashed background img 1" style=""></div>
</div>