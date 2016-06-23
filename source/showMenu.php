<?php
include '../source/connect.php';
$sql = "SELECT * FROM food where categoryID = '".$foodCategoryID."';";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)!=0){
  while($row = mysqli_fetch_assoc($result)){
     echo '<div class = "col-md-4">
     <div class="widget-main">
        <div class="widget-main-title">
            <h4 class="widget-title"><a target="_blank" href="../html/foodDetail.php?ID='.$row['ID'].'">'.$row['Name'].'</a></h4>
        </div> 
        <div class="widget-inner" align="center">
            <img src="../images/'.$row['Image'].'" alt="Smiley face" height="200px" width="200px">
            <p class="blog-list-meta medium-text"><b>Giá: '.$row['Price'].' vnđ</b></a></span></p>
            <!--<input type="hidden" class="value" value="'.$row['ID'].'">-->
            <input type="number" id="'.$row['ID'].'" min="1" name="txtSoLuong" value = "1" style="widgth: 20%; border: 1px solid #428BCA;"/>
            <input type="button" class="btn btn-primary button addbutton" name="chon" data-id="'.$row['ID'].'" value="Chọn" style="width: 100px; height: 30px;"/>
        </div> 
    </div>
</div>';
}
}
?>