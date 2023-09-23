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
$model= Surijinpn::model()->findByPk($id);

?>
<div style=" margin:auto" align="left">
<table>
     
    <tr>
    <td>
        <div align="left" >Nomor </div></td>
        <td>: B/<?php echo $model->NOSURATIJINPN; ?>/<?php echo $model->iDJENISSURAT->iDJABATANSTRUKTURAL->IDJABATANSURAT; ?>/<?php echo $model->iDJENISSURAT->IDKLASIFIKASI; ?>/<?php echo IDDate::getYear($model->TGLCETAKSURATIJINPN);?><?php //$tgl = date('Y');
       // echo  $tgl; ?>
        </td>
        <td><div align="right" style="width:550px;">
           <?php echo IDDate::getDate($model->TGLCETAKSURATIJINPN);?>
           <!--
            $tgl = date(' d');
            $thn = date('Y');
            $bulan=array(1=>'Januari',2=>'Februari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'Nopember',12=>'Desember');
            echo $tgl.'&nbsp;'. $bulan[date('n')].'&nbsp;'.  $thn;;
            --> 
            </div></td>
    </tr>
    
    <tr>
         <td>
         <div align="left" >Hal </div></td>
         <td>: Ijin Penelitian</td>
        
    </tr>
</table></div><br><br>

<table>    
    <tr>
         <td>
         <div align="left" >Yth. <?php echo $model->INSTANSIIJINPN;?></div>
         </td>
    </tr>     
    <tr>
         <td>
         <div align="left" >Di&nbsp;<font style="text-transform: capitalize;"><?php echo $model->KOTAINSTANSIIJINPN;?></div></td>
         
    </tr>
</table>
 
<div margin:auto" align="left">
<table>
     <style>
     td{
         padding: 3px;
     }
 </style>
         
</table>


   
   
<?php

$id=Yii::app()->request->getParam('id',0);
$model= Surijinpn::model()->findByPk($id);

?>

<?php 
         $a=$model->nIM->iDPRODI->IDJENJANG;
        if($a==1)
        {
			$x='skripsi';
		}
		elseif($a==3)
		{
			$x='tesis';
		}
		elseif($a==5)
		{
			$x='disertasi';			
		}
		else
		{
			$x='kerja praktik';
		}
?>
    <table >
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Dengan ini kami beritahukan bahwa untuk melengkapi persyaratan tugas akhir mahasiswa Fakultas Ekonomi dan Bisnis Universitas Jenderal Soedirman Purwokerto, mahasiswa tersebut di bawah ini memerlukan data guna menyusun <?php echo $x;?>;</p>
        
            
        </td>    
    </table>
    
<table border="0" >
    <tr>
    <td>
        <div align="left" style=" width:250px;">nama </div></td>
        <td><div style=" width:5px; ">:</div></td>
        <td>
        <div align="left" ><?php echo $model->nIM->NAMA; ?></div>
        </td>
    </tr>
    
    <tr>
         <td>
         <div align="left" >NIM </div></td>
         <td><div style=" width:5px; ">:</div></td>
         <td>
         <div align="left" ><?php echo $model->NIM; ?></div></td>
    </tr>
    
    <tr>
         <td>
         <div align="left" >alamat </div></td>
         <td><div style=" width:5px; ">:</div></td>
         <td>
         <div align="left" ><?php echo $model->nIM->ALAMATASAL; ?></div></td>
    </tr>
    
    <tr>
         <td>
         <div align="left" >program studi atau jurusan </div></td>
         <td><div style=" width:5px; ">:</div></td>
         <td>
         <div align="left" ><?php echo $model->nIM->iDPRODI->NAMAPRODI;//nIM->iDPRODI->iDJENJANG->NAMAJENJANG.'&nbsp;/&nbsp;'.$model-> ?></div></td>
    </tr>
    
     <tr>
         <td>
         <div align="left">semester</div></td>
         <td><div style=" width:5px; ">:</div></td>
         <td>
         <div align="left" ><font style="text-transform: capitalize;"><?php echo $model->iDTASEMESTER->KETSEMESTER; ?> </td>
    </tr>
    <tr>
         <td>
         <div align="left" >tahun akademik</div></td>
         <td><div style=" width:5px; ">:</div></td>
         <td>
         <div align="left"><?php echo $model->iDTASEMESTER->KETTAHUNAKADEMIK; ?> </td>
    </tr>
	<tr>
         <td>
         <div align="left" >judul <?php echo $x;?></div></td>
         <td><div style=" width:5px; ">:</div></td>
         <td>
         <div align="left" ><font style="text-transform: uppercase;"><?php echo $model->JUDULSKRIPSIIJINPN;?></td>
         </div>
    </tr>
    
</table>  

<table >
        <td>
            <div align="justify" >
                <p style="line-height: 1.5">Kami mohon perkenan dan bantuan Saudara agar mahasiswa tersebut diberi ijin untuk melaksanakan penelitian pada perusahaan/instansi yang Saudara pimpin. Semua rahasia perusahaan/instansi akan kami pegang teguh.</p>
            </div>    
           <div align="justify" >
                <p style="line-height: 1.5">Atas kerjasama Saudara disampaikan terima kasih.</p>
            </div>  
        </td>    
    </table>    <br>

<table width="100%" align="center" border="0" style="border-collapse:collapse" >

	<tr>
               <td width="52%"> <!--
                    <div align="left" >Mahasiswa yang bersangkutan,</div><br><br><br><br><br>
                    <div align="left" ><?php //echo $model->nIM->NAMA; ?></div>
                    <div align="left" >NIM&nbsp;<?php //echo $model->nIM->NIM; ?></div>
                </td>
                <td width="2%" cellpadding="20">
                    
                </td>
                <td width="7%" cellpadding="20">
                    
                </td>
                <td width="2%" cellpadding="20">
                    -->
                </td>
                <td>
                    <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->JABATANSTRUKTURALTTD; ?></div><br><br><br><br><br>
                    <div align="left" ><?php echo $model->iDJENISSURAT->iDTTD->NAMATTD; ?></div>
                    <div align="left" >NIP&nbsp;<?php echo $model->iDJENISSURAT->iDTTD->NIPTTD; ?>  </div>    
               </td>
                
	</tr>
         
</table>     

    <table >
        <td><br><br><br><br><br>
            <div align="justify" style="font-size:16px;">
                <b> <p style="line-height: 0.5">Tembusan :</p></b>
                <p style="line-height: 0.5">1. Ketua Jurusan</p>
                <p style="line-height: 0.5">2. Kasubbag Akademik dan Kemahasiswaan</p>
        
            </td>    
    </table>
  
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

</body>
</html>