<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui.css">
<script type="text/javascript">
$(function() 
{
var res=[]
 $( "#coding_language" ).autocomplete({
  source: 'autocomplete.php'
 });
 
 $( "#coding_language" ).autocomplete({
  select: function( event, ui ) {
  res.push(ui.item.label);
  $("#arr").html(res.join(","));
  
  }
 });
});
</script>
</head>
<body>
<div id="wrapper">
<div id="arr"></div>
<div class="ui-widget">
 <p>Teko Kya Hua Hai</p>
 <input type="text" id="coding_language">
 
</div>


</div>
</body>
</html>