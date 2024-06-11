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
                <img src="images/oralTeeth.png" usemap="#Map" class="map" width="320">
                <map name="Map">
                    <area position="9CI" data="9. Central Incisor" shape="rect" coords="160,47,197,88" href="#">
                    <area position="8CI" data="8. Central Incisor" shape="rect" coords="121,45,159,88" href="#">
                    <area position="13rdmolar" data="1. 3rd Molar (wisdom tooth)" shape="poly" coords="21,174,21,187,28,195,40,195,50,197,61,185,46,183,32,183" href="#">
                    <area position="22ndmolar" data="2. 2nd Molar (12-yr molar)" shape="poly" coords="29,149,21,172,31,180,45,182,58,184,68,169,52,165,36,166" href="#">
                    <area position="31stmolar" data="3. 1st Molar (6-yr molar)" shape="poly" coords="43,127,30,148,37,166,66,168,76,142,62,139,48,139" href="#">
                    <area position="42ndbiscupid" data="4. 2nd Biscupid (2nd premolar)" shape="poly" coords="55,106,44,127,50,136,75,142,86,126,61,123" href="#">
                    <area position="51stbiscupid" data="5. 1st Biscupid (1st premolar)" shape="poly" coords="75,84,61,91,56,105,61,121,85,124,95,108,76,101" href="#">
                    <area position="6cuspid" data="6. Cuspid (canine / eye tooth)" shape="poly" coords="97,71,85,71,75,84,77,99,92,107,99,95,96,85" href="#">
                    <area position="7LI" data="7. Lateral Incisor" shape="poly" coords="108,59,98,71,99,93,120,89,120,63" href="#">
                    <area position="10LI" data="10. Lateral Incisor" shape="poly" coords="197,62,208,58,220,71,220,93,198,87" href="#">
                    <area position="11cuspid" data="11. Cuspid (canine / eye tooth)" shape="poly" coords="221,72,226,69,243,85,238,106,219,96" href="#">
                    <area position="121stbiscupid" data="12. 1st Biscupid (1st premolar)" shape="poly" coords="244,86,263,104,260,121,241,123,235,125,224,106,240,105" href="#">
                    <area position="132ndbiscupid" data="13. 2nd Biscupid (2nd premolar)" shape="poly" coords="234,126,242,122,256,125,264,106,276,126,272,138,259,140,245,142" href="#">
                    <area position="141stmolar" data="14. 1st Molar (6-yr molar)" shape="poly" coords="247,142,271,140,276,127,289,148,285,164,269,165,252,167" href="#">
                    <area position="152ndmolar" data="15. 2nd Molar (12-yr molar)" shape="poly" coords="253,168,268,165,282,167,290,150,297,173,290,182,273,182,263,186" href="#">
                    <area position="163rdmolar" data="16. 3rd Molar (wisdom tooth)" shape="poly" coords="259,185,272,183,288,183,297,175,293,195,281,195,266,197" href="#">
                    <area position="173rdmolar" data="17. 3rd Molar (wisdom tooth)" shape="poly" coords="261,303,265,295,267,282,283,282,295,281,304,292,300,310,288,301" href="#">
                    <area position="182ndmolar" data="18. 2nd Molar (12-yr molar)" shape="poly" coords="255,330,256,321,260,304,288,302,299,310,291,340,280,329" href="#">
                    <area position="191stmolar" data="19. 1st Molar (6-yr molar)" shape="poly" coords="244,358,248,345,252,331,270,333,282,331,290,348,276,372,265,356" href="#">
                    <area position="202ndbiscupid" data="20. 2nd Biscupid (2nd premolar)" shape="poly" coords="235,367,242,358,262,356,274,370,259,390,253,369" href="#">
                    <area position="211stbiscupid" data="21. 1st Biscupid (1st premolar)" shape="poly" coords="227,378,231,368,251,369,258,388,249,400,234,402,232,384" href="#">
                    <area position="22cuspid" data="22. Cuspid (canine / eye tooth)" shape="poly" coords="206,387,227,379,233,403,224,413,208,411" href="#">
                    <area position="23LI" data="23. Lateral Incisor" shape="poly" coords="183,394,204,390,206,413,198,419,184,416" href="#">
                    <area position="24CI" data="24. Central Incisor" shape="rect" coords="161,392,182,422" href="#">
                    <area position="25CI" data="25. Central Incisor" shape="rect" coords="138,392,159,423" href="#">
                    <area position="26LI" data="26. Lateral Incisor" shape="poly" coords="114,388,135,394,135,417,124,420,113,411" href="#">
                    <area position="27cuspid" data="27. Cuspid (canine / eye tooth)" shape="poly" coords="93,379,113,387,109,412,96,414,88,404" href="#">
                    <area position="281stbiscupid" data="28. 1st Biscupid (1st premolar)" shape="poly" coords="85,367,93,378,88,403,71,401,63,392,64,370" href="#">
                    <area position="291stbiscupid" data="29. 1st Biscupid (1st premolar)" shape="poly" coords="70,356,85,367,64,370,62,389,45,372,50,358" href="#">
                    <area position="301stmolar" data="30. 1st Molar (6-yr molar)" shape="poly" coords="65,330,69,341,75,352,50,358,43,370,30,344,35,330,50,332" href="#">
                    <area position="31ndmolar" data="31. 2nd Molar (12-yr molar)" shape="poly" coords="26,303,40,303,59,304,62,317,66,328,52,330,35,330,30,340,21,324" href="#">
                    <area position="32rdmolar" data="32. 3rd Molar (wisdom tooth)" shape="poly" coords="18,283,34,282,48,280,55,294,59,303,43,304,26,303,20,315" href="#">
                    <area shape="poly" coords="48,265,57,199,95,109,122,90,192,89,223,107,262,194,269,268,242,225,202,190,173,196,172,222,161,234,144,218,129,191,101,195,77,219" href="#">
                    <area shape="poly" coords="60,295,67,269,78,258,89,252,104,250,112,249,127,248,137,247,149,249,155,254,164,251,174,249,185,248,197,248,211,248,227,252,236,255,245,261,253,267,257,278,258,290,259,299,257,308,252,325,247,335,243,344,237,353,229,360,215,368,203,373,192,377,180,379,168,379,155,380,145,380,132,379,120,378,109,377,100,373,92,365,84,357,78,346,71,333,68,326,65,315" href="#">
                    <area shape="poly" coords="24,345,29,352,30,360,34,370,36,377,40,383,44,391,48,395,55,403,60,410,67,416,77,425,90,431,99,435,117,441,128,445,140,447,152,449,158,450,159,426,147,425,133,424,120,423,111,421,97,417,88,414,75,408,68,401,57,394,52,386,43,375,38,364,34,360" href="#">
                    <area shape="poly" coords="161,426,174,427,186,426,200,424,213,420,224,415,236,409,249,405,255,397,268,387,278,381,282,372,288,360,294,353,288,370,284,381,279,390,271,400,262,409,253,415,244,421,231,430,220,434,207,439,194,442,176,445,166,447,160,450" href="#">
                    <area shape="poly" coords="42,115,47,105,53,96,60,88,65,80,75,73,80,68,88,58,94,55,104,48,114,44,128,38,138,36,152,33,160,34,159,44,153,45,143,43,136,43,122,46,110,52,97,60,85,71,74,81,64,89,54,102" href="#">
                    <area shape="poly" coords="162,32,173,32,182,34,191,37,202,41,212,44,220,49,229,54,240,59,251,68,257,78,265,90,273,99,279,110,284,123,278,116,270,104,262,95,254,87,245,77,237,70,225,63,212,57,200,52,191,47,173,42,164,41" href="#">
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