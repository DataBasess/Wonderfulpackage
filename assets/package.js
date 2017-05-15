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
                $( "#datepicker" ).datepicker( "refresh" );
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
                            //alert(data.date_refrain);
                            $("#older").val("0");
                            $("#adult").val("0");
                            $("#kid").val("0");

                            $("#total_sum_value").html("0");
                            $("#total_ticket").val("0");
                            $("#show_total_price").html(" ");
                            $("#total_price").val(" ");
                            //$("#datepicker").datepicker( "refresh" );
                            //reset total_price
                            //alert(days);
                            var disableddates = [data.date_refrain];


                            function DisableSpecificDates(date) {
                                var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
                                return [disableddates.indexOf(string) == -1];
                             }
                                $("#datepicker" ).datepicker({                                                       
                                                minDate: 2,
                                                maxDate: new Date(2017, 10, 1),
                                                beforeShowDay: DisableSpecificDates 
                                                
                                });
                        },
                        error:function(){
                            alert('กรุณาเลือกแพ๊คเกจ');
                        }
                    });
                    
                });//#package.change

        });//ready