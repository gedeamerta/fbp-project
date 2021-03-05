<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Admin -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>Testimonials</h1>
            <button type="button" class="btn btn-primary font-weight-bolder mb-2" data-toggle="modal"
                data-target="#exampleModalCenter">
                Add New Testi
            </button>
            <div class="white-box">
                <div class="table-responsive">
                    <table id="packagesTable" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Descriptions</th>
                                <th>Photos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['testi'] as $testi) : ?>
                            <tr>
                                <td><?= $testi['name'] ?></td>
                                <td><?= $testi['job'] ?></td>
                                <td><?= $testi['descriptions'] ?></td>
                                <td>
                                    <?php if($testi['photos']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $testi['photos'] ?>" alt=""
                                        style="width: 100%;">
                                    <?php else : ?>
                                    <img src="<?= baseurl ?>/assets/images/default.jpg" alt="" style="width: 20%;" />
                                    <?php endif; ?>
                                <td>
                                    <a href="<?= baseurl ?>/admin/deleteTesti/<?= $testi['id']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/testi_update/<?= $testi['id'] ?>"><i
                                            class="far fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Testi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= baseurl ?>/admin/add_testi" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="name" placeholder="Fullname"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Job</label>
                                    <input type="text" class="form-control" name="job" placeholder="Job" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Photos</label>
                                    <input type="file" class="form-control" name="photos" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea class="form-control" name="descriptions" id="descriptions" cols="30"
                                        rows="10"></textarea>
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