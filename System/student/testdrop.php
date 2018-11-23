
<!doctype html>
<html>
<head>
<title>Philippine Provinces & Cities/Municipalities on HTML Dropdown</title>
<script src="js/city.js"></script>	
<style>
body {
	max-width:500px;
	margin:0px auto;
	background:#f0f0f0;
}
#container {
	font-size:20px;
}
select {
	width:100%;
	height:40px;
	display:block;
	margin:2px;
}
</style>


</head>
<body>
<div id="container">
<h1>Philippine Provinces & Cities/Municipalities on HTML Dropdown</h1>
<select id="province"></select>
<select id="city"></select>	
<script src="js/sity.js"></script>
<script>	
window.onload = function() {	

	// ---------------
	// basic usage
	// ---------------
	var $ = new City();
	$.showProvinces("#province");
	$.showCities("#city");

	// ------------------
	// additional methods 
	// -------------------

	// will return all provinces 
	console.log($.getProvinces	());
	
	// will return all cities 
	console.log($.getAllCities());
	
	// will return all cities under specific province (e.g Batangas)
	console.log($.getCities("Batangas"));	
	
}
</script>
</div>
<div id="container">
<h1>Philippine Provinces & Cities/Municipalities on HTML Dropdown</h1>
<select id="province"></select>
<select id="city"></select>	

</div>
</body>
