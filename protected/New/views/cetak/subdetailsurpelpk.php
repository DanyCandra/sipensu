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
$model= Subdetailsurpelpk::model()->findByPk($id);

?>
<TABLE 
align="center"
cellpadding="20" border="0">
<TR>
<TD <div style=" width:50px; margin:auto">Nomor</TD>
<TD <div style=" width:5px; margin:auto">:</TD>
<TD>B/<?php echo $model->NOSURPELPK; ?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATSURPELPK);?></TD>
<TD><div align="center" ><?php echo IDDate::getDate($model->TGLCETAKSURATSURPELPK);?></div></TD>
</TR>
<TR>
<TD>Hal</TD>
<TD>:</TD>
<TD>Pelaksanaan Praktik Kerja</TD>
<TD></TD>
</TR>
</TABLE>
<br>
<br>
<br>


<table>    
    <tr>
         <td>
         <div align="left" >Yth. <font style="text-transform: capitalize;"><?php echo $model->iDPK->TUJUANPK;?> <?php echo $model->iDPK->INSTANSIPK;?></div></td>
         </tr>
         <td>
         <div align="left" ><font style="text-transform: capitalize;"><?php echo $model->iDPK->ALAMATINSTANSIPK;?></div></td></tr>
    </tr>
    <tr>
         <td>
         <div align="left" >Di &nbsp;<font style="text-transform: capitalize;"><?php echo $model->iDPK->KOTAINSTANSIPK;?></div></td>
         
    </tr>
    
</table>

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
                <p style="line-height: 1.5">Dengan hormat,</p></div>
                <p style="line-height: 1.5;" align="justify" >Sesuai dengan persetujuan pelaksanaan Praktik Kerja dari perusahaan/instansi Bapak/Ibu, dengan ini&nbsp;<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL; ?>&nbsp;Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman menugaskan mahasiswa tersebut dibawah ini :</p></div>
        </td> 
</table>

<table align="left" border="1" style="border-collapse:collapse" >
    
	<tr>
                <td><div widht="300px" align="center" >No. </div></td>
		<td><div widht="300px" align="center" >Nama </div></td>
		<td><div align="center" >NIM </div></td>
                <td><div align="center" >Program Studi</div></td>
                
	</tr>
        <?php 
        $no=0;
        foreach($model->groupsurpelpks as $mahasiswa){
            $no++;
            echo '
            <tr>
                 <td><div align="center" ><p style="line-height: 0.2">'.$no.'</p></div></td>
		<td><div align="left" ><p style="line-height: 0.2">'.$mahasiswa->nIM->NAMA.'</p></div></td>
		<td><div align="center" ><p style="line-height: 0.2">'.$mahasiswa->nIM->NIM.'</p></div></td>
                <td><div align="center"><p style="line-height: 0.2">'.$mahasiswa->nIM->iDPRODI->NAMAPRODI.'</p></div></td>
               
	</tr>';
        }
        
        ?>
</table>
   


<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5" align="justify" >untuk melaksanakan Praktik Kerja dari tanggal &nbsp;<?php echo IDDate::getDate($model->TGLMULAISURPELPK);?>&nbsp; sampai dengan &nbsp;&nbsp;<?php echo IDDate::getDate($model->TGLAKHIRSURPELPK);?>.&nbsp;<br>
                Adapun ketentuan Praktik Kerja sebagai berikut;</p></div>
        </td> 
</table> 
    
<table align="left" border="0" style="border-collapse:collapse" >
	<tr>
                <td><div widht="300px" align="center" ></div></td>
		<td><div widht="300px" align="center" ></div></td>
                
	</tr>
        <?php
        $no=0;{
        $no++;
            echo '
        <tr>
                <td><div align="center" >1.</p></div></td>
                <td><div align="justify" >Praktik Kerja ( Magang ) dilakukan dalam jam kerja perusahaan/instansi Bapak/Ibu selama 30 hari kerja secara terus menerus.</div>
		
        </tr>
        <tr>
                <td><div align="center" >2.</p></div></td>
                <td><div align="justify" >Mahasiswa yang bersangkutan betul-betul dimanfaatkan untuk melakukan pekerjaan sehari-hari di perusahaan/instansi Bapak/Ibu.</div>
		</td>
	
        </tr>
        ';
        }
        
        ?>
</table>     
    
    
    <table >
        <td>
            
        
            <div align="justify" >
                <p style="line-height: 1.5">Atas bantuan Bapak/Ibu kami ucapkan terima kasih.</p></div>
        </td>    
    </table>
  
 <table >
     
 <tr>
     <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td> <br> <br>
            
            
            <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            --> 
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
            
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

</body>
</html>