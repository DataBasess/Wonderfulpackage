<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Test Product Edit</div>
                </div>
            </div>
            <div class="card-body">
				<?php echo validation_errors(); ?>
				<?php echo form_open('test_product/edit/'.$test_product['product_id']); ?>
				
				</div>
				<div class="row clearfix">
				</div>
				
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="date_refrain" class="control-label">Date Refrain</label>
						<div class="form-group">
							<select name="date_refrain" class="form-control">
								<option value="">select</option>
								<?php 
								$date_refrain_values = array(
					);

								foreach($date_refrain_values as $value => $display_text)
								{
									$selected = ($value == $test_product['date_refrain']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="product_name" class="control-label">Product Name</label>
						<div class="form-group">
							<input type="text" name="product_name" value="<?php echo ($this->input->post('product_name') ? $this->input->post('product_name') : $test_product['product_name']); ?>" class="form-control" id="product_name" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="price_kid" class="control-label">Price Kid</label>
						<div class="form-group">
							<input type="text" name="price_kid" value="<?php echo ($this->input->post('price_kid') ? $this->input->post('price_kid') : $test_product['price_kid']); ?>" class="form-control" id="price_kid" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="price_adult" class="control-label">Price Adult</label>
						<div class="form-group">
							<input type="text" name="price_adult" value="<?php echo ($this->input->post('price_adult') ? $this->input->post('price_adult') : $test_product['price_adult']); ?>" class="form-control" id="price_adult" />
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<label for="price_older" class="control-label">Price Older</label>
						<div class="form-group">
							<input type="text" name="price_older" value="<?php echo ($this->input->post('price_older') ? $this->input->post('price_older') : $test_product['price_older']); ?>" class="form-control" id="price_older" />
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
