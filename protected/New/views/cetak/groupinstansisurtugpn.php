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
$m= Groupinstansisurtugpn::model()->findByPk($id);
$model=  Surtugpn::model()->findByPk($m->iDPN->IDPN);

?>
<!--new-->
<TABLE
align="center"
cellpadding="20" border="0">
<TR>
  <TD <div style=" width:100px; margin:auto">Nomor</TD>
    <TD <div style=" width:5px; margin:auto">:</TD>
      <TD>B/<?php echo $model->NOSURATPN;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATPN);?><?php //$tgl=date('Y');echo $tgl;?></TD>
      <TD><div style=" width:180px;"align="left" > <?php echo IDDate::getDate($model->TGLCETAKSURATPN);?></TD>
      </TR>
      <TR>
        <TD>Hal</TD>
        <TD>:</TD>
        <TD>Ijin Penelitian</TD>
        <TD></TD>
      </TR>
    </TABLE>
    <br>
    <br>
    <?php

    $id=Yii::app()->request->getParam('id',0);
    $model= Groupinstansisurtugpn::model()->findByPk($id);

    ?>

    <table>
      <tr>
        <td>
          <div align="left" >Yth.&nbsp;<?php echo $model->INSTANSIPN;?></div>
        </td>
      </tr>

      <tr>
        <td>
          <div align="left" >Di &nbsp;<font style="text-transform: capitalize;"><?php echo $model->KOTAINSTANSIPN;?></div></td>

          </tr>
        </table>
        <br>
        <?php

        //$id=Yii::app()->request->getParam('id',0);
        $model=  Surtugpn::model()->findByPk($m->iDPN->IDPN);

        ?>
        <table >
          <style>
          td{
            padding: 3px;
          }
          </style>
          <td>
            <div align="justify" >
              <p style="line-height: 1.5">Dekan Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman memberikan tugas kepada:</p></div>
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
              <td>NIP</td>
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

          //$id=Yii::app()->request->getParam('id',0);
          $model=  Surtugpn::model()->findByPk($m->iDPN->IDPN);

          ?>

          <table style="width:960px;" >
            <td>
              <div align="justify" >
                <p style="line-height: 1.5">untuk mengadakan penelitian dengan judul &nbsp;"<?php echo $model->JUDULPN; ?>".&nbsp; Adapun jangka waktu pengambilan data &nbsp;<?php echo $model->WAKTUDATAPN; ?>. Untuk pelaksanaan penelitian dan pengumpulan data tersebut, kami mohon Saudara berkenan mengeluarkan ijin seperlunya. </p>

                <div align="justify" >
                  <p style="line-height: 1.5">Atas pemberian ijin dan kerja sama Saudara kami ucapkan terima kasih.</p></div>
                </td>
              </table>

              <table >

                <tr>
                  <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                  <td>

                    <div align="left" >
                      <!--
                      $tgl = date(' d');
                      $thn = date('Y');
                      $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
                      echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
                    -->
                    <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>

                    </tr>

                    <tr>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <td><br><br><br><br>
                        <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                          <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
                          </div>
                        </td>
                      </tr>
                    </table>


                    <!--membuat tombol CETAK pada report html-->
                    <div style="text-align:left;">
                      <button  class="noprint" onclick="window.print()" >
                        <img src="<?php echo Yii::app()->getBaseUrl() ?>/metronic/assets/img/print.png" alt="logo" class="img-responsive" ,/>
                        CETAK SEKARANG...
                      </button>
                    </div></div>
                    <br><br>
