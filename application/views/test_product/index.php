<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
				<div class="pull-right">
                    <a href="<?php echo site_url('test_product/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <div class="card-title">
                    <div class="title">Test Product Listing</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
						<th>Category</th>
						<th>Date Start</th>
						<th>Date Stop</th>
						<th>Product Id</th>
						<th>Date Refrain</th>
						<th>Product Name</th>
						<th>Price Kid</th>
						<th>Price Adult</th>
						<th>Price Older</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($test_product as $t){ ?>
                    <tr>
						<td><?php echo $t['category']; ?></td>
						<td><?php echo $t['date_start']; ?></td>
						<td><?php echo $t['date_stop']; ?></td>
						<td><?php echo $t['product_id']; ?></td>
						<td><?php echo $t['date_refrain']; ?></td>
						<td><?php echo $t['product_name']; ?></td>
						<td><?php echo $t['price_kid']; ?></td>
						<td><?php echo $t['price_adult']; ?></td>
						<td><?php echo $t['price_older']; ?></td>
						<td>
                            <a href="<?php echo site_url('test_product/edit/'.$t['product_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('test_product/remove/'.$t['product_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>