<?php
// put your code here
?>
<script language="JavaScript">
    $(document).ready(function() {
        $('#search').click(function() {
            alert($('#zip').val() + ":" + $('#dist').val());
        });
    });
</script>
<form>
    <div id="container">
        <div>
            <label for="zip"><span>Your ZIP code:</span></label>
            <input name="zip" type="text" id="zip" />
        </div>
        <div>
            <label for="dist"><span>Distance in miles:</span></label>
            <select name="dist" id="dist">
                <option>5</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>30</option> 
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div>
            <input type="button" value="Search" id="search" name="search" />
        </div>
    </div>
</form>
