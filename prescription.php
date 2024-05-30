<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>CareVision - Less Admin, More Caring</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style>
        .contentBody .ctas {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
        }

        .contentBody>.scroll-wrapper {
            bottom: 60px;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <?php include("sideNav.php"); ?>
    
    <section class="contentHeader">
        <div class="breadcrumbTitle">
            <ul class="list-unstyled">
                <li><a href="#">Care</a></li>
                <li><a href="#">Medication</a></li>
                <li><a href="#">Service User Medication</a></li>
            </ul>
    
            <span class="title">Add Medication</span>
    
        </div>
    </section>
    
    
    <section class="contentBody noFooter">
        <div class="scrollArea">
            <div class="content">
                <div class="addMedication">
                    <div class="formSection">
                        <div class="searchMedicine">
                            <select class="select2">
                                <option>Medicine 1</option>
                                <option>Medicine 2</option>
                            </select>
                            
                            <button>Reset</button> <button class="search">Search</button>
                        </div>
                        
                        <div class="newForm">
                            <ul class="list-unstyled clearfix col3">
                                <li>
                                    <span class="title">
                                        Medicine Type
                                        <span class="info helpTip">
                                            <div class="tTText" style="height:60px;width: 250px;">
                                                <div class="scrollArea">
                                                    Activity name:Bepus Activities done: Arts &amp; Crafts appeared to be Surprised ( shocked ,dismayed)
                                                </div>
                                            </div>
                                        </span>
                                    </span>
                                    <select>
                                        <option>MAR</option>
                                    </select>
                                </li>
                                
                                <li>
                                    <span class="title">Homely Remedy</span>
                                    <input type="checkbox" id="hremedy" hidden>
                                    <label for="hremedy"></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="commonList">
                        This list remembers 100 medications that you use in the home.
                        
                        <ul class="list-unstyled">
                            <li>
                                <i class="useThis"></i> <i class="delete"></i>
                                TROSYL nail solution 28% w/w 12ml
                            </li>
                            <li>
                                <i class="useThis"></i> <i class="delete"></i>
                                NATRACARE natural panty liners mini 30
                            </li>
                        </ul>
                        
                        <div class="newForm">
                            <span class="title">Medication Summary</span>
                            
                            <ul class="list-unstyled clearfix">
                                <li>
                                    <span>Medicine Name</span>
                                    <input type="text" value="PANADOL ACTIFAST tablets 500mg  8" class="disabled">
                                </li>
                                <li>
                                    <span>Description</span>
                                    <input type="text" value="Tablet" class="disabled">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ctas">
            <button>Back</button> <button class="green">Save</button>
        </div>
    </section>
    
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('.select2').select2();
    </script>
</body>
</html>
