<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<div class="pull-right">
                    <a href="<?php echo site_url('order_passenger/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <div class="card-title">
                    <div class="title">Order Passenger Listing</div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
						<th>Order Id</th>
						<th>Passenger Title</th>
						<th>Passenger Firstname</th>
						<th>Passenger Lastname</th>
						<th>Passenger Firstname Th</th>
						<th>Passenger Lastname Th</th>
						<th>Passenger Telephone</th>
						<th>Passenger Mobile</th>
						<th>Passenger Email</th>
						<th>Passenger Gender</th>
						<th>Passenger Birthdate</th>
						<th>Passenger Nationality</th>
						<th>Passenger Citizen Id</th>
						<th>Passenger Passport Id</th>
						<th>Passenger Passport Issue</th>
						<th>Passenger Passport Expiry</th>
						<th>Passenger Passport Authority</th>
						<th>Passenger Visa</th>
						<th>Passenger Visa Expiry</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($order_passenger as $o){ ?>
                    <tr>
						<td><?php echo $o['order_id']; ?></td>
						<td><?php echo $o['passenger_title']; ?></td>
						<td><?php echo $o['passenger_firstname']; ?></td>
						<td><?php echo $o['passenger_lastname']; ?></td>
						<td><?php echo $o['passenger_firstname_th']; ?></td>
						<td><?php echo $o['passenger_lastname_th']; ?></td>
						<td><?php echo $o['passenger_telephone']; ?></td>
						<td><?php echo $o['passenger_mobile']; ?></td>
						<td><?php echo $o['passenger_email']; ?></td>
						<td><?php echo $o['passenger_gender']; ?></td>
						<td><?php echo $o['passenger_birthdate']; ?></td>
						<td><?php echo $o['passenger_nationality']; ?></td>
						<td><?php echo $o['passenger_citizen_id']; ?></td>
						<td><?php echo $o['passenger_passport_id']; ?></td>
						<td><?php echo $o['passenger_passport_issue']; ?></td>
						<td><?php echo $o['passenger_passport_expiry']; ?></td>
						<td><?php echo $o['passenger_passport_authority']; ?></td>
						<td><?php echo $o['passenger_visa']; ?></td>
						<td><?php echo $o['passenger_visa_expiry']; ?></td>
						<td>
                            <a href="<?php echo site_url('order_passenger/edit/'.$o['order_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('order_passenger/remove/'.$o['order_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>