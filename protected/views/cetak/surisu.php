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
$model= Surisu::model()->findByPk($id);

?>

<table style="margin:auto" border="0">

    <tr>
        <td>
            <div style=" width:20px;" align="left" >Nomor </div></td>
        <td>: B/<?php echo $model->NOISU; ?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATISU);?><?php //$tgl = date('Y');
            // echo $tgl;
            ?></td>
        <td> <div align="center"> <?php echo IDDate::getDate($model->TGLCETAKSURATISU);?></div></td>
    </tr>


    <tr>
        <td>
            <div align="left" style="font-size:18px;">Hal </div></td>
        <td>: Ijin Survei</td>
        <td></td>

    </tr>
</table><br><br>

<table>
    <tr>
        <td>
            <div align="left" >Yth. <?php echo $model->INSTANSIISU;?></div></td>
    <tr>
        <td>
            <div align="left" ><font style="text-transform: capitalize;"><?php echo $model->ALAMATINSTANSIISU;?></div>
        </td>
    </tr>
    <tr>
        <td>
            <div align="left" >Di&nbsp;<font style="text-transform: capitalize;"><?php echo $model->KOTAINSTANSIISU;?></div>
        </td>
    </tr>
    </tr>
</table>

<br>
<div style="margin:auto" align="left">
    <table>
        <style>
            td{
                padding: 3px;
            }
        </style>
        <td>
            <div align="justify" >

                <p style="line-height: 1.5;">Yang bertanda tangan di bawah ini pimpinan <!--&nbsp;<?php //echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL; ?>&nbsp;-->Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman menerangkan bahwa:</p></div>
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
        foreach($model->groupsurisus as $mahasiswa) {
            $no++;
            echo '
                
            <tr>
                <td><div align="center" ><p style="line-height: 1">'.$no.'</p></div></td>
		<td><div align="left" ><p style="line-height: 1">'.$mahasiswa->nIM->NAMA.'</p></div></td>
		<td><div align="center" ><p style="line-height: 1">'.$mahasiswa->nIM->NIM.'</p></div></td>
                <td><div align="center" ><p style="line-height: 1">'.$mahasiswa->nIM->iDPRODI->NAMAPRODI.'</p></div></td>
               
	</tr>';
        }


        ?>
    </table>


    <?php

    $id=Yii::app()->request->getParam('id',0);
    $model=  Surisu::model()->findByPk($id);

    ?>

    <table>
        <td>
            <div align="justify">
                <p style="line-height: 1.5">Adalah benar-benar mahasiswa Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman, yang diberi tugas menjalankan survei untuk mendukung mata kuliah &nbsp;<b><i><?php echo $model->iDMATAKULIAHISU->NAMAMATAKULIAHISU;?></i></b>&nbsp; pada instansi Saudara.</p>

                <div align="justify">
                    <p style="line-height: 1.5">Untuk maksud tersebut kami mohon bantuan Bapak/Ibu semoga berkenan memberi ijin. Atas kerja sama yang baik kami sampaikan terima kasih.</p></div>
        </td>
    </table>

    <br>
    <table>
        <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <td>

                <div align="left" ></div>
                <!--
                $tgl = date(' d');
                $thn = date('Y');
                $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
                echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
                -->
                <!--<div align="left" >a.n. Ketua Program D3-->
                <div align="left" ><?php echo $model->iDMATAKULIAHISU->iDTTD->JABATANSTRUKTURALTTD; ?></div>
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
            <div align="left" ><?php echo $model->iDMATAKULIAHISU->iDTTD->NAMATTD; ?></div>
                <div align="left" >NIP&nbsp;<?php echo $model->iDMATAKULIAHISU->iDTTD->NIPTTD; ?>
                </div><br><br><br>
                </td>
        </tr>
    </table>
    <table>
        <td>
            <div align="justify" style="font-size:16px;">
                <p style="line-height: 0.5"><b>Tembusan :</b></p>
                <p style="line-height: 0.5">1. BAPENDIK Fakultas Ekonomi dan Bisnis UNSOED</p>

        </td>
    </table>

    <br>

    </table><br>


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

</body></html>