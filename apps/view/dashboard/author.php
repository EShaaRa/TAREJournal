<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Author dashboard</title>
        <?php $template->getHead(); ?> 
    </head> 

    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?> 
                <?php $template->getMenu(); ?> 

        <div class="container-fluid main-body">
            <!-- Main Content Area -->

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;Total Sales for the Month</div>
                        <div class="panel-body">
                            <div id="monthly_sales" style="width:99%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;Sales By Category</div>
                        <div class="panel-body">
                            <div id="sales_by_category" style="width:99%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><span class="glyphicon glyphicon-euro"></span>&nbsp;Latest Sales</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Invoice#</th>
                                            <th>Amount(LKR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2015-01-14</td>
                                            <th>INV001</th>
                                            <th>25,000.00</th>
                                        </tr>
                                        <tr>
                                            <td>2015-01-14</td>
                                            <th>INV002</th>
                                            <th>23,500.00</th>
                                        </tr>
                                        <tr>
                                            <td>2015-01-14</td>
                                            <th>INV003</th>
                                            <th>55,000.00</th>
                                        </tr>
                                        <tr>
                                            <td>2015-01-15</td>
                                            <th>INV005</th>
                                            <th>21,000.00</th>
                                        </tr>
                                        <tr>
                                            <td>2015-01-15</td>
                                            <th>INV006</th>
                                            <th>15,000.00</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Day Invoices</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Invoice #</th>
                                            <th>Customer Name</th>
                                            <th>Contact No</th>
                                            <th>Amount (LKR)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11:15</td>
                                            <td>INV001</td>
                                            <td>John</td>
                                            <td>0987677623</td>
                                            <td>23,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>12:25</td>
                                            <td>INV002</td>
                                            <td>Adams</td>
                                            <td>0987673453</td>
                                            <td>27,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>01:15</td>
                                            <td>INV003</td>
                                            <td>Peter</td>
                                            <td>0987557623</td>
                                            <td>13,000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading"><span class="glyphicon glyphicon-bell"></span>&nbsp;Notifications</div>
                        <div class="panel-body">
                            <div class="list-group" id="LatestNotifications">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>


