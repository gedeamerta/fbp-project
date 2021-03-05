<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Admin -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table id="packagesTable" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Photos</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['coach'] as $coachData) : ?>
                            <tr>
                                <td><?= $coachData['name'] ?></td>
                                <td><?= $coachData['job'] ?></td>
                                <td>
                                    <?php if($coachData['photos']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $coachData['photos'] ?>" alt=""">
                                    <?php else : ?>
                                    <img src=" <?= baseurl ?>/assets/images/default.jpg" alt="" style="width: 20%;" />
                                    <?php endif; ?>
                                <td>
                                    <a href="<?= baseurl ?>/admin/deleteCoach/<?= $coachData['id']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/coach_update/<?= $coachData['id'] ?>"><i
                                            class="far fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-3 btn-block font-weight-bolder" data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Add New Coach
                    </button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Coach</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= baseurl ?>/admin/add_coach" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="name" placeholder="Fullname"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job</label>
                                    <input type="text" class="form-control" name="job" placeholder="Job" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Photos</label>
                                    <input type="file" class="form-control" name="photos" placeholder="Password"
                                        required />
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
    <?php Flasher::flash();  ?>
</div>