<?php Flasher::flash();  ?>
<div class="container-fluid">
    <!-- Data Tables Admin -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>Before Clients</h1>
            <div class="white-box">
                <div class="table-responsive">
                    <table id="beforeTable" class="display table table-bordered">
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
                            <?php foreach($data['before'] as $result) : ?>
                            <tr>
                                <td><?= $result['name'] ?></td>
                                <td><?= $result['job'] ?></td>
                                <td><?= $result['descriptions'] ?></td>
                                <td>
                                    <?php if($result['photos']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $result['photos'] ?>" alt=""
                                        style="width: 100%;">
                                    <?php else : ?>
                                    <img src="<?= baseurl ?>/assets/images/default.jpg" alt="" style="width: 20%;" />
                                    <?php endif; ?>
                                <td>
                                    <a href="<?= baseurl ?>/admin/deleteBefore/<?= $result['id']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/before_update/<?= $result['id'] ?>"><i
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
                        Add Before Clients
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Before-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Before Clients</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= baseurl ?>/admin/add_before" enctype="multipart/form-data">
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
                                    <input type="file" class="form-control" name="photos" placeholder="Password"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea class="form-control" name="descriptions" id="" cols="30"
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

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <h1>After Clients</h1>
            <div class="white-box">
                <div class="table-responsive">
                    <table id="afterTable" class="display table table-bordered">
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
                            <?php foreach($data['after'] as $result) : ?>
                            <tr>
                                <td><?= $result['name'] ?></td>
                                <td><?= $result['job'] ?></td>
                                <td><?= $result['descriptions'] ?></td>
                                <td>
                                    <?php if($result['photos']) : ?>
                                    <img src="<?= baseurl ?>/assets/images/<?= $result['photos'] ?>" alt=""
                                        style="width: 100%;">
                                    <?php else : ?>
                                    <img src=" <?= baseurl ?>/assets/images/default.jpg" alt="" style="width: 20%;" />
                                    <?php endif; ?>
                                <td>
                                    <a href="<?= baseurl ?>/admin/deleteAfter/<?= $result['id']?>"
                                        onclick="return confirm('Are u sure want to delete')">
                                        <i class="fas fa-trash-alt" style="color: red;"></i>
                                    </a>
                                    <a href="<?= baseurl ?>/admin/after_update/<?= $result['id'] ?>"><i
                                            class="far fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mt-3 btn-block font-weight-bolder" data-toggle="modal"
                        data-target="#afterClients">
                        Add After Clients
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal After-->
    <div class="modal fade" id="afterClients" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add After Clients</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= baseurl ?>/admin/add_after" enctype="multipart/form-data">
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
                                    <input type="file" class="form-control" name="photos" placeholder="Password"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Descriptions</label>
                                    <textarea class="form-control" name="descriptions" id="" cols="30"
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