<!doctype html>

<!--[if ie 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if ie 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !ie]><!-->

<!--<![endif]-->
<!-- begin head -->
<head>

    <!--membuat style tombol cetak html-->
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
        font-family: arial;
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
            <div align="center" style="font-size:16pt">kementerian pendidikan, kebudayaan,</div>
            <div align="center" style="font-size:16pt">riset, dan teknologi</div>
            <div align="center" style="font-size:14pt">universitas jenderal soedirman</div>
            <div align="center" style="font-size:14pt">fakultas ekonomi dan bisnis</div>
        </b>
        <div align="center" style="font-size:12pt">alamat : jl. prof.dr.hr. boenyamin 708 purwokerto 53122 telp.(0281)637970 fax.(0281)640268</div>
        <div align="center" style="font-size:12pt">laman: www.feb.unsoed.ac.id surel: ekonomi@unsoed.ac.id</div>
    </td>
    <td style=" width:100px;" >

    </td>

</table ></div><br>
<?php

$id=yii::app()->request->getparam('id',0);
$m= groupinstansisurtugpn::model()->findbypk($id);
$model=  surtugpn::model()->findbypk($m->iDPN->IDPN);

?>
<!--new-->
<table
        align="center"
        cellpadding="20" border="0">
    <tr>
        <td style=" width:100px; margin:auto">nomor</td>
        <td style=" width:5px; margin:auto">:</td>
        <td>b/<?php echo $model->NOSURATPN;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo iddate::getyear($model->TGLCETAKSURATPN);?><?php //$tgl=date('y');echo $tgl;?></td>
        <td><div style=" width:180px;"align="left" > <?php echo iddate::getdate($model->TGLCETAKSURATPN);?></td>
    </tr>
    <tr>
        <td>hal</td>
        <td>:</td>
        <td>ijin penelitian</td>
        <td></td>
    </tr>
</table>
<br>
<br>
<?php

$id=yii::app()->request->getparam('id',0);
$model= groupinstansisurtugpn::model()->findbypk($id);

?>

<table>
    <tr>
        <td>
            <div align="left" >yth.&nbsp;<?php echo $model->INSTANSIPN;?></div>
        </td>
    </tr>

    <tr>
        <td>
            <div align="left" >di &nbsp;<font style="text-transform: capitalize;"><?php echo $model->KOTAINSTANSIPN;?></div></td>

    </tr>
</table>
<br>
<?php

//$id=yii::app()->request->getparam('id',0);
$model=  surtugpn::model()->findbypk($m->iDPN->IDPN);

?>
<table >
    <style>
        td{
            padding: 3px;
        }
    </style>
    <td>
        <div align="justify" >
            <p style="line-height: 1.5">dekan fakultas ekonomi dan bisnis universitas jenderal soedirman memberikan tugas kepada:</p></div>
    </td>
</table>

<table width="100%" align="left" border="0" style="border-collapse:collapse" >
    <?php
    $no=0;

    foreach($model->groupsurtugpns as $dosen){
        $no++;
        echo '
              <tr>
              <td>nama</td>
              <td align="center">:</td>
              <td><div>'.$dosen->nIP->NAMA2.'</div></td>
              </tr>
              <tr>
              <td>nip</td>
              <td align="center">:</td>
              <td><div>'.$dosen->nIP->NIP.'</div></td>

              </tr>
              <tr>
              <td>pangkat dan golongan</td>
              <td align="center">:</td>
              <td><div>'.$dosen->iDPANGGOL->PANGKAT.'/'.$dosen->iDPANGGOL->GOL.'</div></td>

              </tr>
              <tr>
              <td>jabatan</td>
              <td align="center">:</td>
              <td><div>'.$dosen->iDJABATANAKADEMIK->NAMAJABATANAKADEMIK.'</div></td>

              </tr>
              <tr>
              <td></td>
              <td></td>
              <td></td>
              </tr>';
    }

    ?>
</table>


<?php

//$id=yii::app()->request->getparam('id',0);
$model=  surtugpn::model()->findbypk($m->iDPN->IDPN);

?>

<table style="width:960px;" >
    <td>
        <div align="justify" >
            <p style="line-height: 1.5">untuk mengadakan penelitian dengan judul &nbsp;"<?php echo $model->JUDULPN; ?>".&nbsp; adapun jangka waktu pengambilan data &nbsp;<?php echo $model->WAKTUDATAPN; ?>. untuk pelaksanaan penelitian dan pengumpulan data tersebut, kami mohon saudara berkenan mengeluarkan ijin seperlunya. </p>

            <div align="justify" >
                <p style="line-height: 1.5">atas pemberian ijin dan kerja sama saudara kami ucapkan terima kasih.</p></div>
    </td>
</table>

<table >

    <tr>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <td>
            <div align="left" >
                <?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>

        </td>
        <td>
            <div align="left" >
            <?php
            $tipe=yii::app()->request->getparam('tipe',0);
            if ($tipe==1){
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
            elseif ($tipe==2)
            {
                echo '<br><br><br><br>';
            }
            ?>
            </div>
        </td>
    </tr>
    <tr>
        <td>

        </td>
         <td>
            <div align="left" >
                <?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
            </div>
            <div align="left" >nip&nbsp;
                <?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
            </div>
        </td>
    </tr>
</table>


<!--membuat tombol cetak pada report html-->
<div style="text-align:left;">
    <button  class="noprint" onclick="window.print()" >
        <img src="<?php echo yii::app()->getbaseurl() ?>/metronic/assets/img/print.png" alt="logo" class="img-responsive" ,/>
        cetak sekarang...
    </button>
</div></div>
<br><br>
