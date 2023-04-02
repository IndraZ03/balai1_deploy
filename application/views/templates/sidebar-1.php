<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #3E88EF;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="esign.php">
        <div class="sidebar-brand-icon">
            <img class="d-inline-block align-center" src="<?= base_url('assets/'); ?>img/bmkg-logo.png" width="66" height="66">
        </div>

        <h1 class="h1 mt-2 font-weight-bold text-light text-center small text-uppercase ">BIDANG I OBSERVASI</h1>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
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

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Up database kontrol menu dan submenu berdasarkan role_id -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $menu = $this->db->query("SELECT menu_id FROM bo_access_menu WHERE role_id = '$role_id'")->result(); ?>
    <?php
    $submenu = $this->db->query("SELECT menu_id FROM bo_access_submenu WHERE role_id = '$role_id'")->result();
    ?>

    <?php
    $stampil = '';
    $stampil1 = '';
    $stampil2 = '';
    $stampil3 = '';
    $tampil  = '';
    $tampil1 = '';
    $tampil2  = '';
    ?>
    <!-- Tampilin berdasarkan role id-->
    <?php

    foreach ($submenu as $ms) {
        if ($ms->menu_id == '1') {
            $stampil = "
           
                    <a class='collapse-item' href='dokumen_inskal'><span>
                    <i class='fas fa-fw fa-file'aria-hidden='true'  style='color: black;'></i></span>
                    <span>Pengajuan E-Sign</span></a>";
        }
        if ($ms->menu_id == '2') {
            $stampil1 = "<a class='collapse-item' href='dokumen_kasubid_inskal'><span>
            <i class='fas fa-fw fa-file-text'aria-hidden='true'  style='color: black;'></i></span>
            <span>KASUBID</span></a>";
        }
        if ($ms->menu_id == '3') {
            $stampil2 = "
            <a class='collapse-item' href='dokumen_poolbar'><span>
                    <i class='fas fa-fw fa-file'aria-hidden='true'  style='color: black;'></i></span>
                    <span>Pengajuan E-Sign</span></a>";
        }
        if ($ms->menu_id == '4') {
            $stampil3 = " <a class='collapse-item' href='dokumen_kasubid_poolbar'><span>
            <i class='fas fa-fw fa-file-text'aria-hidden='true'  style='color: black;'></i></span>
            <span>KASUBID</span></a>";
        }
    }
    ?>

    <?php foreach ($menu as $m) {
        if ($m->menu_id == '1') {
            $tampil = "
            <li class='nav-item'>
            
            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='true' aria-controls='collapseTwo'>
            <i class='fas fa-5x fa-fw fa-book'aria-hidden='true'  style='color: white;'></i>
            <span>INSKAL</span>
            </a>
            <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
        <div class='bg-white py-2 collapse-inner rounded'>
            $stampil
            $stampil1
        </div>
    </div>
        </li>";
        }
        if ($m->menu_id == '2') {
            $tampil1 = "  <li class='nav-item'>
           
            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseTwop' aria-expanded='true' aria-controls='collapseTwo'>
            <i class='fas  fa-fw fa-book'aria-hidden='true'  style='color: white;'></i>
            <span>POOLBAR</span>
            </a>
            <div id='collapseTwop' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
        <div class='bg-white py-2 collapse-inner rounded'>
            $stampil2
            $stampil3
        </div>
    </div>
        </li>";
        }
        if ($m->menu_id == '3') {
            $tampil2 = "
            <li class='nav-item'>
           
            <a class='nav-link collapsed' href='bo_kabid'>
            <i class='fas fa-fw fa-fax'aria-hidden='true'  style='color: white;'></i>
                <span>KABID</span>
            </a>";
        }
    }
    ?>

    <?php echo $tampil; ?>
    <?php echo $tampil1; ?>
    <?php echo $tampil2; ?>


    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->