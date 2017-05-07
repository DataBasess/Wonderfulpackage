<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Product Stock Edit</div>
                </div>
            </div>
            <div class="card-body">
				
				<?php echo form_open('product_stock/edit/'.$product_stock['product_stock_id']); ?>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_fully_payment" value="1" <?php echo ($product_stock['is_fully_payment']==1 ? 'checked="checked"' : ''); ?> id='is_fully_payment' />
								<label for="is_fully_payment" class="control-label">Is Fully Payment</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_promotion" value="1" <?php echo ($product_stock['is_promotion']==1 ? 'checked="checked"' : ''); ?> id='is_promotion' />
								<label for="is_promotion" class="control-label">Is Promotion</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_early_bird" value="1" <?php echo ($product_stock['is_early_bird']==1 ? 'checked="checked"' : ''); ?> id='is_early_bird' />
								<label for="is_early_bird" class="control-label">Is Early Bird</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_id" class="control-label">Product Id</label>
						<div class="form-group">
							<input type="text" name="product_id" value="<?php echo ($this->input->post('product_id') ? $this->input->post('product_id') : $product_stock['product_id']); ?>" class="form-control" id="product_id" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_code" class="control-label">Product Stock Code</label>
						<div class="form-group">
							<input type="text" name="product_stock_code" value="<?php echo ($this->input->post('product_stock_code') ? $this->input->post('product_stock_code') : $product_stock['product_stock_code']); ?>" class="form-control" id="product_stock_code" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_due_date" class="control-label">Product Stock Due Date</label>
						<div class="form-group">
							<input type="text" name="product_stock_due_date" value="<?php echo ($this->input->post('product_stock_due_date') ? $this->input->post('product_stock_due_date') : $product_stock['product_stock_due_date']); ?>" class="form-control" id="product_stock_due_date" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_depart_at" class="control-label">Product Stock Depart At</label>
						<div class="form-group">
							<input type="text" name="product_stock_depart_at" value="<?php echo ($this->input->post('product_stock_depart_at') ? $this->input->post('product_stock_depart_at') : $product_stock['product_stock_depart_at']); ?>" class="form-control" id="product_stock_depart_at" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_depart_duration" class="control-label">Product Stock Depart Duration</label>
						<div class="form-group">
							<input type="text" name="product_stock_depart_duration" value="<?php echo ($this->input->post('product_stock_depart_duration') ? $this->input->post('product_stock_depart_duration') : $product_stock['product_stock_depart_duration']); ?>" class="form-control" id="product_stock_depart_duration" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_arrive_at" class="control-label">Product Stock Arrive At</label>
						<div class="form-group">
							<input type="text" name="product_stock_arrive_at" value="<?php echo ($this->input->post('product_stock_arrive_at') ? $this->input->post('product_stock_arrive_at') : $product_stock['product_stock_arrive_at']); ?>" class="form-control" id="product_stock_arrive_at" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_arrive_duration" class="control-label">Product Stock Arrive Duration</label>
						<div class="form-group">
							<input type="text" name="product_stock_arrive_duration" value="<?php echo ($this->input->post('product_stock_arrive_duration') ? $this->input->post('product_stock_arrive_duration') : $product_stock['product_stock_arrive_duration']); ?>" class="form-control" id="product_stock_arrive_duration" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_period" class="control-label">Product Stock Period</label>
						<div class="form-group">
							<input type="text" name="product_stock_period" value="<?php echo ($this->input->post('product_stock_period') ? $this->input->post('product_stock_period') : $product_stock['product_stock_period']); ?>" class="form-control" id="product_stock_period" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_airline_id" class="control-label">Product Stock Airline Id</label>
						<div class="form-group">
							<input type="text" name="product_stock_airline_id" value="<?php echo ($this->input->post('product_stock_airline_id') ? $this->input->post('product_stock_airline_id') : $product_stock['product_stock_airline_id']); ?>" class="form-control" id="product_stock_airline_id" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_flight_no_go" class="control-label">Product Stock Flight No Go</label>
						<div class="form-group">
							<input type="text" name="product_stock_flight_no_go" value="<?php echo ($this->input->post('product_stock_flight_no_go') ? $this->input->post('product_stock_flight_no_go') : $product_stock['product_stock_flight_no_go']); ?>" class="form-control" id="product_stock_flight_no_go" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_flight_no_return" class="control-label">Product Stock Flight No Return</label>
						<div class="form-group">
							<input type="text" name="product_stock_flight_no_return" value="<?php echo ($this->input->post('product_stock_flight_no_return') ? $this->input->post('product_stock_flight_no_return') : $product_stock['product_stock_flight_no_return']); ?>" class="form-control" id="product_stock_flight_no_return" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_flight_route_go" class="control-label">Product Stock Flight Route Go</label>
						<div class="form-group">
							<input type="text" name="product_stock_flight_route_go" value="<?php echo ($this->input->post('product_stock_flight_route_go') ? $this->input->post('product_stock_flight_route_go') : $product_stock['product_stock_flight_route_go']); ?>" class="form-control" id="product_stock_flight_route_go" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_flight_route_return" class="control-label">Product Stock Flight Route Return</label>
						<div class="form-group">
							<input type="text" name="product_stock_flight_route_return" value="<?php echo ($this->input->post('product_stock_flight_route_return') ? $this->input->post('product_stock_flight_route_return') : $product_stock['product_stock_flight_route_return']); ?>" class="form-control" id="product_stock_flight_route_return" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_hotel_id" class="control-label">Product Stock Hotel Id</label>
						<div class="form-group">
							<input type="text" name="product_stock_hotel_id" value="<?php echo ($this->input->post('product_stock_hotel_id') ? $this->input->post('product_stock_hotel_id') : $product_stock['product_stock_hotel_id']); ?>" class="form-control" id="product_stock_hotel_id" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_price" class="control-label">Product Stock Price</label>
						<div class="form-group">
							<input type="text" name="product_stock_price" value="<?php echo ($this->input->post('product_stock_price') ? $this->input->post('product_stock_price') : $product_stock['product_stock_price']); ?>" class="form-control" id="product_stock_price" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_to_discount" class="control-label">Product Stock To Discount</label>
						<div class="form-group">
							<input type="text" name="product_stock_to_discount" value="<?php echo ($this->input->post('product_stock_to_discount') ? $this->input->post('product_stock_to_discount') : $product_stock['product_stock_to_discount']); ?>" class="form-control" id="product_stock_to_discount" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_single_price" class="control-label">Product Stock Single Price</label>
						<div class="form-group">
							<input type="text" name="product_stock_single_price" value="<?php echo ($this->input->post('product_stock_single_price') ? $this->input->post('product_stock_single_price') : $product_stock['product_stock_single_price']); ?>" class="form-control" id="product_stock_single_price" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_advanced_price" class="control-label">Product Stock Advanced Price</label>
						<div class="form-group">
							<input type="text" name="product_stock_advanced_price" value="<?php echo ($this->input->post('product_stock_advanced_price') ? $this->input->post('product_stock_advanced_price') : $product_stock['product_stock_advanced_price']); ?>" class="form-control" id="product_stock_advanced_price" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_booked" class="control-label">Product Stock Booked</label>
						<div class="form-group">
							<input type="text" name="product_stock_booked" value="<?php echo ($this->input->post('product_stock_booked') ? $this->input->post('product_stock_booked') : $product_stock['product_stock_booked']); ?>" class="form-control" id="product_stock_booked" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_total" class="control-label">Product Stock Total</label>
						<div class="form-group">
							<input type="text" name="product_stock_total" value="<?php echo ($this->input->post('product_stock_total') ? $this->input->post('product_stock_total') : $product_stock['product_stock_total']); ?>" class="form-control" id="product_stock_total" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_min_book" class="control-label">Product Stock Min Book</label>
						<div class="form-group">
							<input type="text" name="product_stock_min_book" value="<?php echo ($this->input->post('product_stock_min_book') ? $this->input->post('product_stock_min_book') : $product_stock['product_stock_min_book']); ?>" class="form-control" id="product_stock_min_book" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="is_direct_flight" class="control-label">Is Direct Flight</label>
						<div class="form-group">
							<input type="text" name="is_direct_flight" value="<?php echo ($this->input->post('is_direct_flight') ? $this->input->post('is_direct_flight') : $product_stock['is_direct_flight']); ?>" class="form-control" id="is_direct_flight" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="is_active" class="control-label">Is Active</label>
						<div class="form-group">
							<input type="text" name="is_active" value="<?php echo ($this->input->post('is_active') ? $this->input->post('is_active') : $product_stock['is_active']); ?>" class="form-control" id="is_active" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $product_stock['created_at']); ?>" class="form-control" id="created_at" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_commission" class="control-label">Product Stock Commission</label>
						<div class="form-group">
							<textarea name="product_stock_commission" class="form-control" id="product_stock_commission"><?php echo ($this->input->post('product_stock_commission') ? $this->input->post('product_stock_commission') : $product_stock['product_stock_commission']); ?></textarea>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_stock_add_on" class="control-label">Product Stock Add On</label>
						<div class="form-group">
							<textarea name="product_stock_add_on" class="form-control" id="product_stock_add_on"><?php echo ($this->input->post('product_stock_add_on') ? $this->input->post('product_stock_add_on') : $product_stock['product_stock_add_on']); ?></textarea>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="payment_method" class="control-label">Payment Method</label>
						<div class="form-group">
							<textarea name="payment_method" class="form-control" id="payment_method"><?php echo ($this->input->post('payment_method') ? $this->input->post('payment_method') : $product_stock['payment_method']); ?></textarea>
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
