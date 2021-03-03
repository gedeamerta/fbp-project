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
                                    <img src="<?= baseurl ?>/assets/images/<?= $coachData['photos'] ?>" alt=""
                                        style="width: 20%;">
                                    <?php else : ?>
                                    <img src="<?= baseurl ?>/assets/images/default.jpg" alt="" style="width: 20%;" />
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
                </div>
            </div>
        </div>
    </div>

    <!-- Form Coach -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>Add Coach</h1>
            <div class="white-box">
                <?php Flasher::flash();  ?>
                <form method="post" action="<?= baseurl ?>/admin/add_coach" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="name" placeholder="Fullname" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Job</label>
                                <input type="text" class="form-control" name="job" placeholder="Job" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <input type="text" class="form-control" name="descriptions" placeholder="Descriptions"
                                    required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Photos</label>
                                <input type="file" class="form-control" name="photos" placeholder="Password" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">
                                Add Profile Coach
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>