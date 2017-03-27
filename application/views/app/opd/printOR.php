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
                    Contact No.: <?php echo $companyInfo->company_contactNo;?><br>
                   	<?php echo $companyInfo->TIN;?><br><br>
                    <strong>RECEIPT</strong></center><Br><hr>
                     <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                                <table>
                                    <tr>
                                        <td><b>OP No</b>:<?php echo $getOPDPatient->IO_ID?></td>
                                        <td><p style="width: 100px;"></p></td>
                                        <td><b>Receipt No       :</b><?php echo $headerInv->invoice_no?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Patient No:</b><?php echo $patientInfo->patient_no?></td>
                                        <td><p style="width: 100px;"></p></td>
                                        <td><b>Baby Of:</b><?php echo $patientInfo->fathers_name;?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Patient Name     :</b><?php echo $patientInfo->name?></br></td>
                                        <td><p style="width: 100px;"></p></td>
                                        <td><b>Bill Date:</b><?php echo date("M d, Y",strtotime($headerInv->dDate))?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Age:</b><?php echo $patientInfo->age?></td>
                                        <td><p style="width: 100px;"></p></td>
                                        <td><b>Gender:</b><?php echo $patientInfo->gender?></td>
                                    </tr>
                                </table>

                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    <hr>
                    
                    <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                            <center><table>
                                <tr>
                                        <td><b>Consultant Doctor: </b><?php echo $getOPDPatient->con_doctor?></td>
                                </tr>
                            </table></center>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                    <div class="row" style="float: right;">
                        <div class="col-xs-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Charges:</th>
                                        <td><?php echo number_format($headerInv->sub_total,2)?></td>
                                    </tr>
                                    <!--<tr>
                                        <th style="width:50%">Discount:</th>
                                        <td><?php echo number_format($headerInv->discount,2)?></td>
                                    </tr>-->
                                    <tr>
                                        <th>Total Amount:</th>
                                        <td><?php echo number_format($headerInv->total_amount,2)?></td>
                                    </tr>
                              <tr>
                                        <th>Amount Paid:</th>
                                        <td><?php echo number_format($getOR->amountPaid,2)?></td>
                                    </tr>
                                    <!--<tr>
                                        <th>Change:</th>
                                        <td><?php echo number_format($getOR->change,2)?></td>
                                    </tr>-->
                                    <tr style="float: right;">
                                        <td><p style="height: 150px;"></p></td>
                                        <td><p>Signature</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <table>
                        <tr>
                            <td>
                                <p style="font-size: 15px;">**Valid for <strong>10</strong> days <i>or </i><strong>2</strong> visits only.</p>
                            </td>
                        </tr>
                    </table>

                    
                    
                    
                </section>
               
                </div>
                 </div>
       

  
        <!-- END BDAY -->