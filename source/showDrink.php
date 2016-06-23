<?php
include '../source/connect.php';
$sql = "SELECT * FROM food where categoryID = 'FOCAT1' ORDER BY ID DESC LIMIT 3";
$result = mysqli_query($link, $sql);

if(mysqli_num_rows($result)!=0){
	while($row = mysqli_fetch_assoc($result)){
		echo '<div class="blog-list-post clearfix">
		<div class="blog-list-thumb" >
			<a href="../#"><img src="../images/'.$row['Image'].'" alt="" /></a>
		</div>
		<div class="blog-list-details">
			<h5 class="blog-list-title"><a href="../blog-single.html"><a target="_blank" href="../html/foodDetail.php?ID='.$row['ID'].'">'.$row['Name'].'</a></a></h5>
			<p class="blog-list-meta small-text">'.$row['Price'].' vnđ</a></span></p>
			<br/>
			
		</div>
		<div>
			<p class="blog-list-meta" align="center">
				<input type="number" id="'.$row['ID'].'" min="1" name="txtSoLuong" value = "1" style="widgth: 20%; border: 1px solid #428BCA;"/>
            <input type="button" class="btn btn-primary button addbutton" name="chon" data-id="'.$row['ID'].'" value="Chọn" style="width: 100px; height: 30px;"/>
			</p>
		</div>
	</div> ';
}

}
?>