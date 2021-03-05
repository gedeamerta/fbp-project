<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/updatePackages/<?= $data['packages_single']['id'] ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Packages</label>
                                <input type="text" class="form-control" name="title_packages"
                                    placeholder="Title Packages"
                                    value="<?= $data['packages_single']['title_packages'] ?>" required />
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
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Update Packages
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>