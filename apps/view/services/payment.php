<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" href="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>

        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>
        <?php $template->getBody(); ?>

        <div class="row-fluid main-body">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;Customer Details</div>
                        <div class="panel-body" id="frmCustomerAdd">
                            <div class="col-lg-4 col-md-3">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="txtCustomerName" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input validate="true" match="^[a-zA-Z ]+$" error="Customer name required" type="text" class="form-control" id="txtCustomerName" placeholder="Enter name">
                                            <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-md-2">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="txtCustomerMobile" class="col-sm-2 control-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input validate="true" match="^[0-9]{10}$" error="Mobile Number Required" type="text" class="form-control" id="txtCustomerMobile" placeholder="Enter mobile">
                                            <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="txtCustomerAddress" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" validate="true" match="^[a-zA-Z0-9,/. \n-]+$" error="Address Required." class="form-control" id="txtCustomerAddress" placeholder="Enter address">
                                            <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="cmbCountry" class="col-sm-2 control-label">Country</label>
                                        <a id="editable_country">Please select a Country</a> <br/>
                                        <div class="col-sm-10">
                                            <select id="cmbCountry" class="form-control">
                                                <option value="0">Please Select</option>
                                                <?php
                                                foreach ($countries as $country) {
                                                    ?>
                                                    <option value="<?php echo $country['CountryID']; ?>"><?php echo $country['Name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="cmbCity" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                            <select id="cmbCity" class="form-control">

                                            </select>
                                            <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 text-right">                            
                                <input type="hidden" id="txtCustomerID"/>
                                <button class="btn btn-success" id="btnSaveCustomer"><span class="glyphicon glyphicon-save"></span> Save as new</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><span class="glyphicon glyphicon-usd"></span>&nbsp;Invoice</div>
                        <div class="panel-body">
                            <div class="row" id="frmItemAdd">
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group">
                                        <label for="txtItemCode" id="lblItem">Item#</label>
                                        <input type="text" validate="true" match="^[a-zA-Z0-9]+$" error="Please enter Qty" class="form-control" id="txtItemCode" placeholder="Ex. ITM001">
                                        <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        <label for="txtItemName">Item Name</label>
                                        <input type="text" validate="true" match="^[a-zA-Z0-9 ]+$" error="Item name Required" class="form-control" id="txtItemName" placeholder="Type Item Name">
                                        <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                    <div class="form-group">
                                        <label for="txtAvailable">Available</label>
                                        <input type="text" class="form-control" id="txtAvailable" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group">
                                        <label for="txtUnitPrice">Unit Price</label>
                                        <input type="text" class="form-control" id="txtUnitPrice" readonly="readonly">                                   
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                    <div class="form-group">
                                        <label for="txtQty">Qty</label>
                                        <input type="text" validate="true" match="^[0-9]+$" error="Qty Required" class="form-control" id="txtQty" Placeholder="Ex. 2">
                                        <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group">
                                        <label for="txtLineVal">Line Val</label>
                                        <input type="text" class="form-control" id="txtLineVal" readonly="readonly">                                    
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1">
                                    <div class="form-group">
                                        <label for="txtLineVal">&nbsp;</label>
                                        <button id="btnAddItemtoList" class="btn btn-success form-control"><b class="glyphicon glyphicon-plus"></b></button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table" id="InvoiceList">
                                            <thead>
                                                <tr>
                                                    <th>Item#</th>
                                                    <th>Item Name</th>
                                                    <th>Qty</th>
                                                    <th>Unit Price</th>
                                                    <th>Line Val</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="InvoiceListBody">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4" align="right"><b>Total</b></td>
                                                    <td align="right" id="InvoiceTotal">0.00</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 text-right">
                    <button id="btnMakePayment" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-euro"></span> Make Payment</button>
                </div>
            </div>
        </div> 

        <div class="modal fade" id="ModalMakePayment">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><img src="../images/min-logo.png"/>&nbsp;Make Payment</h4>
                    </div>
                    <div class="modal-body">
                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li  role="presentation" class="tabPayment active" payment_type="cash"><a href="#cash" aria-controls="home" role="tab" data-toggle="tab">Cash</a></li>
                                <li  role="presentation" class="tabPayment" payment_type="card"><a href="#card" aria-controls="profile" role="tab" data-toggle="tab">Card</a></li>
                                <li role="presentation" class="tabPayment" payment_type="cheque"><a href="#cheque" aria-controls="messages" role="tab" data-toggle="tab">Cheque</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="cash">
                                    <br/>
                                    <form id="frmCashPayment" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="txtCashAmount" class="col-sm-2 control-label">Amount</label>
                                            <div class="col-sm-10">
                                                <input type="text" validate="true" match="^[0-9.]+$" error="Please enter a valid amount" class="form-control" id="txtCashAmount">
                                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                            </div>
                                        </div>                                
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="card">
                                    <br/>
                                    <form id="frmCardPayment" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="txtCardAmount" class="col-sm-2 control-label">Amount</label>
                                            <div class="col-sm-10">
                                                <input type="text" validate="true" match="^[0-9.]+$" error="Please enter a valid amount"  class="form-control" id="txtCardAmount">
                                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label for="txtCardNo" class="col-sm-2 control-label">Card No</label>
                                            <div class="col-sm-10">
                                                <input type="text"  class="form-control" id="txtCardNo" placeholder="Enter Credit Card No">
                                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                            </div>
                                        </div>     
                                        <div class="form-group">
                                            <label for="txtCardSurname" class="col-sm-2 control-label">Surname</label>
                                            <div class="col-sm-10">
                                                <input type="text"  class="form-control" id="txtCardSurname" placeholder="Enter Surname">
                                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                            </div>
                                        </div>     
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="cheque">
                                    <br/>
                                    <form id="frmChequePayment" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="txtChqueAmount" class="col-sm-2 control-label">Amount</label>
                                            <div class="col-sm-10">
                                                <input validate="true" match="^[0-9.]+$" error="Please enter a valid amount" type="text"  class="form-control" id="txtChqueAmount">
                                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                            </div>
                                        </div>      
                                        <div class="form-group">
                                            <label for="txtChequeNo" class="col-sm-2 control-label">No</label>
                                            <div class="col-sm-10">
                                                <input type="text" validate="true" match="^[0-9]+$" error="Please enter a valid cheque number"  class="form-control" id="txtChequeNo" placeholder="Enter Credit Card No">
                                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                            </div>
                                        </div>                                     
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="btnProceedtoPay" payment_type="cash" class="btn btn-primary">Make Payment</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <?php $template->getFooter(); ?>        
    </body>
</html>
