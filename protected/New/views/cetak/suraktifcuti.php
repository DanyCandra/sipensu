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

<div style="margin:auto" align="center"> 
        <b>
        <div align="center"  style="font-size:16pt"><u>SURAT IZIN AKTIF KEMBALI</u></div>
        </b>
        <div align="left"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor :&nbsp;B/<?php echo $model->NOSURATIJINAKTIFCUTI;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATAKTIFCUTI);?><?php //$tgl=date('Y');echo $tgl;?></div>
</div>
<br><br>
 
<div style="margin:auto" align="left">
<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Yang bertanda tangan dibawah ini Dekan Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto, memberikan izin kepada:</p></div>
        </td>    
</table>

<TABLE 
align="center"
cellpadding="20">
<TR>
<TD <div style=" width:200px;" >nama</TD>
<TD <div style=" width:5px;">:</TD>
<TD><?php echo $model->iDIJINCUTI->nIM->NAMA; ?></TD>
</TR>
<TR>
<TD>NIM</TD>
<TD>:</TD>
<TD><?php echo $model->iDIJINCUTI->NIM; ?></TD>
</TR>
<TR>
<TD>program studi</TD>
<TD>:</TD>
<TD><?php echo $model->iDIJINCUTI->nIM->iDPRODI->NAMAPRODI; ?></TD>
</TR>
<TR>
<TD>fakultas</TD>
<TD>:</TD>
<TD><?php echo $model->iDIJINCUTI->nIM->iDPRODI->iDFAKULTAS->FAKULTAS; ?></TD>
</TR>
<TR>
<TD>tahun angkatan</TD>
<TD>:</TD>
<TD><?php echo $model->iDIJINCUTI->nIM->TAHUNANGKATAN; ?></TD>
</TR>
<TR>
<TD>alamat</TD>
<TD>:</TD>
<TD><?php echo $model->iDIJINCUTI->nIM->ALAMATASAL;?></TD>
</TR>
</TABLE>    
<br>
    
<table align="left" border="0" style="border-collapse:collapse" >
        
	<tr>
                <td><div align="justify" >1. </div></td>
		<td><div align="justify" >Untuk aktif kembali mengikuti kegiatan akademik terhitung mulai semester <?php echo $model->SEMESTERAKTIFCUTI; ?>&nbsp;tahun akademik <?php  echo $model->THAKADEMIKAKTIFCUTI ; ?> .
                </div></td>
       </tr>
       <tr>
                <td><div align="justify" >2. <br><br></div></td>
                <td><div align="justify" >Segala persyaratan administrasi dan akademis harus di penuhi (Pembayaran SPP, Pendaftaran Ulang, Pengisian KRS dll).</div></td>
	</tr>
       
</table> 
         
<table>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Surat izin dibuat untuk dapat digunakan sebagaimana mestinya.</p>
        
            
        </td>    
</table> 
    
 <table >
     
 <tr>
     <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            
            <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURATAKTIFCUTI);?>
           <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            --> 
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
            
           
        
        </tr>
        
            <tr>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
         <td><br><br><br><br>  
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
            </div>
            </td>
         </tr>
            
        <br>

</table>
<br>

 <table >
        <td>
            <div align="justify" style="font-size:16px;">
                <p style="line-height: 1.0"><b>Tembusan :</b></p>
                 <p style="line-height: 0.5">1. Yth. Kepala Biro BAAK</p>
                
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