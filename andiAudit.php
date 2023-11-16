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
<?php include("header.php"); ?>
<?php include("sideNav.php"); ?>

<section class="contentHeader">
    <div class="breadcrumbTitle">
        <ul class="list-unstyled">
            <li><a href="#">Audits</a></li>
        </ul>
        <span class="title"><img src="https://jawa.linksdev.co.uk/images/slipping-multi.png"> A &amp; I</span>
    </div>

    <div class="filtersSearch clearfix autoWidth">
        <form>
            <div class="byStaff">
                <input type="text" name="staffname" id="staffname" placeholder="Search by service user">
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

                <button class="green">Search</button>
                <button>Reset Filters</button>
            </div>
        </form>

        <div class="dropMenu">
            <span class="openDropMenu">Action</span>
            <ul class="list-unstyled">
                <li><a href="#" class="print_all_details print">Print Full Detail</a></li>
                <li><a href="#" class="print_all_tabs print">Print</a></li>
            </ul>
        </div>

        <a href="#">Show Charts</a>
    </div>

    <div class="searchFilterDetails">
        <div class="selection">
            <span>Home / Floor <strong>All</strong></span>
            <span>Service User <strong>All</strong></span>
            <span>Date <strong>-</strong></span>
            <span>Type <strong>All</strong></span>
        </div>
    </div>
</section>

<section class="contentBody noBg noFooter">
    <div class="counters clearfix">
        <ul class="list-unstyled clearfix pull-right">
            <li><article><span>224</span><div class="title"><i>Total Accidents</i></div> </article></li>
            <li><article><span>198</span><div class="title"><i>Total Incidents</i></div> </article></li>
            <li><article><span>190</span><div class="title"><i>Total Behaviour Incident</i></div> </article></li>
            <li><article><span>580</span><div class="title"><i>Active A&amp;I's</i></div> </article></li>
            <li><article><span>148</span><div class="title"><i>A&amp;I's Missing Follow Up</i></div> </article></li>
            <li><article><span>432</span><div class="title"><i> A&amp;I's Awaiting Sign Off</i></div> </article></li>
            <li><article><span>186</span><div class="title"><i>A&amp;I's with Pending Informed Section</i></div> </article></li>
        </ul>
    </div>
    <div class="scrollArea">
        <div class="content">
            <div class="generalListing">
                <section class="clearfix">
                    <ul class="list-unstyled clearfix">
                        <li style="width:200px;"><span class="title">HOME</span>3-3 Leander Lodge</li>
                        <li style="width:180px;"><span class="title">FLOOR</span>Basement Floor</li>
                        <li style="width:150px;"><span class="title">ROOM</span>Basement Room 1</li>
                        <li style="width:220px;"><span class="title">SERVICE USER</span>Cora TEST</li>
                        <li style="width:calc(100% - 850px);"><span class="title">LOCATION</span>Other service users bedroom</li>
                        <li style="width:50px;">
                            <span class="question"></span>
                            <ul class="extraInfoList list-unstyled clearfix">
                                <li>
                                    <span class="title">Witnessed</span>
                                    Yes
                                </li>
                                <li>
                                    <span class="title">GP Name</span>
                                    5
                                </li>
                                <li>
                                    <span class="title">Description</span>
                                    bh
                                </li>
                                <li>
                                    <span class="title">Service User's Circumstances Prior</span>
                                    gh
                                </li>
                                <li>
                                    <span class="title">Triggering Factors</span>
                                    yy
                                </li>
                                <li>
                                    <span class="title">Actions taken to prevent recurrence</span>
                                    hh
                                </li>
                                <li>
                                    <span class="title">Describe injuries</span>
                                    yu
                                </li>
                                <li>
                                    <span class="title">Injury Sustained?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Other Service Users Involved?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Staff Involved?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Anyone Else Involved?</span>
                                    -
                                </li>
                                <li>
                                    <span class="title">Admitted to Hospital?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Open Body Map</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Form Completed By</span>
                                    Tyler T
                                </li>
                                <li>
                                    <span class="title">Create Follow Up</span>
                                    No
                                </li>
                            </ul>
                        </li>
                        <li style="width:50px;"><a href="#" class="eye"></a> </li>
                        <li style="width:180px;"><span class="title">TIME / DATE</span>(2:30 am) 15-11-2023</li>
                        <li style="width:220px;"><span class="title">ADDED By</span>Tyler T</li>
                        <li style="width:calc((100% - 970px) / 2);"><span class="title">TYPE</span>-</li>
                        <li style="width:calc((100% - 970px) / 2);"><span class="title">SUB TYPE</span>-</li>
                        <li style="width:140px;"><span class="title">HOSPITAL ADMISSION</span>No</li>
                        <li style="width:140px;"><span class="title">SAFEGUARDING</span>Yes</li>
                        <li style="width:140px;"><span class="title">RIDDOR?</span>No</li>
                        <li style="width:150px;"><span class="title">ACCIDENT/INCIDENT </span>Behaviour Incident</li>
                        <li style="width:100%;" class="wrapText"><span class="title">DETAIL</span>bh</li>
                        <li style="width:100%;" class="wrapText"><span class="title">MANAGER's FOLLOW UP ACTION</span>An automatic manager's follow up has been created to complete all the necessary actions required for this accident and incident form: i.e. updating the necessary care planning documents and informing any parties involved.</li>
                        <li style="width:100%;" class="wrapText"><span class="title">MANAGER's FOLLOW UP ACTION TAKEN</span>-</li>
                        <li style="width:100%;" class="wrapText"><span class="title">LESSONS LEARNED</span>-</li>
                    </ul>
                    <div class="informedSection">
                        <ul class="list-unstyled clearfix">
                            <li class="greenBullet">
                                <span class="title">Manager/Deputy Manager</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Regional Manager</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Senior Nurse/Carer</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Admin Office</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Family Informed</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Safeguarding</span>
                                <i></i> 15-11-2023
                            </li>
                            <li>
                                <span class="title">Mental Health Team</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Local Authority</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Statutory Notification (CQC)</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Police</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">GP</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">District Nurse</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Tissue Viability Nurse</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Ambulance</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Fire Brigade</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Rapid Response Team</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">M-Doc</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">RIDDOR</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Therapy Team</span>
                                <i></i> -
                            </li>
                        </ul>
                    </div>
                    <span class="status awaiting">Awaiting Sign Off</span>
                </section>
                <section class="clearfix">
                    <ul class="list-unstyled clearfix">
                        <li style="width:200px;"><span class="title">HOME</span>3-3 Leander Lodge</li>
                        <li style="width:180px;"><span class="title">FLOOR</span>Basement Floor</li>
                        <li style="width:150px;"><span class="title">ROOM</span>Basement Room 1</li>
                        <li style="width:220px;"><span class="title">SERVICE USER</span>Cora TEST</li>
                        <li style="width:calc(100% - 850px);"><span class="title">LOCATION</span>Other service users bedroom</li>
                        <li style="width:50px;">
                            <span class="question"></span>
                            <ul class="extraInfoList list-unstyled clearfix">
                                <li>
                                    <span class="title">Witnessed</span>
                                    Yes
                                </li>
                                <li>
                                    <span class="title">GP Name</span>
                                    5
                                </li>
                                <li>
                                    <span class="title">Description</span>
                                    bh
                                </li>
                                <li>
                                    <span class="title">Service User's Circumstances Prior</span>
                                    gh
                                </li>
                                <li>
                                    <span class="title">Triggering Factors</span>
                                    yy
                                </li>
                                <li>
                                    <span class="title">Actions taken to prevent recurrence</span>
                                    hh
                                </li>
                                <li>
                                    <span class="title">Describe injuries</span>
                                    yu
                                </li>
                                <li>
                                    <span class="title">Injury Sustained?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Other Service Users Involved?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Staff Involved?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Anyone Else Involved?</span>
                                    -
                                </li>
                                <li>
                                    <span class="title">Admitted to Hospital?</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Open Body Map</span>
                                    No
                                </li>
                                <li>
                                    <span class="title">Form Completed By</span>
                                    Tyler T
                                </li>
                                <li>
                                    <span class="title">Create Follow Up</span>
                                    No
                                </li>
                            </ul>
                        </li>
                        <li style="width:50px;"><a href="#" class="eye"></a> </li>
                        <li style="width:180px;"><span class="title">TIME / DATE</span>(2:30 am) 15-11-2023</li>
                        <li style="width:220px;"><span class="title">ADDED By</span>Tyler T</li>
                        <li style="width:calc((100% - 970px) / 2);"><span class="title">TYPE</span>-</li>
                        <li style="width:calc((100% - 970px) / 2);"><span class="title">SUB TYPE</span>-</li>
                        <li style="width:140px;"><span class="title">HOSPITAL ADMISSION</span>No</li>
                        <li style="width:140px;"><span class="title">SAFEGUARDING</span>Yes</li>
                        <li style="width:140px;"><span class="title">RIDDOR?</span>No</li>
                        <li style="width:150px;"><span class="title">ACCIDENT/INCIDENT </span>Behaviour Incident</li>
                        <li style="width:100%;" class="wrapText"><span class="title">DETAIL</span>bh</li>
                        <li style="width:100%;" class="wrapText"><span class="title">MANAGER's FOLLOW UP ACTION</span>An automatic manager's follow up has been created to complete all the necessary actions required for this accident and incident form: i.e. updating the necessary care planning documents and informing any parties involved.</li>
                        <li style="width:100%;" class="wrapText"><span class="title">MANAGER's FOLLOW UP ACTION TAKEN</span>-</li>
                        <li style="width:100%;" class="wrapText"><span class="title">LESSONS LEARNED</span>-</li>
                    </ul>
                    <div class="informedSection">
                        <ul class="list-unstyled clearfix">
                            <li class="greenBullet">
                                <span class="title">Manager/Deputy Manager</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Regional Manager</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Senior Nurse/Carer</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Admin Office</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Family Informed</span>
                                <i></i> 15-11-2023
                            </li>
                            <li class="greenBullet">
                                <span class="title">Safeguarding</span>
                                <i></i> 15-11-2023
                            </li>
                            <li>
                                <span class="title">Mental Health Team</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Local Authority</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Statutory Notification (CQC)</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Police</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">GP</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">District Nurse</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Tissue Viability Nurse</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Ambulance</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Fire Brigade</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Rapid Response Team</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">M-Doc</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">RIDDOR</span>
                                <i></i> -
                            </li>
                            <li>
                                <span class="title">Therapy Team</span>
                                <i></i> -
                            </li>
                        </ul>
                    </div>
                    <span class="status awaiting">Awaiting Sign Off</span>
                </section>
            </div>
        </div>
    </div>

    <div class="pagingSorting">
        <ul class="list-unstyled paging">
            <li><a href="#">Prev</a></li>
            <li class="current"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">Next</a></li>
        </ul>

        <div class="sorting">
            <div class="select">
                <select name="" id="">
                    <option value="">Sort By</option>
                </select>
            </div>

            <button type="button" style="background-color:#6B7884">A-Z</button><button type="button" style="margin-right:20px;background-color:#6B7884">Z-A</button>

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
<script src="js/autosize.min.js"></script>
<script src="js/custom.js"></script>
<script>
    $(".question").on('click', function(){
        $(".question").next('ul').not($(this).next('ul')).hide();
        let offset = $(this).offset();
        $(this).next('ul').css({top: offset.top, left: offset.left}).fadeToggle();
    });
</script>
</body>
</html>
