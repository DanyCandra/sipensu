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
$model= Surperpk::model()->findByPk($id);

?>
<TABLE 
align="center"
cellpadding="20" border="0">
<TR>
<TD <div style=" width:50px; margin:auto">Nomor</TD>
<TD <div style=" width:5px; margin:auto">:</TD>
<TD>B/<?php echo $model->NOSURATPK; ?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATPK);?><?php //$tgl = date('Y');
       // echo $tgl;
    ?></TD>
<TD><div align="center"><?php echo IDDate::getDate($model->TGLCETAKSURATPK);?></div></TD>
</TR>
<TR>
<TD>Hal</TD>
<TD>:</TD>
<TD>Permohonan Praktik Kerja</TD>
<TD></TD>
</TR>
<TR>
<TD>Lampiran</TD>
<TD>:</TD>
<TD>1</TD>
<TD></TD>
</TR>
</TABLE>
<br>
<br>
<br>

<table>    
    <tr>
         <td>
         <div align="left" >Yth. <font style="text-transform: capitalize;"><?php echo $model->TUJUANPK;?> <?php echo $model->INSTANSIPK;?></div></td>
         </tr>
         <td>
         <div align="left" ><font style="text-transform: capitalize;"><?php echo $model->ALAMATINSTANSIPK;?></div></td></tr>
    </tr>
    <tr>
         <td>
         <div align="left" >Di&nbsp;<font style="text-transform: capitalize;"><?php echo $model->KOTAINSTANSIPK;?></div></td>
         
    </tr>
   
</table>

<br>

<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Dengan hormat,</p></div>
                <p style="line-height: 1.5; " align="justify">Kami beri tahukan bahwa untuk melengkapi persyaratan studi akhir mahasiswa Program D3 Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman memerlukan Praktik Kerja. Untuk keperluan tersebut kami mohon perkenan dan bantuan Bapak/Ibu agar mahasiswa dibawah ini:</p></div>
        </td> 
</table>

<table align="center" border="1" style="border-collapse:collapse" >
    
	<tr>
                <td><div widht="300px" align="center" >No. </div></td>
		<td><div widht="300px" align="center" >Nama </div></td>
		<td><div align="center" >NIM </div></td>
                <td><div align="center" >Program Studi</div></td>
                
	</tr>
        <?php 
        $no=0;
        foreach($model->groupsurperpks as $mahasiswa){
            $no++;
            echo '
            <tr>
                 <td><div align="center" ><p style="line-height: 0.2">'.$no.'</p></div></td>
		<td><div align="left" ><p style="line-height: 0.2">'.$mahasiswa->nIM->NAMA.'</p></div></td>
		<td><div align="center" ><p style="line-height: 0.2">'.$mahasiswa->nIM->NIM.'</p></div></td>
                <td><div align="center" ><p style="line-height: 0.2">'.$mahasiswa->nIM->iDPRODI->NAMAPRODI.'</p></div></td>
               
	</tr>';
        }
        
        ?>
</table> 
   


    <table >
        <td>
            <div align="justify" >
                <p style="line-height: 1.5" align="justify">diberi ijin melaksanakan Praktik Kerja pada perusahaan/instansi yang Saudara pimpin. Untuk kepastian pelaksanaan Praktik Kerja kami mohon mengisi formulir persetujuan pelaksanaan Praktik Kerja (formulir kami sediakan).<br>
                Harapan kami semoga segala bimbingan dan petunjuk yang diberikan kepada mahasiswa tersebut dapat berguna untuk ilmu pengetahuan dan semua rahasia perusahaan/instansi akan kami jaga dengan baik.</p></div>
        
            <div align="justify" >
                <p style="line-height: 1.5">Atas kerja sama Saudara, kami mengucapkan terima kasih</p></div>
        </td>    
    </table>

 <table>
     
 <tr>
     <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            
            
            <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            -->  
            <div align="left"><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
            </div>
           
        
        </tr>
        
            <tr>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
         <td><br><br><br><br>  
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
            </div>
            </td>
         </tr>
            
        <br>

    </table><br>
    
  
</div><br>


<!--membuat tombol CETAK pada report html-->
<br><br>
<div style="text-align:left;">
    <button  class="noprint" onclick="window.print()" > 
        <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/print.png" alt="logo" class="img-responsive" ,/>
         CETAK SEKARANG...
    </button>
</div>
<br><br>

</html>