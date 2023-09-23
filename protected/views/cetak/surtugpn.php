<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->

<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>

    <!--membuat style tombol CETAK html-->
    <style media="print">
        .noprint {
            display: none;
        }
    </style>

</head>
<style type="text/css">
    body {
        font-size: 14pt;
        margin: auto;
        width: 960px;
        font-family: Arial;
    }

    table {
        font-size: 14pt;
        margin: auto;
        width: 960px;
        border-collapse: collapse;
    }
</style>
<table style=" border-bottom: 2px solid black" border="0">
    <td>
        <img src="/images/logo_feb_nsoed.png"/>
    </td>
    <td style=" width:800px;" align="center">
        <b>
            <div align="center" style="font-size:16pt">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</div>
            <div align="center" style="font-size:16pt">RISET, DAN TEKNOLOGI</div>
            <div align="center" style="font-size:14pt">UNIVERSITAS JENDERAL SOEDIRMAN</div>
            <div align="center" style="font-size:14pt">FAKULTAS EKONOMI DAN BISNIS</div>
        </b>
        <div align="center" style="font-size:12pt">Alamat : Jl. Prof.Dr.HR. Boenyamin 708 Purwokerto 53122
            Telp.(0281)637970 Fax.(0281)640268
        </div>
        <div align="center" style="font-size:12pt">Laman: www.feb.unsoed.ac.id Surel: ekonomi@unsoed.ac.id</div>
    </td>
    <td style=" width:100px;">

    </td>

</table></div><br>
<?php

$id = Yii::app()->request->getParam('id', 0);
$model = Surtugpn::model()->findByPk($id);

?>


<div style="margin:auto" align="center">

    <b>
        <div align="center" style="font-size:16pt">SURAT TUGAS</div>
    </b>

    <div align="center">Nomor :&nbsp;B/<?php echo $model->NOSURATPN; ?>
        /<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>
        /<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU; ?>
        /<?php echo IDDate::getYear($model->TGLCETAKSURATPN); ?><?php //$tgl=date('Y');echo $tgl;?></div>


</div><br><br>

<table style=" width:960px;">
    <style>
        td {
            padding: 3px;
        }
    </style>
    <td>
        <div align="justify">
            <p style="line-height: 1.5">Dekan Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman memberikan
                tugas kepada:</p></div>
    </td>
</table>

<table width="100%" align="left" border="1" style="border-collapse:collapse">
    <tr>
        <td>
            <div widht="300px" align="center">No.</div>
        </td>
        <td>
            <div widht="300px" align="center">Nama</div>
        </td>
        <td>
            <div align="center">NIP</div>
        </td>
        <td>
            <div align="center">Pangkat dan Golongan</div>
        </td>
        <td>
            <div align="center">Jabatan</div>
        </td>
    </tr>
    <?php
    $no = 0;

    foreach ($model->groupsurtugpns as $dosen) {
        $no++;
        echo '
            <tr>
                <td><div align="center" ><p style="line-height: 0.2">' . $no . '</p></div></td>
		<td><div align="left" ><p style="line-height: 0.2">' . $dosen->nIP->NAMA2 . '</div></td>
		<td><div align="center" ><p style="line-height: 0.2">' . $dosen->nIP->NIP . '</div></td>
                <td><div align="left" ><p style="line-height: 0.2">' . $dosen->iDPANGGOL->PANGKAT . '/' . $dosen->iDPANGGOL->GOL . '</div></td>
                <td><div align="left" ><p style="line-height: 0.2">' . $dosen->iDJABATANAKADEMIK->NAMAJABATANAKADEMIK . '</div></td>
	</tr>';
    }

    ?>
</table>


<?php

$id = Yii::app()->request->getParam('id', 0);
$model = Surtugpn::model()->findByPk($id);

?>

<table>
    <td>
        <div align="justify">
            <p style="line-height: 1.5">Untuk melaksanakan penelitian dengan judul &nbsp;"<?php echo $model->JUDULPN; ?>
                ".&nbsp; Adapun jangka waktu pengambilan data &nbsp;<?php echo $model->WAKTUDATAPN; ?>. </p>

            <div align="justify">
                <p style="line-height: 1.5">Surat tugas ini dibuat untuk dilaksankan dengan penuh rasa tanggung
                    jawab.</p></div>
    </td>
</table>

<table>
    <tr>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            <div align="left"><?php echo IDDate::getDate($model->TGLCETAKSURATPN); ?></div>
                <!--
                 $tgl = date(' d');
                 $thn = date('Y');
                 $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
                 echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
                 -->
            <div align="left"><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?></div>
        </td>
    </tr>
    <tr>
        <th></th>
        <td>
            <?php
            $tipe=yii::app()->request->getparam('tipe',0);
            if($tipe==1) {
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
            elseif ($tipe==2)
            {
                echo '<br><br><br><br>';
            }
            ?>
            <div align="left"><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                <div align="left">NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
                </div>
            </div>
        </td>
    </tr>
    <br>
</table>
<br>
<br>
<!--membuat tombol CETAK pada report html-->
<br><br>
<div style="text-align:left;">
    <button class="noprint" onclick="window.print()">
        <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/print.png" alt="logo"
             class="img-responsive" ,/>
        CETAK SEKARANG...
    </button>
</div>
</div>
<br><br>