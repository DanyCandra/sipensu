<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

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
        <img src="/images/logo_feb_nsoed.png" width="110" height="110"/>
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
    <td style="width:115px;">

    </td>

</table ></div><br>
<?php

$id=Yii::app()->request->getParam('id',0);
$model= Suratketerangan::model()->findByPk($id);

?>


<div style="margin:auto" align="center">

    <div align="center"  style="font-size:16pt">SURAT KETERANGAN</div>

    <div align="center">Nomor :&nbsp;B/<?php echo $model->NOSURKET;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURKET);?><?php //$tgl=date('Y');echo $tgl;?></div>



</div><br><br>



<style>
    td{
        padding: 3px;
    }
</style>
<td>
    <div align="justify" >
        <p style="line-height: 1.5">Yang bertanda tangan dibawah ini,</p></div>
</td>


<TABLE
        align="center"
        cellpadding="20">
    <TR>
        <TD <div style=" width:350px; margin:auto">Nama</TD>
            <TD <div style=" width:5px; margin:auto">:</TD>
                <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->nIP->NAMA2; ?></TD>
    </TR>
    <TR>
        <TD>NIP</TD>
        <TD>:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NIP; ?></TD>
    </TR>
    <TR>
        <TD>Pangkat dan golongan</TD>
        <TD>:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->iDPANGGOL->PANGKAT.'&nbsp;/&nbsp;'.$model->iDJENISSURAT->iDJABATANSTRUKTURAL->iDPANGGOL->GOL; ?></TD>
    </TR>
    <TR>
        <TD>Jabatan</TD>
        <TD>:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL; ?></TD>
    </TR>
    <TR>
        <TD>Perguruan tinggi</TD>
        <TD>:</TD>
        <TD>Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman</TD>
    </TR>
</TABLE>

<td>
    <div align="justify" >
        <p style="line-height: 1.5">dengan ini menerangkan bahwa,</p></div>
</td>

<TABLE
        align="center"
        cellpadding="20">
    <TR>
        <TD <div style=" width:350px; margin:auto">Nama</TD>
            <TD <div style=" width:5px; margin:auto">:</TD>
                <TD><font style="text-transform: Capitalize ;"><?php echo $model->nIM->NAMA; ?></font></TD>
    </TR>
    <TR>
        <TD>NIM</TD>
        <TD>:</TD>
        <TD><?php echo $model->NIM; ?></TD>
    </TR>
    <TR>
        <TD>Tempat,tanggal lahir</TD>
        <TD>:</TD>
        <TD><?php echo $model->nIM->TEMPATLAHIR.',&nbsp;'. IDDate::getDate($model->nIM->TGLLAHIR);?></TD>
    </TR>
    <TR>
    <TR>
        <TD>Alamat</TD>
        <TD>:</TD>
        <TD><?php echo $model->nIM->ALAMATASAL?></TD>
    </TR>
    <TR>
        <TD>Program studi atau jurusan</TD>
        <TD>:</TD>
        <TD><?php echo $model->nIM->iDPRODI->NAMAPRODI;//nIM->iDPRODI->iDJENJANG->NAMAJENJANG.'&nbsp;/&nbsp;'.$model-> ?></TD>
    </TR>
    <TR>
        <TD>Fakultas</TD>
        <TD>:</TD>
        <TD>Ekonomi dan Bisnis</TD>
    </TR>
</TABLE>

<table >
    <td>
        <div align="justify">
            <p style="line-height: 1.5">Adalah benar-benar mahasiswa jurusan <?php echo $model->nIM->iDPRODI->NAMAPRODI; ?>&nbsp;Fakutas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto, <?php echo $model->PERIHAL1;?>
            </p>


            <p style="line-height: 1.5">Surat keterangan ini dibuat sebagai <?php echo $model->PERIHAL2; ?></p>
        </div>
        <p style="line-height: 1.5">Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
    </td>
</table>
<table >

    <tr>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>

            <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURKET);?>
                <!--
                $tgl = date(' d');
                $thn = date('Y');
                $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
                echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
                -->
                <div align="left" style="font-size:18px;"><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>



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
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
                </div>
        </td>
    </tr>

    <br><br>

</table>
<br><br>
<div style="text-align:left;">
    <button  class="noprint" onclick="window.print()" >
        <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/print.png" alt="logo" class="img-responsive" ,/>
        CETAK SEKARANG...
    </button>
</div>
<br><br>

</div><br>


