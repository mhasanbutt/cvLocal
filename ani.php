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
            </ul>
            <span class="title"><img src="https://jawa.linksdev.co.uk/images/slipping-multi.png"> A &amp; I (Falls)</span>
        </div>

        <div class="filtersSearch showSelection clearfix pull-right" style="margin-right:20px;">
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
            
            <a href="#" style="background-image:url('images/print-icon.png');">Print</a>
            <a href="#" class="addServiceUser" style="color:#1f262a;background-color:#6DC77A;background-image:url('images/createNew.png');margin-left:10px;">New</a>
		</div>

        <ul class="diseases list-unstyled">
            <li><span><img src="images/exclamation-mark.svg" class="svg">DNR</span></li>
            <li><span><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</span></li>
            <li><span><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</span></li>
        </ul>
    </section>

    <section class="contentBody noFooter">
        <section class="aniListing">
            <div class="scrollArea">
                <div class="content">
                    <article>
						<ul class="list-unstyled clearfix">
                            <li>
                                <input type="checkbox" name="" id="chkbox1" hidden>
                                <label for="chkbox1"></label>
                            </li>
							<li style="width:170px;">
								<i>Service User</i>
								<span>Name of user</span>
							</li>
							<li style="width:110px;">
								<i>Time / Date</i>
								<span>04-03-2022</span>
							</li>
							<li style="width:110px">
								<i>Type</i>
								<span>Accident</span>
							</li>
							<li style="width:150px;">
								<i>Acc / Inc Type</i>
								<span>Fall</span>
							</li>
							<li style="width:calc(100% - 955px);">
								<i>Location</i>
								<span>Bedroom</span>
							</li>
                            <li style="width:170px;">
								<i>Added By</i>
								<span>S. C. Steve</span>
							</li>
                            <li style="width:80px;">
								<i>Sign Off</i>
								<span>No</span>
							</li>
							<li style="width:50px;">
								<span class="assocMap" style="margin-top:10px;"></span>
                                <div class="mapChoice">
                                    <a href="#">Injury Management</a> <a href="#">Pressure Ulcer Management</a> <samp>Associate with Body Map</samp> <i></i>
                                </div>
							</li>
							<li style="width:50px;">
								<a href="#" class="view" style="margin-top:10px;"></a>
							</li>
						</ul>
					</article>
                </div>
            </div>
        </section>

        <div class="pagingSorting">
            <ul class="list-unstyled paging">
                <li><a href="#">Prev</a></li>
                <li class="current"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">Next</a></li>
            </ul>

            <a href="">Select All</a> | <a href="">Deselect All</a>

            <div class="sorting">
                <div class="select">
                    <select name="" id="">
                        <option value="">Sort By</option>
                    </select>
                </div>

                <button type="button" style="background-color:#6B7884">A-Z</button><button type="button"
                    style="margin-right:20px;background-color:#6B7884">Z-A</button>

                <div class="select">
                    <select name="" id="">
                        <option value="">50 per page</option>
                    </select>
                </div>

                <button type="button" style="background-color:#3DA492;">Apply</button><button type="button">Reset
                    Sorting</button>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.assocMap').on('click',function(){
            $(this).next('div').addClass('show');
        });

        $('.mapChoice i').on('click', function(){
            $(this).parent().removeClass('show');
        });

        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "singleDatePicker": true,
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
