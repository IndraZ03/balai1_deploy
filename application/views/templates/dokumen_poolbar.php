<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan-sukses'); ?>
    <?= $this->session->flashdata('pesan-gagal'); ?>
    <?= $this->session->flashdata('pesan-sukses-hapus'); ?>
    <!-- Page Heading -->
    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
        <div class="table-wrapper ">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2 class="justify-content-left"><b>Pengajuan E-SIGN</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalPoolbar"> Ajukan E-Sign </button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered  table-striped table-hover">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center col-md-1">No<br></th>
                        <th rowspan="2" class="text-center col-md-2">Nama Dokumen</th>
                        <th rowspan="2" class="text-center col-md-2">Tanggal Pengajuan</th>
                        <th colspan="3" class="text-center col-md-2">Status</th>
                        <th rowspan="2" class="text-center col-md-3">Keterangan</th>
                        <th rowspan="2" class="text-center col-md-2">Download</th>
                        <th rowspan="2" class="text-center col-md-2">Aksi</th>

                    </tr>
                    <tr>
                        <th class="text-center">Kasubid</th>
                        <th class="text-center">Kabid</th>
                        <th class="text-center">Kabal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dokumen_poolbar as $dokumen_poolbarr) { ?>


                        <tr class="text-center">
                            <?php if ($dokumen_poolbarr->status_kasubid == '0') {
                                $state = '<span class="badge badge-info">Menunggu</span>';
                            } elseif ($dokumen_poolbarr->status_kasubid == '1') {
                                $state = '<span class="badge badge-success">Disetujui</span>';
                            } elseif ($dokumen_poolbarr->status_kasubid == '2') {
                                $state = '<span class="badge badge-danger">Ditolak</span>';
                            }
                            ?>
                            <?php if ($dokumen_poolbarr->status_kabid == '0') {
                                $state1 = '<span class="badge badge-info">Menunggu</span>';
                            } elseif ($dokumen_poolbarr->status_kabid == '1') {
                                $state1 = '<span class="badge badge-success">Disetujui</span>';
                            } elseif ($dokumen_poolbarr->status_kabid == '2') {
                                $state1 = '<span class="badge badge-danger">Ditolak</span>';
                            }
                            ?>
                            <?php if ($dokumen_poolbarr->status_kabal == '0') {
                                $state2 = '<span class="badge badge-info">Menunggu</span>';
                            } elseif ($dokumen_poolbarr->status_kabal == '1') {
                                $state2 = '<span class="badge badge-success">Disetujui</span>';
                            } elseif ($dokumen_poolbarr->status_kabal == '2') {
                                $state2 = '<span class="badge badge-danger">Ditolak</span>';
                            }

                            ?>
                            <td><?php echo $i; ?></td>
                            <td><a href="<?= base_url(); ?>/berkas/<?= $dokumen_poolbarr->path; ?>"> <?php echo $dokumen_poolbarr->dokumen; ?></a></td>
                            <td><?php echo $dokumen_poolbarr->tanggal_pengajuan; ?></td>
                            <td><?php echo $state; ?></td>
                            <td><?php echo $state1; ?></td>
                            <td><?php echo $state2 ?></td>
                            <td> <?php echo $dokumen_poolbarr->keterangan; ?></td>
                            <?php if ($dokumen_poolbarr->status_sekbal == "1") { ?>
                                <td><a href="<?= base_url(); ?>/download/<?= $dokumen_poolbarr->download; ?>">E-Sign_<?php echo $dokumen_poolbarr->dokumen; ?></a></td>

                            <?php } else { ?>
                                <td></td>
                            <?php } ?>
                            <td>
                                <form method='post' action="<?= base_url('upload/hapus_data_poolbar') ?>">
                                    <input type="hidden" id="id" name="id" value='<?php echo $dokumen_poolbarr->id; ?>'>
                                    <button type='button' data-toggle="modal" data-target="#hapus<?php echo $dokumen_poolbarr->id; ?>" class="badge rounded-pill bg-danger text-light">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <div class="modal fade" id="hapus<?php echo $dokumen_poolbarr->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-light" id="exampleModalLabel">Apakah Anda Yakin Untuk Menghapus Dokumen?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-light">Pilih "Ya" untuk mengonfirmasi</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                    <button class="btn btn-success" type="submit">Ya</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                            </form>
                        <?php $i++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>