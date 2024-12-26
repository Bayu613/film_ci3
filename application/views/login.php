<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <form action="<?= base_url('auth/login')?>" method="post">
                        <div class=" align-items-center justify-content-between mb-3 text-center">
                     
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Login</h3>
                          
                           
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                       
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        <?php echo $this->session->flashdata('alert',true);?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->

</body>

</html>