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
$model= Surmag::model()->findByPk($id);

?>
<TABLE 
align="center"
cellpadding="20" border="0">
<TR>
<TD <div style=" width:50px; margin:auto">Nomor</TD>
<TD <div style=" width:5px; margin:auto">:</TD>
<TD>B/<?php echo $model->NOSURMAG; ?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATSURMAG);?><?php //$tgl = date('Y');
       // echo $tgl;
    ?></TD>
<TD> <div align="right" ><?php echo IDDate::getDate($model->TGLCETAKSURATSURMAG);?></div></TD>
</TR>
<TR>
<TD>Hal</TD>
<TD>:</TD>
<TD>Permohonan Magang</TD>
<TD></TD>
</TR>
</TABLE>
<br>
<br>
<br>

<table>    
    <tr>
         <td>
             <div align="left" >Yth.&nbsp;<?php echo $model->INSTANSISURMAG;?></div>
         </td>
        
    </tr>
    <tr>
         <td>
         <div align="left" >Di &nbsp;<font style="text-transform: capitalize;"><?php echo $model->KOTAINSTANSISURMAG;?></font></div></td>
         
    </tr>
</table>

<br>
<div style=" margin:auto" align="left">
<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5" align="justify">Dengan hormat,</p></div>
                <p style="line-height: 1.5;" align="justify">yang bertanda tangan di bawah ini &nbsp;<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL; ?>&nbsp; Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman, mengajukan permohonan agar mahasiswa kami tersebut di bawah ini:</p></div>
        </td> 
</table>

<table align="left" border="1" style="border-collapse:collapse" >
    
	<tr>
                <td><div widht="300px" align="center" >No. </div></td>
		<td><div widht="300spx" align="center" >Nama </div></td>
		<td><div align="center" >NIM </div></td>
                <td><div align="center" >Program Studi</div></td>
                
	</tr>
        <?php 
        $no=0;
        foreach($model->groupsurmags as $mahasiswa){
            $no++;
            echo '
            <tr>
                 <td><div align="center" ><p style="line-height: 0.2">'.$no.'</p></div></td>
		<td><div align="left" ><p style="line-height: 1">'.$mahasiswa->nIM->NAMA.'</p></div></td>
		<td><div align="center" ><p style="line-height: 0.2">'.$mahasiswa->nIM->NIM.'</p></div></td>
                <td><div align="center" ><p style="line-height: 1">'.$mahasiswa->nIM->iDPRODI->NAMAPRODI.'</p></div></td>
               
	</tr>';
        }
        
        ?>
</table> 
   
   
    <?php

$id=Yii::app()->request->getParam('id',0);
$model=  Surmag::model()->findByPk($id);

?>

    <table >
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">dapat diterima magang di kantor Bapak/Ibu  guna menambah pengalaman dan wawasan tentang dunia kerja, terhitung mulai magang kerja pada tanggal &nbsp;<?php echo IDDate::getDate($model->TGLMULAISURMAG);?> sampai dengan <?php echo IDDate::getDate($model->TGLAKHIRSURMAG);?>.
        
            <div align="justify">
                <p style="line-height: 1.5">Atas segala kebijaksanaan Bapak/Ibu disampaikan terima kasih.</p></div>
        </td>    
    </table><br>
<!--batas-->
<TABLE align="center" cellpadding="20" border='0'>
<TR>
<TD> <div style=" width:470px; margin:auto"></TD>
<TD> <div style=" width:5px; margin:auto"></TD>    
<TD> <?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?></td>
</TR>

<TR>
<TD> <div style=" width:350px; margin:auto"></TD>
<TD> <div style=" width:5px; margin:auto"></TD>      
<TD><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?></td><br>
NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
</TR>

</TABLE>

<!--endbatas-->
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