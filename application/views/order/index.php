<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<div class="pull-right">
                    <a href="<?php echo site_url('order/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <div class="card-title">
                    <div class="title">Orders Listing</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
						<th>Order Id</th>
						<th>Is Incentive</th>
						<th>Is Window Seat</th>
						<th>Is Pathway Seat</th>
						<th>In Process</th>
						<th>Is Pending</th>
						<th>Is Read</th>
						<th>Product Id</th>
						<th>Stock Id</th>
						<th>Number Of Adults</th>
						<th>Number Of Children</th>
						<th>Number Of Singleroom</th>
						<th>Number Of Doubleroom</th>
						<th>Number Of Tripleroom</th>
						<th>Is Seafood Allergy</th>
						<th>Is Vegetarian</th>
						<th>Is Islam</th>
						<th>Order Price</th>
						<th>Insurance Type</th>
						<th>Insurance Amount</th>
						<th>Insurance Start</th>
						<th>Insurance Stop</th>
						<th>Insurance Country</th>
						<th>Addon Price</th>
						<th>Discount</th>
						<th>Surcharge</th>
						<th>Grand Total</th>
						<th>Paid Amount</th>
						<th>Member Id</th>
						<th>Created At</th>
						<th>Order Status</th>
						<th>Modified At</th>
						<th>Handled By</th>
						<th>Aff Id</th>
						<th>Order Add On</th>
						<th>Other Detail</th>
						<th>Order Memo</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($orders as $o){ ?>
                    <tr>
						<td><?php echo $o['order_id']; ?></td>
						<td><?php echo $o['is_incentive']; ?></td>
						<td><?php echo $o['is_window_seat']; ?></td>
						<td><?php echo $o['is_pathway_seat']; ?></td>
						<td><?php echo $o['in_process']; ?></td>
						<td><?php echo $o['is_pending']; ?></td>
						<td><?php echo $o['is_read']; ?></td>
						<td><?php echo $o['product_id']; ?></td>
						<td><?php echo $o['stock_id']; ?></td>
						<td><?php echo $o['number_of_adults']; ?></td>
						<td><?php echo $o['number_of_children']; ?></td>
						<td><?php echo $o['number_of_singleroom']; ?></td>
						<td><?php echo $o['number_of_doubleroom']; ?></td>
						<td><?php echo $o['number_of_tripleroom']; ?></td>
						<td><?php echo $o['is_seafood_allergy']; ?></td>
						<td><?php echo $o['is_vegetarian']; ?></td>
						<td><?php echo $o['is_islam']; ?></td>
						<td><?php echo $o['order_price']; ?></td>
						<td><?php echo $o['insurance_type']; ?></td>
						<td><?php echo $o['insurance_amount']; ?></td>
						<td><?php echo $o['insurance_start']; ?></td>
						<td><?php echo $o['insurance_stop']; ?></td>
						<td><?php echo $o['insurance_country']; ?></td>
						<td><?php echo $o['addon_price']; ?></td>
						<td><?php echo $o['discount']; ?></td>
						<td><?php echo $o['surcharge']; ?></td>
						<td><?php echo $o['grand_total']; ?></td>
						<td><?php echo $o['paid_amount']; ?></td>
						<td><?php echo $o['member_id']; ?></td>
						<td><?php echo $o['created_at']; ?></td>
						<td><?php echo $o['order_status']; ?></td>
						<td><?php echo $o['modified_at']; ?></td>
						<td><?php echo $o['handled_by']; ?></td>
						<td><?php echo $o['aff_id']; ?></td>
						<td><?php echo $o['order_add_on']; ?></td>
						<td><?php echo $o['other_detail']; ?></td>
						<td><?php echo $o['order_memo']; ?></td>
						<td>
                            <a href="<?php echo site_url('order/edit/'.$o['order_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('order/remove/'.$o['order_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>