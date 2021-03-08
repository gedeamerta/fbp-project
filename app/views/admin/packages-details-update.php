<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post"
                    action="<?= baseurl ?>/admin/updatePackagesDetails/<?= $data['packages_details_single']['id'] ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Packages</label>
                                <input type="text" class="form-control" name="title_packages_details"
                                    placeholder="Title Packages"
                                    value="<?= $data['packages_details_single']['title_packages_details'] ?>"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos_details" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <textarea class="form-control" name="descriptions_details" id="descriptions" cols="30"
                                    rows="10"><?= $data['packages_details_single']['descriptions_details'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Update Packages Details
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>