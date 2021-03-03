<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post"
                    action="<?= baseurl ?>/admin/updatePackagesDetails/<?= $data['packages_details_single']['slug_details'] ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title Packages</label>
                                <input type="text" class="form-control" name="title_packages_details"
                                    placeholder="Title Packages"
                                    value="<?= $data['packages_details_single']['title_packages_details'] ?>"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <input type="text" class="form-control" name="descriptions_details"
                                    placeholder="Descriptions"
                                    value="<?= $data['packages_details_single']['descriptions_details'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos_details" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary ">
                                Update Packages Details
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>