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
$model= Surijincuti::model()->findByPk($id);
?>
<br>
<TABLE 
align="center" 
cellpadding="1" border="0">
<TR>
<TD <div style=" width:10px; margin:auto">Perihal</TD>
<TD <div style=" width:5px; margin:auto">:</TD>
<TD>Permohonan Cuti Akademik</TD>
<TD> <div align="center"> <?php echo IDDate::getDate($model->TGLSUBMITIJINCUTI);?></div></TD>
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
                <p style="line-height: 1.5">Yang bertanda tangan dibawah ini;</p>
            </div>
       </td>
	<tr>
                <td><div align="justify">nama </div></td>
                <td><div align="justify">:</div>
		<td><div align="justify"><?php echo $model->nIM->NAMA; ?>
                </div></td>
       </tr>
       <tr>
		<td><div align="justify">NIM</div></td>
                <td><div align="justify">:</div>
                <td><div align="justify" ><?php echo $model->NIM; ?></div></td>
       </tr>
       <tr>
		<td><div align="justify">program studi</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->nIM->iDPRODI->NAMAPRODI; ?></div></td>
       </tr>
      <tr>
		<td><div align="justify">fakultas</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->nIM->iDPRODI->iDFAKULTAS->FAKULTAS; ?></div></td>
       </tr>
      <tr>
		<td><div align="justify">tahun angkatan</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->nIM->TAHUNANGKATAN; ?></div></td>
       </tr>
        <tr>
		<td><div align="justify">alamat asal</div></td>
                <td><div align="justify">: </div>
                <td><div align="justify"><?php echo $model->nIM->ALAMATASAL;?></div></td>
       </tr>
 
</table> 
       
<table>
        <td>
            <div align="justify">
                <p style="line-height: 1.5">Dengan ini mohon perkenan Bapak untuk memberikan izin cuti akademik selama&nbsp;<?php echo $model->LAMAIJINCUTI; ?>&nbsp;semester dikarenakan&nbsp;<?php  echo $model->KETERANGANIJINCUTI; ?></font>.</p>
            </div> 
            <div align="justify">
                <p style="line-height: 0.5">Kedudukan sebagai mahasiswa sampai saat ini adalah;</p>
            </div>
            
        </td>    
</table> 
<table>
       
          
	<tr>
                <td><div align="justify">1. </div></td>
               
		<td><div align="justify">Sudah/belum dievaluasi 2 tahun pertama *)
                </div></td>
       </tr>
       <tr>
		<td><div align="justify">2.</div></td>
                
                <td><div align="justify">Sudah/belum dievaluasi 2 tahun kedua *)</div></td>
       </tr>
       <tr>
		<td><div align="justify">3.</div></td>
               
                <td><div align="justify">Sudah mencapai kreditsebanyak&nbsp;<?php echo $model->SKSCAPAI; ?>&nbsp;SKS &nbsp;dengan IPK&nbsp;<?php echo $model->IPKCAPAI; ?></div></td>
       </tr>
      
</table>

<table>
        <td>
            <div align="justify">
                <p style="line-height: 1.5">Bersama ini saya lampirkan;</p>
        
        </td>    
</table>    

<table>
	<tr>
                <td><div align="justify">1.</div></td>
               
		<td><div align="justify">Surat tanda pembayaran SPP selama satu tahun akademik
                </div></td>
       </tr>
       <tr>
		<td><div align="justify">2.</div></td>
                
                <td><div align="justify">Kartu Tanda Mahasiswa (KTM)</div></td>
       </tr>
       <tr>
		<td><div align="justify">3.</div></td>
               
                <td><div align="justify">Surat keterangan tidak mempunyai pinjaman buku perpustakaan</div></td>
       </tr>
        <tr>
		<td><div align="justify">4.</div></td>
               
                <td><div align="justify">Surat keterangan Dokter **)</div></td>
       </tr>
        <tr>
		<td><div align="justify">5.</div></td>
               
                <td><div align="justify">Surat persetujuan dari orang tua mahasiswa.</div></td>
       </tr>
      
</table>  

<table>
        <td>
            <div align="justify">
                <p style="line-height: 1.5">Atas perhatian dan kesediaan Bapak/Ibu, saya sampaikan terima kasih.</p>
            </div>
        </td>    
</table>  

<TABLE border="0"
align="center" 
>
<TR>
<td></td>
<TD <div style=" width:480px; margin:auto">Mengetahui/Menyetujui,<br>
Ketua Jurusan/Ketua Program Studi
</TD>
<TD <div style=" width:95px; margin:auto"></TD>

<TD> 
   <!-- <?php
           // $tgl = date(' d');
            //$thn = date('Y');
           // $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
           // echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            ?> 
   -->
   
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
<TD><?php echo $model->nIM->NAMA; ?><br>
NIM&nbsp;<?php echo $model->NIM; ?>  
</TD>
</TR>
</TABLE>

<br>
 
 <table>
        <td>
            <div align="justify" style="font-size:16px;">
                <p style="line-height: 1.0"><b>Keterangan :</b></p>
                 <p style="line-height: 0.5">*)&nbsp;&nbsp;&nbsp;Coret yang tidak perlu</p>
                 <p style="line-height: 0.5">**)&nbsp;Apabila dengan alasan sakit</p>
                 
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

</body>
</html>