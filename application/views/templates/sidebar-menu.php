<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #3E88EF;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="esign.php">
        <div class="sidebar-brand-icon">
            <img class="d-inline-block align-center" src="<?= base_url('assets/'); ?>img/bmkg-logo.png" alt="logo bmkg" width="66" height="66">
        </div>

        <h1 class="h1 mt-2 font-weight-bold text-light text-center small text-uppercase "> Menu Manajemen</h1>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->


    <!-- Divider -->
    <hr class="sidebar-divider">
    <?php
    $role = $this->session->userdata('role_id');
    if ($role == '1') {
        $dashboard = 'admin';
    } elseif ($role == '2' || $role == '3' || $role == '4' || $role == '5' || $role == '6') {
        $dashboard = 'user';
    } else {
        $dashboard = 'balai';
    } ?>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url($dashboard)  ?>">
            <i class="fas fa-2x fa-fw  fa-home"></i>
            <span style="font-size: 15px;">Dashboard</span></a>
    </li>
    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->


    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Sidebar Toggler (Sidebar) -->


</ul>
<!-- End of Sidebar -->