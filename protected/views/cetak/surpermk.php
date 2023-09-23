        <!-- <!DOCTYPE html>

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
        $model= Surpermk::model()->findByPk($id);

        ?>


        <div style="margin:auto" align="center">
                    <b>
                <div align="center"  style="font-size:14pt"><u>SURAT PERNYATAAN MASIH KULIAH </u></div>
                </b>
                <div align="center">B/<?php echo $model->NOSURATMK;?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->iDKLASIFIKASI->IDKLASIFIKASIBARU;?>/<?php echo IDDate::getYear($model->TGLCETAKSURATMK);?><?php //$tgl=date('Y');echo $tgl;?></div>
                    

                    
        </div><br><br>
        


            <style>
            td{
                padding: 3px;
            }
        </style>
                <td>
                    <div align="justify" >
                        <p style="line-height: 1.5">Yang bertanda tangan dibawah ini:</p></div>
                </td>    


        <TABLE 
        align="center"
        cellpadding="20">
        <TR>
        <TD <div style=" width:350px; margin:auto">nama</TD>
        <TD <div style=" width:5px; margin:auto">:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->nIP->NAMA2; ?></TD>
        </TR>
        <TR>
        <TD>NIP</TD>
        <TD>:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NIP; ?></TD>
        </TR>
        <TR>
        <TD>pangkat dan golongan</TD>
        <TD>:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->iDPANGGOL->PANGKAT.'&nbsp;/&nbsp;'.$model->iDJENISSURAT->iDJABATANSTRUKTURAL->iDPANGGOL->GOL; ?></TD>
        </TR>
        <TR>
        <TD>jabatan</TD>
        <TD>:</TD>
        <TD><?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->NAMAJABATANSTRUKTURAL; ?></TD>
        </TR>
        <TR>
        <TD>perguruan tinggi</TD>
        <TD>:</TD>
        <TD>Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman</TD>
        </TR>
        </TABLE>

                <td>
                    <div align="justify" >
                        <p style="line-height: 1.5">dengan ini menyatakan sesungguhnya:</p></div>
                </td>    

        <TABLE
        align="center"
        cellpadding="20">
        <TR>
        <TD <div style=" width:350px; margin:auto">nama</TD>
        <TD <div style=" width:5px; margin:auto">:</TD>
        <TD><font style="text-transform: Capitalize ;"><?php echo $model->nIM->NAMA; ?></font></TD>
        </TR>
        <TR>
        <TD></TD>
        <TD></TD>
        <TD>adalah benar-benar mahasiswa Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman</TD>
        </TR>
        <TR>
        <TD>NIM</TD>
        <TD>:</TD>
        <TD><?php echo $model->NIM; ?></TD>
        </TR>
        <TR>
        <TD>program studi atau jurusan</TD>
        <TD>:</TD>
        <TD><?php echo $model->nIM->iDPRODI->NAMAPRODI;//nIM->iDPRODI->iDJENJANG->NAMAJENJANG.'&nbsp;/&nbsp;'.$model-> ?></TD>
        </TR>
        <TR>
        <TD>tahun akademik </TD>
        <TD>:</TD>
        <TD><?php echo $model->iDTASEMESTER->KETTAHUNAKADEMIK.' - '.$model->iDTASEMESTER->KETSEMESTER?></TD>
        </TR>
        </TABLE>

        <table >
                <td>
                    <div align="justify" >
                        <p style="line-height: 1.5">dan bahwa wali anak tersebut adalah:</p>
                
                    
                </td>    
        </table>

        <TABLE 
        align="center"
        cellpadding="20">
        <TR>
        <TD <div style=" width:350px; margin:auto">nama</TD>
        <TD <div style=" width:5px; margin:auto">:</TD>
        <TD><?php echo $model->NAMAWALIMK; ?></TD>
        </TR>
        <TR>
        <TD>NIP/NRP/No.Pensiunan</TD>
        <TD>:</TD>
        <TD><?php echo $model->NIPWALIMK; ?></TD>
        </TR>
        <TR>
        <TD>pangkat dan golongan</TD>
        <TD>:</TD>
        <TD><?php echo $model->PANGGOL; ?></TD>
        </TR>
        <TR>
        <TD>instansi</TD>
        <TD>:</TD>
        <TD><?php echo $model->INSTANSIWALIMK; ?></TD>
        </TR>
        <TR>
        <TD>keterangan</TD>
        <TD>:</TD>
        <TD>Mahasiswa tersebut di atas benar benar menjadi tanggungan</TD>
        </TR>
        <TR>
        <TD></TD>
        <TD></TD>
        <TD>orang tua, belum menikah dan tidak mendapat beasiswa/ikatan dinas.</TD>
        </TR>
        </TABLE>        

        <table >
                <td>
                    <div align="justify">
                        <p style="line-height: 1.5">Surat pernyataan ini dibuat dengan sesungguhnya dan apabila di kemudian hari ternyata surat pernyataan ini tidak benar yang mengakibatkan kerugian negara, maka saya bersedia menanggung kerugian tersebut.</p>
                
                    
                </td>    
            </table>    
            
        <table >
        <tr>
            <th width="50%"></th>
                <td width="50%">
                    <div align="left" ><?php echo IDDate::getDate($model->TGLCETAKSURATMK);?></div>
                    <!--
                    $tgl = date(' d');
                    $thn = date('Y');
                    $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
                    echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
                    -->
                    <div align="left" style="font-size:18px;"><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?>
                    </div>
                </td>
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
                <th width="50%"></th>
                <td width="50%">
                    <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?>
                        <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>
                    </div>
                    </td>
                </tr>
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
 -->

