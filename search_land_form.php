<link href="css/searchsale.css" rel="stylesheet" type="text/css"/>
<div class="row col s12" style="margin-top: 25px;">
    <form action="land_results.php" method="post" enctype="multipart/form-data">
        <div class="col s12 m3" style="margin-left: -50px;">
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
        <div class="col s12 m3">
            <select class="browser-default blue-grey-text minimal">
                <option value="" disabled selected>Select Land For</option>

                <option value="Sale">Sale</option>
                <option value="Lease">Lease</option>

            </select>
        </div>
        <div class="col s12 m3">
            <select class="browser-default blue-grey-text minimal">
                <option value="" disabled selected>Select Cost</option>
                <option value="100,000-200,000">100,000-200,000</option>
                <option value="200,000 - 500,000">200,000 - 500,000</option>
                <option value="500,000 - 1,000,000">500,000 - 1,000,000</option>
                <option value="1,000,000 - 5,000,000">1,000,000 - 5,000,000</option>
                <option value="5,000,000 - 50,000,000">5,000,000 - 50,000,000</option>
                <option value="50,000,000 - Above">50,000,000 - Above</option>
            </select>
        </div>

        <div class="col s12 m3">
            <button class="btn white-text waves-effect waves-light blue darken-1 valign-wrapper" type="submit" name="action" style="width: 100%; font-weight: bold; font-size: 160%; background-color: rgb(245, 127, 23) !important;">
                <i class="material-icons "style="font-size: 120%; vertical-align: bottom;">search</i> SEARCH
            </button>
        </div>

    </form>
</div>