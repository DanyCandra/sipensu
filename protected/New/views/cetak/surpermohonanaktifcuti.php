<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    
    <!--membuat style tombol CETAK html-->
    <style media="print">
        .noprint{
            display: none;
        }
    </style>
    
</head>
<style type="text/css">
body{
    font-size: 14pt;
    margin:auto;
    width: 960px;
    font-family: Arial;
}
table{
    font-size: 14pt;
    margin:auto;
    font-family: Arial;
    width: 960px;
}
</style>
<table style=" border-bottom: 2px solid black"  border="0" >
        <td >
            <img src="/images/logo_feb_nsoed.png" /> 
        </td>
        <td style=" width:800px;" align="center" >
            <b>
            <div align="center" style="font-size:16pt">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</div>
			<div align="center" style="font-size:16pt">RISET, DAN TEKNOLOGI</div>
            <div align="center" style="font-size:14pt">UNIVERSITAS JENDERAL SOEDIRMAN</div>
            <div align="center" style="font-size:14pt">FAKULTAS EKONOMI DAN BISNIS</div>
            </b>
            <div align="center" style="font-size:12pt">Alamat : Jl. Prof.Dr.HR. Boenyamin 708 Purwokerto 53122 Telp.(0281)637970 Fax.(0281)640268</div>
            <div align="center" style="font-size:12pt">Laman: www.feb.unsoed.ac.id Surel: ekonomi@unsoed.ac.id</div>
        </td>
        <td style=" width:100px;" >
            
        </td>
   
</table ></div><br>
<?php

$id=Yii::app()->request->getParam('id',0);
$model= Suraktifcuti::model()->findByPk($id);

?>
<br>
<TABLE 
align="center" 
cellpadding="1" border="0">
<TR>
<TD <div style=" width:10px; margin:auto">Perihal</TD>
<TD <div style=" width:5px; margin:auto">:</TD>
<TD>Permohonan Aktif Kembali Cuti Akademik</TD>
<TD> <div align="center"> <?php echo IDDate::getDate($model->TGLSUBMITAKTIFCUTI);?></div></TD>
</TR>
<TR>
<TD>Lampiran</TD>
<TD>:</TD>
<TD>1 bendel</TD>
<TD></TD>
</TR>
</TABLE>
<br>
<br>

   
<table>    
    <tr>
         <td>
         <div align="left">Yth. Dekan</div></td>
         <tr>
         <td>
         <div align="left">Fakultas Ekonomi dan Bisnis UNSOED</div></td></tr>
    </tr>
    <tr>
         <td>
         <div align="left" >Di Purwokerto</div></td>
    </tr>
</table>
<br>


<table>
       <td>
            <div align="justify" >
                <p style="line-height: 1.5">Yang bertanda tangan dibawah ini:</p>
            </div>
       </td>
	<tr>
                <td><div align="justify">nama </div></td>
                <td><div align="justify">:</div>
		<td><div align="justify"><?php echo $model->iDIJINCUTI->nIM->NAMA; ?>
                </div></td>
       </tr>
       <tr>
		<td><div align="justify">NIM</div></td>
                <td><div align="justify">:</div>
                <td><div align="justify" ><?php echo $model->iDIJINCUTI->NIM; ?></div></td>
       </tr>
       <tr>
		<td><div align="justify">program studi</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->iDIJINCUTI->nIM->iDPRODI->NAMAPRODI; ?></div></td>
       </tr>
      <tr>
		<td><div align="justify">fakultas</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->iDIJINCUTI->nIM->iDPRODI->iDFAKULTAS->FAKULTAS; ?></div></td>
       </tr>
      <tr>
		<td><div align="justify">tahun angkatan</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->iDIJINCUTI->nIM->TAHUNANGKATAN; ?></div></td>
       </tr>
        <tr>
		<td><div align="justify">alamat asal</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->iDIJINCUTI->nIM->ALAMATASAL;?></div></td>
       </tr>
 
</table> 
       
<table>
    <td>
        <div align="justify" >
            <p style="line-height: 1.5">Dengan ini mohon perkenan Bapak/Ibu untuk memberikan izin aktif kembali cuti akademik terhitung mulai semester&nbsp;<?php echo $model->SEMESTERAKTIFCUTI; ?>&nbsp;tahun akademik&nbsp;<?php echo $model->THAKADEMIKAKTIFCUTI; ?>.
           Bersama ini saya lampirkan surat keterangan berhenti sementara (Izin Cuti Akademik) dengan Nomor :&nbsp;<?php echo $model->iDIJINCUTI->NOSURATIJINCUTI; ?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDIJINCUTI->iDJENISSURAT->IDKLASIFIKASI; ?>/<?php echo IDDate::getYear($model->iDIJINCUTI->TGLCETAKSURATIJINCUTI);?></p>    
        </div>
    </td>    
</table>

<table >
        <td>
            <div align="justify">
                <p style="line-height: 1.0">Atas perkenan Bapak/Ibu, saya ucapkan terima kasih.</p>
        </td>    
</table>  
<br><br>

<TABLE border="0"
align="center" 
>
<TR>
<td></td>
<TD <div style=" width:480px; margin:auto">Mengetahui/Menyetujui,<br>
Ketua Jurusan/Ketua Program
</TD>
<TD <div style=" width:95px; margin:auto"></TD>

<TD> 
   
    <br>
    Hormat saya,
</TD>
</TR>
<TR>
<TD><br><br><br><br><br></TD>
<TD><br><br><br><br><br></TD>
<TD><br><br><br><br><br></TD>
</TR>
<TR>
<td></td>
<TD><?php echo $model->nIP->NAMA2; ?><br>
NIP&nbsp;<?php echo $model->NIP; ?>
</TD>
<TD></TD>
<TD><?php echo $model->iDIJINCUTI->nIM->NAMA; ?><br>
NIM&nbsp;<?php echo $model->iDIJINCUTI->NIM; ?>  
</TD>
</TR>
</TABLE>
    
    
 <br> 
 <table style="width:960px;" >
        <td><br> <br>
            <div align="justify" style="font-size:16px;">
                <p style="line-height: 1.0"><b>Tembusan :</b></p>
                 <p style="line-height: 0.5">1. Yth Kepala Biro BAAK</p>
                
                 
        </td>    
</table>    
  
<br>
<br>


<!--membuat tombol CETAK pada report html-->
<br><br>
<div style="text-align:left;">
    <button  class="noprint" onclick="window.print()" > 
        <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/print.png" alt="logo" class="img-responsive" ,/>
         CETAK SEKARANG...
    </button>
</div></div>
<br><br>

</html>