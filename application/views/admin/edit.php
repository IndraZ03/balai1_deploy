<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $this->session->set_flashdata('message');

    $id = basename("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

    $queryName = "SELECT *
                            FROM `user` WHERE `id`= '$id'
                        ";
    $row = $this->db->query($queryName)->result_array();
    ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="mb-3">

            <label>Email:</label><input type="text" class="form-control" id="email" name="email" value="<?php echo $row[0]['email']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label>Nama:</label><input type="text" class="form-control" id="name" name="name" value="<?php echo $row[0]['name']; ?>">
        </div>
        <div class="mb-3">
            <label>Role:</label>
            <select class="custom-select" id="role_id" style="width: 100%;
                                    height: calc(1.5em + .75rem + 2px);
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    line-height: 1.5;
                                    color: #6e707e;
                                    background-color: #fff;
                                    background-clip: padding-box;
                                    border: 1px solid #d1d3e2;
                                    border-radius: .35rem;
                                    margin-bottom: 1rem;" name="role_id">

                <option value="1" <?php if ($row[0]['role_id'] == "1") echo 'selected="selected"'; ?>>Admin</option>
                <option value="2" <?php if ($row[0]['role_id'] == "2") echo 'selected="selected"'; ?>>User Inskal</option>
                <option value="3" <?php if ($row[0]['role_id'] == "3") echo 'selected="selected"'; ?>>User Kasubid Inskal</option>
                <option value="4" <?php if ($row[0]['role_id'] == "4") echo 'selected="selected"'; ?>>User Poolbar</option>
                <option value="5" <?php if ($row[0]['role_id'] == "5") echo 'selected="selected"'; ?>>User Kasubid Poolbar</option>
                <option value="6" <?php if ($row[0]['role_id'] == "6") echo 'selected="selected"'; ?>>Kabid</option>
                <option value="7" <?php if ($row[0]['role_id'] == "7") echo 'selected="selected"'; ?>>Kabal</option>
                <option value="8" <?php if ($row[0]['role_id'] == "8") echo 'selected="selected"'; ?>>Sekbal</option>

            </select>
            <!-- <label>Role:</label><input type="text" class="form-control" id="role_id" name="role_id" value="<?php echo $row[0]['role_id']; ?>"> -->
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('admin/menu/') ?>">Kembali</a>
        <div class="text-danger mt-5">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#newSubMenuModal">Hapus User</button>
            Dengan mengklik tombol "Hapus User" akan menghapus permanen akun sehingga user tidak bisa login.


        </div>
    </form>


    <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/delete'); ?>" method="post">

                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <p>Apakah Anda yakin akan menghapus data user ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >     