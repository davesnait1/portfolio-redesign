<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style type="text/css">
#container {
	max-width: 1020px;
	margin: 0 auto;
}
.item {
  width: 220px;
  margin: 10px;
  float: left;
}
.item img {
	width: 220px;
}
</style>

</head>

<body>

<div id="container">
  <div class="item"><img src="images/masonry/1.png" /></div>
  <div class="item"><img src="images/masonry/2.jpg" /></div>
  <div class="item"><img src="images/masonry/3.jpg" /></div>
  <div class="item"><img src="images/masonry/4.jpg" /></div>
  <div class="item"><img src="images/masonry/5.jpg" /></div>
  <div class="item"><img src="images/masonry/6.jpg" /></div>
  <div class="item"><img src="images/masonry/7.jpg" /></div>
  <div class="item"><img src="images/masonry/8.jpg" /></div>
  <div class="item"><img src="images/masonry/9.jpg" /></div>
  <div class="item"><img src="images/masonry/10.jpg" /></div>
  <div class="item"><img src="images/masonry/11.jpg" /></div>
  <div class="item"><img src="images/masonry/12.jpg" /></div>
  <div class="item"><img src="images/masonry/13.jpg" /></div>
  <div class="item"><img src="images/masonry/14.jpg" /></div>
  <div class="item"><img src="images/masonry/15.jpg" /></div>
</div>

<script src="js/jquery-1.9.0/jquery-1.9.0.js"></script>
<script type="text/javascript" src="js/jquery.masonry.min.js"></script>
<script type="application/javascript">
$(function(){
  $('#container').masonry({
    // options
    itemSelector : '.item',
    columnWidth : 240
  });
});

var $container = $('#container');
$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : '.item',
    columnWidth : 240
  });
});
</script>
</body>
</html>