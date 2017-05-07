<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Order Passenger Edit</div>
                </div>
            </div>
            <div class="card-body">
				
				<?php echo form_open('order_passenger/edit/'.$order_passenger['order_id']); ?>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_title" class="control-label">Passenger Title</label>
						<div class="form-group">
							<input type="text" name="passenger_title" value="<?php echo ($this->input->post('passenger_title') ? $this->input->post('passenger_title') : $order_passenger['passenger_title']); ?>" class="form-control" id="passenger_title" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_firstname" class="control-label">Passenger Firstname</label>
						<div class="form-group">
							<input type="text" name="passenger_firstname" value="<?php echo ($this->input->post('passenger_firstname') ? $this->input->post('passenger_firstname') : $order_passenger['passenger_firstname']); ?>" class="form-control" id="passenger_firstname" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_lastname" class="control-label">Passenger Lastname</label>
						<div class="form-group">
							<input type="text" name="passenger_lastname" value="<?php echo ($this->input->post('passenger_lastname') ? $this->input->post('passenger_lastname') : $order_passenger['passenger_lastname']); ?>" class="form-control" id="passenger_lastname" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_firstname_th" class="control-label">Passenger Firstname Th</label>
						<div class="form-group">
							<input type="text" name="passenger_firstname_th" value="<?php echo ($this->input->post('passenger_firstname_th') ? $this->input->post('passenger_firstname_th') : $order_passenger['passenger_firstname_th']); ?>" class="form-control" id="passenger_firstname_th" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_lastname_th" class="control-label">Passenger Lastname Th</label>
						<div class="form-group">
							<input type="text" name="passenger_lastname_th" value="<?php echo ($this->input->post('passenger_lastname_th') ? $this->input->post('passenger_lastname_th') : $order_passenger['passenger_lastname_th']); ?>" class="form-control" id="passenger_lastname_th" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_telephone" class="control-label">Passenger Telephone</label>
						<div class="form-group">
							<input type="text" name="passenger_telephone" value="<?php echo ($this->input->post('passenger_telephone') ? $this->input->post('passenger_telephone') : $order_passenger['passenger_telephone']); ?>" class="form-control" id="passenger_telephone" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_mobile" class="control-label">Passenger Mobile</label>
						<div class="form-group">
							<input type="text" name="passenger_mobile" value="<?php echo ($this->input->post('passenger_mobile') ? $this->input->post('passenger_mobile') : $order_passenger['passenger_mobile']); ?>" class="form-control" id="passenger_mobile" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_email" class="control-label">Passenger Email</label>
						<div class="form-group">
							<input type="text" name="passenger_email" value="<?php echo ($this->input->post('passenger_email') ? $this->input->post('passenger_email') : $order_passenger['passenger_email']); ?>" class="form-control" id="passenger_email" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_gender" class="control-label">Passenger Gender</label>
						<div class="form-group">
							<input type="text" name="passenger_gender" value="<?php echo ($this->input->post('passenger_gender') ? $this->input->post('passenger_gender') : $order_passenger['passenger_gender']); ?>" class="form-control" id="passenger_gender" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_birthdate" class="control-label">Passenger Birthdate</label>
						<div class="form-group">
							<input type="text" name="passenger_birthdate" value="<?php echo ($this->input->post('passenger_birthdate') ? $this->input->post('passenger_birthdate') : $order_passenger['passenger_birthdate']); ?>" class="form-control" id="passenger_birthdate" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_nationality" class="control-label">Passenger Nationality</label>
						<div class="form-group">
							<input type="text" name="passenger_nationality" value="<?php echo ($this->input->post('passenger_nationality') ? $this->input->post('passenger_nationality') : $order_passenger['passenger_nationality']); ?>" class="form-control" id="passenger_nationality" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_citizen_id" class="control-label">Passenger Citizen Id</label>
						<div class="form-group">
							<input type="text" name="passenger_citizen_id" value="<?php echo ($this->input->post('passenger_citizen_id') ? $this->input->post('passenger_citizen_id') : $order_passenger['passenger_citizen_id']); ?>" class="form-control" id="passenger_citizen_id" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_passport_id" class="control-label">Passenger Passport Id</label>
						<div class="form-group">
							<input type="text" name="passenger_passport_id" value="<?php echo ($this->input->post('passenger_passport_id') ? $this->input->post('passenger_passport_id') : $order_passenger['passenger_passport_id']); ?>" class="form-control" id="passenger_passport_id" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_passport_issue" class="control-label">Passenger Passport Issue</label>
						<div class="form-group">
							<input type="text" name="passenger_passport_issue" value="<?php echo ($this->input->post('passenger_passport_issue') ? $this->input->post('passenger_passport_issue') : $order_passenger['passenger_passport_issue']); ?>" class="form-control" id="passenger_passport_issue" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_passport_expiry" class="control-label">Passenger Passport Expiry</label>
						<div class="form-group">
							<input type="text" name="passenger_passport_expiry" value="<?php echo ($this->input->post('passenger_passport_expiry') ? $this->input->post('passenger_passport_expiry') : $order_passenger['passenger_passport_expiry']); ?>" class="form-control" id="passenger_passport_expiry" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_passport_authority" class="control-label">Passenger Passport Authority</label>
						<div class="form-group">
							<input type="text" name="passenger_passport_authority" value="<?php echo ($this->input->post('passenger_passport_authority') ? $this->input->post('passenger_passport_authority') : $order_passenger['passenger_passport_authority']); ?>" class="form-control" id="passenger_passport_authority" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_visa" class="control-label">Passenger Visa</label>
						<div class="form-group">
							<input type="text" name="passenger_visa" value="<?php echo ($this->input->post('passenger_visa') ? $this->input->post('passenger_visa') : $order_passenger['passenger_visa']); ?>" class="form-control" id="passenger_visa" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="passenger_visa_expiry" class="control-label">Passenger Visa Expiry</label>
						<div class="form-group">
							<input type="text" name="passenger_visa_expiry" value="<?php echo ($this->input->post('passenger_visa_expiry') ? $this->input->post('passenger_visa_expiry') : $order_passenger['passenger_visa_expiry']); ?>" class="form-control" id="passenger_visa_expiry" />
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">
						<i class="fa fa-check"></i> Save
					</button>
				</div>
				<?php echo form_close(); ?>
			</div>
        </div>
    </div>
</div>
