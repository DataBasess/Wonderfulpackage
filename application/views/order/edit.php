<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Order Edit</div>
                </div>
            </div>
            <div class="card-body">
				
				<?php echo form_open('order/edit/'.$order['order_id']); ?>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_incentive" value="1" <?php echo ($order['is_incentive']==1 ? 'checked="checked"' : ''); ?> id='is_incentive' />
								<label for="is_incentive" class="control-label">Is Incentive</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_window_seat" value="1" <?php echo ($order['is_window_seat']==1 ? 'checked="checked"' : ''); ?> id='is_window_seat' />
								<label for="is_window_seat" class="control-label">Is Window Seat</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_pathway_seat" value="1" <?php echo ($order['is_pathway_seat']==1 ? 'checked="checked"' : ''); ?> id='is_pathway_seat' />
								<label for="is_pathway_seat" class="control-label">Is Pathway Seat</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="in_process" value="1" <?php echo ($order['in_process']==1 ? 'checked="checked"' : ''); ?> id='in_process' />
								<label for="in_process" class="control-label">In Process</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_pending" value="1" <?php echo ($order['is_pending']==1 ? 'checked="checked"' : ''); ?> id='is_pending' />
								<label for="is_pending" class="control-label">Is Pending</label>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<div class="checkbox3 checkbox-round checkbox-check checkbox-light">
								<input type="checkbox" name="is_read" value="1" <?php echo ($order['is_read']==1 ? 'checked="checked"' : ''); ?> id='is_read' />
								<label for="is_read" class="control-label">Is Read</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_id" class="control-label">Product Id</label>
						<div class="form-group">
							<input type="text" name="product_id" value="<?php echo ($this->input->post('product_id') ? $this->input->post('product_id') : $order['product_id']); ?>" class="form-control" id="product_id" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="stock_id" class="control-label">Stock Id</label>
						<div class="form-group">
							<input type="text" name="stock_id" value="<?php echo ($this->input->post('stock_id') ? $this->input->post('stock_id') : $order['stock_id']); ?>" class="form-control" id="stock_id" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="number_of_adults" class="control-label">Number Of Adults</label>
						<div class="form-group">
							<input type="text" name="number_of_adults" value="<?php echo ($this->input->post('number_of_adults') ? $this->input->post('number_of_adults') : $order['number_of_adults']); ?>" class="form-control" id="number_of_adults" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="number_of_children" class="control-label">Number Of Children</label>
						<div class="form-group">
							<input type="text" name="number_of_children" value="<?php echo ($this->input->post('number_of_children') ? $this->input->post('number_of_children') : $order['number_of_children']); ?>" class="form-control" id="number_of_children" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="number_of_singleroom" class="control-label">Number Of Singleroom</label>
						<div class="form-group">
							<input type="text" name="number_of_singleroom" value="<?php echo ($this->input->post('number_of_singleroom') ? $this->input->post('number_of_singleroom') : $order['number_of_singleroom']); ?>" class="form-control" id="number_of_singleroom" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="number_of_doubleroom" class="control-label">Number Of Doubleroom</label>
						<div class="form-group">
							<input type="text" name="number_of_doubleroom" value="<?php echo ($this->input->post('number_of_doubleroom') ? $this->input->post('number_of_doubleroom') : $order['number_of_doubleroom']); ?>" class="form-control" id="number_of_doubleroom" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="number_of_tripleroom" class="control-label">Number Of Tripleroom</label>
						<div class="form-group">
							<input type="text" name="number_of_tripleroom" value="<?php echo ($this->input->post('number_of_tripleroom') ? $this->input->post('number_of_tripleroom') : $order['number_of_tripleroom']); ?>" class="form-control" id="number_of_tripleroom" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="is_seafood_allergy" class="control-label">Is Seafood Allergy</label>
						<div class="form-group">
							<input type="text" name="is_seafood_allergy" value="<?php echo ($this->input->post('is_seafood_allergy') ? $this->input->post('is_seafood_allergy') : $order['is_seafood_allergy']); ?>" class="form-control" id="is_seafood_allergy" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="is_vegetarian" class="control-label">Is Vegetarian</label>
						<div class="form-group">
							<input type="text" name="is_vegetarian" value="<?php echo ($this->input->post('is_vegetarian') ? $this->input->post('is_vegetarian') : $order['is_vegetarian']); ?>" class="form-control" id="is_vegetarian" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="is_islam" class="control-label">Is Islam</label>
						<div class="form-group">
							<input type="text" name="is_islam" value="<?php echo ($this->input->post('is_islam') ? $this->input->post('is_islam') : $order['is_islam']); ?>" class="form-control" id="is_islam" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="order_price" class="control-label">Order Price</label>
						<div class="form-group">
							<input type="text" name="order_price" value="<?php echo ($this->input->post('order_price') ? $this->input->post('order_price') : $order['order_price']); ?>" class="form-control" id="order_price" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="insurance_type" class="control-label">Insurance Type</label>
						<div class="form-group">
							<input type="text" name="insurance_type" value="<?php echo ($this->input->post('insurance_type') ? $this->input->post('insurance_type') : $order['insurance_type']); ?>" class="form-control" id="insurance_type" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="insurance_amount" class="control-label">Insurance Amount</label>
						<div class="form-group">
							<input type="text" name="insurance_amount" value="<?php echo ($this->input->post('insurance_amount') ? $this->input->post('insurance_amount') : $order['insurance_amount']); ?>" class="form-control" id="insurance_amount" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="insurance_start" class="control-label">Insurance Start</label>
						<div class="form-group">
							<input type="text" name="insurance_start" value="<?php echo ($this->input->post('insurance_start') ? $this->input->post('insurance_start') : $order['insurance_start']); ?>" class="form-control" id="insurance_start" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="insurance_stop" class="control-label">Insurance Stop</label>
						<div class="form-group">
							<input type="text" name="insurance_stop" value="<?php echo ($this->input->post('insurance_stop') ? $this->input->post('insurance_stop') : $order['insurance_stop']); ?>" class="form-control" id="insurance_stop" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="insurance_country" class="control-label">Insurance Country</label>
						<div class="form-group">
							<input type="text" name="insurance_country" value="<?php echo ($this->input->post('insurance_country') ? $this->input->post('insurance_country') : $order['insurance_country']); ?>" class="form-control" id="insurance_country" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="addon_price" class="control-label">Addon Price</label>
						<div class="form-group">
							<input type="text" name="addon_price" value="<?php echo ($this->input->post('addon_price') ? $this->input->post('addon_price') : $order['addon_price']); ?>" class="form-control" id="addon_price" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="discount" class="control-label">Discount</label>
						<div class="form-group">
							<input type="text" name="discount" value="<?php echo ($this->input->post('discount') ? $this->input->post('discount') : $order['discount']); ?>" class="form-control" id="discount" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="surcharge" class="control-label">Surcharge</label>
						<div class="form-group">
							<input type="text" name="surcharge" value="<?php echo ($this->input->post('surcharge') ? $this->input->post('surcharge') : $order['surcharge']); ?>" class="form-control" id="surcharge" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="grand_total" class="control-label">Grand Total</label>
						<div class="form-group">
							<input type="text" name="grand_total" value="<?php echo ($this->input->post('grand_total') ? $this->input->post('grand_total') : $order['grand_total']); ?>" class="form-control" id="grand_total" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="paid_amount" class="control-label">Paid Amount</label>
						<div class="form-group">
							<input type="text" name="paid_amount" value="<?php echo ($this->input->post('paid_amount') ? $this->input->post('paid_amount') : $order['paid_amount']); ?>" class="form-control" id="paid_amount" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="member_id" class="control-label">Member Id</label>
						<div class="form-group">
							<input type="text" name="member_id" value="<?php echo ($this->input->post('member_id') ? $this->input->post('member_id') : $order['member_id']); ?>" class="form-control" id="member_id" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="created_at" class="control-label">Created At</label>
						<div class="form-group">
							<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $order['created_at']); ?>" class="form-control" id="created_at" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="order_status" class="control-label">Order Status</label>
						<div class="form-group">
							<input type="text" name="order_status" value="<?php echo ($this->input->post('order_status') ? $this->input->post('order_status') : $order['order_status']); ?>" class="form-control" id="order_status" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="modified_at" class="control-label">Modified At</label>
						<div class="form-group">
							<input type="text" name="modified_at" value="<?php echo ($this->input->post('modified_at') ? $this->input->post('modified_at') : $order['modified_at']); ?>" class="form-control" id="modified_at" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="handled_by" class="control-label">Handled By</label>
						<div class="form-group">
							<input type="text" name="handled_by" value="<?php echo ($this->input->post('handled_by') ? $this->input->post('handled_by') : $order['handled_by']); ?>" class="form-control" id="handled_by" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="aff_id" class="control-label">Aff Id</label>
						<div class="form-group">
							<input type="text" name="aff_id" value="<?php echo ($this->input->post('aff_id') ? $this->input->post('aff_id') : $order['aff_id']); ?>" class="form-control" id="aff_id" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="order_add_on" class="control-label">Order Add On</label>
						<div class="form-group">
							<textarea name="order_add_on" class="form-control" id="order_add_on"><?php echo ($this->input->post('order_add_on') ? $this->input->post('order_add_on') : $order['order_add_on']); ?></textarea>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="other_detail" class="control-label">Other Detail</label>
						<div class="form-group">
							<textarea name="other_detail" class="form-control" id="other_detail"><?php echo ($this->input->post('other_detail') ? $this->input->post('other_detail') : $order['other_detail']); ?></textarea>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="order_memo" class="control-label">Order Memo</label>
						<div class="form-group">
							<textarea name="order_memo" class="form-control" id="order_memo"><?php echo ($this->input->post('order_memo') ? $this->input->post('order_memo') : $order['order_memo']); ?></textarea>
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
