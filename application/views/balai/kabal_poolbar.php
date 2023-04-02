<div class="container-fluid">
    <div class="table-responsive  table-wrapper-scroll-y my-custom-scrollbar ">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Verifikasi E-SIGN</b></h2>
                    </div>
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>
            <table class="table  table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center col-lg-1">No.</th>
                        <th class="text-center col-lg-2">Dokumen</th>
                        <th class="text-center col-lg-2">Tanggal Disetujui</th>
                        <th class="text-center col-lg-3">Keterangan</th>
                        <th class="text-center col-lg-4">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dokumen_poolbar as $dokumen_poolbarr) { ?>
                        <?php if ($dokumen_poolbarr->status_kabid == '1') { ?>
                            <tr>
                                <td id="pointer" name="keterangan" class="text-center"><?php echo $i; ?></td>
                                <td class="text-center"><a href="<?= base_url(); ?>/berkas/<?= $dokumen_poolbarr->path; ?>"> <?php echo $dokumen_poolbarr->dokumen; ?></a></td>
                                <td class="text-center"><?php echo $dokumen_poolbarr->tanggal_acc_kb; ?></td>
                                <td class="text-center"> <?php echo $dokumen_poolbarr->keterangan; ?></td>
                                <td class="text-center">
                                    <?php if ($dokumen_poolbarr->status_kabal == '0') {
                                        $status_k = "<span><button class='btn btn-success text-center' data-toggle='modal' data-target='#KomentarModalAcc$dokumen_poolbarr->id' width='555' height='85'>Disetujui</button></span>
                                <span><button class='btn btn-danger text-center' data-toggle='modal' data-target='#KomentarModalReject$dokumen_poolbarr->id' width=' 555' height='85'>Ditolak</button></span>";
                                    } elseif ($dokumen_poolbarr->status_kabal == '1' || $dokumen_poolbarr->status_kabal == '2') {
                                        if ($dokumen_poolbarr->status_kabal == '1') {
                                            $status_k = 'Sudah Disetujui';
                                        } elseif ($dokumen_poolbarr->status_kabal == '2') {
                                            $status_k = 'Sudah Ditolak';
                                        }
                                    } ?>
                                    <?php echo $status_k; ?>

                                    <!-- modal untuk acc -->
                                    <div class="modal fade" id="KomentarModalAcc<?php echo $dokumen_poolbarr->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form untuk input komentar -->
                                                    <form method="post" action="<?= base_url('upload/status_kabal_poolbar'); ?>">
                                                        <div class=" form-group">
                                                            <input type="hidden" id="id" name="id" value='<?php echo $dokumen_poolbarr->id; ?>' />
                                                            <textarea id="keterangan" name="keterangan" class="form-control" rows="5"></textarea>
                                                            <input type="hidden" id="status_kabal" name="status_kabal" value="1">


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-success">Kirim </button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal untuk reject -->
                                    <div class="modal fade" id="KomentarModalReject<?php echo $dokumen_poolbarr->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form untuk input komentar -->
                                                    <form method="post" action="<?= base_url('upload/status_kabal_poolbar'); ?>">
                                                        <div class=" form-group">
                                                            <input type="hidden" name="id" value='<?php echo $dokumen_poolbarr->id; ?>' />
                                                            <textarea id="keterangan" name="keterangan" class="form-control" id="komentar" rows="5"></textarea>
                                                            <input type="hidden" id="status_kabal" name="status_kabal" value="2">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-success">Kirim </button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </td>

                        <?php $i++;
                        }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>