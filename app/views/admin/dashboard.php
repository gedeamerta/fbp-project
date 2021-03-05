<?php Flasher::flash();  ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">0</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Page Views</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">0</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-info">0</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Data Tables Admin -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-3 btn-block font-weight-bolder mb-2" data-toggle="modal"
                data-target="#exampleModalCenter">
                Add New Admin
            </button>
            <div class="white-box">
                <div class="table-responsive">
                    <table id="packagesTable" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['admin'] as $adminData) : ?>
                            <tr>
                                <td><?= $adminData['fullname'] ?></td>
                                <td><?= $adminData['username'] ?></td>
                                <td><?= $adminData['email'] ?></td>
                                <td><?= $adminData['level'] ?></td>
                                <td>
                                    <?php if($adminData['level'] == 'co-admin') : ?>
                                    <a href="<?= baseurl ?>/admin/delete/<?= $adminData['slug']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/update_admin/<?= $adminData['slug']?>">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= baseurl ?>/admin/add_admin">
                        <input type="hidden" value="co-admin" name="level">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Fullname"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Re-type Password</label>
                                    <input type="password" class="form-control" name="password2" placeholder="Password"
                                        required />
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php if($data['admin_single']['level'] == 'master') : ?>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>Update Admin</h1>
            <div class="white-box">
                <form method="post" action="<?= baseurl ?>/admin/update">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    value="<?= $data['admin_single']['username']?>" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Re-type Password</label>
                                <input type="password" name="password2" class="form-control" placeholder="Password"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>