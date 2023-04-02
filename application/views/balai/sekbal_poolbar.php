<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->set_flashdata('pesan-sukses') ?>

    <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Tanda Tangan E-SIGN</b></h2>
                    </div>
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>

                        <th class="col-md-2">Nama Dokumen</th>
                        <th class="col-md-3">Tanggal Dikirim</th>
                        <th class="col-md-4">Dokumen E-Sign</th>
                        <th class="col-md-3">Aksi</th>

                    </tr>
                </thead>
                <?php foreach ($dokumen_poolbar as $dokumen_poolbarr) { ?>
                    <tbody>
                        <?php if ($dokumen_poolbarr->status_kabal == '1') { ?>
                            <tr>
                                <td class="text-center"><a href="<?= base_url(); ?>/berkas/<?= $dokumen_poolbarr->path; ?>"> <?php echo $dokumen_poolbarr->dokumen; ?></a></td>
                                <td><?php echo $dokumen_poolbarr->tanggal_acc_s; ?></td>
                                <form method="post" action="<?= base_url() ?>upload/download_sekbal_inskal" enctype="multipart/form-data">
                                    <td><input type="file" class="form-control-file" id="download" name="download" required></td>
                                    <input type="hidden" value="<?= $dokumen_poolbarr->id; ?>" id="id" name="id">
                                    <input type="hidden" value="1" id="status_sekbal" name="status_sekbal">
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#Kirimdok<?php echo $dokumen_poolbarr->id ?>" class="btn btn-success">Kirim Dokumen </button>
                                        <div class="modal fade" id="Kirimdok<?php echo $dokumen_poolbarr->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin untuk Mengirimkan?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Pilih "Ya" untuk mengonfirmasi</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                        <button class="btn btn-success" type="submit">Ya</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
                        <!-- tambahkan baris lainnya jika diperlukan -->
                    </tbody>

                <?php
                } ?>


            </table>