<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">List of Documents
                        <a href="#" data-toggle="modal" data-target="#exampleModal" style="float: right;" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New City Admin" class="btn btn-sm btn-success">
                            <i class="fa fa-plus">Add New</i> </a>
                    </h5>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form action="<?= base_url('save_city') ?>" method="post">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">City Admin Name</label>
                                                <input id="" type="text" name="city_name" class="form-control">
                                            </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    <button type="submit" class="btn btn-primary">Save City</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">List of City Administration</h5>
                            <div class="row">
							<div class="col col-md-12">
								<?php if($this->session->userdata('status')){
								?>

								<div class="alert alert-success" role="alert">
									<?php echo $this->session->userdata('status');?>
                                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </a>
								</div>
								<?php } else if($this->session->userdata('status_error')){ ?>
									<div class="alert alert-danger" role="alert">
										<?php echo $this->session->userdata('status_error');?>
									</div>
								<?php } ?>
							</div>
						</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">City Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($citys as $city) :  $no++; ?>
                                            <tr>
                                                <th scope="row"><?= $no; ?></th>
                                                <td><?= $city->city_name; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info" ><i class="fa fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal<?= $city->city_id?>"> <i class=" fas fa-edit"></i></a>
                                                    <a href="<?= base_url('delete_city/'.$city->city_id)?>" onclick="return confirm('Are you sure want to Delete this city ??')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="exampleModal<?= $city->city_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit City Name</h5>
                                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </a>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <form action="<?= base_url('edit_city/'.$city->city_id) ?>" method="post">
                                                                    <div class="form-group">
                                                                        <label for="inputText3" class="col-form-label">City Admin Name</label>
                                                                        <input id="" type="text" value="<?= $city->city_name ?>" name="city_name" class="form-control">
                                                                    </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                            <button type="submit" class="btn btn-warning">Save City</a>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>

                                        <?php endforeach ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>