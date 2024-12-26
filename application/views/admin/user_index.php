<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/hay') ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?= base_url('assets/hay') ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/hay') ?>/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url('assets/hay') ?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class=" ">
    <div class="wrapper ">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="sidebar-wrapper">

              <?php require_once('woi.php')?>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php require_once('nav.php')?>

            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('admin/user/simpan') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" placeholder="Company" placeholder="Masukkan nama" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" placeholder="michael23" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col mb-6">
                                            <label for="nameWithTitle" class="form-label">Level</label>
                                            <select name="level" class="form-control">
                                                <option value="Admin">Admin</option>
                                                <option value="Kontributor">Kontributor</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="mb-4">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" type="file" name="foto">
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">Save</button>
                            </div>
                            </form>
                        </div>
                        <div class="card">
                        <h5 class="card-header">Data Pengguna</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Usrname</th>
                                        <th>Nama</th>
                                        <th>Level</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php foreach ($user as $aa) { ?>
                                        <tr>
                                            <td><?= $aa['username'] ?></td>
                                            <td><?= $aa['nama'] ?></td>
                                            <td><?= $aa['level'] ?></td>
                                            
                                            <td>
                                                <a class="btn btn-sm btn-danger"
                                                    onClick="return confirm('Apakah anda yakin untuk menghapus ini?')"
                                                    href="<?= base_url('admin/user/hapus/' . $aa['id_user']) ?>">
                                                    <span class="tim-icons icon-trash-simple"></span>
                                                </a>
                                                <a class="btn btn-sm btn-warning"
                                                    href="<?= base_url('admin/user/edit/' . $aa['id_user']) ?>">
                                                    <span class="tim-icons icon-pencil"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  card-user">
                            <div class="card-body ">
                                <p class="card-text">
                                <div class="author">
                                    <div class="block block-one"></div>
                                    <div class="block block-two"></div>
                                    <div class="block block-three"></div>
                                    <div class="block block-four"></div>
                                    <a href="#">
                                        <img class="avatar" src="<?= base_url('upload/galeri/' .  $this->session->userdata('foto'))?>"  alt="...">
                                        <h5 class="title"><?= $this->session->userdata('nama')?></h5>
                                    </a>
                                    <p class="description">
                                        <?= $this->session->userdata('level')?>
                                    </p>
                                </div>
                                </p>
                                <p class="card-description">
                                  Halo saya <?= $this->session->userdata('nama')?> saya disini sebagai <?= $this->session->userdata('level')?> ANJAYYYYY
                                </p>
                            </div>
                            <div class="card-footer ">
                                <div class="button-container">
                                    <button href="#" class="btn btn-icon btn-round btn-facebook">
                                        <i class="fab fa-facebook"></i>
                                    </button>
                                    <button href="#" class="btn btn-icon btn-round btn-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-icon btn-round btn-google">
                                        <i class="fab fa-google-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> made with <i class="tim-icons icon-heart-2"></i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary active" data-color="primary"></span>
                            <span class="badge filter badge-blue" data-color="blue"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line text-center color-change">
                    <span class="color-label">LIGHT MODE</span>
                    <span class="badge light-badge mr-2"></span>
                    <span class="badge dark-badge ml-2"></span>
                    <span class="color-label">DARK MODE</span>
                </li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
                    <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                        Documentation
                    </a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
                    <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
                    <br>
                    <br>
                    <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
            </ul>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?=base_url('assets/hay')?>/assets/js/core/jquery.min.js"></script>
    <script src="<?=base_url('assets/hay')?>/assets/js/core/popper.min.js"></script>
    <script src="<?=base_url('assets/hay')?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/hay')?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="<?=base_url('assets/hay')?>/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?=base_url('assets/hay')?>/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?=base_url('assets/hay')?>/assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?=base_url('assets/hay')?>/assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($navbar.length != 0) {
                        $navbar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
</body>

</html>