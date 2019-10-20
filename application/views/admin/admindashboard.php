<?php
if (!isset($_SESSION['adminName'])) {
    //die(print_r($_SESSION));
    redirect(base_url() . 'register/login');
}
//print_r($_SESSION)
?>

<!DOCTYPE html>
<html lang="en">
<?php require("adminhead.php"); ?>

<body>
    <div id="container" class="effect mainnav-full">
        <!--NAVBAR-->
        <!--===================================================-->
        <?php require("adminheader.php"); ?>

        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="profilebody">
                    <div class="pad-all animated fadeInDown">
                        <div class="row">
                            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                <div class="panel panel-default mar-no">
                                    <div class="panel-body">
                                        <a href="JavaScript:void(0);">
                                            <div class="pull-left">
                                                <p class="profile-title text-bricky">Users</p>
                                            </div>
                                            <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                <div class="panel panel-default mar-no">
                                    <div class="panel-body">
                                        <a href="JavaScript:void(0);">
                                            <div class="pull-left">
                                                <p class="profile-title text-bricky">Inbox</p>
                                            </div>
                                            <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                <div class="panel panel-default mar-no">
                                    <div class="panel-body">
                                        <a href="JavaScript:void(0);">
                                            <div class="pull-left">
                                                <p class="profile-title text-bricky">FAQ</p>
                                            </div>
                                            <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                <div class="panel panel-default mar-no">
                                    <div class="panel-body">
                                        <a href="JavaScript:void(0);">
                                            <div class="pull-left">
                                                <p class="profile-title text-bricky">Settings</p>
                                            </div>
                                            <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                <div class="panel panel-default mar-no">
                                    <div class="panel-body">
                                        <a href="JavaScript:void(0);">
                                            <div class="pull-left">
                                                <p class="profile-title text-bricky">Calender</p>
                                            </div>
                                            <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                <div class="panel panel-default mar-no">
                                    <div class="panel-body">
                                        <a href="JavaScript:void(0);">
                                            <div class="pull-left">
                                                <p class="profile-title text-bricky">Pictures</p>
                                            </div>
                                            <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Homepage 2 </h3>
                    <div class="breadcrumb-wrapper">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Homepage 2 </li>
                        </ol>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                            <!--Registered User-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                        <i class="fa fa-user fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-thin text-right"><?php echo $registeruser; ?></p>
                                    <p class="h5 mar-no text-right">Registered User</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                            <!--New Order-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-info">
                                        <i class="fa fa-shopping-cart fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-thin text-right"><?php echo $order; ?></p>
                                    <p class="h5 mar-no text-right">New Order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                            <!--Comments-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                        <i class="fa fa-comment fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-thin text-right">34</p>
                                    <p class="h5 mar-no text-right">Comments</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12">
                            <!--Sales-->
                            <div class="panel media pad-all">
                                <div class="media-left">
                                    <span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
                                        <i class="fa fa-dollar fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="text-2x mar-no text-thin text-right">654</p>
                                    <p class="h5 mar-no text-right">Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Order Statistics </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-8">
                                        <!-- World Map -->
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div id="world-map-markers" style="height: 300px"></div>
                                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- Progress bars Start -->
                                        <div class="clearfix">
                                            <span class="pull-left">In Queue</span>
                                            <small class="pull-right">45%</small>
                                        </div>
                                        <div class="pad-btm">
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-info" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                        <!-- Progress bars End -->
                                        <!-- Progress bars Start -->
                                        <div class="clearfix">
                                            <span class="pull-left">Shipped Products</span>
                                            <small class="pull-right">350/500</small>
                                        </div>
                                        <div class="pad-btm">
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-primary" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                        <!-- Progress bars End -->
                                        <!-- Progress bars Start -->
                                        <div class="clearfix">
                                            <span class="pull-left">Returned Products</span>
                                            <small class="pull-right">50/500</small>
                                        </div>
                                        <div class="pad-btm">
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-warning" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                        <!-- Progress bars End -->
                                        <!-- Progress bars Start -->
                                        <div class="clearfix">
                                            <span class="pull-left">Pending Deliveries</span>
                                            <small class="pull-right">150/500</small>
                                        </div>
                                        <div class="pad-btm">
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                        <!-- Progress bars End -->
                                        <!-- Progress bars Start -->
                                        <div class="clearfix">
                                            <span class="pull-left">Project 2</span>
                                            <small class="pull-right">32%</small>
                                        </div>
                                        <div class="pad-btm">
                                            <div class="progress progress-striped progress-sm">
                                                <div class="progress-bar progress-bar-info" style="width: 55%;"></div>
                                            </div>
                                        </div>
                                        <!-- Progress bars End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Monthly Statistics <small> based on the User Activities </small></h3>
                                </div>
                                <div class="panel-body pad-no">
                                    <!--Default Accordion-->
                                    <!--===================================================-->
                                    <div class="panel-group accordion mar-no" id="accordion1">
                                        <div class="panel defaultpanel">
                                            <!--Accordion title-->
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordionOne"> <i class="fa fa-calendar"></i> This Month</a>
                                                </h4>
                                            </div>
                                            <!--Accordion content-->
                                            <div class="panel-collapse collapse in" id="accordionOne">
                                                <div class="panel-body pad-no">
                                                    <table class="table mar-no bg-light-gray">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">5</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel defaultpanel">
                                            <!--Accordion title-->
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordionTwo"> <i class="fa fa-calendar"></i> Last Month</a> </h4>
                                            </div>
                                            <!--Accordion content-->
                                            <div class="panel-collapse collapse" id="accordionTwo">
                                                <div class="panel-body pad-no">
                                                    <table class="table mar-no bg-light-gray">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">5</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel defaultpanel">
                                            <!--Accordion title-->
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordionThree"> <i class="fa fa-calendar"></i> Last Quarter</a> </h4>
                                            </div>
                                            <!--Accordion content-->
                                            <div class="panel-collapse collapse" id="accordionThree">
                                                <div class="panel-body pad-no">
                                                    <table class="table mar-no bg-light-gray">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">5</td>
                                                                <td>Google Chrome</td>
                                                                <td class="center">4909</td>
                                                                <td><i class="fa fa-caret-down text-danger"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--===================================================-->
                                    <!--End Default Accordion-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <!--Panel with Header-->
                            <!--===================================================-->
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="carousel slide" id="c-slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="text-bold"> Task in Progress </div>
                                                <div class="pad-ver-5"> Navigation Illustration </div>
                                                <!-- Progress bars Start -->
                                                <div class="pad-btm">
                                                    <div class="progress progress-striped progress-sm">
                                                        <div class="progress-bar progress-bar-info" style="width: 55%;"></div>
                                                    </div>
                                                </div>
                                                <!-- Progress bars End -->
                                                <div class="eq-height">
                                                    <div class="text-dark"> Status : </div>
                                                    <div class="text-dark text-lg pull-left pad-ver-5"> Active </div>
                                                    <div class="text-dark pull-right">
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fa fa-pause pad-rgt-5"></i> Pause
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fa fa-check pad-rgt-5"></i> Complete
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <ul class="list-inline">
                                                    <li class="text-bold pull-left pad-ver-5"> Assigned to : </li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="item">
                                                <div class="text-bold"> Task in Progress </div>
                                                <div class="pad-ver-5"> App Usability Testing </div>
                                                <!-- Progress bars Start -->
                                                <div class="pad-btm">
                                                    <div class="progress progress-striped progress-sm">
                                                        <div class="progress-bar progress-bar-info" style="width: 55%;"></div>
                                                    </div>
                                                </div>
                                                <!-- Progress bars End -->
                                                <div class="eq-height">
                                                    <div class="text-dark"> Status : </div>
                                                    <div class="text-dark text-lg pull-left pad-ver-5"> Active </div>
                                                    <div class="text-dark pull-right">
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fa fa-pause pad-rgt-5"></i> Pause
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fa fa-check pad-rgt-5"></i> Complete
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <ul class="list-inline">
                                                    <li class="text-bold pull-left pad-ver-5"> Assigned to : </li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="item">
                                                <div class="text-bold"> Task in Progress </div>
                                                <div class="pad-ver-5"> Web Portal Redesign </div>
                                                <!-- Progress bars Start -->
                                                <div class="pad-btm">
                                                    <div class="progress progress-striped progress-sm">
                                                        <div class="progress-bar progress-bar-info" style="width: 55%;"></div>
                                                    </div>
                                                </div>
                                                <!-- Progress bars End -->
                                                <div class="eq-height">
                                                    <div class="text-dark"> Status : </div>
                                                    <div class="text-dark text-lg pull-left pad-ver-5"> Active </div>
                                                    <div class="text-dark pull-right">
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fa fa-pause pad-rgt-5"></i> Pause
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fa fa-check pad-rgt-5"></i> Complete
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <ul class="list-inline">
                                                    <li class="text-bold pull-left pad-ver-5"> Assigned to : </li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                    <li class="pull-right"><img src="img/av1.png" class="img-rounded img-sm" alt=""></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--End Panel with Header-->
                        </div>
                        <div class="col-lg-4">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Sales Statistics </h3>
                                </div>
                                <div class="panel-body">
                                    <!--Flot Line Chart placeholder-->
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <div id="demo-sales-statistics" style="height:150px"></div>
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Earning Statistics </h3>
                                </div>
                                <div class="panel-body">
                                    <!--Flot Line Chart placeholder-->
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <div id="demo-earning-statistics" style="height:150px"></div>
                                    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Order List</h3>
                                </div>
                                <div class="panel-body">
                                    <!--Default Tabs (Left Aligned)-->
                                    <!--===================================================-->
                                    <div class="tab-base mar-no">
                                        <!--Nav Tabs-->
                                        <ul class="nav nav-tabs">
                                            <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> Top Selling </a> </li>
                                            <li> <a data-toggle="tab" href="#demo-lft-tab-2">Most Viewed</a> </li>
                                            <li> <a data-toggle="tab" href="#demo-lft-tab-3">Recent Orders</a> </li>
                                        </ul>
                                        <!--Tabs Content-->
                                        <div class="tab-content">
                                            <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                                <!--Hover Rows-->
                                                <!--===================================================-->
                                                <table class="table table-hover table-vcenter">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Project</th>
                                                            <th>Project Deadline</th>
                                                            <th>Status</th>
                                                            <th>Clients</th>
                                                            <th class="hidden-xs">Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>IT Help Desk</td>
                                                            <td>11 May 2016</td>
                                                            <td>
                                                                <div class="label label-table label-info">Block</div>
                                                            </td>
                                                            <td>Semantha Armstrong</td>
                                                            <td class="hidden-xs">
                                                                <div class="progress progress-striped progress-sm">
                                                                    <div class="progress-bar progress-bar-primary" style="width: 25%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Product Dev</td>
                                                            <td>15 May 2016</td>
                                                            <td>
                                                                <div class="label label-table label-danger">On Hold</div>
                                                            </td>
                                                            <td>Jonathan Smith</td>
                                                            <td class="hidden-xs">
                                                                <div class="progress progress-striped progress-sm">
                                                                    <div class="progress-bar progress-bar-success" style="width: 35%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Website Redesign</td>
                                                            <td>19 May 2016</td>
                                                            <td>
                                                                <div class="label label-table label-success">Approved</div>
                                                            </td>
                                                            <td>Jacob Armstrong</td>
                                                            <td class="hidden-xs">
                                                                <div class="progress progress-striped progress-sm">
                                                                    <div class="progress-bar progress-bar-info" style="width: 85%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Local Ad</td>
                                                            <td>25 May 2016</td>
                                                            <td>
                                                                <div class="label label-table label-warning">Pending</div>
                                                            </td>
                                                            <td>Sandra Smith</td>
                                                            <td class="hidden-xs">
                                                                <div class="progress progress-striped progress-sm">
                                                                    <div class="progress-bar progress-bar-warning" style="width: 45%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Design new theme</td>
                                                            <td>28 May 2016</td>
                                                            <td>
                                                                <div class="label label-table label-warning">Pending</div>
                                                            </td>
                                                            <td>Will DeBrandon</td>
                                                            <td class="hidden-xs">
                                                                <div class="progress progress-striped progress-sm">
                                                                    <div class="progress-bar progress-bar-danger" style="width: 55%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Mockup Testing</td>
                                                            <td>31 May 2016</td>
                                                            <td>
                                                                <div class="label label-table label-warning">Pending</div>
                                                            </td>
                                                            <td>Alexander Flynn</td>
                                                            <td class="hidden-xs">
                                                                <div class="progress progress-striped progress-sm">
                                                                    <div class="progress-bar progress-bar-success" style="width: 75%;"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--===================================================-->
                                                <!--End Hover Rows-->
                                            </div>
                                            <div id="demo-lft-tab-2" class="tab-pane fade">
                                                <!--Hover Rows-->
                                                <!--===================================================-->
                                                <table class="table table-hover table-vcenter">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice</th>
                                                            <th>Name</th>
                                                            <th class="text-center">Value</th>
                                                            <th class="hidden-xs">Delivery date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Order #53451</td>
                                                            <td>
                                                                <span class="text-semibold">Desktop</span>
                                                                <br>
                                                                <small class="text-muted">Last 7 days : 4,234k</small>
                                                            </td>
                                                            <td class="text-center">$250</td>
                                                            <td class="hidden-xs">2012/04/25</td>
                                                            <td>
                                                                <div class="label label-table label-info">On Process</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order #53451</td>
                                                            <td>
                                                                <span class="text-semibold">Laptop</span>
                                                                <br>
                                                                <small class="text-muted">Last 7 days : 3,876k</small>
                                                            </td>
                                                            <td class="text-center">$350</td>
                                                            <td class="hidden-xs">2012/04/25</td>
                                                            <td>
                                                                <div class="label label-table label-danger">Cancelled</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order #53451</td>
                                                            <td>
                                                                <span class="text-semibold">Tablet</span>
                                                                <br>
                                                                <small class="text-muted">Last 7 days : 45,678k</small>
                                                            </td>
                                                            <td class="text-center">$325</td>
                                                            <td class="hidden-xs">2012/04/25</td>
                                                            <td>
                                                                <div class="label label-table label-success">Shipped</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Order #53451</td>
                                                            <td>
                                                                <span class="text-semibold">Smartphone</span>
                                                                <br>
                                                                <small class="text-muted">Last 7 days : 34,553k</small>
                                                            </td>
                                                            <td class="text-center">$250</td>
                                                            <td class="hidden-xs">2012/04/25</td>
                                                            <td>
                                                                <div class="label label-table label-warning">Pending</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--===================================================-->
                                            <!--End Hover Rows-->
                                            <div id="demo-lft-tab-3" class="tab-pane fade">
                                                <!--Hover Rows-->
                                                <!--===================================================-->
                                                <table class="table table-hover table-vcenter">
                                                    <thead>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th>User ID</th>
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                            <th class="hidden-xs">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label class="form-checkbox form-icon active">
                                                                        <input type="checkbox">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td> Semantha Armstrong </td>
                                                            <td>3 Jan, 2013</td>
                                                            <td>$239.85</td>
                                                            <td>
                                                                <div class="label label-table label-info">Block</div>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                <!--Split Buttons Dropdown-->
                                                                <!--===================================================-->
                                                                <div class="btn-group btn-group-xs">
                                                                    <button class="btn btn-danger">Download</button>
                                                                    <button class="btn btn-danger dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a> </li>
                                                                        <li><a href="#">Another action</a> </li>
                                                                        <li><a href="#">Something else here</a> </li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#">Separated link</a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!--===================================================-->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label class="form-checkbox form-icon active">
                                                                        <input type="checkbox">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td> Jonathan Smith </td>
                                                            <td>3 Jan, 2013</td>
                                                            <td>$239.85</td>
                                                            <td>
                                                                <div class="label label-table label-danger">On Hold</div>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                <!--Split Buttons Dropdown-->
                                                                <!--===================================================-->
                                                                <div class="btn-group btn-group-xs">
                                                                    <button class="btn btn-danger">Download</button>
                                                                    <button class="btn btn-danger dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a> </li>
                                                                        <li><a href="#">Another action</a> </li>
                                                                        <li><a href="#">Something else here</a> </li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#">Separated link</a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!--===================================================-->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label class="form-checkbox form-icon active">
                                                                        <input type="checkbox">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td> Jacob Armstrong </td>
                                                            <td>3 Jan, 2013</td>
                                                            <td>$1395.85</td>
                                                            <td>
                                                                <div class="label label-table label-success">Approved</div>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                <!--Split Buttons Dropdown-->
                                                                <!--===================================================-->
                                                                <div class="btn-group btn-group-xs">
                                                                    <button class="btn btn-danger">Download</button>

                                                                    <button class="btn btn-danger dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a> </li>
                                                                        <li><a href="#">Another action</a> </li>
                                                                        <li><a href="#">Something else here</a> </li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#">Separated link</a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!--===================================================-->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label class="form-checkbox form-icon active">
                                                                        <input type="checkbox">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td> Sandra Smith </td>
                                                            <td>3 Jan, 2013</td>
                                                            <td>$125.85</td>
                                                            <td>
                                                                <div class="label label-table label-warning">Pending</div>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                <!--Split Buttons Dropdown-->
                                                                <!--===================================================-->
                                                                <div class="btn-group btn-group-xs">
                                                                    <button class="btn btn-danger">Download</button>
                                                                    <button class="btn btn-danger dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a> </li>
                                                                        <li><a href="#">Another action</a> </li>
                                                                        <li><a href="#">Something else here</a> </li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#">Separated link</a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!--===================================================-->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <label class="form-checkbox form-icon active">
                                                                        <input type="checkbox">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td> Sandra </td>
                                                            <td>3 Jan, 2013</td>
                                                            <td>$239.85</td>
                                                            <td>
                                                                <div class="label label-table label-warning">Pending</div>
                                                            </td>
                                                            <td class="hidden-xs">
                                                                <!--Split Buttons Dropdown-->
                                                                <!--===================================================-->
                                                                <div class="btn-group btn-group-xs">
                                                                    <button class="btn btn-danger">Download</button>
                                                                    <button class="btn btn-danger dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                                        <i class="dropdown-caret fa fa-caret-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="#">Action</a> </li>
                                                                        <li><a href="#">Another action</a> </li>
                                                                        <li><a href="#">Something else here</a> </li>
                                                                        <li class="divider"></li>
                                                                        <li><a href="#">Separated link</a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!--===================================================-->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--===================================================-->
                                                <!--End Hover Rows-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--===================================================-->
                                    <!--End Default Tabs (Left Aligned)-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">User Accounts</h3>
                                </div>
                                <div class="panel-body">
                                    <!--Hover Rows-->
                                    <!--===================================================-->
                                    <table class="table table-hover table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>Profile</th>
                                                <th>User ID</th>
                                                <th class="hidden-xs">Email Address</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media-object center"> <img src="img/av1.png" alt="" class="img-rounded img-sm"> </div>
                                                </td>
                                                <td> Semantha Armstrong </td>
                                                <td class="hidden-xs">semantha@gmail.com</td>
                                                <td>
                                                    <div class="label label-table label-info">Block</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media-object center"> <img src="img/av1.png" alt="" class="img-rounded img-sm"> </div>
                                                </td>
                                                <td> Jonathan Smith </td>
                                                <td class="hidden-xs">jonathan@gmail.com</td>
                                                <td>
                                                    <div class="label label-table label-danger">On Hold</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media-object center"> <img src="img/av1.png" alt="" class="img-rounded img-sm"> </div>
                                                </td>
                                                <td> Jacob Armstrong </td>
                                                <td class="hidden-xs">jacob@gmail.com</td>
                                                <td>
                                                    <div class="label label-table label-success">Approved</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media-object center"> <img src="img/av1.png" alt="" class="img-rounded img-sm"> </div>
                                                </td>
                                                <td> Sandra Smith </td>
                                                <td class="hidden-xs">Sandra@gmail.com</td>
                                                <td>
                                                    <div class="label label-table label-warning">Pending</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media-object center"> <img src="img/av1.png" alt="" class="img-rounded img-sm"> </div>
                                                </td>
                                                <td> Sandra </td>
                                                <td class="hidden-xs">Sandra@gmail.com</td>
                                                <td>
                                                    <div class="label label-table label-warning">Pending</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--===================================================-->
                                    <!--End Hover Rows-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><span class="count-todos"></span> Items Left</h3>
                                </div>
                                <div class="panel-body pad-no">
                                    <div class="todolist not-done">
                                        <ul id="sortable" class="list-unstyled">
                                            <li class="ui-state-default">
                                                <div class="checkbox">
                                                    <label class="form-checkbox form-icon active">
                                                        <input type="checkbox"> Option 1
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ui-state-default">
                                                <div class="checkbox">
                                                    <label class="form-checkbox form-icon active">
                                                        <input type="checkbox"> Option 1
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ui-state-default">
                                                <div class="checkbox">
                                                    <label class="form-checkbox form-icon active">
                                                        <input type="checkbox"> Option 1
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="ui-state-default">
                                                <div class="checkbox">
                                                    <label class="form-checkbox form-icon active">
                                                        <input type="checkbox"> Option 1
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul id="done-items" class="list-unstyled">
                                            <li class="ui-state-default">
                                                Some item <a class="remove-item fa fa-remove pull-right" href="#" role="button"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <input type="text" class="form-control add-todo" placeholder="Enter Your TODO List ">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!--Profile Widget-->
                            <!--===================================================-->
                            <div class="panel">
                                <div class="panel-body pad-no">
                                    <div class="media pad-all bg-primary">
                                        <div class="media-left">
                                            <i class="fa fa-facebook fa-5x"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text-2x text-thin text-right">SquareDesign</p>
                                            <p class="h5 mar-no text-right">#squaredesign</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <ul class="nav nav-section nav-justified">
                                        <li>
                                            <div class="section">
                                                <div class="h4 mar-ver-5"> 12.5k </div>
                                                <p class="mar-no">Followers</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="section">
                                                <div class="h4 mar-ver-5"> 1853 </div>
                                                <p class="mar-no">Following</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="section">
                                                <div class="h4 mar-ver-5"> 3451 </div>
                                                <p class="mar-no">Tweets</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--Profile Widget-->
                            <!--===================================================-->
                            <div class="panel">
                                <div class="panel-body pad-no">
                                    <div class="media pad-all bg-info">
                                        <div class="media-left">
                                            <i class="fa fa-twitter fa-5x"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text-2x text-thin text-right">SquareDesign</p>
                                            <p class="h5 mar-no text-right">@ravindra1982</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <ul class="nav nav-section nav-justified">
                                        <li>
                                            <div class="section">
                                                <div class="h4 mar-ver-5"> 12.5k </div>
                                                <p class="mar-no">Followers</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="section">
                                                <div class="h4 mar-ver-5"> 1853 </div>
                                                <p class="mar-no">Following</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="section">
                                                <div class="h4 mar-ver-5"> 3451 </div>
                                                <p class="mar-no">Tweets</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--===================================================-->
                        </div>
                        <div class="col-lg-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Monthly Statistics <small> based on the User Activities </small></h3>
                                </div>
                                <div class="panel-body pad-no">
                                    <!--Default Accordion-->
                                    <!--===================================================-->
                                    <div class="panel-group accordion mar-no" id="statistics">
                                        <div class="panel defaultpanel">
                                            <!--Accordion title-->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-parent="#statistics" data-toggle="collapse" href="#statisticsone">
                                                        <i class="fa fa-calendar"></i> Top Countries
                                                    </a>
                                                </h4>
                                            </div>
                                            <!--Accordion content-->
                                            <div class="panel-collapse collapse in" id="statisticsone">
                                                <div class="panel-body pad-no">
                                                    <table class="table mar-no bg-light-gray">
                                                        <thead>
                                                            <tr>
                                                                <th>Country</th>
                                                                <th>Unique User</th>
                                                                <th>Pageviews</th>
                                                                <th>Changes</th>
                                                                <th>New Vs. Return</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>USA</td>
                                                                <td>254152</td>
                                                                <td>635241</td>
                                                                <td>25%</td>
                                                                <td>
                                                                    <div class="progress progress-striped progress-md">
                                                                        <div style="width: 75%" class="progress-bar progress-bar-success">
                                                                            <span class="sr-only">75% Complete (success)</span>
                                                                        </div>
                                                                        <div style="width: 25%" class="progress-bar progress-bar-info">
                                                                            <span class="sr-only">25% Complete (warning)</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>India</td>
                                                                <td>325614</td>
                                                                <td>524152</td>
                                                                <td>20%</td>
                                                                <td>
                                                                    <div class="progress progress-striped progress-md">
                                                                        <div style="width: 45%" class="progress-bar progress-bar-success">
                                                                            <span class="sr-only">45% Complete (success)</span>
                                                                        </div>
                                                                        <div style="width: 55%" class="progress-bar progress-bar-info">
                                                                            <span class="sr-only">55% Complete (warning)</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>United kingdom</td>
                                                                <td>124563</td>
                                                                <td>654525</td>
                                                                <td>35%</td>
                                                                <td>
                                                                    <div class="progress progress-striped progress-md">
                                                                        <div style="width: 25%" class="progress-bar progress-bar-success">
                                                                            <span class="sr-only">25% Complete (success)</span>
                                                                        </div>
                                                                        <div style="width: 75%" class="progress-bar progress-bar-info">
                                                                            <span class="sr-only">75% Complete (warning)</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Brazil</td>
                                                                <td>325412</td>
                                                                <td>456985</td>
                                                                <td>35%</td>
                                                                <td>
                                                                    <div class="progress progress-striped progress-md">
                                                                        <div style="width: 35%" class="progress-bar progress-bar-success">
                                                                            <span class="sr-only">35% Complete (success)</span>
                                                                        </div>
                                                                        <div style="width: 65%" class="progress-bar progress-bar-info">
                                                                            <span class="sr-only">65% Complete (warning)</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Canada</td>
                                                                <td>124523</td>
                                                                <td>490936</td>
                                                                <td>40%</td>
                                                                <td>
                                                                    <div class="progress progress-striped progress-md">
                                                                        <div style="width: 55%" class="progress-bar progress-bar-success">
                                                                            <span class="sr-only">55% Complete (success)</span>
                                                                        </div>
                                                                        <div style="width: 45%" class="progress-bar progress-bar-info">
                                                                            <span class="sr-only">45% Complete (warning)</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel defaultpanel">
                                            <!--Accordion title-->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-parent="#statistics" data-toggle="collapse" href="#statisticsTwo">
                                                        <i class="fa fa-calendar"></i> Age Group </a>
                                                </h4>
                                            </div>
                                            <!--Accordion content-->
                                            <div class="panel-collapse collapse" id="statisticsTwo">
                                                <div class="panel-body pad-no">
                                                    <table class="table mar-no bg-light-gray">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Gender</th>
                                                                <th>Unique User</th>
                                                                <th>Percentage</th>
                                                                <th class="text-center">Changes</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                                <td>18 to 25 year old</td>
                                                                <td class="center">25%</td>
                                                                <td class="text-center"><i class="fa fa-caret-up text-success fa-2x"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                                <td>26 to 35 year old</td>
                                                                <td class="center">35%</td>
                                                                <td class="text-center"><i class="fa fa-caret-down text-danger fa-2x"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                                <td>36 to 45 year old</td>
                                                                <td class="center">45%</td>
                                                                <td class="text-center"><i class="fa fa-caret-up text-success fa-2x"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center text-azure"><i class="fa fa-male"></i></td>
                                                                <td>46 to 55 year old</td>
                                                                <td class="center">40%</td>
                                                                <td class="text-center"><i class="fa fa-caret-up text-success fa-2x"></i></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--===================================================-->
                                    <!--End Default Accordion-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->
            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <?php require("adminfooter.php"); ?>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--JAVASCRIPT-->
    <!--=================================================-->
    <!--jQuery [ REQUIRED ]-->
    <?php require("adminbottom.php"); ?>
</body>