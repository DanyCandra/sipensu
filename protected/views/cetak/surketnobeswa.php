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

</table ></div><br>
<?php

$id=Yii::app()->request->getParam('id',0);
$model= Surketnobeswa::model()->findByPk($id);

?>


<div style="margin:auto" align="center">

        <b>
        <div align="center"  style="font-size:16pt">&nbsp;SURAT KETERANGAN </div>
        </b>

        <div align="left"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor :&nbsp;B/<?php echo $model->NOSURKETNOBESWA;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATNOBESWA);?><?php //$tgl=date('Y');echo $tgl;?></div>



</div><br><br>



<div >
<table >
     <style>
     td{
         padding: 3px;
     }
 </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5"><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL; ?>&nbsp;Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman menerangkan bahwa:</p></div>
        </td>
</table>

<!--coba-->
<TABLE
align="center"
cellpadding="20">
<TR>
<TD <div style=" width:200px; margin:auto">nama</TD>
<TD <div style=" width:5px; margin:auto">:</TD>
<TD><?php echo $model->nIM->NAMA; ?></TD>
</TR>
<TR>
<TD>NIM</TD>
<TD>:</TD>
<TD><?php echo $model->NIM; ?></TD>
</TR>
<TR>
<TD>tempat dan tgl.lahir</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->TEMPATLAHIR.','. IDDate::getDate($model->nIM->TGLLAHIR);?></div></TD>
</TR>
<TR>
<TD>tahun angkatan</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->TAHUNANGKATAN; ?></TD>
</TR>
<TR>
<TD>program studi</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->iDPRODI->NAMAPRODI.'-'.$model->nIM->iDPRODI->iDJENJANG->NAMAJENJANG; ?></TD>
</TR>
<TR>
<TD>alamat</TD>
<TD>:</TD>
<TD><?php echo $model->nIM->ALAMATASAL;?></TD>
</TR>
</TABLE>
<!--batas-->

<table>
        <td>
            <div align="justify">
                <p style="line-height: 1.5">Yang bersangkutan adalah mahasiswa &nbsp;<?php echo $model->nIM->iDPRODI->iDJENJANG->NAMAJENJANG; ?>&nbsp;Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman yang masih aktif pada semester <!--<font style="text-transform: capitalize;">--><?php  echo $model->iDTASEMESTER->KETSEMESTER ; ?></font> tahun akademik&nbsp;<?php  echo $model->iDTASEMESTER->KETTAHUNAKADEMIK ; ?>&nbsp;dan tidak menerima Beasiswa dari pihak manapun. <br>Surat keterangan ini dibuat untuk keperluan&nbsp;<?php echo $model->KEPERLUANSURKETNOBESWA;?>&nbsp;dan untuk dapat dipergunakan seperlunya.</p>
        </td>
</table>

 <table >
 <tr>
     <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>

            <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURATNOBESWA);?>
           <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            -->
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>

        </tr>

		<tr>
                <th width="50%"></th>
                <td width="50%" align="left">
                    <?php
                    $tipe = yii::app()->request->getparam('tipe', 0);
                    if ($tipe == 1) {
                        $nip = $model->iDJENISSURAT->iDTTD->NIPTTD;
                        $nama = $model->iDJENISSURAT->iDTTD->NAMATTD;
                        $tglapprove = $model->TANGGALACCDEKANAT;
                        $text = $nip . "" . $nama . "" . $tglapprove;
                        $qr = $text;
                        $this->widget('ext.qrcode.QRCodeGenerator', array(
                            'data' => $qr,
                            'subfolderVar' => false,
                            'matrixPointSize' => 5,
                            'displayImage' => true, // default to true, if set to false display a URL path
                            'errorCorrectionLevel' => 'L', // available parameter is L,M,Q,H
                            'matrixPointSize' => 5, // 1 to 10 only
                        ));
                    }
                    elseif ($tipe==2){
                        echo '<br><br><br><br>';
                    }
                    ?></td>
            </tr>

            <tr>
      <th></th>
         <td>
		 <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
            </div>
            </td>
         </tr>

        <br>

    </table><br>
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