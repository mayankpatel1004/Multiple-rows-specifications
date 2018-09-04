<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<div onclick="fnAddspecificationrow();">Add Row</div>
<input type="text" style="width:60px;display:none;" id="add_specificationrow_cntr" value="0" />
<div id="insertspecification_row"></div>

<script type="text/javascript">
    function fnAddspecificationrow() {
        var arr = {rowspecificationcounter: $("#add_specificationrow_cntr").val(), option: "addspecificationrow"};
        $.ajax({
            url: 'ajax/add_specificationrow.php',
            type: 'POST',
            async: false,
            data: arr,
            success: function (response) {
                var arrresponse = JSON.parse(response);
                $("#add_specificationrow_cntr").val(arrresponse.newrowspecificationcounter);
                $("#insertspecification_row").append(arrresponse.row);
            }
        });
    }
    function fnDeletespecificationrow(rowcounterid) {
        if (confirm("Are you sure you wanna to delete current row?")) {
            $(".specification_row_" + rowcounterid).remove();
        }

    }
</script>