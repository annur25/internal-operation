<div class="container-fluid p-1">
    <div class="row">
        <div class="col-md-5">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <div class="breadcrumb text-dark bg-white font-weight-bold  shadow border">
                    <i class="fas fa-users mt-1"></i>&nbsp;&nbsp; Prospective Client
                </div>
            </nav>
        </div>
        <div class="col-md-7">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <ol class="breadcrumb bg-white shadow border">
                    <li class="breadcrumb-item"><a href="<?=base_url('client/home');?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?=base_url('client/potential');?>">Potential Client</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
<div class="row">
    <div class="col-md-4 mb-2">
        <div class="card shadow card-sticky">
            <div class="card-body">
                <div class="text-center">
                    <img src="<?=base_url('assets/img/user.png');?>" alt="client management" width="70%">
                    <h6 class="mt-3">Students Name</h6>
                    <hr style="width:20%; margin-bottom:5px; margin-top:5px;">
                    <div class="text-info">
                        <p><i class="fas fa-envelope text-danger"></i>&nbsp; student@gmail.com <br>
                            <i class="fas fa-phone text-danger"></i>&nbsp; 081231232xxx &nbsp; | &nbsp;
                            <i class="fab fa-instagram text-danger"></i>&nbsp; @student</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a href="<?=base_url('client/profile/student/');?>" class="btn btn-sm btn-info m-1"><i
                                class="fas fa-pencil-alt"></i>&nbsp; Profile</a>
                        <a href="#" class="btn btn-sm btn-success m-1" data-toggle="modal"
                            data-target="#convertPotencial"><i class="fas fa-plus"></i>&nbsp;
                            Add Program</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body">
                <h6><i class="fas fa-user"></i>&nbsp; &nbsp; Student's Profile
                    <div class="float-right">
                        <a href="<?=base_url('client/potential/');?>" class="btn btn-sm btn-info"><i
                                class="fas fa-arrow-circle-left"></i></a>
                    </div>
                </h6>
                <div class="line" style="margin-top:15px; margin-bottom:0px;"></div>
                <div class="text-left mb-3">
                    <small class="text-muted"><i class="far fa-calendar-alt text-danger"></i> &nbsp;Created date : 09
                        Jan
                        2019</small>
                    &nbsp; | &nbsp;
                    <small class="text-muted"><i class="fas fa-calendar-alt text-primary"></i> &nbsp;Last update : 09
                        Jan
                        2019</small>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-1">
                        <i class="fas fa-map-marker-alt"></i>&nbsp; &nbsp; Address :
                    </div>
                    <div class="col-md-8 text-muted">
                        Jl. Panjang No. 36, Kebon Jeruk <br>
                        Jakarta Barat<br>
                        11360
                    </div>
                </div>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <i class="fas fa-school"></i>&nbsp; &nbsp; School Name :
                    </div>
                    <div class="col-md-8 mb-3 text-muted">
                        School Name
                    </div>

                    <div class="col-md-4 mb-2">
                        <i class="fas fa-bookmark"></i>&nbsp; &nbsp; Current Education :
                    </div>
                    <div class="col-md-8 mb-3 text-muted">
                        Current Education
                    </div>

                    <div class="col-md-4 mb-2">
                        <i class="fas fa-hourglass-start"></i>&nbsp; &nbsp; Grade :
                    </div>
                    <div class="col-md-8 mb-1 text-muted">
                        11
                    </div>
                </div>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <i class="fas fa-box-open"></i>&nbsp; &nbsp; Lead Source :
                    </div>
                    <div class="col-md-8 mb-3 text-muted">
                        Lead Source
                    </div>

                    <div class="col-md-4 mb-2">
                        <i class="fas fa-chart-line"></i>&nbsp; &nbsp; Level of Interest :
                    </div>
                    <div class="col-md-8 mb-3 text-muted">
                        <div class="badge badge-success"><i class="fas fa-check"></i></div>
                        <span class="badge"> High</span> | &nbsp;
                        <div class="badge badge-warning"><i class="fas fa-check"></i></div>
                        <span class="badge"> Medium</span> | &nbsp;
                        <div class="badge badge-danger"><i class="fas fa-check"></i></div>
                        <span class="badge"> Low</span>
                    </div>

                    <div class="col-md-4 mb-2">
                        <i class="fas fa-tag"></i>&nbsp; &nbsp; Interested Program :
                    </div>
                    <div class="col-md-8 mb-1 text-muted">
                        <?php
                   
                    for($i=0;$i<count($prog);$i++){
                        $prog_key = array_rand($badge);
                    ?>
                        <span class="badge <?=$badge[$prog_key];?> p-2 mb-2"><?=$prog[$i];?></span>
                        <?php } ?>

                    </div>
                </div>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <i class="fas fa-calendar-check"></i>&nbsp; &nbsp; Year of Going Study Abroad :
                    </div>
                    <div class="col-md-8 mb-3 text-muted">
                        School Name
                    </div>

                    <div class="col-md-4 mb-2">
                        <i class="fas fa-globe"></i>&nbsp; &nbsp; Country of Study Abroad :
                    </div>
                    <div class="col-md-8 mb-1 text-muted">
                        <?php                    
                    for($i=0;$i<count($country);$i++){
                        $country_key = array_rand($badge);
                    ?>
                        <span class="badge <?=$badge[$country_key];?>  p-2 mb-2"><?=$country[$i];?></span>
                        <?php } ?>
                    </div>

                    <div class=" col-md-4 mb-2">
                        <i class="fas fa-university"></i>&nbsp; &nbsp; University Destination :
                    </div>
                    <div class="col-md-8 mb-1 text-muted">
                        <?php                    
                    for($i=0;$i<count($univ);$i++){
                        $univ_key = array_rand($badge);
                    ?>
                        <span class="badge <?=$badge[$univ_key];?>  p-2 mb-2"><?=$univ[$i];?></span>
                        <?php } ?>
                    </div>

                    <div class="col-md-4 mb-2">
                        <i class="fas fa-microscope"></i>&nbsp; &nbsp; Major of Study Abroad :
                    </div>
                    <div class="col-md-8 mb-1 text-muted">
                        <?php                    
                    for($i=0;$i<count($major);$i++){
                        $major_key = array_rand($badge);
                    ?>
                        <span class="badge <?=$badge[$major_key];?>  p-2 mb-2"><?=$major[$i];?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="convertPotencial" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Add Program</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Program Name
                            </label>
                            <select id="programName" name="programName">
                                <option data-placeholder="true"></option>
                                <option value="1">Admission Advisory</option>
                                <option value="2">SAT Prep</option>
                                <option value="3">ACT Prep</option>
                                <option value="4">Experiential Learning</option>
                            </select>
                            <?=form_error('programName', '<small class="text-danger">', '</small>');?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Discuss</label>
                            <input name="firstDiscuss" type="date" class="form-control form-control-sm"
                                placeholder="First Discuss">
                            <?=form_error('firstDiscuss', '<small class="text-danger">', '</small>');?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Discuss</label>
                            <input name="lastDiscuss" type="date" class="form-control form-control-sm"
                                placeholder="Last Discuss" disabled>
                            <?=form_error('lastDiscuss', '<small class="text-danger">', '</small>');?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Meeting Date</label>
                            <input name="meetingDate" type="date" class="form-control form-control-sm"
                                placeholder="Meeting Date">
                            <?=form_error('meetingDate', '<small class="text-danger">', '</small>');?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Notes</label>
                            <textarea name="notes" class="form-control form-control-sm" rows="8"></textarea>
                            <?=form_error('notes', '<small class="text-danger">', '</small>');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.js"></script>
<script>
new SlimSelect({
    select: '#programName',
    placeholder: 'Select program name ',
    allowDeselect: true,
    deselectLabel: '<span class="text-danger">✖</span>'
});
</script>