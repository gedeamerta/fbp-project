<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Packages -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table id="packagesTable" class="display table table-bordered">
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
                                <td>
                                    <?php if($packages['photos']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $packages['photos'] ?>"
                                        style="width: 100%" alt="">
                                    <?php else : ?>
                                    <img src="<?= baseurl ?>/assets/images/default.jpg" style="width: 20%" alt="" />
                                    <?php endif; ?>
                                </td>
                                <td> <a href=" <?= baseurl ?>/admin/deletePackages/<?= $packages['id']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/packages_update/<?= $packages['id'] ?>"><i
                                            class="far fa-edit"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/packages_details/<?= $packages['id'] ?>"><i
                                            class="far fa-plus-square" style="color: red"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Packages -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>Add Packages</h1>
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/add_packages" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title Pakages</label>
                                <input type="text" class="form-control" name="title_packages"
                                    placeholder="Title Packages" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <input type="text" class="form-control" name="descriptions" placeholder="Descriptions"
                                    required />
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
</div>