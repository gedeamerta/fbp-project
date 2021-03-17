<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Admin -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="<?= baseurl ?>/admin/updateCoAdmin/<?= $data['coadmin_single']['slug'] ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Fullname"
                                    value="<?= $data['coadmin_single']['fullname'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    value="<?= $data['coadmin_single']['username'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    value="<?= $data['coadmin_single']['email'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level</label>
                                <?php if($data['coadmin_single']['level'] == 'master') : ?>
                                <select class="form-control" name="level" id="">
                                    <option value="co-admin">Co-admin</option>
                                    <option value="master">Master</option>
                                </select>
                                <?php else : ?>
                                <select class="form-control" name="level" id="">
                                    <option value="co-admin">Co-admin</option>
                                </select>
                                <?php endif; ?>
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
                                <label>Re Type-Password</label>
                                <input type="password" class="form-control" name="password2" placeholder="Password"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Update Testi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>