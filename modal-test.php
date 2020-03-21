<?php
  include('includes/config.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php')?>
</head>
<style type="text/css">
 
</style>

<body>  

 
   
        <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <br>
            <form method="post">
         <div class="pull-right">
        <input type="date" name="start">
           <input type="date" name="end">
        <input type="text" name="serach" id="serach_person">
          <input type="submit" name="submit_dt">
                    </div>
                  </form>
            <div class="card-header"><i class="fa fa-table"></i>View Bill</div>

            <div class="card-body">
              <div class="table-responsive">
              <table id="example" border="7" style="border-color: blue;" width="100%" height="40%">
                <thead>
                  <tr>        

                              <!-- <th style="text-align: center">#</th> -->
                              <th style="text-align: center">Bill No.</th>
                              <th style="text-align: center">SL. No.</th>
                              <th style="text-align: center">Date</th>
                              <th style="text-align: center">Party Name</th>
                              <!-- <th style="text-align: center">To</th> -->
                              <!-- <th style="text-align: center">V.Name</th> -->
                              <th style="text-align: center">V.No.</th>
                           <!--    <th style="text-align: center">Starting Date</th>
                              <th style="text-align: center">Return Date</th>
                              <th style="text-align: center">Km In</th>
                              <th style="text-align: center">Time In</th>
                              <th style="text-align: center">Time Out</th>
                              <th style="text-align: center">Ex.Km</th>
                              <th style="text-align: center">Ex.Hr</th>
                              <th style="text-align: center">Fix.Rate</th> -->
                              <th style="text-align: center">Total Amount</th>
                              <th style="text-align: center">Advance</th>
                              <th style="text-align: center">Paid Amount</th>

                              <th style="text-align: center">Due</th>
                              <th style="text-align: center">Mode Of<br>Payment</th>
                              <th style="text-align: center">Action</th>


                            </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php

                    $i = 1;
                         $three = $four =  "";  
if(isset($_POST['submit_dt']))  
          {
$start=$_POST['start'];
$date=date_create($start);
$three= date_format($date,"Y-m-d");
$end=$_POST['end'];
$date2=date_create($end);
$four=date_format($date2,"Y-m-d");
$person_name=$_POST['serach'];
$sql = "SELECT * FROM bill_locationwise WHERE sl_no LIKE '%"."$person_name"."%' AND `startig_date` BETWEEN '$three' AND '$four' ORDER BY `Id` DESC";
          }
          else
          {
                    $sql = "SELECT * FROM bill_locationwise";
          }



                    $result = $conn->query($sql);
 
                    $i = 1;
                      // output data of each row
                      while($v1 = $result->fetch_assoc())
                      {    
                      ?>
                     
           
                              <!-- <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $i;?></td> -->

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['bill_no'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['sl_no'];?></td>
                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['startig_date'];?></td>

                              <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"width="5"><?php echo $v1['party_name'];?></td>

                          <!--     <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['location'];?></td> -->

                         <!--       <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['vehicle_name'];?></td> -->

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['vehicle_no'];?></td>

                               <?php
                                  $origDate = $v1['startig_date'];
                                  $newDate = date("d-m-Y", strtotime($origDate));

                                  $origDate2 = $v1['return_date'];
                                  $newDate2 = date("d-m-Y", strtotime($origDate));
                                   ?>

                             <!--  <td  style="text-align:center;width:80px;background-color: #af1dba;color:#fff;"width="5"><?php echo $newDate;?></td>


                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $newDate2;?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['km_in'];?></td>

                              <td style="text-align:center;width:80px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['time_in'];?></td>
                           

                              <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['time_out'];?></td>

                              <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['extra_km'];?></td>

                              <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['extra_hour'];?></td>
                    <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['fixed_rate_locationwise'];?></td>  -->

                   
                    <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['total_amount'];?></td>

   

                     <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['advance_price'];?></td>


                     <!-- <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['py_amount'];?></td> -->
                      <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['paid_amount'];?></td>

                     <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['due'];?></td>
                     <td style="text-align:center;width:120px;background-color: #af1dba;color:#fff;" width="5"><?php echo $v1['mode_of_payment'];?></td>  

                      <?php
                                                        $totalamount+= $v1['total_amount'];
                                                        $advprice+=$v1['advance_price'];
                                                        $paid_amount+=$v1['paid_amount'];

                                                         $dueamount+=$v1['due'];
                                                       
                                                       
                            ?>          

                                <td  style="text-align:center;width:80px;background-color: black;color:#fff;"class="text-nowrap">

                                  <a  data-toggle="modal" data-id="<?php echo $v1['id']?>"
data-amount="<?php echo $v1['due']?>" data-target="#exampleModal"  class="open-AddBookDialog mr-25" data-toggle="tooltip" data-original-title="Pay"><i class="fa fa-cc-mastercard  text-danger"></i> </a>

                         <a href="location_fixed_bill.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                            </a>

                            <a href="customer_payment_history.php?printid=<?php echo $v1['id']; ?>" target="_blank"><i class="fa fa-folder" aria-hidden="true"></i></a>
                                   
                       <!--  <a href="edit_duty_slip.php?eid=<?php echo $v1['id']?>" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a> -->

                         <a href="delete_fix_bill.php?eid=<?php echo $v1['id']?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close  text-danger"></i> </a>

                         <a href="edit_fix_bill.php?eid=<?php echo $v1['id']?>"  data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-edit"></i> </a> </td>
                     
                        <?php
                        $i++;
                          echo "</tr>";
                        }
                      ?>
                    </tr>
                    </tr>
                </tbody>
                  <tfoot>
                            <tr>
                           
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td></td> -->

                           
                            <td style="text-align:center; font-weight: bolder;">
                            <?php echo $totalamount; ?>
                            </td>
                            <td style="text-align:center; font-weight: bolder;">
                            <?php echo $advprice; ?>
                            </td>
                            <td style="text-align:center; font-weight: bolder;">
                            <?php echo $paid_amount; ?>
                            </td>
                            <td style="text-align:center; font-weight: bolder;">
                            <?php echo $dueamount; ?>
                            </td>

                           
                            <td class="text-nowrap"></td>
                          </tr>
                          </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>      
      </div><!-- End Row-->
     
      <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" >
                      <div class="modal-dialog" role="document" style="width: 700px;">
                        <div class="modal-content" style="width: 700px;">
                          <div class="modal-header" style="width: 700px;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h5 class="modal-title" id="exampleModalLabel1" style="width: 700px;">Pay Pending Balance</h5>
                          </div>                
                          <div class="modal-body" style="width: 700px;">      
                            <form action="ajax_pay_pending_amount_customer.php" method="POST">
                              <div class="form-group">
                                <label for="recipient-name" class="control-label mb-10">Pending Balance:</label>
                                <input type="text" class="form-control" id="pending_bal" readonly  name="pending_bal">
                              </div>    
                              <div class="form-group">
                                <label for="recipient-name" class="control-label mb-10">Paying Amount:</label>
                                <input type="text" class="form-control" name="paying_amount" autocomplete="off">
                              </div>
                               <div class="form-group">
                                <label for="recipient-name" class="control-label mb-10">Mode Of Payment:</label>
                                <select name="mode_of_payment_modal" id="mode_of_payment_modal" style="font-weight: bold;"><option value="choose one" style="font-weight: bold;">CHOOSE ONE</option>
     <option value="QR Code" style="font-weight: bold;">QR Code</option>
   <option value="Card ICIC" style="font-weight: bold;">Card ICIC</option>
 <option value="Card KTP" style="font-weight: bold;">Card KTP</option>
<option value="Cash" style="font-weight: bold;">Cash</option></select>
                              </div>
                                <input type="hidden" name="userID" id="bookId">

 <?php include('includes/makebill_opening_bal_form_modal.php')?>
                             

           

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Submit">
                          </div>

                        </form>
                        </div>
                      </div>
                    </div>


      <div class="clearfix"></div>
      <br>
      <!-- Table End -->
      <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
   
  </div><!--End content-wrapper-->
 
  <!--Start footer-->
  <?php include('includes/footer.php')?>

  <!--End footer-->
 
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
     
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
     
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
      </ul>
     
     </div>    
   </div>  
  <!--end color cwitcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
<?php include('includes/footerjs.php')?>
 <?php include('includes/makebill_open_bal_js.php')?>
 <?php include('includes/update_makebill_open_bal_js.php')?>
 <?php include('includes/makebill_open_bal_modal_js.php')?>



<script>
 $('#rent_type').on('change', function()
       {
        var cheking=$('#rent_type').val();
        if(cheking=='Location')
        {
        $('#select_location').show();
        $('#select_package').hide();

        }
        else
        {
         
        $('#select_package').show();
        $('#select_location').hide();
        }

         });




     $('#select_bill_no').on('change', function()
       {
        var cheking_sai=$('#select_bill_no').val();    
        if(cheking_sai=='select_bill_sai')
        {
        $('#select_bill_wise').show();
        $('#select_wise').hide();

        }
         else
        {    
         
        $('#select_wise').show();
        $('#select_bill_wise').hide();
        }
       

         });



   


   $('#sl_no').on('blur change keyup keydown', function()
       {
       var sl_no=$('#sl_no').val();
           jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_get_vehicle_details.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{sl_no:sl_no},
                        success:function(response)
                        {  
                         // alert(response);
                            var obj1 = JSON.parse(response);

                        var vehicle_no=obj1[0].vehicle_no;
                        var vehicle_name=obj1[0].vehicle_name;
                        // alert(vehicle_name);


                        $('#vehicle_name').val(vehicle_name);
                         $('#vehicle_no').val(vehicle_no);
                      }
                     });    
                     });  
 


 

 
       $('#location').on('blur change keyup keydown', function()
            {
       var location=$('#location').val();
       var vehicle_name=$('#vehicle_name').val();

       // alert(location);
       // alert(vehicle_name);



           jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_get_location_charges.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{location:location,vehicle_name:vehicle_name},
                        success:function(response)
                        {
                          var obj1 = JSON.parse(response);

                        var fixed_rate_locationwise=obj1[0].fixed_rate_locationwise;

                         var extra_km_charges=obj1[0].extra_km_rate;
                           // console.log(extra_km_charges);

                        var extra_hour_charges=obj1[0].extra_hour_rate;
                           // console.log(extra_hour_charges);

                            var toll_gate_charges=obj1[0].toll_gate;
                           console.log(toll_gate_charges);


                       $('#extra_km').val(extra_km_charges);
                       $('#extra_hour').val(extra_hour_charges);            
                       $('#total_amount').val(fixed_rate_locationwise);
                      // $('#total_amount').val(fixed_rate_locationwise);
                      $('#toll_gate').val(toll_gate_charges);


                        // $('#vehicle_name').val(vehicle_name);
                        // $('#vehicle_no').val(vehicle_no);

    // $('#vehicle_no').val(vehicle_no);

                        var total_amount=$('#total_amount').val();

                        var toll_gate=$('#toll_gate').val();

              var tot_to=parseInt(total_amount)+parseInt(toll_gate);
              // console.log(tot_to);

                          $('#total_amount').val(tot_to);
             
                      }    
                     });
                     });



        $('#toll_gate').on('blur click change keyup keydown', function()
            {

                     var location=$('#location').val();
                     var vehicle_name=$('#vehicle_name').val();
           jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_get_location_charges.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{location:location,vehicle_name:vehicle_name},
                        success:function(response)
                        {
                          var obj1 = JSON.parse(response);

                        var fixed_rate_locationwise=obj1[0].fixed_rate_locationwise;

              var total_amount= $('#total_amount').val();
              console.log(total_amount);

              var toll_gate=$('#toll_gate').val();
              console.log(toll_gate);

              // var real_amount=$('#total_amount').val()-$('#toll_gate').val();
              // console.log(real_amount);

              var toll_total=parseInt(fixed_rate_locationwise)+parseInt(toll_gate);
              console.log(toll_total);    



              $('#total_amount').val(toll_total);

               
                      }    
                     });

            });

                       
     


              $('#package').on('blur change keyup keydown', function()
            {
       var package=$('#package').val();
       var vehicle_name=$('#vehicle_name').val();

 
           jQuery.ajax    
                      ({
                        type:"post",    
                        url:"ajax_get_package_price.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{package:package,vehicle_name:vehicle_name},
                        success:function(response)
                        {
                          // alert(response);
                          var obj1 = JSON.parse(response);
                           console.log(obj1);


                        var fixed_rate_package_price=obj1[0].fixed_rate_hourkm;
                           // console.log(fixed_rate_package_price);

                        var extra_km_charges=obj1[0].extra_km_charges;
                           // console.log(extra_km_charges);

                        var extra_hour_charges=obj1[0].extra_hour_charges;
                           // console.log(extra_hour_charges);


                       $('#extra_km').val(extra_km_charges);
                       $('#extra_hour').val(extra_hour_charges);
                       $('#total_amount').val(fixed_rate_package_price);
                       $('#due').val(fixed_rate_package_price);

                        // $('#vehicle_name').val(vehicle_name);
                        // $('#vehicle_no').val(vehicle_no);
                      }
                     });
                     });







$('#toll_gate').on('blur click change keyup keydown', function()
            {

                     var package=$('#package').val();
                     var vehicle_name=$('#vehicle_name').val();
           jQuery.ajax
                      ({
                        type:"post",
                        url:"ajax_get_package_charges.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{package:package,vehicle_name:vehicle_name},
                        success:function(response)
                        {
                          var obj1 = JSON.parse(response);

                        var fixed_rate_hourkm=obj1[0].fixed_rate_hourkm;

              var total_amount= $('#total_amount').val();
              console.log(total_amount);

              var toll_gate=$('#toll_gate').val();
              console.log(toll_gate);

              var toll_total1=parseInt(fixed_rate_hourkm)+parseInt(toll_gate);
              console.log(toll_total1);    



              $('#total_amount').val(toll_total1);


                      }    
                     });

            });


                $('#paid_amount').on('blur change keyup keydown', function()
            {
              var total_amount= $('#total_amount').val();
              var advance_price=$('#advance_price').val();
              var paid_amount=$('#paid_amount').val();

              var dueone=parseInt(advance_price)+parseInt(paid_amount);

              var due=parseInt(total_amount)-parseInt(dueone);
              $('#due').val(due);

            });



 $(".myselect2").select2();


 

        $(document).on("click", ".open-AddBookDialog", function () {
       var myBookId = $(this).data('id');
       var amount = $(this).data('amount');
       $(".modal-body #pending_bal").val( amount );
       $(".modal-body #bookId").val( myBookId );
    });

      $(document).on("click", ".open-AddBookDialog", function () {
       var myBookId = $(this).data('id');
       var amount = $(this).data('amount');
       $(".modal-body #pending_bal").val( amount );
       $(".modal-body #bookId").val( myBookId );
    });


// first form end




// second form


$('#time_in_new').on('blur change keyup keydown', function()
            {
       var package_secondform=$('#package_secondform').val();
       // console.log(package_secondform);

       var vehicle_name_new=$('#vehicle_name_new').val();
       // console.log(vehicle_name_new);

     

               jQuery.ajax    
                      ({
                        type:"post",
                        url:"ajax_get_fixed.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{package_secondform:package_secondform,vehicle_name_new:vehicle_name_new},
                        success:function(response)
                        {
                          // alert(response);
                          var obj1 = JSON.parse(response);
                        // console.log(response);


                        var fixed_km_new=obj1[0].fixed_km;
                        // console.log(fixed_km_new);
                        var fixed_hour_new=obj1[0].fixed_hour;
                        var fixed_rate_package_price=obj1[0].fixed_rate_hourkm;
                        var extra_km_charges=obj1[0].extra_km_charges;
                        var extra_hour_charges=obj1[0].extra_hour_charges;
                       
                       $('#fixed_km_new').val(fixed_km_new);
                       $('#fixed_hour_new').val(fixed_hour_new);
                       $('#extra_km_new').val(extra_km_charges);
                       $('#extra_hour_new').val(extra_hour_charges);
                       $('#total_amount_new').val(fixed_rate_package_price);


                       
                       // var fg=$('#fixed_km_new').val();
                       // console.log(fg);

                        var extra_km_new=$('#extra_km_new').val();

                        var fixed_hour_new_mst=$('#fixed_hour_new').val();


              var km_out_new=$('#km_out_new').val();

              var km_in_new=$('#km_in_new').val();

              var diff_km=parseInt(km_in_new)-parseInt(km_out_new);
              // console.log(diff_km);


              // var diff_km= $('#diff_km').val();


              var fx_km=$('#fixed_km_new').val();
              // console.log(fx_km);



               if(diff_km<fx_km)
                          {
                            var ext_km =0;
                          }
                          else
                          {
                            var ext_km =parseInt(diff_km)-parseInt(fx_km);
                          }

                          $('#ext_km_sec').val(ext_km);


              var vgg1=$('#startig_date_new').val();
              var vgg2=$('#time_out_new').val();
              var vgg3=$('#return_date_new').val();
              var vgg4=$('#time_in_new').val();

              // console.log(vgg1);
              // console.log(vgg2);
              // console.log(vgg3);
              // console.log(vgg4);


               var startdt = new Date($('#startig_date_new').val()+ " " + $('#time_out_new').val());

                            var enddt = new Date($('#return_date_new').val()+ " " + $('#time_in_new').val());

                            var diff = enddt - startdt;
                                var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                                var into_hour=days*24;
                                diff -=  days * (1000 * 60 * 60 * 24);
                                var hours = Math.floor(diff / (1000 * 60 * 60));
                                // console.log(hours);

                               
                                diff -= hours * (1000 * 60 * 60);
                                var mins = Math.floor(diff / (1000 * 60));
                                var seconds = Math.floor(diff / (1000));
                                hours +=into_hour;

                                // console.log(diff);



                          if(hours<fixed_hour_new_mst)
                          {
                            var extra_hour_show =0;
                          }
                          else
                          {
                            var extra_hour_show =parseInt(hours)-parseInt(fixed_hour_new_mst);
                          }
                          $('#ext_hr_sec').val(extra_hour_show);



                         

                       var total_amount_new= $('#total_amount_new').val();
                       // console.log(total_amount_new);

                       var extra_km_new=$('#extra_km_new').val();
                       // console.log(extra_km_new);


                       var ext_km_sec=$('#ext_km_sec').val();
                       // console.log(ext_km_sec);


                       var extra_hour_new=$('#extra_hour_new').val();
                       // console.log(extra_hour_new);


                       var ext_hr_sec=$('#ext_hr_sec').val();
                       // console.log(ext_hr_sec);



                       var ext_km_chrg=parseInt(extra_km_new)*parseInt(ext_km_sec);
                       // console.log(ext_km_chrg);



                       var ext_hr_chrg=parseInt(extra_hour_new)*parseInt(ext_hr_sec);
                       // console.log(ext_hr_chrg);



                       var totl_amt=parseInt(ext_km_chrg)+parseInt(ext_hr_chrg);
                       // console.log(totl_amt);

         
                       $('#total_amount_new').val(totl_amt);
                       $('#due_new').val(totl_amt);



                      }
                     });
                     });




  $('#paid_amount_new').on('blur change keyup keydown', function()
            {
              var total_amount_new= $('#total_amount_new').val();
              var advance_price_new=$('#advance_price_new').val();
              var paid_amount_new=$('#paid_amount_new').val();

              var dueonenew=parseInt(advance_price_new)+parseInt(paid_amount_new);

              var duenew=parseInt(total_amount_new)-parseInt(dueonenew);
              $('#due_new').val(duenew);



            });

































// location update

  $('#time_in_new').on('blur change keyup keydown', function()
            {
       var location_secondform=$('#location_secondform').val();
       console.log(location_secondform);

       var vehicle_name_new=$('#vehicle_name_new').val();
       console.log(vehicle_name_new);

         
   
              jQuery.ajax      
                      ({
                        type:"post",
                        url:"ajax_get_location_fixed.php",
                        dataType:"html", // Data type, HTML, json etc.
                        data:{location_secondform:location_secondform,vehicle_name_new:vehicle_name_new},
                        success:function(response)
                        {
                          // alert(response);
                          var obj1 = JSON.parse(response);
                        // console.log(response);

                        var fixed_km_new=obj1[0].fixed_km;
                        // console.log(fixed_km_new1);
                        var fixed_hour_new=obj1[0].fixed_hr;
                        // console.log(fixed_hour_new1);

                        var fixed_rate_location_price=obj1[0].fixed_rate_locationwise;
                        // console.log(fixed_rate_location_price1);

                        var extra_km_charges=obj1[0].extra_km_rate;
                        // console.log(extra_km_charges1);

                        var extra_hour_charges=obj1[0].extra_hour_rate;
                        // console.log(extra_hour_charges1);
                       
                       $('#fixed_km_new').val(fixed_km_new);
                       $('#fixed_hour_new').val(fixed_hour_new);
                       $('#extra_km_new').val(extra_km_charges);
                       $('#extra_hour_new').val(extra_hour_charges);
                       $('#total_amount_new').val(fixed_rate_location_price);


                       
                       // var fg=$('#fixed_km_new').val();
                       // console.log(fg);

                        var extra_km_new=$('#extra_km_new').val();
              // console.log(extra_km_new);


                        var fixed_hour_new_mst=$('#fixed_hour_new').val();
              // console.log(fixed_hour_new_mst);



              var km_out_new=$('#km_out_new').val();
              console.log(km_out_new);


              var km_in_new=$('#km_in_new').val();
              console.log(km_in_new);


              var diff_km=parseInt(km_in_new)-parseInt(km_out_new);
              console.log(diff_km);


              // var diff_km= $('#diff_km').val();


              var fx_km=$('#fixed_km_new').val();
              console.log(fx_km);



               if(diff_km<fx_km)
                          {
                            var ext_km =0;
                          }
                          else
                          {
                            var ext_km =parseInt(diff_km)-parseInt(fx_km);
                          }

                          $('#ext_km_sec').val(ext_km);


              var vgg1=$('#startig_date_new').val();
              var vgg2=$('#time_out_new').val();
              var vgg3=$('#return_date_new').val();
              var vgg4=$('#time_in_new').val();

              // console.log(vgg1);
              // console.log(vgg2);
              // console.log(vgg3);
              // console.log(vgg4);


               var startdt = new Date($('#startig_date_new').val()+ " " + $('#time_out_new').val());

                            var enddt = new Date($('#return_date_new').val()+ " " + $('#time_in_new').val());

                            var diff = enddt - startdt;
                                var days = Math.floor(diff / (1000 * 60 * 60 * 24));
                                var into_hour=days*24;
                                diff -=  days * (1000 * 60 * 60 * 24);
                                var hours = Math.floor(diff / (1000 * 60 * 60));
                                // console.log(hours);

                               
                                diff -= hours * (1000 * 60 * 60);
                                var mins = Math.floor(diff / (1000 * 60));
                                var seconds = Math.floor(diff / (1000));
                                hours +=into_hour;

                                // console.log(diff);



                          if(hours<fixed_hour_new_mst)
                          {
                            var extra_hour_show =0;
                          }
                          else
                          {
                            var extra_hour_show =parseInt(hours)-parseInt(fixed_hour_new_mst);
                          }
                          $('#ext_hr_sec').val(extra_hour_show);



                         

                       var total_amount_new= $('#total_amount_new').val();
                       console.log(total_amount_new);

                       var extra_km_new=$('#extra_km_new').val();
                       // console.log(extra_km_new);


                       var ext_km_sec=$('#ext_km_sec').val();
                       console.log(ext_km_sec);


                       var extra_hour_new=$('#extra_hour_new').val();
                       // console.log(extra_hour_new);


                       var ext_hr_sec=$('#ext_hr_sec').val();
                       console.log(ext_hr_sec);



                       var ext_km_chrg=parseInt(extra_km_new)*parseInt(ext_km_sec);
                       // console.log(ext_km_chrg);



                       var ext_hr_chrg=parseInt(extra_hour_new)*parseInt(ext_hr_sec);
                       // console.log(ext_hr_chrg);



                       var totl_amt=parseInt(ext_km_chrg)+parseInt(ext_hr_chrg);
                       console.log(totl_amt);

         
                       $('#total_amount_new').val(totl_amt);
                       $('#due_new').val(totl_amt);



                      }
                     });
                     });




  $('#paid_amount_new').on('blur change keyup keydown', function()
            {
              var total_amount_new= $('#total_amount_new').val();
              var advance_price_new=$('#advance_price_new').val();
              var paid_amount_new=$('#paid_amount_new').val();

              var dueonenew=parseInt(advance_price_new)+parseInt(paid_amount_new);

              var duenew=parseInt(total_amount_new)-parseInt(dueonenew);
              $('#due_new').val(duenew);



            });
  // ends location update

   
 


  </script>

</body>
</html>