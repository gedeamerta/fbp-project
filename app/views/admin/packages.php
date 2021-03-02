<?php Flasher::flash();  ?>

<div class="container-fluid">
    <!-- Data Tables Packages -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <table id="packagesTable" class="display">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Descriptions</th>
                            <th>Photos</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['packages'] as $packages) : ?>
                        <tr>
                            <td><?= $packages['title_packages'] ?></td>
                            <td><?= $packages['descriptions'] ?></td>
                            <td><img src="<?= baseurl ?>/assets/images/<?= $packages['photos'] ?>" alt=""
                                    style="width: 50%;"></td>
                            <td><a href="<?= baseurl ?>/admin/delete/<?= $adminData['id'] ?>"><i
                                        class="fas fa-trash-alt" style="color: red;"></i></a></td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Form Packages -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/add_packages" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title Pakages</label>
                                <input type="text" class="form-control" name="title_packages"
                                    placeholder="Title Packages" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <input type="text" class="form-control" name="descriptions"
                                    placeholder="Descriptions" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Add Packages
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="<?= baseurl ?>/admin/update">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    value="<?= $data['admin_single']['username']?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Re-type Password</label>
                                <input type="password" name="password2" class="form-control" placeholder="Password" />
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


</div>