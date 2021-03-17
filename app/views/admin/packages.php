<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Packages -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>Packages </h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2 font-weight-bolder" data-toggle="modal"
                data-target="#exampleModalCenter">
                Add New Packages
            </button>
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
                                <td><?= html_entity_decode($packages['descriptions']) ?></td>
                                <td>
                                    <?php if($packages['photos']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $packages['photos'] ?>" alt="">
                                    <?php else : ?>
                                    <img src="<?= baseurl ?>/assets/images/default.jpg" alt="" />
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
                                            class="fas fa-cubes"></i>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New Packages</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= baseurl ?>/admin/add_packages" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title Pakages</label>
                                    <input type="text" class="form-control" name="title_packages"
                                        placeholder="Title Packages" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Photos</label>
                                    <input type="file" class="form-control" name="photos" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea name="descriptions" id="descriptions" cols="30" rows="10"
                                        class="form-control"></textarea>
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
</div>