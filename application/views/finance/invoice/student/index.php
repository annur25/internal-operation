<div class="container-fluid p-1">
    <div class="row">
        <div class="col-md-5 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <div class="breadcrumb text-dark bg-white font-weight-bold  shadow border">
                    <i class="fas fa-tags mt-1"></i>&nbsp;&nbsp; Students Program
                </div>
            </nav>
        </div>
        <div class="col-md-7 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <ol class="breadcrumb bg-white shadow border">
                    <li class="breadcrumb-item"><a href="<?=base_url('finance/home');?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Students Program</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
<div class="content">
    <table id="myTable" class="display table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead class="text-center">
            <tr>
                <th width="1%">No</th>
                <th width="10%" class="bg-primary text-white">Students Name</th>
                <th width="10%">Program</th>
                <th>Program Success Date</th>
                <th width="5%">Invoice</th>
                <th width="5%">Payment Method</th>
                <th width="5%">Date</th>
                <th width="5%">Due Date</th>
                <th width="5%">Total Price</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php $i=1; foreach($student_program as $sp) : ?>
            <tr>
                <td><?=$i;?></td>
                <td class="text-left" style="cursor:pointer"
                    onclick="window.location='<?=base_url('finance/invoice/student/view/'.$sp['stprog_id']);?>'">
                    <?=$sp['st_firstname'].' '.$sp['st_lastname'];?>
                </td>
                <td class="text-left">
                    <?php 
                        if($sp['prog_sub']=='') {
                            echo $sp['prog_program'];
                        } else {
                            echo $sp['prog_sub'].': '.$sp['prog_program'];
                        }
                    ?>
                </td>
                <td data-sort="<?=$sp['stprog_statusprogdate'];?>">
                    <?=date('d F Y', strtotime($sp['stprog_statusprogdate']));?>
                </td>
                <?php 
                        $inv = $this->inv->showId($sp['stprog_id']);
                ?>
                <td>
                    <?= $inv ? $inv['inv_id']:'' ;?>
                </td>
                <td>
                    <?= $inv ? $inv['inv_paymentmethod']:'';?>
                </td>
                <td data-sort="<?= $inv ? $inv['inv_date']: '';?>">
                    <?= $inv ? date('d F Y', strtotime($inv['inv_date'])): '';?>
                </td>
                <td data-sort="<?=$inv ? $inv['inv_duedate']: '';?>">
                    <?= $inv ? date('d F Y', strtotime($inv['inv_duedate'])): ''; ?>
                </td>
                <td>
                    <?= $inv ? 'Rp.'. number_format($inv['inv_totpridr']): ''; ?>
                </td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?=base_url('assets/js/disable-copas.js');?>"></script>