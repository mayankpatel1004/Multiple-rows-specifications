<?php
$rowspecificationcounter = 0;
if(isset($_REQUEST['rowspecificationcounter'])){
    $rowspecificationcounter = $_REQUEST['rowspecificationcounter'];
}
$ret = '<div class="row specification_row_'.$rowspecificationcounter.'">
    <div class="col-md-12">
        <input type="text" name="specificationsname[]" value="" placeholder="Specifications name '.$rowspecificationcounter.'" />
        <input type="text" name="specificationsvalue[]" value="" placeholder="Specifications value '.$rowspecificationcounter.'" />
            <a onclick="return fnDeletespecificationrow('.$rowspecificationcounter.');">Delete</a>
    </div>
    </div>';
$ary = array('newrowspecificationcounter' => $rowspecificationcounter+1,'row' => $ret);
echo json_encode($ary);exit;
echo $ret;exit;
?>