<div class="container-fluid p-1">
    <div class="row">
        <div class="col-md-5 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <div class="breadcrumb text-dark bg-white font-weight-bold  shadow border">
                    <i class="fas fa-tags mt-1"></i>&nbsp;&nbsp; Add Invoice
                </div>
            </nav>
        </div>
        <div class="col-md-7 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <ol class="breadcrumb bg-white shadow border">
                    <li class="breadcrumb-item"><a href="<?=base_url('finance/home');?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?=base_url('finance/invoice/school/');?>"> Schools
                            Program</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Invoice</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
<div class="row">
    <div class="col-md-3">
        <div class="card shadow mb-3">
            <div class="card-body text-center">
                <img src="<?=base_url('assets/img/user.png');?>" alt="client management" width="60%">
                <h5><?=$schprog['sch_name'];?></h5>
                <div class="text-info">
                    <h6><?=$schprog['prog_program'];?></h6>
                </div>
                <?php if($fixprog) { ?>
                Program Date <br>
                <small>
                    <?=date('d F Y', strtotime($fixprog['schprogfix_eventstartdate'])).' - '.date('d F Y', strtotime($fixprog['schprogfix_eventenddate']));?>
                </small>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card shadow mb-3">
            <div class="card-body">
                <h6><i class="fas fa-dollar-sign"></i>&nbsp; &nbsp; Add Invoice </h6>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-2">
                            Price : <i class="text-danger font-weight-bold">*</i>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input id="price" name="invsch_price" type="number"
                                            class="form-control form-control-sm">
                                    </div>
                                    <?=form_error('invsch_price', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            Participans : <i class="text-danger font-weight-bold">*</i>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <div class="input-group input-group-sm">
                                        <input id="participans" name="invsch_participants" type="number"
                                            class="form-control form-control-sm"
                                            value="<?=$fixprog['schprogfix_participantsnum'];?>">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Persons</span>
                                        </div>
                                    </div>
                                    <?=form_error('invsch_participants', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            Discount :
                        </div>
                        <div class="col-md-10">
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input id="discount" name="invsch_disc" type="number"
                                            class="form-control form-control-sm">
                                    </div>
                                    <?=form_error('invsch_disc', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            Total Price :
                        </div>
                        <div class="col-md-10">
                            <div class="form-group row">
                                <div class="col-md-5 mb-3">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input id="tPrice" name="invsch_totprice" type="number"
                                            class="form-control form-control-sm">
                                    </div>
                                    <?=form_error('invsch_totprice', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="col-md-12">
                                    <input id="tpWords" name="invsch_words" class="form-control form-control-sm">
                                    <?=form_error('invsch_words', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            Date :
                        </div>
                        <div class="col-md-10 mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <small>Invoice Date </small><br>
                                    <input name="invsch_date" type="date" class="form-control form-control-sm">
                                    <?=form_error('invsch_date', '<small class="text-danger">', '</small>');?>
                                </div>
                                <div class="col-md-3">
                                    <small>Due Date</small><br>
                                    <input id="dueDate" name="invsch_duedate" type="date"
                                        class="form-control form-control-sm">
                                    <?=form_error('invsch_duedate', '<small class="text-danger">', '</small>');?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            Notes :
                        </div>
                        <div class="col-md-10 mb-3">
                            <textarea name="invsch_notes" class="form-control form-control-sm" rows="6"></textarea>
                            <?=form_error('invsch_notes', '<small class="text-danger">', '</small>');?>
                        </div>

                        <div class="col-md-2 mb-3">
                            Terms & Condition :
                        </div>
                        <div class="col-md-10 mb-3">
                            <textarea name="invsch_tnc" class="form-control form-control-sm" rows="6"></textarea>
                            <?=form_error('invsch_tnc', '<small class="text-danger">', '</small>');?>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-10 text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?=base_url('assets/js/generate-number.js');?>"></script>
<script>
$('#price').keyup(function() {
    let pc = $('#price').val();
    let pr = $('#participans').val();
    let ds = $('#discount').val();
    let tp = (pc * pr) - ds;

    $('#tPrice').val(tp);
    $('#tpWords').val(capitalize(tp));
});

$('#participans').keyup(function() {
    let pc = $('#price').val();
    let pr = $('#participans').val();
    let ds = $('#discount').val();
    let tp = (pc * pr) - ds;

    $('#tPrice').val(tp);
    $('#tpWords').val(capitalize(tp));
});

$('#discount').keyup(function() {
    let pc = $('#price').val();
    let pr = $('#participans').val();
    let ds = $('#discount').val();
    let tp = (pc * pr) - ds;

    $('#tPrice').val(tp);
    $('#tpWords').val(capitalize(tp));
});

$('#tPrice').keyup(function() {
    let tp = $('#tPrice').val();
    $('#tpWords').val(capitalize(tp));
});
</script>