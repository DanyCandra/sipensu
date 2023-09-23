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
$model= Surtugmonitoring::model()->findByPk($id);

?>

<div style="margin:auto" align="center">

    <b>
        <div align="center"  style="font-size:16pt">SURAT TUGAS </div>
    </b>

    <div align="center" >Nomor :&nbsp;B/<?php echo $model->NOSURTUGMONITORING;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATMONITORING);?><?php //$tgl=date('Y');echo $tgl;?></div>



</div><br><br>

<div style="margin:auto" align="left">
    <style>
        td{
            padding: 3px;
        }
    </style>

    <table>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5" align="justify">Dekan Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman menugaskan kepada:</p></div>
        </td>
    </table>

    <table style="margin:auto" border="0">

        <tr>

            <td>
                <div style="font-size:18pt;" align="center" ><b><?php echo $model->nIP->NAMA2;?></b></div>
            </td>


        </tr>
    </table>


    <table>
        <style>
            td{
                padding: 3px;
            }
        </style>
        <td>
            <div align="justify">
                <p style="line-height: 1.5" align="justify">untuk melaksanakan monitoring terhadap pelaksanaan Praktik Kerja mahasiswa Program D3 pada :</p></div>
        </td>
    </table>

    <table border="0">

        <tr>
            <td style="width: 250px">
                <div align="left"  >instansi atau perusahaan </div></td>
            <td>:</td>
            <td>
                <div align="left" ><font style="text-transform: capitalize;"><?php echo $model->iDSUBDETAILSURPELPK->iDPK->INSTANSIPK;?></div></td>
        </tr>
        <tr>
            <td>
                <div align="left">alamat</div></td>
            <td>:</td>
            <td>
                <div align="left" ><?php echo $model->iDSUBDETAILSURPELPK->iDPK->ALAMATINSTANSIPK;?></div></td>
        </tr>
        <tr>
            <td>
                <div align="left" >kota </div></td>
            <td>:</td>
            <td>
                <div align="left" ><font style="text-transform: capitalize;"><?php echo $model->iDSUBDETAILSURPELPK->iDPK->KOTAINSTANSIPK;?></div> </td>
        </tr>
        <tr>
            <td>
                <div align="left" >tanggal pelaksanaan</div></td>
            <td>:</td>
            <td>
                <div align="left" ><?php echo IDDate::getDate($model->iDSUBDETAILSURPELPK->TGLMULAISURPELPK);?> &nbsp; s/d &nbsp;<?php echo IDDate::getDate($model->iDSUBDETAILSURPELPK->TGLAKHIRSURPELPK);?></div></td>
        </tr>
    </table><br><br>

    <table align="left" border="1" style="border-collapse:collapse" >

        <tr>
            <td><div widht="300px" align="center" >No. </div></td>
            <td><div widht="300px" align="center" >Nama </div></td>
            <td><div align="center" >NIM </div></td>
            <td><div align="center" >Program Studi</div></td>

        </tr>
        <?php
        $no=0;
        foreach($model->groupsurtugmonitorings as $mahasiswa){
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
        <style>
            td{
                padding: 3px;
            }
        </style>
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Demikian surat tugas ini dibuat untuk dapat dilaksanakan sebaik-baiknya dengan penuh rasa tanggung jawab.</p></div>
        </td>
    </table>

    <table>

        <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <td> <br> <br>


                <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURATMONITORING);?>
                    <div align="left" >Atas Nama Dekan,
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
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <td>
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