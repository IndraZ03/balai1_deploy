<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="user/dokumen_inskal">Dokumen E-Sign</a>
        <a class="collapse-item" href="user/dokumen_kasubid_inskal">Kasubid</a>
    </div>
</div>
<i class="fas fa-5x fa-fw  file-text-o"></i>

<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item " href="<?= base_url('user/dokumen_poolbar'); ?>">Dokumen</a>
        <a class="collapse-item " href="<?= base_url('user/dokumen_kasubid_poolbar'); ?>">Kasubid</a>
    </div>
</div>

<?php
$stampil = "";
$stampil1 = "";
$stampil2 = "";
$stampil3 = "";
?>
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

<div class="modal fade" id="Kirimdok<?php echo $dokumen_inskall->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin Anda Yakin untuk Mengirimkan?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Keluar" untuk keluar dari dari akun</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-success" type="submit">Kirim</button>
            </div>
        </div>
    </div>
</div>