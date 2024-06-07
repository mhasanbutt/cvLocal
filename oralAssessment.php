<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>

<body>
	<?php include("header.php");?>

	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Care</a></li>
				<li><a href="#">Assessments</a></li>
			</ul>
			<span class="title"><img src="images/open-mouth.png"> Oral Health Needs Assessment</span>
		</div>
	</section>

	<section class="contentBody noBg noFooter">
        <div class="oralMap clearfix">
            <aside>
                <img src="images/oralTeeth.png" usemap="#Map" class="map">
                <map name="Map">
                  <area position="8CI" data="8. Central Incisor" shape="rect" coords="122,45,160,82" href="#">
                  <area position="9CI" data="9. Central Incisor" shape="rect" coords="159,45,197,83" href="#">
                </map>
            </aside>

            <div class="scrollArea">
                <section>
                    <article>
                        <i class="removeSelection"></i>
                        <span class="title">7. Lateral Incisor</span>
                        <textarea></textarea>
                    </article>
                </section>
            </div>
        </div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/jquery.maphilight.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(window).load(function () {
			$('.map').maphilight();
			var map = $('.map');
			var canvas = $('<canvas width="' + map.width() + '" height="' + map.height() + '" />');
			canvas.css({
				position: 'absolute',
				top: map.position().top,
				left: map.position().left,
				pointerEvents: 'none'
			});

			$('.oralMap aside').append(canvas);
			var context = canvas[0].getContext('2d');

			function calculateCenterPoint(areas) {
				var maxX = 0,
					minX = Infinity,
					maxY = 0,
					minY = Infinity;

				Array.prototype.forEach.call(areas, function (e) {
					var i = 0,
						coords = e.getAttribute('coords').split(',');

					while (i < coords.length) {
						var x = parseInt(coords[i++], 10),
							y = parseInt(coords[i++], 10);
						if (x < minX) minX = x;
						else if (x > maxX) maxX = x;

						if (y < minY) minY = y;
						else if (y > maxY) maxY = y;
					}
				});
				return {
					x: minX + (maxX - minX) / 2,
					y: minY + (maxY - minY) / 2
				};
			}
			var pointsDrawn = [];

			function drawCenter(center, color) {
				drawOldPoints();
				context.beginPath();
				var str = center.x + "_" + center.y;
				alreadyDrawn = 0;
				pointsDrawn.forEach(function (item, index, array) {
					if (str == item) {
						alreadyDrawn = 1;
					}
				});
				if (alreadyDrawn) {
					pointsDrawn.pop(str);
					context.clearRect(center.x - 6, center.y - 6, 15, 15);
				} else {
					pointsDrawn.push(str);
					context.arc(center.x, center.y, 6, 0, 2 * Math.PI, false);
					context.fillStyle = '#' + color + '';
					context.fill();
					context.lineWidth = 1;
					context.strokeStyle = '#FFF';
					context.stroke();
				}
			}

			function drawExistingCenter(center, color) {
				context.beginPath();
				context.arc(center.x, center.y, 6, 0, 2 * Math.PI, false);
				context.fillStyle = '#' + color + '';
				context.fill();
				context.lineWidth = 1;
				context.strokeStyle = '#FFF';
				context.stroke();
			}
			
            $(document).on('click', 'map area', function (e) {
				var mapCode = $(this).attr("position");
				var mapVal = $(this).attr("data");
				var center = calculateCenterPoint($('area[position="' + mapCode + '"]'));
				drawCenter(center, "F00");
				alert(mapVal);
				$('#location').focus();

			});
			var ActiveWounds = [{
				"woundLocation": "LE",
				"color": "00F"
			}, {
				"woundLocation": "LC",
				"color": "F0F"
			}, {
				"woundLocation": "RA",
				"color": "0FF"
			}];
			drawOldPoints();

			function drawOldPoints() {
				ActiveWounds.forEach(function (element) {
					newCenter = calculateCenterPoint($('area[position="' + element.woundLocation + '"]'));
					drawExistingCenter(newCenter, element.color);
				});
			}

			function clearBodyMap() {
				context.clearRect(0, 0, canvas.width(), canvas.height());
			}
		});
	</script>
</body>

</html>