<div class="container-fluid p-1">
    <div class="row">
        <div class="col-md-5 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <div class="breadcrumb text-dark bg-white font-weight-bold  shadow border">
                    <i class="fas fa-tags mt-1"></i>&nbsp;&nbsp; Mentor
                </div>
            </nav>
        </div>
        <div class="col-md-7 ">
            <nav aria-label="breadcrumb" style="margin:7px -5px -10px -5px;">
                <ol class="breadcrumb bg-white shadow border">
                    <li class="breadcrumb-item"><a href="<?=base_url('hr/home');?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?=base_url('hr/mentor/list');?>"> Mentor</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="line" style="margin-top:15px; margin-bottom:15px;"></div>


<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card shadow card-sticky">
            <div class="card-body">
                <div class="text-center">
                    <img src="<?=base_url('assets/img/employee.png');?>" alt="employee" width="60%"><br><br>
                    <h5 class="align-middle mt-2">
                        Mentor Name</h5>
                    <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                    <div class="text-info">
                        <p>Position <br>
                            <i class="fas fa-phone text-danger"></i>&nbsp; 081231232xxx &nbsp; | &nbsp;
                            <i class="fas fa-envelope text-danger"></i>&nbsp; mail@gmail.com</p>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <a href="<?=base_url('hr/mentor/edit');?>" class="btn btn-sm btn-info m-1"><i
                                    class="fas fa-pencil-alt"></i>&nbsp; Edit</a>
                            <a href="<?=base_url('hr/mentor/conver');?>"
                                class="btn btn-sm btn-danger m-1 convert-button"
                                data-message="Incative this mentor ?"><i class="fas fa-user-times"></i>&nbsp;
                                Inactive</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body">
                <h6><i class="fas fa-user"></i>&nbsp; &nbsp; Mentor Profile
                    <div class="float-right">
                        <a href="<?=base_url('hr/mentor/list/');?>" class="btn btn-sm btn-info"><i
                                class="fas fa-arrow-circle-left"></i></a>
                    </div>
                </h6>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="font-weight-bold mb-3">Personal Information</label>
                    </div>
                    <div class="col-md-5">
                        <label><i class="fas fa-id-card fa-fw text-muted"></i>&nbsp; Full Name :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        Full Name
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-envelope fa-fw text-muted"></i>&nbsp; Email :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        Email@mail.com
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-thumbtack fa-fw text-muted"></i>&nbsp; Address :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        Lorem Ipsum
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-phone fa-fw text-muted"></i>&nbsp; Phone Number :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        0824xxxxxx
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-university fa-fw text-muted"></i>&nbsp; Graduated From
                            :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        Graduated from
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-tag fa-fw text-muted"></i>&nbsp; Major
                            :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        Major
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-birthday-cake fa-fw  text-muted"></i>&nbsp; Date of Birth
                            :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        Date of Birth
                    </div>

                </div>
                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-5">
                        <label><i class="fas fa-crosshairs fa-fw text-muted"></i>&nbsp; Position :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <div class="col-md-5">
                                <small>Status</small><br>
                                Just Mentor
                            </div>
                            <div class="col-md-7">
                                <small>Tutoring Subject</small><br>
                                IB
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <label><i class="fas fa-dollar-sign fa-fw  text-muted"></i>&nbsp; Fee
                            :</label>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="row">
                            <div class="col-md-5">
                                <small>Fee per Hours</small><br>
                                Rp. 200.00
                            </div>
                            <div class="col-md-7">
                                <small>Fee per Session</small><br>
                                Rp. 150.00
                            </div>
                        </div>
                    </div>
                </div>

                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="font-weight-bold mb-3">Attachment</label>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td width="30%"><i class="fas fa-paperclip fa-fw"></i> &nbsp; Curriculum Vitae : </td>
                                <td>Available</td>
                            </tr>
                            <tr>
                                <td> <i class="fas fa-paperclip fa-fw"></i> &nbsp; Bank Account : </td>
                                <td>Available</td>
                            </tr>
                            <tr>
                                <td> <i class="fas fa-paperclip fa-fw"></i> &nbsp; KTP : </td>
                                <td>Available</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-paperclip fa-fw"></i> &nbsp; NPWP : </td>
                                <td>Available</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="line" style="margin-top:15px; margin-bottom:15px;"></div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="font-weight-bold mb-3">Student List</label>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th width="1%">No</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>School Name</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Full Name</td>
                                    <td>Email</td>
                                    <td>School Name</td>
                                    <td>Class</td>
                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Full Name</td>
                                    <td>Email</td>
                                    <td>School Name</td>
                                    <td>Class</td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Full Name</td>
                                    <td>Email</td>
                                    <td>School Name</td>
                                    <td>Class</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>