<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<div class="pull-right">
                    <a href="<?php echo site_url('product_stock/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <div class="card-title">
                    <div class="title">Product Stock Listing</div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
						<th>Product Stock Id</th>
						<th>Is Fully Payment</th>
						<th>Is Promotion</th>
						<th>Is Early Bird</th>
						<th>Product Id</th>
						<th>Product Stock Code</th>
						<th>Product Stock Due Date</th>
						<th>Product Stock Depart At</th>
						<th>Product Stock Depart Duration</th>
						<th>Product Stock Arrive At</th>
						<th>Product Stock Arrive Duration</th>
						<th>Product Stock Period</th>
						<th>Product Stock Airline Id</th>
						<th>Product Stock Flight No Go</th>
						<th>Product Stock Flight No Return</th>
						<th>Product Stock Flight Route Go</th>
						<th>Product Stock Flight Route Return</th>
						<th>Product Stock Hotel Id</th>
						<th>Product Stock Price</th>
						<th>Product Stock To Discount</th>
						<th>Product Stock Single Price</th>
						<th>Product Stock Advanced Price</th>
						<th>Product Stock Booked</th>
						<th>Product Stock Total</th>
						<th>Product Stock Min Book</th>
						<th>Is Direct Flight</th>
						<th>Is Active</th>
						<th>Created At</th>
						<th>Product Stock Commission</th>
						<th>Product Stock Add On</th>
						<th>Payment Method</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($product_stock as $p){ ?>
                    <tr>
						<td><?php echo $p['product_stock_id']; ?></td>
						<td><?php echo $p['is_fully_payment']; ?></td>
						<td><?php echo $p['is_promotion']; ?></td>
						<td><?php echo $p['is_early_bird']; ?></td>
						<td><?php echo $p['product_id']; ?></td>
						<td><?php echo $p['product_stock_code']; ?></td>
						<td><?php echo $p['product_stock_due_date']; ?></td>
						<td><?php echo $p['product_stock_depart_at']; ?></td>
						<td><?php echo $p['product_stock_depart_duration']; ?></td>
						<td><?php echo $p['product_stock_arrive_at']; ?></td>
						<td><?php echo $p['product_stock_arrive_duration']; ?></td>
						<td><?php echo $p['product_stock_period']; ?></td>
						<td><?php echo $p['product_stock_airline_id']; ?></td>
						<td><?php echo $p['product_stock_flight_no_go']; ?></td>
						<td><?php echo $p['product_stock_flight_no_return']; ?></td>
						<td><?php echo $p['product_stock_flight_route_go']; ?></td>
						<td><?php echo $p['product_stock_flight_route_return']; ?></td>
						<td><?php echo $p['product_stock_hotel_id']; ?></td>
						<td><?php echo $p['product_stock_price']; ?></td>
						<td><?php echo $p['product_stock_to_discount']; ?></td>
						<td><?php echo $p['product_stock_single_price']; ?></td>
						<td><?php echo $p['product_stock_advanced_price']; ?></td>
						<td><?php echo $p['product_stock_booked']; ?></td>
						<td><?php echo $p['product_stock_total']; ?></td>
						<td><?php echo $p['product_stock_min_book']; ?></td>
						<td><?php echo $p['is_direct_flight']; ?></td>
						<td><?php echo $p['is_active']; ?></td>
						<td><?php echo $p['created_at']; ?></td>
						<td><?php echo $p['product_stock_commission']; ?></td>
						<td><?php echo $p['product_stock_add_on']; ?></td>
						<td><?php echo $p['payment_method']; ?></td>
						<td>
                            <a href="<?php echo site_url('product_stock/edit/'.$p['product_stock_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('product_stock/remove/'.$p['product_stock_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>