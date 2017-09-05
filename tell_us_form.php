
<style>
    textarea{
        background-color: #fff;
        border: none;
        padding: 15px;
    }
    label{
        color: #607d8b !important;
    }
</style>
<div class="row col s12">
    <form>
        <div class="col s12 m4" style="margin-left: -50px;">
            <div class="input-field col s12">
                <textarea id="textarea1" class="browser-default blue-grey-text"></textarea>
                <label for="textarea1">Description</label>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="input-field col s12">
                <input id="name" type="text" class="browser-default blue-grey-text" style="width: 100%; height: 45px; border: medium none;">
                <label for="name">Your Name</label>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="input-field col s12">
                <input id="location" type="text" class="browser-default blue-grey-text" style="width: 100%; height: 45px; border: medium none;">
                <label for="location">Preferred Location</label>
            </div>
        </div>
        <div class="col s12 m4" style="margin-left: -50px;">
            <div class="input-field col s12">
                <input id="budget" type="number" class="browser-default blue-grey-text" style="width: 100%; height: 45px; border: medium none;">
                <label for="budget">Budget</label>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="input-field col s12">
                <input id="name" type="email" class="browser-default blue-grey-text" style="width: 100%; height: 45px; border: medium none;">
                <label for="email">Your Email</label>
            </div>
        </div>
        <div class="col s12 m4" style="margin-top: 30px;">
            <button class="btn white-text waves-effect waves-light blue darken-1 valign-wrapper" type="submit" name="action" style=" font-weight: bold; font-size: 160%; background-color: rgb(245, 127, 23) !important;">
                <i class="material-icons "style="font-size: 120%; vertical-align: bottom;">search</i> SEARCH
            </button>
        </div>

    </form>
</div>