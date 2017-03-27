<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $reports_title?></title>
</head>
<style>
body{
    font-family: Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter;
}
</style>
<body>

<center>
<font size="+2"><?php echo $companyInfo->company_name;?></font></b><br>
                            <?php echo $companyInfo->company_address;?><br>     
                            <?php echo $companyInfo->company_contactNo;?><br><br>
                            <?php echo $reports_title?>
</center>   
<br /><br />
<div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
        <table>
            <tr>
                <td><b>I/OP No</b>:<?php echo $getOPDPatient->IO_ID?></td>
                <td><p style="width: 100px;"></p></td>
                <td><b>Patient No:</b><?php echo $patientInfo->patient_no?></td>
            </tr>
            <tr>
                <td><b>Patient Name     :</b><?php echo $patientInfo->name?></br></td>
                <td><p style="width: 100px;"></p></td>
                <td><b>Baby Of:</b><?php echo $patientInfo->fathers_name;?></td>
            </tr>
            <tr>
                <td><strong>Gender:     </strong><?php echo strtoupper($patientInfo->gender)?></td>
                <td><p style="width: 100px;"></p></td>
                <td><strong>Contact No.</strong><?php echo strtoupper($patientInfo->mobile_no)?></td>
            </tr>
            <tr>
                <td><b>Age:</b><?php echo $patientInfo->age?></td>
                <td><p style="width: 100px;"></p></td>

            </tr>
        </table>

    </div><!-- /.col -->

</div><!-- /.row -->

<br />

<table cellpadding="5" cellspacing="5" width="100%" style="text-align: left;">
<tr style="border-bottom:1px #999 solid">
	<th >Date</th>
	<th >Service Provided</th>
	<th >Qty</th>
    <th >Notes</th>
	<th >Prepared by</th>
</tr>
<?php foreach($getServices as $getServices){?>
                                           <tr>
                                           		<td><?php echo date("M d, Y h:i:s A",strtotime($getServices->dDateTime))?></td>
                                                <td><?php echo $getServices->particular_name?></td>
                                                <td><?php echo $getServices->qty?></td>
                                                <td><?php echo $getServices->charge_amount?></td>
                                                <td><?php echo $getServices->name?></td>
                                           </tr>
                                           <?php }?>
</table>















</body>
</html>