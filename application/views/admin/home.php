<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style-sidebars.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/fc-3.3.0/fh-3.1.6/datatables.min.css" />
    <link rel="stylesheet" href="<?=base_url('assets/css');?>/icofont/icofont.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/all-in.css">
</head>
<style>
body {
    height: 100vh;
    min-height: 100vh;
    background-image: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.93) 0%), url("<?=base_url('assets/img/bg.jpg');?>");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.card {
    background-image: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.93) 0%), url("<?=base_url('assets/img/bg.jpg');?>");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

.menus {
    height: 330px !important;
}

.menu-link a:hover {
    color: blue;
}

.role {
    position: fixed;
    top: 50%;
    right: 3%;
    background: #ef711c;
    border-radius: 10px;
    padding: 10px;
    color: white;
}

.role:hover {
    color: black;
}
</style>


<body>
    <a href="<?=base_url('admin/settings/menus');?>" class="role shadow" title="Settings" target="_blank">
        <i class="icofont-settings icofont-2x"></i>
    </a>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 mx-auto mb-4">
                <div class="card shadow p-2 pl-3 pr-3">
                    <div class="row">
                        <div class="col-8 my-auto">
                            <h4 class="text-left mb-0">
                                <a href="" class="text-decoration-none text-muted">Internal Operation</a>
                            </h4>
                        </div>
                        <div class="col-4 my-auto text-right">
                            <a href="<?=base_url('auth/login/sign-out');?>" class="text-primary"><i
                                    class="icofont-sign-out"></i> Logout,
                            </a>&nbsp;
                            <?=$empl['empl_firstname'].' '.$empl['empl_lastname'];?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow menus">
                    <div class="card-header text-center">
                        Client Management
                    </div>
                    <div class="card-body menu-link">
                        <a href="<?=base_url('client/programs');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Program List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('client/lead');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Lead Source List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/university');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    University List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('client/student');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Student List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('client/parents');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Parent List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('client/students-program');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Students Program List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('client/alumni');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Alumni/Acceptance List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow menus">
                    <div class="card-header text-center">
                        Business Development
                    </div>
                    <div class="card-body menu-link">
                        <a href="<?=base_url('client/programs');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Program List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('client/lead');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Lead Source List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/university');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    University List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/school');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    School List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/corporate');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Corporate List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/school-program');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Schools Program List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/corporate-program');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Corporates Program List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('bizdev/edufair');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Edufair List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow menus">
                    <div class="card-header text-center">
                        Finance
                    </div>
                    <div class="card-body menu-link">
                        <a href="<?=base_url('finance/assets');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Asset List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/vendor');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Vendor List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/purchase-request');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Purchase Request List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/petty-cash');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Petty Cash
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/invoice/student');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Students Invoice List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/invoice/school');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Schools Invoice List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/receipt/student');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Students Receipt List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/receipt/school');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Schools Receipt List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('finance/pph-final');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    PPH Final
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow menus">
                    <div class="card-header text-center">
                        Human Resource
                    </div>
                    <div class="card-body menu-link">
                        <a href="<?=base_url('hr/employee');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Employee List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('hr/mentor/potential');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Potential Mentor & Tutor List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('hr/mentor');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Mentor & Tutor List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('hr/editor');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Editor List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('hr/volunteer');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Volunteer List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                        <hr class="mt-1 mb-1">
                        <a href="<?=base_url('hr/influencer');?>" target="_blank">
                            <div class="row">
                                <div class="col-10">
                                    Influencer List
                                </div>
                                <div class="col-2 my-auto">
                                    <i class="icofont-paper-plane icofont-1x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>