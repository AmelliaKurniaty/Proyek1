        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Akun</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php foreach ($akun as $akun) { ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <form action="../formedit" method="POST">
                                        <tr>
                                            <td>Username</td>
                                            <td><input type="text" class="form-control" name="username" value="<?= $akun['username'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" class="form-control" name="paswords" value="<?= $aku ['password'] ?>"></td>
                                        </tr>
                                </table>
                                <input type="submit" name="submit" value="Edit akun" class="btn btn-primary">
                        </div>
                        </form>
                        </table>
                    <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->