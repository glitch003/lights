<html>
<head>
<script src="jquery-2.1.1.min.js"></script>
<?php
$btnClr = "rgba(25,50,25,0.25)";
?>
<script>
	$(document).ready(function(){
		$(".ctrl").click(function(){
			var but = this;
			var oldColor = "<?php echo $btnColor; ?>";
			$(but).css("background-color","rgba(255,255,0,0.5)");
			$.ajax({
				url: 'set.php?v='+$(but).attr("data-value"),
				success: function(res){
					$(but).css("background-color","rgba(100, 255 , 100,0.5)");
				},
				error: function(res){
					$(but).css("background-color","rgba(255, 100, 100,0.5)");
				}, 
				complete: function(res){
					setTimeout(function(){
						$(but).css("background-color", oldColor);
					}, 1000);
				}

			});
		});
	});
</script>
<style>
.ctrl{
	width: 33%;
	height: 16%;
	float: left;
	background-color: <?php echo $btnClr; ?>;
	margin: 1px;
	text-align: center;
	
}


@media handheld {
    .ctrl {
	font-size: 3em;
	line-height: 4em;
    }
}


@media screen {
    .ctrl {
	font-size: 2em;
	line-height: 3em;
    }
}



</style>
</head>
<body>

<?php 
$iv = array(1, 0.9, 0.8, 0.7, 0.6, 0.5, 0.4, 0.3, 0.2, 0.15, 0.1, 0.05, 0.025, 0.01, 0.005, 0.001, 0.0005, 0);
foreach($iv as $x){
	echo '<div class="ctrl" data-value="'.$x.'">';
	echo $x*100;
	echo "%</div>";

}
?>

</body>
</html>
