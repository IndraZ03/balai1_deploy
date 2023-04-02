<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #3E88EF;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="esign.php">
        <div class="sidebar-brand-icon">
            <img class="d-inline-block align-center" src="<?= base_url('assets/'); ?>img/bmkg-logo.png" width="66" height="66">
        </div>

        <h1 class="h1 mt-2 font-weight-bold text-light text-center small text-uppercase ">E-SIGN</h1>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
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
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = $this->db->query("SELECT menu_id FROM balai_access_menu WHERE role_id = '$role_id'")->result(); ?>
    <?php $tampil = '';
    $tampil1 = '';
    ?>
    <hr class="sidebar-divider my-0">
    <?php foreach ($queryMenu as $m) {
        if ($m->menu_id == '1') {
            $tampil = " 
            <li class='nav-item'>

            <a class='nav-link ' href='kabal'>
            <i class='fas fa-fw fa-fax'aria-hidden='true'  style='color: white;'></i>
                <span>KABAL</span>
            </a>
            </li>
            <hr class='sidebar-divider my-0'>";
        }
        if ($m->menu_id == '2') {
            $tampil1 = "<li class='nav-item'>
            
            <a class='nav-link ' href='sekbal'>
            <i class='fas fa-fw fa-fax'aria-hidden='true'  style='color: white;'></i>
                <span>SEKBAL</span>
            </a>
        </li>
        <hr class='sidebar-divider my-0'>";
        }
    }
    ?>
    <?php echo $tampil; ?>
    <?php echo $tampil1; ?>




    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Heading -->

    <!-- Sidebar Toggler (Sidebar) -->


</ul>
<!-- End of Sidebar -->