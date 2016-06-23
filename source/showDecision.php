<?php
	include '/connect.php';
	$itemIDs = $_SESSION['itemID'];
	$quantities = $_SESSION['quantity'];

	function htmlize1($itemIDs, $quantities){
		global $link;
	    $id = explode(',', $itemIDs);
	    $quantity = explode(',', $quantities);
	    $html = '';

	    for ($i=0; $i < count($id); $i++) { 
	    	$sql = "select * from food where ID = '".$id[$i]."';";
	        $result = mysqli_query($link, $sql);
	        if(mysqli_num_rows($result)!=0){
	        	while($row = mysqli_fetch_assoc($result)){
	        		
	        	}
	        }
	        
	    }
	    if($itemIDs!=''){
	    	$html .= '<div class="blog-list-post clearfix">
	        		<div class="medium-text">Tổng tiền</div>
	        		<form name="loginForm" action="../source/cancelOrder.php" method="post">
	        			<button type="submit" class="btn btn-warning" style="width: 100px; height: 30px;">Hủy</button>
	        		</form>
					
					<button type="button" class="btn btn-primary" style="width: 100px; height: 30px;">Xác nhận</button>
	        		</div>';
	    }
	    
	    return $html;
	}
		echo htmlize1($itemIDs, $quantities);
?>