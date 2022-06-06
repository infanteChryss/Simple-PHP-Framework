<?php if ( ! defined('ACCESS') ) die("Direct access not allowed."); ?>

<section class="border-right small smooth-transition bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading py-1 pl-3 position-relative bg-dark mb-2 border-bottom border-light">
        <div class="d-flex align-items-center">
            <h6 class="h5 text-light py-2 mb-0">Project Name</h6>
        </div>
    </div>
    <div class="list-group text-capitalize rounded-0">
        <a href="<?=root_url('dashboard')?>" class="list-group-item bg-transparent border-0 text-decoration-none px-0 rounded-0<?=($pagetitle=='dashboard'?' active':'')?>">
            <div class="pl-3">
                <i class="fas fa-chart-bar mr-2" aria-hidden="true"></i>
                <div class="sr-only">Icon for</div> Dashboard
            </div>
        </a>
        <a href="<?=root_url('users')?>" class="list-group-item bg-transparent border-0 text-decoration-none px-0 rounded-0<?=($pagetitle=='users'?' active':'')?>">
            <div class="pl-3">
                <i class="fas fa-users mr-2" aria-hidden="true"></i>
                <div class="sr-only">Icon for</div> Users
            </div>
        </a>
        <a href="<?=root_url('logout')?>" class="list-group-item bg-transparent border-0 text-decoration-none px-0 rounded-0">
            <div class="pl-3">
                <i class="fas fa-power-off mr-2" aria-hidden="true"></i>
                <div class="sr-only">Icon for</div> Logout
            </div>
        </a>
    </div>
</section>