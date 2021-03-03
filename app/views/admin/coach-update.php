<div class="container-fluid">
    <div class="row">
        <h1>Update Data Coach</h1>
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/updateCoach/<?= $data['coach_single']['id'] ?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="name" placeholder="Fullname"
                                    value="<?= $data['coach_single']['name'] ?>" required />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" class="form-control" name="job" placeholder="Position"
                                    value="<?= $data['coach_single']['job'] ?>" required />
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
                                Update Coach
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>