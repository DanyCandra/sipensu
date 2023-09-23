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


<div style="margin:auto" align="center"> 
        <b>
        <div align="center"  style="font-size:16pt"><u>SURAT IZIN CUTI AKADEMIK </u></div>
        </b>
        <div align="center"  >&nbsp;Nomor :&nbsp;B/<?php echo $model->NOSURATIJINCUTI;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATIJINCUTI);?><?php //$tgl=date('Y');echo $tgl;?></div>
</div>
<br>
<br>
 
<div >
<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Memenuhi permohonan cuti akademik yang di ajukan oleh;</p></div>
        </td>    
</table>

<TABLE 
align="center"
cellpadding="20">
<TR>
<TD <div style=" width:200px;" >nama</TD>
<TD <div style=" width:5px;">:</TD>
<TD><?php echo $model->nIM->NAMA; ?></TD>
</TR>
<TR>
<TD>NIM</TD>
<TD>:</TD>
<TD><?php echo $model->NIM; ?></TD>
</TR>
<TR>
<TD>program studi</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->iDPRODI->NAMAPRODI; ?></TD>
</TR>
<TR>
<TD>fakultas</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->iDPRODI->iDFAKULTAS->FAKULTAS; ?></TD>
</TR>
<TR>
<TD>tahun angkatan</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->TAHUNANGKATAN; ?></TD>
</TR>
<TR>
<TD>alamat</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->ALAMATASAL;?></TD>
</TR>
</TABLE>    
  
<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Dengan ketentuan sebagai berikut;</p></div>
        </td>    
</table>
    
<TABLE 
align="center" border="0" 
cellpadding="20">
<TR>
<TD <div style=" width:10px;">1.</TD>
<TD <div style=" width:500px;" align="justify" >Cuti akademik diberikan selama&nbsp;<?php echo $model->LAMAIJINCUTI; ?>&nbsp;semester,&nbsp;pada semester&nbsp;<?php  echo $model->SEMESTERCUTI ; ?>&nbsp;tahun akademik&nbsp;<?php  echo $model->THAKADEMIKCUTI;?>&nbsp;dengan ketentuan;</TD>

</TR>
<TR>
<TD></TD>
<TD>a. Sudah/belum dievaluasi 2 tahun pertama</TD>
</TR>
<TR>
<TD></TD>
<TD>b. Sudah/belum dievaluasi 2 tahun kedua</TD>

</TR>
<TR>
<TD></TD>
<TD>c. Jumlah kredit yang dicapai sampai saat mengajukan permohonan cuti akademik&nbsp;<?php echo $model->SKSCAPAI; ?>&nbsp;SKS &nbsp;dengan IPK&nbsp;<?php echo $model->IPKCAPAI; ?></TD>

</TR>
<TR>
<TD>2.<br><br><br></TD>
<TD><div align="justify" >Terhitung sejak diberikan izin cuti akademik dibebaskan dari kewajiban membayar SPP, SPP yang telah dibayar sebelumnya mengajukan permohonan cuti akademik tidak dapat diminta kembali dan tidak dapat di alihkan ke pembayaran SPP semester berikutnya.</div></TD>

</TR>
<TR>
<TD>3.<br><br><br></TD>
<TD><div align="justify" >Satu bulan sebelum berakhirnya izin cuti akademik diwajibkan mengajukan permohonan aktif kembali kepada Dekan Fakultas/Ketua Program Studi yang bersangkutan, apabila ketentuan tidak dipenuhi maka mahasiswa yang bersangkutan akan dikenai sangsi sebagai tercantum pada peraturan cuti akademik.</div></TD>
</TR>
</TABLE>       
            
<table >
        <td>
            <div align="justify">
                <p style="line-height: 1.5">Surat izin cuti akademik ini dibuat untuk dapat digunakan sebagaimana mestinya.</p>
        
            
        </td>    
</table> 
    
 <table >
     
 <tr>
     <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            
            <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURATIJINCUTI);?>
           <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            --> 
            <div align="left"><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
            
           
        
        </tr>
        
            <tr>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
         <td><br><br><br><br><br>  
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
            </div>
            </td>
         </tr>
            
        <br>

    </table><br>
 <table>
        <td>
            <div align="justify" style="font-size:16px;">
                <p style="line-height: 1.0"><b>Tembusan :</b></p>
                 <p style="line-height: 0.5">1. Yth. Kepala Biro BAAK</p>
                 <p style="line-height: 0.5">2. Yth. Kepala Program Studi/Ketua Jurusan</p>
                 <p style="line-height: 0.5">3. Yth. Kasubag Akademik dan Kemahasiswaan Fakultas Ekonomi dan Bisnis</p>
                
        
            
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