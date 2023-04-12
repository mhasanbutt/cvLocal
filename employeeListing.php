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
                <li><a href="#">Admin</a></li>
            </ul>
            <span class="title"><img src="images/employee-icon.png"> Employee / User</span>
        </div>

        <div class="filtersSearch showSelection clearfix pull-right" style="margin-right:20px;">

            <div class="checkbox hideDirector">
                <input type="checkbox" name="" id="hideDirector" hidden>
                <label for="hideDirector"></label>
            </div>

            <a href="#" style="background-image:url('images/print-icon.png');">Print</a>

            <span style="background-image:url('images/print-icon.png');" class="showPrints">Show All / Print QR</span>
            <div class="btnGroup" hidden>
                <article><strong class="selectAll">Select All</strong> | <strong class="cancelPrint">Cancel</strong></article>
                <span style="background-image:url('images/filtersPrinterIcon.png');">Print with Picture</span><span style="background-image:url('images/filtersPrinterIcon.png');">Print QR</span>
            </div>

            <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/rotaAddEmployeeIcon.png');margin-left:10px;">Add Employee</a>

            <form class="search" style="margin-left:10px;">
                <div class="selection">
                    <span>Home: <strong>Care Home 1</strong></span> | 
                    <span>Floor: <strong>Floor 1</strong></span>
                </div>
				<div class="byStaff">
					<input type="text" name="staffname" id="staffname" placeholder="Search by keyword">
					<button>search</button>
				</div>

				<span class="filters">Filters</span>

				<div class="allFilters">
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="">Choose Service User</label>
								<div class="select">
									<select name="" id="">
										<option value="Floor 1">Service User 1</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

					<button class="green">Search</button> <button>Reset Filters</button>
				</div>
			</form>
		</div>
    </section>

    <section class="contentBody noBg noFooter">
        <span class="loadMore employees"></span>

        <div class="scrollArea">
            <div class="content">
                <ul class="list-unstyled clearfix employeeList">
                    <li class="testProfile">
                        <input type="checkbox" name="" id="usrID1" hidden>
                        <label for="usrID1"></label>

                        <article class="clearfix">
                            <span class="picture fAlert"><a href="#"><img src="images/emp-profile.jpg"></a></span>

                            <div role="progressbar" style="--value:75">
                                <span><i>75</i>% <samp>Completed</samp></span>
                            </div>

                            <ul class="list-unstyled">
                                <li><strong>(Timmy)</strong> Mr Tim Shermin</li>
                                <li>Sr. Care Assistant</li>
                                <li>t.shermin</li>
                                <li>Convent Garden, Oatleigh Care</li>
                                <li>16-02-2022</li>
                            </ul>
                        </article>
                    </li>

                    <li>
                        <input type="checkbox" name="" id="usrID2" hidden>
                        <label for="usrID2"></label>

                        <article class="clearfix">
                            <span class="picture fAlert"><a href="#"><img src="images/emp-profile.jpg"></a></span>

                            <div role="progressbar" style="--value:34">
                                <span><i>34</i>% <samp>Completed</samp></span>
                            </div>

                            <ul class="list-unstyled">
                                <li><strong>(Timmy)</strong> Mr Tim Shermin</li>
                                <li>Sr. Care Assistant</li>
                                <li>t.shermin</li>
                                <li>Convent Garden, Oatleigh Care</li>
                                <li>16-02-2022</li>
                            </ul>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="warningsBG"></div>
	<div class="warningsRed employees">
		<span class="title"><samp>Warnings</samp></span>

		<div class="scrollArea">
            The following Employees have not been allocated to a floor. Please click on the name and go to the Summary page to enter the floor. 

            <article class="warningsProfiles">
                <ul class="list-unstyled clearfix popServiceUsers">
                    <li>
                        <a href="#">
                            <img src="https://jawa.linksdev.co.uk/media/images/Noimage.jpg">
                            <span class="nickName">Julie</span>
                        </a>
                    </li>
                </ul>
            </article>
		</div>
	</div>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.showPrints').click(function(){
            $('.btnGroup').show();
            $(this).hide();
            $('.employeeList li label').css('display', 'block');
        });

        $('.selectAll').click(function(){
            $('.employeeList li input:checkbox').prop('checked',true);
        });

        $('.cancelPrint').click(function(){
            $('.btnGroup').hide();
            $('.showPrints').show();
            $('.employeeList li input:checkbox').prop('checked',false);
            $('.employeeList li label').css('display', 'none');
        });

        $('.warningsRed .title').click(function () {
			$('.warningsRed').toggleClass('active');
			$('.warningsBG').toggleClass('active');     
		});
    </script>
</body>
</html>
