<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryName = "SELECT *
                            FROM `user`
                        ";
    $name = $this->db->query($queryName)->result_array();
    ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center text-uppercase ">Balai Besar MKG Wilayah I</h1>
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Manajemen Pengguna</b></h2>
                    </div>
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>
            <table class="table table-hover table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Role ID</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $i = 1;
                    foreach ($name as $m) :
                        echo '<tr>';
                        echo '<th scope="row">' . $i . '</th>';
                        echo '<td>' . $m['name'] . '</td>';
                        if ($m['role_id'] == 1) {
                            echo '<td>Admin</td>';
                        } else {
                            echo '<td>Bukan Admin</td>';
                        }
                        echo '<td><a href="' . base_url('admin/edit/') . $m['id'] . '" class="badge badge-success text-light text-center" >edit</a>
                            </td>';
                        echo '</tr>';

                        $i++;
                    endforeach;
                    ?>
                    <!-- <?php $i = 1; ?>
                    <?php foreach ($name as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['name']; ?></td>
                            <td><?= $m['role_id']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/role-access/') . $m['id']; ?>" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?> -->
                </tbody>
            </table>
            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->