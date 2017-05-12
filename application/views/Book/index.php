<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
    -->   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.min.css">
    <script src="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script >
        $(document).ready(function() {



            
        


            $("#myTable").on('input', '.txtCal', function () {
                var calculated_total_sum = 0;
     
                $("#myTable .txtCal").each(function () {
                    var get_textbox_value = $(this).val();
                        if ($.isNumeric(get_textbox_value)) {
                            calculated_total_sum += parseFloat(get_textbox_value);
                        }                  
                });

                    $("#total_sum_value").html(calculated_total_sum);
                    $("#total_ticket").val(calculated_total_sum);
            });//คำนวน จำนวนคน

            $('.txtCal').change(function() {

                var num_older   = $("input[name=older]").val();             //จำนวนคน
                var price_older = $("input[name=price_older_cal]").val();   //จำนวนราคา

                    sum_price_older      = parseFloat(price_older)*(num_older);  //รวม

                var num_adult   = $("input[name=adult]").val();             //จำนวนคน
                var price_adult = $("input[name=price_adult_cal]").val();   //จำนวนราคา

                    sum_price_adult      = parseFloat(price_adult)*(num_adult);  //รวม

                var num_kid   = $("input[name=kid]").val();             //จำนวนคน
                var price_kid = $("input[name=price_kid_cal]").val();   //จำนวนราคา

                    sum_price_kid      = parseFloat(price_kid)*(num_kid);  //รวม


                    sum_price   = parseFloat(sum_price_older)+(sum_price_adult)+(sum_price_kid);


                    //alert("ราคาผู้สูงอายุ ="+sum_price_older+"ราคาผู้ใหญ่ ="+sum_price_adult+"ราคาผู้เด็ก ="+sum_price_kid+"ราคารวม ="+sum_price);
                    $("#show_total_price").html(sum_price);
                    $("#total_price").val(sum_price);




            });//คำนวนจำนวนราคา

            $( document ).on( "click", "#reset", function() {

                $("#price_older").html("0");
                $("#price_adult").html("0");
                $("#price_kid").html("0");
                $("#price_older_cal").val("0");
                $("#price_adult_cal").val("0");
                $("#price_kid_cal").val("0");
                //reset price
                $("#older").val("0");
                $("#adult").val("0");
                $("#kid").val("0");
                //reset num
                $("#total_sum_value").html("0");
                $("#total_ticket").val("0");
                $("#show_total_price").html(" ");
                $("#total_price").val(" ");
                //reset total_price

            });//reset



            $('#package').change(function() {

                    //alert("OK");
                    
                    $.ajax({
                        url: '<?php echo base_url(); ?>test_product/get/'+$('#package').val(),
                        //data: {categories: $('#categories').val()},
                        type: 'POST',
                        dataType:"json",
                        success: function(data) {
                            
                            //$('#id').val(data.id);
                            //$('#product_name').val(data.product_name);
                            $("#price_older").html(data.price_older);
                            $("#price_adult").html(data.price_adult);
                            $("#price_kid").html(data.price_kid);
                            //ค่าที่ใช้โชว์

                            $("#price_older_cal").val(data.price_older);
                            $("#price_adult_cal").val(data.price_adult);
                            $("#price_kid_cal").val(data.price_kid);
                            //ค่าที่ใช้คำนวน
                            //alert("OK");
                            $("#older").val("0");
                            $("#adult").val("0");
                            $("#kid").val("0");

                            $("#total_sum_value").html("0");
                            $("#total_ticket").val("0");
                            $("#show_total_price").html(" ");
                            $("#total_price").val(" ");
                            //reset total_price
                            $("#datepicker" ).datepicker({        
                                                minDate: 2,
                                                beforeShowDay: function(date){
                                                var day = date.getDay();
                                                //var month = date.getMonth();
                                                //var currDate = data.getDate();
                                                //ยังกำหนดวันที่ไม่ได้
                                                if (day ==1 || day ==2) {
                                                    return [false];
                                                }else{
                                                    return [true];
                                                }
                    
                                        }        
                            });
                            


                        },
                        error:function(){
                            alert('กรุณาเลือกแพ๊คเกจ');
                        }
                    });
                    
                    
                });//#package.change


            
            

            



        });//ready
    </script>

    
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    
</head>
<body>
    <!-- container -->
    <div class="container">
        <div class="col-md-3">
            <div class="trip-info">

                <div class="trip-info-box">
                                       
                    <form action="<?php echo base_url(); ?>Book/Reserved" method="POST"  role="form"  id="myTable">

                        <h3>จองแพ็คเกจท่องเที่ยว</h3>
                        
                        <div class="form-group">
                            <label for="">เลือกแพ็คเกจ</label>
                            <select class="form-control form-select ajax-processed" id="package" name="package">
                            <!--<option value="" selected="selected">กรุณาเลือกแพ๊คเกจ</option>
                            -->
                            <?php foreach($test_product as $product){ ?>
                            <option value="<?php echo $product['product_id']; ?>" selected="selected"><?php echo $product['product_name']; ?></option>
                            <?php } ?>
                        </select>                        
                        </div>

                        
                        
                        <div class="form-group">
                            <label for="">วันที่ : </label>
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>                            
                            <input type="text" name="date" id="datepicker" class="form-control" value="" required="required" title="">                            
                            
                        </div>

                        <div class="form-group">
                            <label for="">ผู้สูงอายุ ราคาตั๋ว/ท่าน :<span id="price_older"  ></span> บาท</label>
                            <input type="hidden" name="price_older_cal" id="price_older_cal" value=" " >
                            <input type="number" name="older" id="older" class="txtCal" value="0" min="0" max="" step="1" required="required" title="">
                        </div>
                        <div class="form-group">

                            <label for="">ผู้ใหญ่ ราคาตั๋ว/ท่าน : <span id="price_adult"></span> บาท</label>
                            <input type="hidden" name="price_adult_cal" id="price_adult_cal" value=" " >
                            <input type="number" name="adult" id="adult" class="txtCal" value="0" min="0" max="" step="1" required="required" title="">
                        </div>
                        <div class="form-group">
                            <label for="">เด็ก ราคาตั๋ว/ท่าน : <span id="price_kid"></span> บาท</label>
                            <input type="hidden" name="price_kid_cal" id="price_kid_cal" value=" " >
                            <input type="number" name="kid" id="kid" class="txtCal" value="0" min="0" max="" step="1" required="required" title="">
                        </div>

                        <div class="form-group">
                            <label for="">จำนวนตั๋วรวม : <span id="total_sum_value"></span> </label>
                            <input type="hidden" name="total_ticket" id="total_ticket" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="">ราคารวม : <span id="show_total_price"></span> </label>
                            <input type="hidden" name="total_price" id="total_price" class="form-control" value="">
                        </div>




                        <!--
                        <a href="" class="btn btn-info" id="reset">Reset</a>
                        -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                    
                </div>





            </div>
        </div>

    </div>
    <!-- container -->


    

    
</body>

</html>
