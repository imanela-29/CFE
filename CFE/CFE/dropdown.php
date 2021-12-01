
<html>
<head>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<?php include "php/conn.php"; ?>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'id='+val,
	success: function(data){
		$("#formation").html(data);
	}
	});
}
</script>
<body >
	<form>
	<label style="font-size:20px" >Country:</label>
		<select name="country" id="country-list" class="demoInputBox"  onChange="getState(this.value);">
			<option value="">Select Country</option>
			<?php
				$qu = "SELECT * FROM users";
				$res = mysqli_query($conn,$qu);
				$resChe = mysqli_num_rows($res);
				if($resChe > 0){
					while($row = mysqli_fetch_assoc($res)){
						echo '<option value='.$row["ref_formation"].'>'.$row["nom"].'</option>';
					}
				}
			?>
		</select>
        
	
		<label style="font-size:20px" >State:</label>

		<select id="formation" name="state"  >
			<option value="">Select State</option>
		</select>
		<button value="submit" onclick="return showMsg()">Submit</button>
	</form>

		Selected Country: <span id="msgC"></span><br>
		Selected State:  <span id="msgS"></span>
</body>
</html>