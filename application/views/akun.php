<div id="content-wrapper">
      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Akun</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="" class="btn btn-primary mb-3">Tambah Admin</a>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Privelege</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach($akun as $akun){?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $akun['name']?></td>
                        <td><?= $akun['email']?></td>
                        <td><?= $akun['username']?></td>
                        <td><?= $akun['password']?></td>
                        <td><?= $akun['level']?></td>
                        <td>
                        <a href="account/edit/<?= $akun ['id_user'];?>" class="badge badge-success">Edit</a>
                        <a href="" onclick="return confirm('Are you sure you want to delete this item?');"
                           class="badge badge-danger">Delete</a>
                        </td>
                      </tr>
                      <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>