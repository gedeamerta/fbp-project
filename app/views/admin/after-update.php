<div class="container-fluid">
    <div class="row">
        <h1>Update Data After Clients</h1>
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/updateAfter/<?= $data['after_single']['id'] ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="name" placeholder="Fullname"
                                    value="<?= $data['after_single']['name'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" class="form-control" name="job" placeholder="Position"
                                    value="<?= $data['after_single']['job'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <textarea class="form-control" name="descriptions" id="descriptions" cols="30" rows="10"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Update Before Clients
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>