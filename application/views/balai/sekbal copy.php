<div class="container-fluid">

    <!-- Page Heading -->
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
                        <th class="col-md-1">Nama Dokumen</th>
                        <th class="col-md-2">Tanggal Pengajuan</th>
                        <th class="col-md-4">Dokumen E-Sign</th>
                        <th class="col-md-5">Pemilik</th>

                    </tr>
                </thead>
                <?php foreach ($dokumen_inskal as $dokumen_inskall) { ?>
                    <tbody>
                        <tr>
                            <td><a href="file1.pdf" download>File 1</a></td>
                            <td><?php echo $dokumen_inskall->tanggal_pengajuan; ?></td>
                            <td><input type="file"></td>
                            <td class="text-left">
                                <span><button class="btn btn-primary text-center mt-2 mb-2 ml-2 mr-2" width="555" height="85">Inskal</button></span>
                                <span><button class="btn btn-primary text-center mt-2 mb-2 ml-2 mr-2" width="555" height="85">Poolbar</button></span>
                                <span><button class="btn btn-primary text-center mt-2 mb-2 ml-2 mr-2" width="555" height="85">Tews</button></span>
                                <span><button class="btn btn-primary text-center mt-2 mb-2 ml-2 mr-2" width="555" height="85">Mews</button></span>
                            </td>
                        </tr>
                        <!-- tambahkan baris lainnya jika diperlukan -->
                    </tbody>

                <?php } ?>


            </table>