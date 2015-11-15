<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <?php $template->getHead(); ?> 

    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?> 

        <div class="row-fluid main-body">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success" id="btnPrint"><span class="glyphicon glyphicon-print"></span> Print</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;Current Month Sales</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice ID</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($sales_results); $i++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $sales_results[$i]['date'] ?></td>
                                            <td><?php echo $sales_results[$i]['invoice_id']; ?></td>
                                            <td align="right"><?php echo $sales_results[$i]['TotalSales']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <div class="panel panel-primary">
                    <div class="panel-heading"><span class="glyphicon glyphicon-stats"></span>&nbsp;Sales Graph</div>
                    <div class="panel-body">
                        <div id="SalesChart">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $template->getFooter(); ?>        
    </body>
</html>
