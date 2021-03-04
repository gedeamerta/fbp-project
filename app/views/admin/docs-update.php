<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Admin -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="<?= baseurl ?>/admin/updateDocs/<?= $data['docs_single']['id']?>"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>