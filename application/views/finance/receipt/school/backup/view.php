<div class="container-fluid p-1">
    <div class="row">
        <div class="col-md-5 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <div class="breadcrumb text-dark bg-white font-weight-bold  shadow border">
                    <i class="fas fa-tags mt-1"></i>&nbsp;&nbsp; View Receipt
                </div>
            </nav>
        </div>
        <div class="col-md-7 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <ol class="breadcrumb bg-white shadow border">
                    <li class="breadcrumb-item"><a href="<?=base_url('finance/home');?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?=base_url('finance/receipt/school/');?>"> Receipt List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View Receipt</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
<div class="row">
    <div class="col-md-3">
        <div class="card shadow mb-2">
            <div class="card-body text-center">
                <img src="<?=base_url('assets/img/user.png');?>" alt="client management" width="60%">
                <h5><?=$rec['sch_name'];?></h5>
                <h6 class="text-info">
                    <?php 
                        if($rec['prog_sub']=='') {
                            echo $rec['prog_program'];
                        } else {
                            echo $rec['prog_sub'].': '.$rec['prog_program'];
                        }
                    ?>
                </h6>
                <hr>
                <?php 
                    if($rec['receipt_status']==1) {
                ?>
                <a href="#" class="btn btn-sm btn-danger m-1" data-toggle="modal" data-target="#refund"><i
                        class="fas fa-times"></i>&nbsp; Refund</a>
                <?php 
                    } else { 
                ?>
                <a href="<?=base_url('finance/receipt/school/cancel-refund/'.$rec['receipt_num']);?>"
                    class="btn btn-sm btn-danger m-1 cancel-button" data-message="refund"><i
                        class="fas fa-times"></i>&nbsp; Cancel
                    Refund</a>
                <?php 
                    }
                ?>

                <a href="#" class="btn btn-sm btn-secondary m-1" data-toggle="modal" data-target="#editReceipt"><i
                        class="fas fa-pencil-alt"></i>&nbsp; Edit</a>

                <?php 
                    if($rec['receipt_status']==1) {
                ?>
                <a href="<?=base_url('finance/receipt/school/pdf/'.$rec['receipt_num']);?>"
                    class="btn btn-sm btn-primary m-1" target="_blank"><i class="fas fa-print"></i>&nbsp; Print</a>
                <?php 
                    }
                ?>

                <?php 
                    if($rec['receipt_status']==2) {
                ?>
                <hr>
                <h5>Receipt Status</h5>
                <h6 class="text-danger">Refund</h6>
                <?php 
                    } 
                ?>
            </div>
        </div>

    </div>

    <div class="col-md-9">
        <div class="card shadow mb-2">
            <div class="card-body">
                <h6><i class="fas fa-dollar-sign"></i>&nbsp; &nbsp; View Receipt </h6>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-3">
                        No Receipt :
                    </div>
                    <div class="col-md-9">
                        <?=$rec['receipt_id'];?>
                        <hr class="mt-1 mb-2">
                    </div>
                    <div class="col-md-3">
                        Receipt Date :
                    </div>
                    <div class="col-md-9">
                        <?=date('d F Y', strtotime($rec['receipt_date']));?>
                        <hr class="mt-1 mb-2">
                    </div>

                    <?php if($rec['invdtl_id']) { ?>
                    <div class="col-md-3">
                        Installment Name :
                    </div>
                    <div class="col-md-9">
                        <?php 
                            $invdtl_id = $rec['invdtl_id'];
                            $invdtl = $this->invdetail->showDetailId($invdtl_id);
                            echo $invdtl['invdtl_statusname'];
                        ?>
                        <hr class="mt-1 mb-2">
                    </div>
                    <?php } ?>

                    <div class="col-md-3">
                        Amount :
                    </div>
                    <div class="col-md-9">
                        Rp. <?=number_format($rec['receipt_amount']);?>
                        <hr class="mt-1 mb-2">
                    </div>
                    <div class="col-md-3">
                        Payment Method :
                    </div>
                    <div class="col-md-9">
                        <?=$rec['receipt_mtd'];?>
                        <hr class="mt-1 mb-2">
                    </div>
                    <div class="col-md-3">
                        Cheque Number :
                    </div>
                    <div class="col-md-9">
                        <?=$rec['receipt_cheque'];?>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-3">
            <div class="card-body">
                <h6><i class="fas fa-dollar-sign"></i>&nbsp; &nbsp; View Invoice </h6>
                <div class="float-right" style="margin-top:-30px;">
                    <a target="_blank" href="<?=base_url('finance/invoice/school/pdf/'.$rec['invsch_num']);?>"
                        class="btn btn-sm btn-success">
                        <i class="icofont-search-document"></i> &nbsp; View Invoice
                    </a>
                </div>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-3">
                        Price :
                    </div>
                    <div class="col-md-9">
                        Rp. <?=number_format($rec['invsch_price']);?>
                        <hr class="mt-1 mb-2">
                    </div>
                    <div class="col-md-3">
                        Participans :
                    </div>
                    <div class="col-md-9">
                        <?=$rec['invsch_participants'];?>
                        <hr class="mt-1 mb-2">
                    </div>

                    <div class="col-md-3">
                        Discount :
                    </div>
                    <div class="col-md-9">
                        Rp. <?=number_format($rec['invsch_disc']);?>
                        <hr class="mt-1 mb-2">
                    </div>

                    <div class="col-md-3">
                        Total Price :
                    </div>
                    <div class="col-md-9">
                        Rp. <?=number_format($rec['invsch_totprice']);?>
                        <hr class="mt-1 mb-2">
                    </div>

                    <div class="col-md-3">
                        Date :
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <small>Invoice Date </small><br>
                                <?=date('d F Y', strtotime($rec['invsch_date']));?>
                                <hr class="mt-1 mb-2">
                            </div>
                            <div class="col-md-3">
                                <small>Due Date</small><br>
                                <?=date('d F Y', strtotime($rec['invsch_duedate']));?>
                                <hr class="mt-1 mb-2">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        Notes :
                    </div>
                    <div class="col-md-9 mb-3 mb-3">
                        <?=$rec['invsch_notes'];?>
                    </div>

                    <div class="col-md-3 mb-3">
                        Terms & Condition :
                    </div>
                    <div class="col-md-9 mb-3 mb-3">
                        <?=$rec['invsch_tnc'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="refund" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i>&nbsp; Refund</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('finance/receipt/school/refund');?>" method="post" name="refund">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>PPH</label>
                            <div class="form-group">
                                <input type="text" id="pph" class="form-control form-control-sm" placeholder="0.1">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <label>Total Refund </label>
                            <div class="form-group">
                                <input type="hidden" name="receipt_num" value="<?=$rec['receipt_num'];?>">
                                <input type="hidden" name="receipt_amount" value="<?=$rec['receipt_amount'];?>"
                                    id="amount">
                                <input type="number" name="receipt_refund" class="form-control form-control-sm"
                                    id="receipt_refund">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editReceipt" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i>&nbsp; Edit Receipt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('finance/receipt/school/edit');?>" method="post" name="receipt">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Amount</label>
                            <div class="form-group">
                                <input type="hidden" name="receipt_num" value="<?=$rec['receipt_num'];?>">
                                <input type="number" name="receipt_amount" value="<?=$rec['receipt_amount'];?>"
                                    class="form-control form-control-sm" id="amount" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Date</label>
                            <div class="form-group">
                                <input type="date" name="receipt_date" id="date" class="form-control form-control-sm"
                                    value="<?=$rec['receipt_date'];?>">
                            </div>
                        </div>
                        <div class=" col-md-12 mb-3">
                            <input type="text" id="words" name="receipt_words" class="form-control form-control-sm"
                                value="<?=$rec['receipt_words'];?>" readonly>
                        </div>
                        <div class="col-md-6">
                            <label>Payment Method</label>
                            <div class="form-group">
                                <select name="receipt_mtd" id="paymentMethod" class="form-control form-control-sm"
                                    onchange="paymentMethods()">
                                    <option value="Wire Transfer">Wire Transfer</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Cheque No</label>
                            <div class="form-group">
                                <input type="text" name="receipt_cheque" id="cheque"
                                    class="form-control form-control-sm" value="<?=$rec['receipt_cheque'];?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?=base_url('assets/js/generate-number.js');?>"></script>
<script>
$('#paymentMethod').val("<?=$rec['receipt_mtd'];?>");
paymentMethods();

function paymentMethods() {
    let pm = $('#paymentMethod').val();
    if (pm == 'Cheque') {
        $('#cheque').prop("readonly", false)
        $('#cheque').focus();
    } else {
        $('#cheque').prop("readonly", true)
        $('#cheque').val(' ');
    }
}

$('#amount').keyup(function() {
    let am = $(this).val();
    $('#words').val(capitalize(am));
});

$('#pph').keyup(function() {
    let pph = $(this).val();
    let amount = $('#amount').val();
    let refund = pph * amount;
    let totrefund = amount - refund;
    console.log(refund);
    $('#receipt_refund').val(totrefund);
});
</script>