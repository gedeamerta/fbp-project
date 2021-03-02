<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/updatePackages/<?= $data['packages_single']['id'] ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title Pakages</label>
                                <input type="text" class="form-control" name="title_packages"
                                    placeholder="Title Packages"
                                    value="<?= $data['packages_single']['title_packages'] ?>" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <input type="text" class="form-control" name="descriptions" placeholder="Descriptions"
                                    value="<?= $data['packages_single']['descriptions'] ?>" />
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
                                Update Nota
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>