
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
    width: 960px;
    border-collapse: collapse;
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
    </tr>
</table></div><br>
<?php

$id=Yii::app()->request->getParam('id',0);
$model=  Surtugpm::model()->findByPk($id);

?>
<!---->

<div style="margin:auto" align="center">
    
        <b>
        <div align="center"  style="font-size:16pt">SURAT TUGAS </div>
        </b>
        <div align="center">Nomor :&nbsp;B/<?php echo $model->NOSURATPM;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURAT);?><?php //$tgl=date('Y');echo $tgl;?></div>
            
   
               
</div><br><br>

        <td>
            <div align="justify" ><p style="line-height: 1.5">Dekan Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman dengan ini menugaskan:</p></div>
        </td>    
</table>
 <br> 
<?php

$id=Yii::app()->request->getParam('id',0);
$model=  Surtugpm::model()->findByPk($id);

?>
 
<TABLE   
align="center"
cellpadding="20" border="0">
    <style>
     td{
         padding: 3px;
     }
 </style>
<TR>
<TD style=" width:250px;" >Nama</TD>
<TD style=" width:5px;">:</TD>
<TD><?php echo $model->nIP->NAMA2; ?></TD>
</TR>
<TR>
<TD>NIP</TD>
<TD>:</TD>
<TD><?php echo $model->nIP->NIP; ?></TD>
</TR>
<TR>
<TD>Pangkat dan Golongan</TD>
<TD>:</TD>
<TD><?php echo $model->iDPANGGOL->PANGKAT.'&nbsp;/&nbsp;'.$model->iDPANGGOL->GOL; ?></TD>
</TR>
<TR>
<TD>Jabatan</TD>
<TD>:</TD>
<TD><?php echo $model->iDJABATANAKADEMIK->NAMAJABATANAKADEMIK; ?></TD>
</TR>
</TABLE>    
 <br><br>
    <table >
        
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Untuk melaksanakan penyusunan makalah dalam rangka Pengabdian Pada Masyarakat dengan judul&nbsp;<?php echo $model->JUDULPM; ?>&nbsp;.
        
            <div align="justify" >
                <p style="line-height: 1.5">Surat tugas ini dibuat untuk dilaksanakan dengan penuh rasa tanggung jawab.</p></div>
        </td>    
    </table>

 <table ><br><br><br>
     
 <tr>
     <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURAT);?>
            <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            -->
            <div align="left" style="font-size:18px;"><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
            </div></td>  
        
        </tr>
        
            <tr>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
         <td>
             <?php
             $tipe = yii::app()->request->getparam('tipe', 0);
             if ($tipe == 1) {
             $nip = $model->iDJENISSURAT->iDTTD->NIPTTD;
             $nama = $model->iDJENISSURAT->iDTTD->NAMATTD;
             $tglapprove = $model->TANGGALACCDEKANAT;
             $text = $nip."". $nama."". $tglapprove;
             $qr= $text;
             $this->widget('ext.qrcode.QRCodeGenerator',array(
                 'data' => $qr,
                 'subfolderVar' => false,
                 'matrixPointSize' => 5,
                 'displayImage'=>true, // default to true, if set to false display a URL path
                 'errorCorrectionLevel'=>'L', // available parameter is L,M,Q,H
                 'matrixPointSize'=>5, // 1 to 10 only
             ));
             }
             elseif ($tipe==2){
                 echo '<br><br><br><br>';
             }
             ?>
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
                </div></div>
            </td>
         </tr>
 </table>
     
    <!--membuat tombol CETAK pada report html-->
<br><br>
<div style="text-align:left;">
    <button  class="noprint" onclick="window.print()" > 
        <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/print.png" alt="logo" class="img-responsive" ,/>
         CETAK SEKARANG...
    </button>
</div>
<br><br>
  
</div><br>




</body>
</html>