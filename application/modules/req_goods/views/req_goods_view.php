<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">REQUEST GOODS MANAGEMENT</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

															<a href="<?php echo base_url('req_goods/store');?>" class="btn btn-large btn-danger"> <i class="fa fa-plus-circle"></i> ADD </a>
															<br>
															&nbsp;
																 <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
																						<th>No</th>
																						<th>No Po</th>
                                            <th>Supplier</th>
                                            <th>Barang</th>
                                            <th>Qty</th>
																						<th>Satuan</th>
                                            <th>Harga</th>
																						<th>Status Paid</th>
																						<th>Date Create</th>

                                        </tr>
                                    </thead>
                                    <tbody>
																			<?php
																			$no = 1;
																			foreach ($listing as $row) {
																			?>

																			<tr>
																					<td><?php echo $no; ?></td>
																					<td><?php echo $row->no_po; ?></td>
																					<td><?php echo $row->nama_supplier; ?></td>
																					<td><?php echo $row->nama_barang; ?></td>
																					<td><?php echo $row->qty; ?></td>
																					<td><?php echo $row->satuan; ?></td>
																					<td><?php echo $row->harga; ?></td>
																					<td><?php echo strtoupper($row->status_paid); ?></td>
																					<td><?php echo $row->date_insert; ?></td>

																					<td>
																						<a class="btn btn-warning" href="<?php echo base_url('req_goods/store/'.$row->id); ?>">  <i class="fa fa-pencil"></i> Edit </a>   &nbsp;
																						<a class="btn btn-danger" onclick="javascript:return confirm('Anda yakin ingin menghapus data ini?')" href="<?php echo base_url('req_goods/delete/'.$row->id); ?>"> <i class="fa fa-trash"></i> Delete </a>
																					</td>

																			</tr>

																			<?php
																			$no++;
																			}
																			?>


                                        <!--
																				<tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td>4</td>

                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td>5</td>

                                        </tr>
																			-->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
