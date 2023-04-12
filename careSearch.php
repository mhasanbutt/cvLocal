<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
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
                <li><a href="#">Care Plan</a></li>
            </ul>
            <span class="title">Care Search</span>
        </div>

        <ul class="search list-unstyled clearfix">
            <li>
                <div class="fieldContainer searchField">
                    <input type="text" placeholder="Search by keyword">
                    <img src="images/magnifier-tool.svg" class="searchIcon svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Terrance Edwards</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Carer</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer date">
                    <input type="text" name="dateRange" placeholder="Date">
                    <img src="images/calendar-icon.svg" class="calendar svg">
                </div>
            </li>
            <li>
                <div class="fieldContainer select">
                    <select>
                        <option>Floor</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </li>
        </ul>

        <div class="clearfix">
            <button type="button" class="searchButton">Search</button>

            <div class="pull-right clearfix">
                <ul class="diseases list-unstyled">
                    <li><a href="#" style="background-image:url('images/allergy-icon.png')">Allergy</a></li>
                    <li><span style="background-image:url('images/cpr.png')">DNACPR</span></li>
                    <li><span style="background-image:url('images/Dols.png')">DoLS</span></li>
                    <li><span style="background-image:url('images/food-plate.png')">Food</span></li>
                    <li><span style="background-image:url('images/fluidIntake.png')">Fluid</span></li>
                    <li><span style="background-image:url('images/palliative-care.png')">Palliative Care</span></li>
                    <li><span style="background-image:url('images/absconding.png')">Absconding</span></li>
                    <li><span style="background-image:url('images/blood-sugar.png')">Blood Sugar</span></li>
                    <li><span style="background-image:url('images/blood-presure-matel.png')">Blood Pressure</span></li>
                    <li><span style="background-image:url('images/allergy-icon.png')">S.A.L.T</span></li>
                    <li><span style="background-image:url('images/falls-icon.png')">Falls</span></li>
                    <li><span style="background-image:url('images/pulse-multi.png')">Pulse</span></li>
                    <li><span style="background-image:url('images/bandage-single.png')">Injury Management</span></li>
                    <li><span style="background-image:url('images/o2.png')">Blood Oxygen</span></li>
                    <li><span style="background-image:url('images/oxygen.png')">SpO2</span></li>
                    <li><span style="background-image:url('images/respirationrate.png')">Respiratory Rate</span></li>
                    <li><span style="background-image:url('images/uti.png')">UTI</span></li>
                    <li><span style="background-image:url('images/bowel-management.png')">Bowel Movement</span></li>
                    <li><span style="background-image:url('images/sova.png')">SOVA</span></li>
                    <li><span style="background-image:url('images/toilet-multi.png')">Incontinent</span></li>
                    <li><span style="background-image:url('images/suicide-icon.png')">Self Harm</span></li>
                    <li><span style="background-image:url('images/gallows.png')">Suicide</span></li>
                    <li><span style="background-image:url('images/hospital-bed.png')">Bed Side Rails</span></li>
                    <li><span style="background-image:url('images/brain.png')">Seizure</span></li>
                    <li><span style="background-image:url('images/hearing_aid.png')">Poor Hearing</span></li>
                    <li><span style="background-image:url('images/eye-sight.png')">Poor Eyesight</span></li>
                    <li><span style="background-image:url('images/helping.png')">Dependancy</span></li>
                    <li><span style="background-image:url('images/pacemaker.png')">Pacemaker</span></li>
                    <li><span style="background-image:url('images/medical-report.png')">Section 117</span></li>
                    <li><span style="background-image:url('images/theatre.png')">Challenging Behaviour</span></li>
                    <li><span style="background-image:url('images/anticaoglant.png')">Anticoagulant</span></li>
                    <li><span style="background-image:url('images/idea.png')">MHT</span></li>
                    <li><span style="background-image:url('images/bacterias.png')">MRSA</span></li>
                    <li><span style="background-image:url('images/virus.png')">Covid-19</span></li>
                    <li><span style="background-image:url('images/sexuality.png')">AIS</span></li>
                    <li><span style="background-image:url('images/incapacity.png')">Adults with Incapacity</span></li>
                    <li><span style="background-image:url('images/microbe.png')">Norovirus</span></li>
                    <li><span style="background-image:url('images/mwc.png')">MWC</span></li>
                    <li><span style="background-image:url('images/bacteria.png')">Infection</span></li>
                    <li><span style="background-image:url('images/catheter_output.png')">Catheter</span></li>
                </ul>

                <div class="btn-group">
                    <button type="button" class="btn"><img src="images/printing-tool.svg" class="svg">Print</button>
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contentBody">
        <div class="GPConnectMessage">
            <div>
                <article>Service user, "Mr Tim K. Sherman" does not match with the requested record in GP Connect.</article>
            </div>
        </div>

        <div class="scrollArea">
            <div class="content">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkBox">
                                    <input type="checkbox" name="all" id="all" class="hidden">
                                    <label for="all"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </th>
                            <th>Identified Need</th>
                            <th>Care Plan</th>
                            <th>Entry Date</th>
                            <th>Review Date</th>
                            <th>Service User</th>
                            <th>Carer</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list2" id="list2" class="hidden">
                                    <label for="list2"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list3" id="list3" class="hidden">
                                    <label for="list3"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list4" id="list4" class="hidden">
                                    <label for="list4"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list5" id="list5" class="hidden">
                                    <label for="list5"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list2" id="list2" class="hidden">
                                    <label for="list2"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list3" id="list3" class="hidden">
                                    <label for="list3"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list4" id="list4" class="hidden">
                                    <label for="list4"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list5" id="list5" class="hidden">
                                    <label for="list5"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list2" id="list2" class="hidden">
                                    <label for="list2"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list3" id="list3" class="hidden">
                                    <label for="list3"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list4" id="list4" class="hidden">
                                    <label for="list4"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list5" id="list5" class="hidden">
                                    <label for="list5"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list1" id="list1" class="hidden">
                                    <label for="list1"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list2" id="list2" class="hidden">
                                    <label for="list2"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list3" id="list3" class="hidden">
                                    <label for="list3"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list4" id="list4" class="hidden">
                                    <label for="list4"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkBox">
                                    <input type="checkbox" name="list5" id="list5" class="hidden">
                                    <label for="list5"><img src="images/checked.svg" class="svg"></label>
                                </div>
                            </td>
                            <td>Phasellus dolor enim, volutpat.</td>
                            <td>Dols</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>2017-06-21 00:00:00</td>
                            <td>Terrance Edwards</td>
                            <td>Nulla facilisi</td>
                            <td><a href="#" class="view"><img src="images/view.svg" class="svg"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="contentFooter">
        <div class="row">
            <div class="col-md-4">
                <div class="listCount">
                    <select>
                        <option>50</option>
                        <option>100</option>
                        <option>150</option>
                    </select>
                    <img src="images/left-arrow.svg" class="svg">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="records">
                    <span class="previous"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                    <div class="counter">
                        <span>Page</span>
                        <span class="field"><input type="text" value="1"></span>
                        <span>of 15</span>
                    </div>
                    <span class="next"><img src="images/arrowhead-pointing-to-the-right.svg" class="svg"></span>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <div class="form-inline">
                    <label>Sort by</label>
                    <div class="select">
                        <select>
                            <option>Identified Needs</option>
                            <option>Care Plan</option>
                            <option>Service User</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             autoUpdateInput: false,
              locale: {
                  cancelLabel: 'Clear'
              }
        });
        $('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });

        $('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    </script>
</body>
</html>
