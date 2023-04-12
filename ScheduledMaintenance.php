<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon"><title>CareVision - Less Admin, More Caring</title>
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
                <li><a href="#">Maintenance</a></li>
            </ul>
            <span class="title">Scheduled Maintenance</span>
        </div>
    </section>

    <section class="contentBody">
        <div class="scrollArea">
            <div class="content">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <form class="inBodyForm form-horizontal">
                            <div class="form-group">
                                <label class="col-md-5 control-label">Add Task</label>
                                <div class="col-md-4">
                                    <div class="select">
                                        <select>
                                           	<option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Assign Recurrence</label>
                                <div class="col-md-4">
                                    <div class="select">
                                        <select>
                                           	<option></option>
                                            <option>Daily</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                            <option>Other</option>
                                        </select>
                                        <img src="images/left-arrow.svg" class="svg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Title</label>
                                <div class="col-md-4">
                                	<input type="text" />
								</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">Description</label>
                                <div class="col-md-7">
                                	<textarea placeholder=""></textarea>
								</div>
                            </div>
                            
							<div class="form-group" style="margin-bottom: 0px;">
								<label class="col-md-5 control-label">&nbsp;</label>
								<div class="col-md-7 ">
									<span class="addButton" style="right: auto; padding-top: 0px; bottom: 0; left: 5px; line-height: 25px"><img src="images/plus.svg" class="svg"> &nbsp; ADD TASK</span>
								</div>
							</div>
                      		
                      		<div class="form-group">
                                <label class="col-md-5 control-label">Assign to area</label>
                                <div class="col-md-7">
                                    <button type="button" class="btn selectFood">Click Here</button>
                                </div>
                            </div>
                       
                        </form>
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

	<div class="foodSelection areaSelection">
        <h4>Select Area</h4>
        <span class="closeFoodSelection"><img src="images/close.svg" class="svg"></span>
        <div class="scrollArea">
            <form class="inBodyForm roomsList">
                <div class="row">
                    <div class="col-md-3">
                        <table class="floorsTable table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="all" class="hidden">
                                            <label for="all"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                        Floor 1
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor11" class="hidden">
                                            <label for="floor11"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor12" class="hidden">
                                            <label for="floor12"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor13" class="hidden">
                                            <label for="floor13"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor14" class="hidden">
                                            <label for="floor14"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor15" class="hidden">
                                            <label for="floor15"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor16" class="hidden">
                                            <label for="floor16"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor17" class="hidden">
                                            <label for="floor17"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor18" class="hidden">
                                            <label for="floor18"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <table class="floorsTable table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor21" class="hidden">
                                            <label for="floor21"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                        Floor 2
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor22" class="hidden">
                                            <label for="floor22"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor23" class="hidden">
                                            <label for="floor23"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor24" class="hidden">
                                            <label for="floor24"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor25" class="hidden">
                                            <label for="floor25"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor26" class="hidden">
                                            <label for="floor26"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor27" class="hidden">
                                            <label for="floor27"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor28" class="hidden">
                                            <label for="floor28"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor29" class="hidden">
                                            <label for="floor29"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <table class="floorsTable table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor31" class="hidden">
                                            <label for="floor31"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                        Floor 3
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor32" class="hidden">
                                            <label for="floor32"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor33" class="hidden">
                                            <label for="floor33"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor34" class="hidden">
                                            <label for="floor34"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor35" class="hidden">
                                            <label for="floor35"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor36" class="hidden">
                                            <label for="floor36"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor37" class="hidden">
                                            <label for="floor37"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor38" class="hidden">
                                            <label for="floor38"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor39" class="hidden">
                                            <label for="floor39"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">
                        <table class="floorsTable table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor41" class="hidden">
                                            <label for="floor41"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                        Floor 4
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor42" class="hidden">
                                            <label for="floor42"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor43" class="hidden">
                                            <label for="floor43"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor44" class="hidden">
                                            <label for="floor44"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor45" class="hidden">
                                            <label for="floor45"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor46" class="hidden">
                                            <label for="floor46"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor47" class="hidden">
                                            <label for="floor47"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor48" class="hidden">
                                            <label for="floor48"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                                <tr>
                                    <td width="30">
                                        <div class="checkBox">
                                            <input type="checkbox" name="all" id="floor49" class="hidden">
                                            <label for="floor49"><img src="images/checked.svg" class="svg"></label>
                                        </div>
                                    </td>
                                    <td><span class="formInfo">Room Name</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <div class="foot text-right">
            <button>Done</button>
        </div>
    </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="js/autosize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
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
        $('.selectFood').click(function(){
            $('.overlay').addClass('active');
            $('.foodSelection').addClass('show');
        });
        $('.closeFoodSelection').click(function(){
            $(this).parent().removeClass('show');
            $('.overlay').removeClass('active');
        });
    </script>
</body>
</html>
