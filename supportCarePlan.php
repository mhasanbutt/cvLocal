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
    <style>
        .contentBody .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }

        .contentBody>.scroll-wrapper {
            top: 56px;
            bottom: 60px;

            .content {
                padding: 0 10px;
            }
        }
    </style>
</head>

<body>
	<?php include("header.php");?>
	<?php include("sideNav.php");?>

	<section class="contentHeader">
		<div class="breadcrumbTitle">
			<ul class="list-unstyled">
				<li><a href="#">Care</a></li>
			</ul>
			<span class="title"><img src="https://jawa.linksdev.co.uk/images/development.png"> Support Care Plan</span>
		</div>

		<div class="filtersSearch clearfix pull-right" style="margin-right:20px;">
            <span style="padding:0 10px;">Observations / Handover Notes since <strong>09-04-2023</strong></span>
            <samp class="stats oneRow" style="width:110px;"><span>01</span>Observations</samp>
            <samp class="stats oneRow" style="width:95px;"><span>01</span>Handover</samp>
            <samp class="stats oneRow" style="width:70px;"><span>01</span>A & I</samp>
            <samp class="stats" style="width:90px;"><span>08</span>Active Injuries</samp>
            <samp class="stats" style="width:120px;"><span>01</span>Active Pressure Ulcer</samp>
			</form>
		</div>

        <ul class="diseases list-unstyled">
            <li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
            <li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
            <li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
        </ul>
	</section>

	<section class="contentBody noFooter" style="right:10px;bottom:10px;">
        <div class="horizontalList">
            <i>Prev</i>
            <ul class="list-unstyled clearfix">
                <li><span>Service User Detail</span></li>
                <li><span>GP Detail</span></li>
            </ul>
            <i>Next</i>
        </div>

        <div class="scrollArea">
            <div class="content">
                <form class="newForm">
                    <ul class="col5 list-unstyled clearfix">
                        <li>
                            <label class="title">Title</label>
                            <div style="display:none" class="other ResidentTitleOther_div">
                                <i class="removeOther" data-original-title="" title=""></i>
                                <input type="text" name="ResidentTitleOther" value="" placeholder="Please write title here" class="EmptyField">
                            </div>
                            <select class="ResidentTitle  EmptyField" name="ResidentTitle"><option value="" selected="selected">Select</option><option value="Mr">Mr</option><option value="Ms">Ms</option><option value="Miss">Miss</option><option value="Mrs">Mrs</option><option value="Professor">Professor</option><option value="Other">Other</option></select>
                        </li>
                        <li>
                            <span class="title">First Name</span>
                            <input type="text" name="ResidentName" id="Name" value="qweqwe">
                        </li>
                        <li>
                            <label class="title">Middle Name</label>
                            <input type="text" name="ResidentMiddleName" value="" class="EmptyField">
                        </li>
                        <li>
                            <label class="title">Last Name</label>
                            <input id="ResidentLastName" type="text" name="ResidentLastName" value="vjjnn">
                        </li>
                        <li>
                            <label class="title">Likes to be Known as</label>
                            <input type="text" name="ResidentKnownAs" value="" class="EmptyField">
                        </li>
                        <li>
                            <label class="title">Date of Birth</label>
                            <input type="text" class="date dateRangedob" name="ResidentDateOfBirth" id="residentdob" value="26-02-2022" placeholder="Date" style="width:calc(100% - 54px);" readonly="readonly">
                            <span class="age pull-right" id="ResidentAge">0</span>
                        </li>
                        <li>
                            <label class="title">Gender</label>
                            <div style="display:none" class="other ResidentGenderOther_div">
                                <i class="removeOther" data-original-title="" title=""></i>
                                <input type="text" name="ResidentGenderOther" value="" placeholder="Please write gender here" class="EmptyField">
                            </div>
                            <select class="ResidentGender" name="ResidentGender"><option value="">Select</option><option value="Male" selected="selected">Male</option><option value="Female">Female</option><option value="Agender">Agender</option><option value="Transgender">Transgender</option><option value="Gender nonconforming">Gender nonconforming</option><option value="Genderqueer">Genderqueer</option><option value="Gender fluid">Gender fluid</option><option value="Non-binary">Non-binary</option><option value="Intersex">Intersex</option><option value="Other">Other</option></select>
                        </li>
                        <li>
                            <label class="title">Marital Status</label>
                            <select class="EmptyField" name="ResidentMartialStatus"><option value="" selected="selected">Select</option><option value="Married">Married</option><option value="Single">Single</option><option value="Divorced">Divorced</option><option value="Separated">Separated</option><option value="Widowed">Widowed</option><option value="Civil Partnership">Civil Partnership</option><option value="Common Law Marriage">Common Law Marriage</option><option value="Not Known">Not Known</option></select>
                        </li>
                        <li>
                            <label class="title">Residency Type</label>
                            <div style="display:none;" class="other ResidentReligionOther_div">
                                <i class="removeOther" data-original-title="" title=""></i>
                                <input type="text" name="ResidentReligionOther" value="" placeholder="Please write religion here" class="EmptyField">
                            </div>
                            <select class="ResidentReligion EmptyField" name="ResidentReligion"><option value="" selected="selected">Select</option><option value="Christian">Christian</option><option value="Church of England">Church of England</option><option value="Church of Scotland">Church of Scotland</option><option value="Christian / Jewish">Christian / Jewish</option><option value="Muslim">Muslim</option><option value="Jewish">Jewish</option><option value="Buddhist">Buddhist</option><option value="Sikh">Sikh</option><option value="Hindu">Hindu</option><option value="Methodist">Methodist</option><option value="Catholic Christian">Catholic Christian</option><option value="No Religion">No Religion</option><option value="Not known">Not known</option><option value="N/A">N/A</option><option value="Other">Other</option><option value="I do not wish to state">I do not wish to state</option></select>
                        </li>
                        <li>
                            <label class="title">Service User Currently In</label>
                            <div style="display:none;" class="other ResidentEthnicOriginOther_div">
                                <i class="removeOther" data-original-title="" title=""></i>
                                <input type="text" name="ResidentEthnicOriginOther" value="" placeholder="Please write ethnic origin here" class="EmptyField">
                            </div>
                            <select class="EthnicOrigin EmptyField" name="ResidentEthnicOrigin"><option value="" selected="selected">Select</option><option value="White British">White British</option><option value="White Welsh">White Welsh</option><option value="White Scottish">White Scottish</option><option value="White Irish">White Irish</option><option value="White and Black Caribbean">White and Black Caribbean</option><option value="White and Black African">White and Black African</option><option value="White and Asian">White and Asian</option><option value="Pakistani">Pakistani</option><option value="Other Asian background">Other Asian background</option><option value="Other white background">Other white background</option><option value="Not known">Not known</option><option value="N/A">N/A</option><option value="Indian">Indian</option><option value="Gypsy or Irish Traveller">Gypsy or Irish Traveller</option><option value="Chinese">Chinese</option><option value="Bangladeshi">Bangladeshi</option><option value="Black Caribbean">Black Caribbean</option><option value="Black African">Black African</option><option value="Arab">Arab</option><option value="Any other black background">Any other black background</option><option value="Asian">Asian</option><option value="Asian British">Asian British</option><option value="Any other mixed background">Any other mixed background</option><option value="Other">Other</option></select>
                        </li>
                        <li>
                            <label class="title">Placement Category</label>
                            <div style="display:none;" class="other ResidentEthnicOriginOther_div">
                                <i class="removeOther" data-original-title="" title=""></i>
                                <input type="text" name="ResidentEthnicOriginOther" value="" placeholder="Please write ethnic origin here" class="EmptyField">
                            </div>
                            <select class="EthnicOrigin EmptyField" name="ResidentEthnicOrigin"><option value="" selected="selected">Select</option><option value="White British">White British</option><option value="White Welsh">White Welsh</option><option value="White Scottish">White Scottish</option><option value="White Irish">White Irish</option><option value="White and Black Caribbean">White and Black Caribbean</option><option value="White and Black African">White and Black African</option><option value="White and Asian">White and Asian</option><option value="Pakistani">Pakistani</option><option value="Other Asian background">Other Asian background</option><option value="Other white background">Other white background</option><option value="Not known">Not known</option><option value="N/A">N/A</option><option value="Indian">Indian</option><option value="Gypsy or Irish Traveller">Gypsy or Irish Traveller</option><option value="Chinese">Chinese</option><option value="Bangladeshi">Bangladeshi</option><option value="Black Caribbean">Black Caribbean</option><option value="Black African">Black African</option><option value="Arab">Arab</option><option value="Any other black background">Any other black background</option><option value="Asian">Asian</option><option value="Asian British">Asian British</option><option value="Any other mixed background">Any other mixed background</option><option value="Other">Other</option></select>
                        </li>
                        <li>
                            <label class="title">Home Address</label>
                            <input type="text" name="ResidentKnownAs" value="" class="EmptyField">
                        </li>
                        <li>
                            <label class="title">Post Code</label>
                            <input type="text" name="ResidentKnownAs" value="" class="EmptyField">
                        </li>
                        <li>
                            <label class="title">Date of Viewing</label>
                            <input type="text" class="date" name="ResidentDateOfBirth" id="residentdob" value="26-02-2022" placeholder="Date">
                        </li>
                        <li></li>
                        <li style="width:100%;">
                            <span class="title">Viewing Notes</span>
                            <textarea></textarea>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <div class="ctas">
            <button>Back</button> <button class="paleOrange">Review</button>

            <span class="note pull-right"><strong>Note:</strong> Please DO NOT use a dropdown, if not necessary. Only mandatory fields to be filled.</span>
        </div>
	</section>

	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollbar.min.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src="js/autosize.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>