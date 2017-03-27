<style xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    body{
        font-family: Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter;
        font-size:13px;
    }
</style>
<title>Patient RECEIPT</title>
<div class="row">
                 	<div class="col-md-12">

            <!-- Right side column. Contains the navbar and content of the page -->
                    

               	<section class="content invoice">
                	
                     				
                    <center>
                    <?php
											if(!$companyInfo->logo){
												$picture = "sample.jpg";	
											}else{
												$picture = $companyInfo->logo;
											}
										?>
										
                    <font size="+2"><strong><?php echo $companyInfo->company_name;?></strong></font><br>
                    <?php echo $companyInfo->company_address;?><br>
                    Contact No: <?php echo $companyInfo->company_contactNo;?><br>
                   	<?php echo $companyInfo->TIN;?><br>
                    <strong>RECEIPT</strong></center><br><Br>
                     <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <table>
                                <tr>
                                    <td><b>OP No</b>:<?php echo $getOPDPatient->IO_ID?></td>
                                    <td><p style="width: 100px;"></p></td>
                                    <td><b>Bill No:</b><?php echo $headerInv->invoice_no;?></td>
                                </tr>
                                <tr>
                                    <td><b>Patient No:</b><?php echo $patientInfo->patient_no?></td>
                                    <td><p style="width: 100px;"></p></td>
                                    <td><b>Bill Date:</b><?php echo date("M d, Y",strtotime($headerInv->dDate))?></td>
                                </tr>
                                <tr>
                                    <td><b>Patient Name     :</b><?php echo $patientInfo->name?></br></td>
                                    <td><p style="width: 100px;"></p></td>
                                    <td><b>Gender:</b><?php echo $patientInfo->gender?></td>
                                </tr>
                                <tr>
                                    <td style="font-size: 12px;"><b>Consultant Doc:</b><?php echo $getOPDPatient->con_doctor?></td>
                                    <td><p style="width: 100px;"></p></td>
                                    <td><b>Age:</b><?php echo $patientInfo->age?></td>
                                </tr>
                                <tr>
                                    <td><b>Room Type: </b><?php echo $ipdInfo->room_name?></td>
                                    <td><p style="width: 100px;"></p></td>
                                    <td><b>Room / Bed No: </b><?php echo $ipdInfo->bed_name?></td>
                                </tr>
                            </table>

                        </div><!-- /.col -->

                    </div><!-- /.row -->
                    <hr>
                    
                    
                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <table width="100%">
                                <thead style="text-align: left;">
                                    <tr>
                                        <th>Particular Name</th>
                                        <th>Units</th>
                                        <th>Rate</th>
                                        <th>Amount</th>
                                    </tr>                                    
                                </thead>
                                <tbody>
                                <?php foreach($detailsInv as $detailsInv){?>
                                <tr>
                                <td><?php echo $detailsInv->bill_name?></td>
                                <td><?php echo $detailsInv->qty?></td>
                                <td><?php echo $detailsInv->rate?></td>
                                <td><?php echo $detailsInv->amount?></td>
                                </tr>
                                <?php }?>
                                </tbody>
                            </table>                            
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                    
                    <div class="row" style="float: right;">
                        <div class="col-xs-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td><?php echo number_format($headerInv->total_amount,2)?></td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td><?php echo number_format($headerInv->total_amount,2)?></td>
                                    </tr>
                                    <tr>
                                        <th>Amount Paid:</th>
                                        <td><?php echo number_format($getOR->amountPaid,2)?></td>
                                    </tr>
                                    <tr>
                                        <th>Change:</th>
                                        <td><?php echo number_format($getOR->change,2)?></td>
                                    </tr>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
                    
                    
                    
                </section>
               
                </div>
                 </div>
       

  
        <!-- END BDAY -->