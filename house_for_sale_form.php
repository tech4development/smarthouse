<link href="css/searchsale.css" rel="stylesheet" type="text/css"/>
<div class="row col s12">
    <form action="results.php" method="post" enctype="multipart/form-data">
        <div class="col s12 m4" style="margin-left: -50px;">
            <select name="county" class="browser-default blue-grey-text minimal" >
                <option value="" disabled selected>Select County</option>
                <option value="Baringo">Baringo County</option>
                <option value="Bomet">Bomet County</option>
                <option value="Bungoma">Bungoma County</option>
                <option value="Busia">Busia County</option>
                <option value="Elgeyo Marakwet">Elgeyo Marakwet County</option>
                <option value="Embu">Embu County</option>
                <option value="Garissa">Garissa County</option>
                <option value="Homa Bay">Homa Bay County</option>
                <option value="Isiolo">Isiolo County</option>
                <option value="Kajiado">Kajiado County</option>
                <option value="Kakamega">Kakamega County</option>
                <option value="Kericho">Kericho County</option>
                <option value="Kiambu">Kiambu County</option>
                <option value="Kilifi">Kilifi County</option>
                <option value="Kirinyaga">Kirinyaga County</option>
                <option value="Kisii">Kisii County</option>
                <option value="Kisumu">Kisumu County</option>
                <option value="Kitui">Kitui County</option>
                <option value="Kwale">Kwale County</option>
                <option value="Laikipia">Laikipia County</option>
                <option value="Lamu">Lamu County</option>
                <option value="Machakos">Machakos County</option>
                <option value="Makueni">Makueni County</option>
                <option value="Mandera">Mandera County</option>
                <option value="Meru">Meru County</option>
                <option value="Migori">Migori County</option>
                <option value="Marsabit">Marsabit County</option>
                <option value="Mombasa">Mombasa County</option>
                <option value="Muranga">Muranga County</option>
                <option value="Nairobi">Nairobi County</option>
                <option value="Nakuru">Nakuru County</option>
                <option value="Nandi">Nandi County</option>
                <option value="Narok">Narok County</option>
                <option value="Nyamira">Nyamira County</option>
                <option value="Nyandarua">Nyandarua County</option>
                <option value="Nyeri">Nyeri County</option>
                <option value="Samburu">Samburu County</option>
                <option value="Siaya">Siaya County</option>
                <option value="Taita Taveta">Taita Taveta County</option>
                <option value="Tana River">Tana River County</option>
                <option value="Tharaka Nithi">Tharaka Nithi County</option>
                <option value="Trans Nzoia">Trans Nzoia County</option>
                <option value="Turkana">Turkana County</option>
                <option value="Uasin Gishu">Uasin Gishu County</option>
                <option value="Vihiga">Vihiga County</option>
                <option value="Wajir">Wajir County</option>
                <option value="West Pokot">West Pokot County</option>
            </select>

        </div>
        <div class="col s12 m4">
            <select name="house_type" class="browser-default blue-grey-text minimal">
                <option value="" disabled selected>Select House Type</option>

                <option value="Apartment | Rentals">Apartment | Rentals</option>
                <option value="Bungalow">Bungalow</option>
                <option value="Town House">Town House</option>
                <option value="Commercial Houses">Commercial Offices</option>
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
                <option value="30,000 - 40,000">30,000 - 40,000</option>
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
             <input type="hidden" name="search" value="ok">
        </div>
        <div class="col s12 m4">
            <button class="btn white-text waves-effect waves-light blue darken-1 valign-wrapper" type="submit" name="action" style="width: 100%; font-weight: bold; font-size: 160%; background-color: rgb(245, 127, 23) !important;">
                <i class="material-icons "style="font-size: 120%; vertical-align: bottom;">search</i> SEARCH
            </button>
        </div>

    </form>
</div>