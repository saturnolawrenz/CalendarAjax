<html>
<head>
	<title>Calendar</title>
	<style type="text/css">
	body, select{font-size: 20px;}
	</style>
</head>
<body>

Month:
<select id="months" name="month">
	<option value = "jan">January</option>
	<option value = "feb">February</option>
	<option value = "mar">March</option>
	<option value = "apr">April</option>
	<option value = "may">May</option>
	<option value = "june">June</option>
	<option value = "july">July</option>
	<option value = "aug">August</option>
	<option value = "sep">September</option>
	<option value = "oct">October</option>
	<option value = "nov">November</option>
	<option value = "dec">December</option>
</select>

Days:
<select id = "days">
		<?php
		for($i = 1; $i <= 31; $i++){
			echo "<option value = ".$i.">".$i."</option>";
		}
		?>
	
</select>

Year:
<select id = "years">
		<?php
		for($i =1990; $i <= 2014; $i++){
			echo "<option value = ".$i.">".$i."</option>";
		}
		?>
</select>
<!-- Days:
<select id = "days">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select> -->

<script type="text/javascript" src="jquery.1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var month = $('#months').val();
	$('#months').on('change', function(){
		month = $('#months').val();
		$.ajax({
			url: 'days.php',
			data: {month: month},
			dataType: 'JSON',
			method: 'GET',

			success: function(response){
				var days = response.days;
				var str = '';
				for(i = 1; i <= days; i++){
					str += '<option value = "' + i + '">';
					str += i;
					str += '</option>';
				}
				$('#days').html(str);
				$('#print').html(
					'<h1>' + response.month + '</h1>'
					+ '<h1>' + response.result + '</h1>'
					+ '<h1>' + response.days + '</h1>'
				);
			}
		});
	});
});




</script>
</body>
</html>