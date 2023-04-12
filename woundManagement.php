<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="images/favicon.png" rel="shortcut icon">
	<title>CareVision - Less Admin, More Caring</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php include("header.php");?>

	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Care</a></li>
				<li><a href="#">Health Stats</a></li>
			</ul>
			<span class="title">Wound Management</span>
		</div>
	</section>

	<section class="contentBody">
		<div class="scrollArea">
			<div class="content">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="images/legends_new.png" class="legends">
						<div class="bodyMap">
							<!-- <button class="shift">Shift</button> <button class="reset">Reset</button> -->
							<section class="bodyMap">
								<img src="images/bodyMapMale.png" class="map" usemap="#bodyMap">
								<map name="bodyMap">
  <area position="lla1" data="Left Dorsal Thoracic Area" shape="rect" coords="433,213,479,252" href="#">
  <area position="lla2" data="Left Dorsal Thoracic Area 1" shape="rect" coords="433,254,479,293" href="#">
  <area position="lla3" data="Left Lumbar Area" shape="rect" coords="433,295,479,334" href="#">
  <area position="rsc2" data="Right Scapula 2" shape="rect" coords="495,172,541,211" href="#">
  <area position="sa" data="Lumbar Area" shape="rect" coords="481,295,493,335" href="#">
  <area position="lva" data="Central Dorsal Thoracic Area 3" shape="rect" coords="481,254,493,293" href="#">
  <area position="dta2" data="Central Dorsal Thoracic Area 2" shape="rect" coords="481,213,493,253" href="#">
  <area position="dta" data="Central Dorsal Thoracic Area 1" shape="rect" coords="481,172,493,211" href="#">
  <area position="lia" data="Left Inguinal Area" shape="rect" coords="180,361,210,389" href="#">
  <area position="ria" data="Right Inguinal Area" shape="rect" coords="66,360,98,389" href="#">
  <area position="le" data="Left Eye" shape="rect" coords="139,50,172,72" href="#">
  <area position="re" data="Right Eye" shape="rect" coords="102,49,137,72" href="#">
  <area position="nose" data="Nose" shape="rect" coords="126,74,149,86" href="#">
  <area position="lips" data="Lips" shape="rect" coords="125,87,148,99" href="#">
  <area position="ana" data="Anterior Neck Area" shape="poly" coords="117,107,137,115,159,105,162,126,116,127" href="#">
  <area position="mandible" data="Mandible" shape="rect" coords="125,101,148,111" href="#">
  <area position="ls" data="Left Shoulder" shape="poly" coords="205,140,219,146,230,155,235,168,239,193,204,193" href="#">
  <area position="lus" data="Left Upper Shoulder" shape="poly" coords="413,225,379,225,388,170,410,170" href="#">
  <area position="lap" data="Left Armpit" shape="poly" coords="213,196,214,229,207,229,204,196" href="#">
  <area position="rap" data="Right Armpit" shape="poly" coords="63,196,63,229,70,229,72,195" href="#">
  <area position="rs" data="Right Shoulder" shape="poly" coords="72,139,66,140,53,148,47,153,41,164,37,193,71,194,71,171,71,153" href="#">
  <area position="rus" data="Right Upper Shoulder" shape="poly" coords="595,224,587,170,565,170,565,196,562,225,593,224" href="#">
  <area position="rc" data="Right Clavicle" shape="poly" coords="139,127,138,150,73,150,74,138,110,129" href="#">
  <area position="scrotum" data="Scrotum / Penis" shape="poly" coords="118,391,118,424,155,424,155,391" href="#">
  <area position="lw" data="Left Wrist" shape="poly" coords="238,366,258,365,259,395,235,394" href="#">
  <area position="rw" data="Right Wrist" shape="poly" coords="40,366,19,366,16,394,40,394" href="#">
  <area position="lank" data="Left Ankle" shape="poly" coords="153,704,180,704,178,736,149,736" href="#">
  <area position="rank" data="Right Ankle" shape="poly" coords="122,704,126,737,97,737,95,704" href="#">
  <area position="rpof" data="Right Foot" shape="poly" coords="98,739,130,739,126,787,78,785" href="#">
  <area position="lpof" data="Left Foot" shape="poly" coords="146,738,178,739,195,786,148,785" href="#">
  <area position="lsc2" data="Left Scapula 2" shape="rect" coords="433,172,480,211" href="#">
  <area position="pna" data="Posterior neck Area" shape="poly" coords="463,112,511,112,511,127,463,127" href="#">
  <area position="cva" data="Cervical Vertebrae Area" shape="rect" coords="481,130,494,170" href="#">
  <area position="lpsa" data="Left Posterior Shoulder Area" shape="poly" coords="430,135,407,142,394,156,388,170,415,170,432,170" href="#">
  <area position="rla1" data="Right Dorsal Thoracic Area" shape="rect" coords="495,213,541,252" href="#">
  <area position="rla2" data="Right Dorsal Thoracic Area 1" shape="rect" coords="494,254,541,294" href="#">
  <area position="rla3" data="Right Lumbar Area" shape="rect" coords="494,295,541,334" href="#">
  <area position="rpsa" data="Right Posterior Shoulder Area" shape="poly" coords="543,134,556,138,576,149,586,170,566,169,543,170" href="#">
  <area position="lra" data="Left Rear Arm" shape="poly" coords="379,225,410,224,416,260,410,272,371,272,373,242" href="#">
  <area position="rra" data="Right Rear Arm" shape="poly" coords="595,225,601,244,602,272,563,272,558,251,565,225" href="#">
  <area position="reb" data="Right Elbow" shape="poly" coords="602,273,563,274,568,317,610,316" href="#">
  <area position="leb" data="Left Elbow" shape="poly" coords="374,274,409,274,406,316,364,316" href="#">
  <area position="rrfa" data="Right Rear Forearm" shape="poly" coords="571,319,608,319,607,363,586,363" href="#">
  <area position="lrfa" data="Left Rear Forearm" shape="poly" coords="364,319,402,319,388,363,368,364" href="#">
  <area position="rb1" data="Right Buttocks 1" shape="poly" coords="495,377,540,377,540,415,495,415" href="#">
  <area position="rb2" data="Right Buttocks 2" shape="poly" coords="495,418,540,418,540,456,495,456" href="#">
  <area position="rb4" data="Right Hip 1" shape="poly" coords="543,388,560,389,561,420,543,420" href="#">
  <area position="rb3" data="Right Hip 2" shape="poly" coords="543,423,560,422,561,453,542,454" href="#">
  <area position="lboh" data="Left back of Hand" shape="poly" coords="233,396,260,397,264,424,246,449,240,418,234,434" href="#">
  <area position="rboh" data="Right Back of Hand" shape="poly" coords="16,396,42,396,43,435,35,414,29,446,12,423" href="#">
  <area position="lpoh" data="Left Palm" shape="poly" coords="368,389,389,390,392,437,379,411,381,446,363,439,360,417" href="#">
  <area position="rpoh" data="Right Palm" shape="poly" coords="583,390,608,390,614,419,603,445,594,446,591,416,583,436" href="#">
  <area position="rreart1" data="Right Rear Thigh 1" shape="poly" coords="495,458,497,484,559,485,560,466,560,456,543,456,543,458" href="#">
  <area position="rreart2" data="Right Rear Thigh 2" shape="poly" coords="498,487,498,526,552,527,559,486" href="#">
  <area position="rpopa" data="Right Popliteal Area" shape="poly" coords="497,529,547,529,545,569,546,587,500,589" href="#">
  <area position="rcalf1" data="Right Calf 1" shape="poly" coords="500,590,497,611,497,627,550,627,550,621,549,603,547,590" href="#">
  <area position="rcalf2" data="Right Calf 2" shape="poly" coords="497,630,495,647,497,663,541,663,542,657,545,639,549,629" href="#">
  <area position="rcalf3" data="Right Calf 3" shape="poly" coords="499,666,500,683,502,711,530,711,533,694,536,685,539,666" href="#">
  <area position="lcalf1" data="Left Calf 1" shape="poly" coords="426,589,474,589,478,627,426,627,425,616,426,600" href="#">
  <area position="lcalf2" data="Left Calf 2" shape="poly" coords="426,629,479,630,476,664,435,663,434,654,426,640" href="#">
  <area position="lcalf3" data="Left Calf 3" shape="poly" coords="437,666,475,666,472,712,444,712,443,697,439,685" href="#">
  <area position="lfof" data="Left Toes" shape="poly" coords="323,582,323,568,324,558,328,549,338,541,348,544,352,561,352,579,359,553,361,547,373,552,390,571,400,584,403,600,325,598" href="#">
  <area position="rfof" data="Right Toes" shape="poly" coords="300,598,300,580,301,561,295,545,282,540,275,551,274,578,268,546,250,554,222,584,221,599" href="#">
  <area position="lpopa" data="Left Popliteal Area" shape="rect" coords="426,528,476,588" href="#">
  <area position="rk" data="Right Knee" shape="poly" coords="76,524,79,542,80,576,124,575,128,550,127,524" href="#">
  <area position="lk" data="Left Knee" shape="poly" coords="150,525,199,524,196,547,195,575,151,575,148,548" href="#">
  <area position="rheel" data="Right Heel" shape="poly" coords="234,733,249,769,282,767,294,733" href="#">
  <area position="lheel" data="Left Heel" shape="poly" coords="333,734,345,770,379,768,391,734" href="#">
  <area position="lreart1" data="Left Rear Thigh 1" shape="poly" coords="457,458,479,457,476,484,416,485,415,456,428,455,433,459" href="#">
  <area position="lreart2" data="Left Rear Thigh 2" shape="poly" coords="415,487,478,487,474,527,424,526" href="#">
  <area position="lb1" data="Left Hip 1" shape="poly" coords="415,388,430,387,431,420,413,421" href="#">
  <area position="lb2" data="Left Hip 2" shape="poly" coords="414,423,431,422,430,453,414,454" href="#">
  <area position="lb3" data="Left Buttocks 2" shape="poly" coords="433,418,478,418,478,456,433,456" href="#">
  <area position="lb4" data="Left Buttocks 1" shape="poly" coords="433,377,478,377,478,415,433,415" href="#">
  <area position="ref" data="Right Ear" shape="poly" coords="103,84,98,57,89,61,93,80" href="#">
  <area position="lef" data="Left Ear" shape="poly" coords="175,56,185,67,174,85" href="#">
  <area position="rboheel" data="Right Back of Heel" shape="poly" coords="496,755,495,765,498,788,514,789,527,787,548,788,539,772,532,755" href="#">
  <area position="lboheel" data="Left Back of Heel" shape="poly" coords="443,755,479,755,480,775,473,789,458,789,444,787,427,787,436,770" href="#">
  <area position="apex1" data="Apex 1" shape="poly" coords="109,18,105,29,137,30,136,11" href="#">
  <area position="apex2" data="Apex 2" shape="poly" coords="137,12,138,30,168,30,161,15" href="#">
  <area position="fh1" data="Forehead 1" shape="poly" coords="104,32,101,47,137,48,136,31" href="#">
  <area position="fh2" data="Forehead 2" shape="poly" coords="139,32,139,47,172,48,170,32" href="#">
  <area position="rct1" data="Right Chest 1" shape="poly" coords="137,189,137,239,73,239,74,189" href="#">
  <area position="rct2" data="Right Chest 2" shape="poly" coords="74,152,74,187,138,187,139,152" href="#">
  <area position="lct1" data="Left Chest 1" shape="poly" coords="140,190,203,190,203,238,140,239" href="#">
  <area position="lct2" data="Left Chest 2" shape="poly" coords="140,153,140,187,202,188,202,153" href="#">
  <area position="ra1" data="Right Arm 1" shape="poly" coords="29,232,26,241,24,258,62,258,68,231" href="#">
  <area position="ra2" data="Right Arm 2" shape="poly" coords="36,195,32,214,28,229,62,230,62,208,62,195" href="#">
  <area position="la1" data="Left Arm" shape="poly" coords="216,195,216,229,248,229,242,196" href="#">
  <area position="la2" data="Left Arm 1" shape="poly" coords="207,232,214,259,251,258,249,232" href="#">
  <area position="rfa1" data="Right Forearm 1" shape="poly" coords="22,294,17,309,16,327,53,327,57,308,60,294" href="#">
  <area position="rfa2" data="Right Forearm 2" shape="poly" coords="16,328,19,363,38,365,53,329" href="#">
  <area position="lfa1" data="Left Forearm 1" shape="poly" coords="224,330,238,363,257,363,258,344,259,330" href="#">
  <area position="lfa2" data="Left Forearm 2" shape="poly" coords="216,294,223,327,259,327,257,308,253,292" href="#">
  <area position="rhc1" data="Right hypochondrium 1" shape="rect" coords="73,271,98,299" href="#">
  <area position="rhc2" data="Right hypochondrium 2" shape="rect" coords="72,241,99,269" href="#">
  <area position="lhc1" data="Left hypochondrium 1" shape="rect" coords="179,271,204,299" href="#">
  <area position="lhc2" data="Left hypochondrium 2" shape="rect" coords="180,241,204,271" href="#">
  <area position="eg1" data="Epigastrium 1" shape="rect" coords="140,271,178,299" href="#">
  <area position="eg2" data="Epigastrium 2" shape="rect" coords="99,271,138,299" href="#">
  <area position="eg3" data="Epigastrium 3" shape="rect" coords="140,241,178,269" href="#">
  <area position="eg4" data="Epigastrium 4" shape="rect" coords="100,241,138,269" href="#">
  <area position="rv1" data="Right Vacio 1" shape="rect" coords="73,301,98,329" href="#">
  <area position="rv2" data="Right Vacio 2" shape="rect" coords="71,330,99,359" href="#">
  <area position="ur1" data="Umbilical Region 1" shape="rect" coords="139,330,179,359" href="#">
  <area position="ur2" data="Umbilical Region 2" shape="rect" coords="100,330,138,359" href="#">
  <area position="ur3" data="Umbilical Region 3" shape="rect" coords="140,300,178,329" href="#">
  <area position="ur4" data="Umbilical Region 4" shape="rect" coords="99,300,138,329" href="#">
  <area position="lv1" data="Left Vacio 1" shape="rect" coords="180,331,205,359" href="#">
  <area position="lv2" data="Left Vacio 2" shape="rect" coords="179,300,204,329" href="#">
  <area position="rit1" data="Right Inner Thigh 1" shape="poly" coords="116,424,64,424,64,415,63,408,66,391,116,391,117,417" href="#">
  <area position="lit2" data="Left Inner Thigh 2" shape="poly" coords="145,427,145,457,210,457,212,426" href="#">
  <area position="lit3" data="Left Inner Thigh 3" shape="poly" coords="146,458,148,489,208,490,210,460" href="#">
  <area position="lit4" data="Left Inner Thigh 4" shape="poly" coords="149,492,150,522,201,522,208,492" href="#">
  <area position="lit1" data="Left Inner Thigh 1" shape="poly" coords="210,391,212,402,211,411,213,424,158,425,157,411,157,391" href="#">
  <area position="rit2" data="Right Inner Thigh 2" shape="poly" coords="64,426,65,457,131,457,132,426" href="#">
  <area position="rit3" data="Right Inner Thigh 3" shape="poly" coords="65,459,68,489,127,489,129,460" href="#">
  <area position="rit4" data="Right Inner Thigh 4" shape="poly" coords="68,492,75,522,126,522,126,492" href="#">
  <area position="lab1" data="Lower Abdomen 1" shape="rect" coords="140,360,178,389" href="#">
  <area position="lab2" data="Lower Abdomen 2" shape="rect" coords="100,361,138,389" href="#">
  <area position="rfol" data="Right Shin 1" shape="poly" coords="123,578,80,578,77,591,77,602,76,607,129,606,126,592" href="#">
  <area position="rfo2" data="Right Shin 2" shape="poly" coords="129,609,77,609,77,624,77,632,79,638,129,638,129,621" href="#">
  <area position="rfo3" data="Right Shin 3" shape="poly" coords="129,641,80,640,84,650,87,659,88,668,126,668,127,657" href="#">
  <area position="rfo4" data="Right Shin 4" shape="poly" coords="125,671,89,670,91,679,92,689,96,702,124,701,124,686" href="#">
  <area position="lfol1" data="Left Shin 1" shape="poly" coords="151,578,150,586,148,596,148,606,199,606,200,598,199,588,196,578" href="#">
  <area position="lfol2" data="Left Shin 2" shape="poly" coords="146,609,147,620,147,626,146,638,197,638,199,621,199,629,200,609" href="#">
  <area position="lfol3" data="Left Shin 3" shape="poly" coords="146,640,149,653,149,659,147,668,188,668,190,661,192,654,194,641" href="#">
  <area position="lfol4" data="Left Shin 4" shape="poly" coords="150,670,152,680,153,690,152,701,182,701,183,686,184,679,187,670" href="#">
  <area position="rsof1" data="Right Sole of Foot 1" shape="rect" coords="221,601,262,642" href="#">
  <area position="rsof2" data="Right Sole of Foot 2" shape="rect" coords="223,643,262,688" href="#">
  <area position="rsof3" data="Right Sole of Foot 3" shape="rect" coords="264,644,302,687" href="#">
  <area position="rsof4" data="Right Sole of Foot 4" shape="rect" coords="263,601,301,644" href="#">
  <area position="lsof1" data="Left Sole of Foot 1" shape="rect" coords="324,600,365,642" href="#">
  <area position="lsof2" data="Left Sole of Foot 2" shape="rect" coords="325,643,365,687" href="#">
  <area position="lsof3" data="Left Sole of Foot 3" shape="rect" coords="367,644,405,687" href="#">
  <area position="lsof4" data="Left Sole of Foot 4" shape="rect" coords="367,601,407,642" href="#">
  <area position="boh1" data="Back of Head 1" shape="poly" coords="457,20,473,14,486,12,486,35,451,34" href="#">
  <area position="boh2" data="Back of Head 2" shape="poly" coords="488,12,511,16,520,24,523,34,488,34" href="#">
  <area position="oa1" data="Occipital Area 1" shape="poly" coords="447,36,486,36,486,62,448,63" href="#">
  <area position="oa2" data="Occipital Area 2" shape="poly" coords="450,64,486,65,487,90,452,91" href="#">
  <area position="oa3" data="Occipital Area 3" shape="poly" coords="489,65,524,65,524,90,489,90" href="#">
  <area position="oa4" data="Occipital Area 4" shape="poly" coords="487,36,527,36,526,62,489,62" href="#">
  <area position="chl" data="Left Cheek" shape="poly" coords="150,74,150,108,168,92,171,73" href="#">
  <area position="chr" data="Right Cheek" shape="poly" coords="102,74,109,97,124,106,123,74" href="#">
  <area position="lc" data="Left Clavicle" shape="poly" coords="140,128,173,128,203,138,204,150,140,150" href="#">
  <area position="learb" data="Left Ear" shape="poly" coords="450,64,436,65,436,88,450,93" href="#">
  <area position="rearb" data="Right Ear" shape="poly" coords="525,64,537,65,540,80,534,90,525,90" href="#">
  <area position="lsc1" data="Left Scapula 1" shape="poly" coords="433,136,459,129,479,129,479,170,433,169" href="#">
  <area position="rsc1" data="Right Scapula 1" shape="poly" coords="495,129,514,129,540,135,541,169,495,169" href="#">
  <area position="rfoe" data="Right Front of Elbow" shape="poly" coords="25,261,62,261,60,276,60,291,22,292" href="#">
  <area position="lfoe" data="Left Front of Elbow" shape="poly" coords="214,261,217,279,218,292,253,291,251,277,251,261" href="#">
  <area position="lboa" data="Left Back of Ankle" shape="poly" coords="445,714,448,737,445,753,478,753,473,735,471,714" href="#">
  <area position="rboa" data="Right Back of Ankle" shape="poly" coords="503,714,499,739,497,753,530,753,527,737,529,714" href="#">
  <area position="lsa3" data="Left Sacral Area 3" shape="rect" coords="433,336,479,375" href="#">
  <area position="rsa4" data="Right Sacral Area 4" shape="rect" coords="495,335,541,375" href="#">
  <area position="csa5" data="Centre Sacral Area" shape="rect" coords="481,336,493,375" href="#">
  <area position="lcb1" data="Lower Centre of Buttocks 1" shape="rect" coords="481,418,493,456" href="#">
  <area position="ucb2" data="Sacral Area" shape="rect" coords="481,376,493,416" href="#">
  <area position="LRF3" data="Left Rear Forearm 3" shape="poly" coords="367,366,366,387,390,387,388,378,389,366" href="#">
  <area position="RRF3" data="Right Rear Forearm 3" shape="poly" coords="586,366,586,377,586,387,608,388,606,376,606,365" href="#">
  <area shape="poly" coords="230,688,234,733,295,733,295,686,232,687" href="#">
							  <area shape="poly" coords="333,687,335,734,393,735,399,687,336,686" href="#">
							  </map>
								<p>&nbsp;</p>
						  </section>
						</div>
					</div>
					<div class="col-md-8">
						<form class="inBodyForm">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Location</label>
										<input type="text" id="location">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group date">
										<label>Report Date</label>
										<input type="text" name="dateRange" placeholder="Date">
										<img src="images/calendar-icon.svg" class="calendar svg">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Type of Wound</label>
										<div class="select">
											<select>
												<option>Select</option>
											</select>
											<img src="images/left-arrow.svg" class="svg">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="row">
											<div class="col-md-4">
												<label>Length<small>(mm)</small></label>
												<div class="counter">
													<button type="button" class="counterBtn plus"><img
															src="images/left-arrow.svg" class="svg"></button>
													<button type="button" class="counterBtn minus"><img
															src="images/left-arrow.svg" class="svg"></button>
													<input type="text" maxlength="3" value="0">
												</div>
											</div>
											<div class="col-md-4">
												<label>Width<small>(mm)</small></label>
												<div class="counter">
													<button type="button" class="counterBtn plus"><img
															src="images/left-arrow.svg" class="svg"></button>
													<button type="button" class="counterBtn minus"><img
															src="images/left-arrow.svg" class="svg"></button>
													<input type="text" maxlength="3" value="0">
												</div>
											</div>
											<div class="col-md-4">
												<label>Depth<small>(mm)</small></label>
												<div class="counter">
													<button type="button" class="counterBtn plus"><img
															src="images/left-arrow.svg" class="svg"></button>
													<button type="button" class="counterBtn minus"><img
															src="images/left-arrow.svg" class="svg"></button>
													<input type="text" maxlength="3" value="0">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Comments</label>
										<textarea></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Add to Daily Notes / Communication Book</label>
										<span class="toggles fixed">
											<input type="checkbox" name="physicalCopy" id="physicalCopy"
												class="ios-toggle">
											<label for="physicalCopy" class="checkbox-label" data-off="NO"
												data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Add to to-do-list</label>
										<span class="toggles fixed">
											<input type="checkbox" name="toDoList" id="toDoList" class="ios-toggle">
											<label for="toDoList" class="checkbox-label" data-off="NO"
												data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Notify Manager</label>
										<span class="toggles fixed">
											<input type="checkbox" name="physicalCopy" id="physicalCopy"
												class="ios-toggle">
											<label for="physicalCopy" class="checkbox-label" data-off="NO"
												data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Notify Head Office</label>
										<span class="toggles fixed">
											<input type="checkbox" name="eSign" id="eSign" class="ios-toggle">
											<label for="eSign" class="checkbox-label" data-off="NO"
												data-on="YES"></label>
										</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Wound Image</label>
										<label class="file">Upload<input type="file" class="hidden"></label>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<h5 class="text-left inPageLinksTitle " style="width: 507px;"> Service User Hub</h5>
						<ul class="inPageLinks list-unstyled text-left changePosition" style="width: 507px;">
							<li><a href="http://192.168.8.105/care_vision/public/careplan/sova">SOVA</a></li>
							<li><a href="http://192.168.8.105/care_vision/public/turningchart">Turning Chart</a></li>
							<li><a href="http://192.168.8.105/care_vision/public/newassessment/waterlow">Waterlow</a>
							</li>
							<li><a href="#">Incident &amp; Accident</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contentFooter">
		<div class="row">
			<div class="col-md-6">
				<button type="button">Back</button> <button type="button" class="save">Save</button>
			</div>
		</div>
	</section>

	<div class="modal fade toDoListPop" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add to To-Do-List</h4>
				</div>
				<div class="modal-body inBodyForm">
					<div class="form-group date">
						<label>Date / Time</label>
						<input type="text" name="dateRange">
						<small>Choose date/time of the task</small>
						<img src="images/calendar-icon.svg" class="calendar svg">
					</div>
					<div class="form-group">
						<label>Alert</label>
						<span class="toggles fixed">
							<input type="checkbox" name="alert" id="alert" class="ios-toggle">
							<label for="alert" class="checkbox-label" data-off="NO" data-on="YES"></label>
						</span>
						<small class="clearfix">To show notification on date/time</small>
					</div>
					<div class="form-group">
						<label>Repeat</label>
						<div class="select">
							<select>
								<option></option>
								<option>Every Hour</option>
								<option>Every 2 Hours</option>
								<option>Every 3 Hours</option>
								<option>Every 4 Hours</option>
								<option>Every 5 Hours</option>
								<option>Every 6 Hours</option>
								<option>Every Day</option>
								<option>Every Week</option>
							</select>
							<img src="images/left-arrow.svg" class="svg">
						</div>
						<small>Interval of task to be done</small>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/jquery.maphilight.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.bodyMapContainer .shift').click(function () {
			$('.bodyMap').toggleClass('shift');
		});
		$('input[name="dateRange"]').daterangepicker({
			"singleDatePicker": true,
			"timePicker": true,
			"opens": "left",
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});
		$('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
			$(this).val(picker.startDate.format('MM/DD/YYYY  h:mm A'));
		});

		$('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
			$(this).val('');
		});

		$(".counterBtn").on("click", function () {
			var $button = $(this);
			var oldValue = $button.parent().find("input").val();
			if ($button.hasClass('plus')) {
				var newVal = parseFloat(oldValue) + 1;
			} else {
				if (oldValue > 0) {
					var newVal = parseFloat(oldValue) - 1;
				} else {
					newVal = 0;
				}
			}
			$button.parent().find("input").val(newVal);
		});

		$('#toDoList').click(function () {
			if ($('#toDoList').is(':checked')) {
				$('.toDoListPop').modal('show')
			} else {
				$('.toDoListPop').modal('hide')
			}
		});

		$(window).load(function () {
			$('.map').maphilight();
			$('.star').click(function (e) {
				e.preventDefault();
				var data = $('.star').mouseout().data('maphilight') || {};
				data.alwaysOn = !data.alwaysOn;
				$('.star').data('maphilight', data).trigger('alwaysOn.maphilight');
			});
			var map = $('[usemap=#bodyMap]');
			var canvas = $('<canvas width="' + map.width() + '" height="' + map.height() + '" />');
			canvas.css({
				position: 'absolute',
				top: map.position().top,
				left: map.position().left,
				pointerEvents: 'none'
			});

			$('.bodyMap').append(canvas);
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
			$('.reset').click(function () {
				clearBodyMap();
			});

		});
	</script>
</body>

</html>