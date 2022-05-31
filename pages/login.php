<?php if ( ! defined('ACCESS') ) die("Direct access not allowed."); ?>

<div class="row justify-content-center vh-100">
    <div class="col-xl-4 col-lg-5 col-md-6 mx-auto mb-3 pt-5">
        <form class="card rounded-15px bg-white pt-5 my-5 shadow-sm animate__animated animate__<?=(isset($_SESSION['message'])?'swing':'bounceInDown')?>" method="post">
            <div class="card-header border-0 bg-transparent py-4 text-center">
                <a href="./home" class="display-1">               
                    <i class="fa fa-user-circle"></i>
                </a>
            </div>
            <div class="card-body px-md-5">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-primary bg-transparent rounded-15px px-3">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control rounded-15px pl-3" name="username" maxlength="50" placeholder="username" required>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-primary bg-transparent rounded-15px px-3">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control rounded-15px pl-3" name="password" placeholder="password" required>
                </div>
            </div>
            <div class="card-footer text-right mt-5 bg-transparent py-3">
                <button type="submit" class="btn rounded-15px px-4 btn-primary btn-sm" name="login">
                    Login | <i class="fas fa-sign-in-alt ml-1" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
</div>