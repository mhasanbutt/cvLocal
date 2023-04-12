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
                <li><a href="#">Medication</a></li>
            </ul>
            <span class="title">Covert</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="diseases list-unstyled">
                            <li><img src="images/exclamation-mark.svg" class="svg">DNR</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Nut Allergy</li>
                            <li><img src="images/exclamation-mark.svg" class="svg">Penicillin Allergy</li>
                        </ul><br>
                        <hr>
                        <div class="well text-center covertWarning">
                            <ul class="list-unstyled">
                                <li>Care Home to keep the completed form as part of the service user's record.</li>
                                <li>Pharmacy to keep a copy of the completed form in the relevant care home's file for three years.</li>
                                <li>Forms may be used as evidence of how a decision to administer medication covertly was reached.</li>
                                <li>The law presumes every adult to be capable of giving consent unless demonstrated otherwise.</li>
                                <li>Every patient should be assessed to ascertain whether he or she is capable of consenting.</li>
                                <li>Assessment of a patient's capacity to consent should be subjected to continuous review.</li>
                            </ul>
                        </div>
                        <form class="inBodyForm">
                            <div class="form-group">
                                <label>Mental Capacity Form Completed?</label>
                                <div class="row">
                                    <div class="col-md-1">
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="consentPatient" id="consentPatient" class="ios-toggle">
                                            <label for="consentPatient" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                    <div class="col-md-10">
                                        <span class="formInfo mentalCapacityCheck">Please Complete Mental Capacity Form First, to Determine if Service User Requires Covert Medication.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Why is this medication necessary?</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>What alternatives have the multi-disciplinary team considered?</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Why were these alternatives rejected?</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Is covert administration the least restrictive way to treat the patient? (Give reasons)</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>What is the patient's view of the proposed treatment, if known?</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Has the patient expressed views in the past that are relevant to the present treatment?</label>
                                <div class="row">
                                    <div class="col-md-1">
                                        <span class="toggles fixed">
                                            <input type="checkbox" name="patientViews" id="patientViews" class="ios-toggle">
                                            <label for="patientViews" class="checkbox-label" data-off="NO" data-on="YES"></label>
                                        </span>
                                    </div>
                                    <div class="col-md-6 patientViews" style="display:none">
                                        <textarea></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name all the members of the healthcare team involved in the decision to adminster covertly.</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Add
                                                <span class="caret" style="margin: -2px 0 0 5px;"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#" data-toggle="modal" data-target="#contactsList">From Contacts</a></li>
                                                <li><a href="#">From Staff List</a></li>
                                                <li><a href="#">Manual Entry</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name of Pharmacist consulted to give advice on the administration of this medication.</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Add
                                                <span class="caret" style="margin: -2px 0 0 5px;"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">From Contacts</a></li>
                                                <li><a href="#">Manual Entry</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Do any of those persons involved  in the decision DISAGREE with the proposed use of cover.</label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Add
                                                <span class="caret" style="margin: -2px 0 0 5px;"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#" data-toggle="modal" data-target="#contactsStaffList">From Contacts / Staff List</a></li>
                                                <li><a href="#">Manual Entry</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>How will they be administering the medication?</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="select">
                                            <select>
                                                <option>Choose an Option</option>
                                                <option>Crushed and mixed with drink</option>
                                                <option>Mixed with food</option>
                                                <option>Crushed and mixed with drink</option>
                                                <option>Other</option>
                                            </select>
                                            <img src="images/left-arrow.svg" class="svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group date">
                                <label>Set Review Date</label>
                                <div class="row">
                                    <div class="col-md-2">
                                        <input type="text" name="dateRange">
                                        <img src="images/calendar-icon.svg" class="svg replace">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h4><span>Select Additional Options</span></h4>

                        <ul class="list-unstyled checkListLabel">
                            <li>
                                <input type="checkbox" name="" id="opt1" hidden>
                                <label for="opt1">
                                    Generate a credit note for past invoices <i title="Selecting this option will generate a single credit note covering all of the invoice periods selected below."></i>
                                </label>
                            </li>
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
            <div class="col-md-6 text-right">
                <div class="form-inline">
                    <label>Service User</label>
                    <div class="select">
                        <select>
                            <option>Terrance Edwards</option>
                            <option>John Smith</option>
                            <option>Tony Anderson</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
                <div class="form-inline">
                    <label>By Floor</label>
                    <div class="select">
                        <select>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                        <img src="images/left-arrow.svg" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="contactsList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Contacts</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Type of Contact</th>
                                <th>Authority</th>
                                <th>Name</th>
                                <th>Job Title</th>
                                <th>Email</th>
                                <th>Phone <small>Business</small></th>
                                <th>Phone <small>Home</small></th>
                                <th>Fax</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkBox">
                                        <input type="checkbox" name="chkBox1" id="chkBox1" class="hidden">
                                        <label for="chkBox1"><img src="images/checked.svg" class="svg"></label>
                                    </div>
                                </td>
                                <td>Healthcare Professional</td>
                                <td>Bromley</td>
                                <td>Sarah Jones</td>
                                <td>Social Worker</td>
                                <td>eopke~@mail.com</td>
                                <td>3536546</td>
                                <td>654363532</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkBox">
                                        <input type="checkbox" name="chkBox2" id="chkBox2" class="hidden">
                                        <label for="chkBox2"><img src="images/checked.svg" class="svg"></label>
                                    </div>
                                </td>
                                <td>Healthcare Professional</td>
                                <td>Bromley</td>
                                <td>Sarah Jones</td>
                                <td>Social Worker</td>
                                <td>eopke~@mail.com</td>
                                <td>3536546</td>
                                <td>654363532</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkBox">
                                        <input type="checkbox" name="chkBox3" id="chkBox3" class="hidden">
                                        <label for="chkBox3"><img src="images/checked.svg" class="svg"></label>
                                    </div>
                                </td>
                                <td>Healthcare Professional</td>
                                <td>Bromley</td>
                                <td>Sarah Jones</td>
                                <td>Social Worker</td>
                                <td>eopke~@mail.com</td>
                                <td>3536546</td>
                                <td>654363532</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkBox">
                                        <input type="checkbox" name="chkBox4" id="chkBox4" class="hidden">
                                        <label for="chkBox4"><img src="images/checked.svg" class="svg"></label>
                                    </div>
                                </td>
                                <td>Healthcare Professional</td>
                                <td>Bromley</td>
                                <td>Sarah Jones</td>
                                <td>Social Worker</td>
                                <td>eopke~@mail.com</td>
                                <td>3536546</td>
                                <td>654363532</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkBox">
                                        <input type="checkbox" name="chkBox5" id="chkBox5" class="hidden">
                                        <label for="chkBox5"><img src="images/checked.svg" class="svg"></label>
                                    </div>
                                </td>
                                <td>Healthcare Professional</td>
                                <td>Bromley</td>
                                <td>Sarah Jones</td>
                                <td>Social Worker</td>
                                <td>eopke~@mail.com</td>
                                <td>3536546</td>
                                <td>654363532</td>
                                <td>35</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contactsStaffList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="contactsList">
                        <h4>Contacts List</h4>
                        <form>
                            <input type="text" placeholder="Search"> <button>Search</button>
                        </form>
                        <div class="scrollArea">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Type of Contact</th>
                                        <th>Authority</th>
                                        <th>Name</th>
                                        <th>Job Title</th>
                                        <th>Email</th>
                                        <th>Phone <small>Business</small></th>
                                        <th>Phone <small>Home</small></th>
                                        <th>Fax</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="checkBox">
                                                <input type="checkbox" name="chkBox6" id="chkBox6" class="hidden">
                                                <label for="chkBox6"><img src="images/checked.svg" class="svg"></label>
                                            </div>
                                        </td>
                                        <td>Healthcare Professional</td>
                                        <td>Bromley</td>
                                        <td>Sarah Jones</td>
                                        <td>Social Worker</td>
                                        <td>eopke~@mail.com</td>
                                        <td>3536546</td>
                                        <td>654363532</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkBox">
                                                <input type="checkbox" name="chkBox7" id="chkBox7" class="hidden">
                                                <label for="chkBox7"><img src="images/checked.svg" class="svg"></label>
                                            </div>
                                        </td>
                                        <td>Healthcare Professional</td>
                                        <td>Bromley</td>
                                        <td>Sarah Jones</td>
                                        <td>Social Worker</td>
                                        <td>eopke~@mail.com</td>
                                        <td>3536546</td>
                                        <td>654363532</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkBox">
                                                <input type="checkbox" name="chkBox8" id="chkBox8" class="hidden">
                                                <label for="chkBox8"><img src="images/checked.svg" class="svg"></label>
                                            </div>
                                        </td>
                                        <td>Healthcare Professional</td>
                                        <td>Bromley</td>
                                        <td>Sarah Jones</td>
                                        <td>Social Worker</td>
                                        <td>eopke~@mail.com</td>
                                        <td>3536546</td>
                                        <td>654363532</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkBox">
                                                <input type="checkbox" name="chkBox9" id="chkBox9" class="hidden">
                                                <label for="chkBox9"><img src="images/checked.svg" class="svg"></label>
                                            </div>
                                        </td>
                                        <td>Healthcare Professional</td>
                                        <td>Bromley</td>
                                        <td>Sarah Jones</td>
                                        <td>Social Worker</td>
                                        <td>eopke~@mail.com</td>
                                        <td>3536546</td>
                                        <td>654363532</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="checkBox">
                                                <input type="checkbox" name="chkBox10" id="chkBox10" class="hidden">
                                                <label for="chkBox10"><img src="images/checked.svg" class="svg"></label>
                                            </div>
                                        </td>
                                        <td>Healthcare Professional</td>
                                        <td>Bromley</td>
                                        <td>Sarah Jones</td>
                                        <td>Social Worker</td>
                                        <td>eopke~@mail.com</td>
                                        <td>3536546</td>
                                        <td>654363532</td>
                                        <td>35</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="staffList">
                        <h4>Staff List</h4>
                        <form>
                            <input type="text" placeholder="Search"> <button>Search</button>
                        </form>
                        <div class="scrollArea">
                            <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox11" id="chkBox11" class="hidden">
                                            <label for="chkBox11"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox12" id="chkBox12" class="hidden">
                                            <label for="chkBox12"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox13" id="chkBox13" class="hidden">
                                            <label for="chkBox13"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox14" id="chkBox14" class="hidden">
                                            <label for="chkBox14"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox15" id="chkBox15" class="hidden">
                                            <label for="chkBox15"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox16" id="chkBox16" class="hidden">
                                            <label for="chkBox16"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox17" id="chkBox17" class="hidden">
                                            <label for="chkBox17"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox18" id="chkBox18" class="hidden">
                                            <label for="chkBox18"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkBox">
                                            <input type="checkbox" name="chkBox19" id="chkBox19" class="hidden">
                                            <label for="chkBox19"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td>Carer2432</td>
                                    <td>Nick Jones</td>
                                    <td>Care Manager</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <script src="js/custom.js"></script>
    <script>
        $('input[name="dateRange"]').daterangepicker({
             "opens": "left",
             "drops": "up",
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
        $('#consentPatient').change(function(){
            if($(this).is(':checked')) {
                $('.mentalCapacityCheck').fadeOut();
            } else {
                $('.mentalCapacityCheck').fadeIn();
            }
        });
        $('#patientViews').change(function(){
            if($(this).is(':checked')) {
                $('.patientViews').fadeIn();
            } else {
                $('.patientViews').fadeOut();
            }
        });
    </script>
</body>
</html>
