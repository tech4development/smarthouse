<link href="css/searchsale.css" rel="stylesheet" type="text/css"/>
<div class="row col s12">
    <form action="get_search_results.php" method="post" enctype="multipart/form-data">
        <div class="col s12 m4" style="margin-left: -50px;">
            <select name="county" class="browser-default blue-grey-text minimal" >
                <option value="" disabled selected>Select County</option>
                <option value="Baringo County">Baringo County</option>
                <option value="Bomet County">Bomet County</option>
                <option value="Bungoma County">Bungoma County</option>
                <option value="Busia County">Busia County</option>
                <option value="Elgeyo Marakwet County">Elgeyo Marakwet County</option>
                <option value="Embu County">Embu County</option>
                <option value="Garissa County">Garissa County</option>
                <option value="Homa Bay County">Homa Bay County</option>
                <option value="Isiolo County">Isiolo County</option>
                <option value="Kajiado County">Kajiado County</option>
                <option value="Kakamega County">Kakamega County</option>
                <option value="Kericho County">Kericho County</option>
                <option value="Kiambu County">Kiambu County</option>
                <option value="Kilifi County">Kilifi County</option>
                <option value="Kirinyaga County">Kirinyaga County</option>
                <option value="Kisii County">Kisii County</option>
                <option value="Kisumu County">Kisumu County</option>
                <option value="Kitui County">Kitui County</option>
                <option value="Kwale County">Kwale County</option>
                <option value="Laikipia County">Laikipia County</option>
                <option value="Lamu County">Lamu County</option>
                <option value="Machakos County">Machakos County</option>
                <option value="Makueni County">Makueni County</option>
                <option value="Mandera County">Mandera County</option>
                <option value="Meru County">Meru County</option>
                <option value="Migori County">Migori County</option>
                <option value="Marsabit County">Marsabit County</option>
                <option value="Mombasa County">Mombasa County</option>
                <option value="Muranga County">Muranga County</option>
                <option value="Nairobi County">Nairobi County</option>
                <option value="Nakuru County">Nakuru County</option>
                <option value="Nandi County">Nandi County</option>
                <option value="Narok County">Narok County</option>
                <option value="Nyamira County">Nyamira County</option>
                <option value="Nyandarua County">Nyandarua County</option>
                <option value="Nyeri County">Nyeri County</option>
                <option value="Samburu County">Samburu County</option>
                <option value="Siaya County">Siaya County</option>
                <option value="Taita Taveta County">Taita Taveta County</option>
                <option value="Tana River County">Tana River County</option>
                <option value="Tharaka Nithi County">Tharaka Nithi County</option>
                <option value="Trans Nzoia County">Trans Nzoia County</option>
                <option value="Turkana County">Turkana County</option>
                <option value="Uasin Gishu County">Uasin Gishu County</option>
                <option value="Vihiga County">Vihiga County</option>
                <option value="Wajir County">Wajir County</option>
                <option value="West Pokot County">West Pokot County</option>
            </select>

        </div>
        <div class="col s12 m4">
            <select name="house_type" class="browser-default blue-grey-text minimal">
                <option value="" disabled selected>Select House Type</option>

                <option value="Apartment">Apartment</option>
                <option value="Bungalow">Bungalow</option>
                <option value="Town House">Town House</option>
                <option value="Commercial Offices">Commercial Offices</option>
                <option value="Office Space">Office Space</option>
                <option value="Vacational Rentals">Vacational Rentals</option>
                <option value="Urban Kiosk">Urban Kiosk</option>
                <option value="Stalls">Stalls</option>
                <option value="Warehouses">Warehouses</option>
                <option value="Godown">Godown</option>
            </select>
        </div>
        <div class="col s12 m4">
            <select  name="house_size" class="browser-default blue-grey-text minimal">
                <option value="" disabled selected>Select House Size</option>

                <option value="Double">Double</option>
                <option value="Single">Single</option>
                <option value="Bedsitter">Bedsitter</option>
                <option value="One Bedroom">One Bedroom</option>
                <option value="Two Bedroom">Two Bedroom</option>
                <option value="Three Bedroom">Three Bedroom</option>
                <option value="Four Bedroom">Four Bedroom</option>
                <option value="Five Bedroom">Five Bedroom</option>
            </select>
        </div>
        <div class="col s12 m4" style="margin-left: -50px;">
            <select name="cost" class="browser-default  blue-grey-text minimal">
                <option value="" disabled selected>Select Cost</option>

                <option value="0 - 10,000">0 - 10,000</option>
                <option value="10,000 - 20,000">10,000 - 20,000</option>
                <option value="20,000 - 30,000">20,000 - 30,000</option>
                <option value="40,000 - 50,000">40,000 - 50,000</option>
                <option value="50,000 - 100,000">50,000 - 100,000</option>
                <option value="100,000 - Above">100,000 - Above</option>
            </select>
        </div>
        <div class="col s12 m4">
            <select class="browser-default  blue-grey-text minimal" disabled>
                <option value="" disabled selected>House for Sale</option>
           
            </select>
            <input type="hidden" name="house_for" value="Sale">
        </div>
        <div class="col s12 m4">
            <button class="btn white-text waves-effect waves-light blue darken-1 valign-wrapper" type="submit" name="action" style="width: 100%; font-weight: bold; font-size: 160%; background-color: rgb(245, 127, 23) !important;">
                <i class="material-icons "style="font-size: 120%; vertical-align: bottom;">search</i> SEARCH
            </button>
        </div>

    </form>
</div>