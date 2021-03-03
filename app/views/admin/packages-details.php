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
                            <?php foreach($data['packages_details'] as $details) : ?>
                            <tr>
                                <td><?= $details['title_packages_details'] ?></td>
                                <td><?= $details['descriptions_details'] ?></td>
                                <td>
                                    <?php if($details['photos_details']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $details['photos_details'] ?>"
                                        style="width: 100%" alt="">
                                    <?php else : ?>
                                    <img src="<?= baseurl ?>/assets/images/default.jpg" style="width: 50%" alt="" />
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href=" <?= baseurl ?>/admin/deletePackagesDetails/<?= $details['id']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a
                                        href="<?= baseurl ?>/admin/packages_details_update/<?= $details['slug_details'] ?>"><i
                                            class="far fa-edit"></i>
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
            <h1>Add Packages Details</h1>
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/add_packages_details" enctype="multipart/form-data">
                    <?php foreach($data['packages_details'] as $details) : ?>
                    <input type="hidden" name="id_packages" value="<?= $details['id']?>">
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Pakages</label>
                                <input type="text" class="form-control" name="title_packages_details"
                                    placeholder="Title Packages" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <input type="text" class="form-control" name="descriptions_details"
                                    placeholder="Descriptions" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Select Packages</label>
                                <select class="form-control" name="id_packages" id="">
                                    <option value="<?= $data['selected_packages']['id'] ?>" selected>
                                        <?= $data['selected_packages']['title_packages'] ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos_details" />
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