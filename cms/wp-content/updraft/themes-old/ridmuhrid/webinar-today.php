<?php /* Template Name: Template Webinar Hari Ini */ ?>
<head>
<title>Webinar Hari Ini</title>
<meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
<meta name="robots" content="noindex,nofollow">
<style>
body {max-width:90%}

textarea {width:100%;}

</style>
</head>
<body>
<h1 itemprop="headline">Jadwal Webinar Hari Ini</h1>
<?php if(post_password_required()){echo get_the_password_form();}
else {
date_default_timezone_set('Pacific/Auckland');

function tgl_indo($tanggal){
$hari=array (1 =>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$bulan=array (1 =>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$pecahkan=explode('/',$tanggal);
return $hari[(int)$pecahkan[0] ].', '.$pecahkan[2].' '.$bulan[(int)$pecahkan[1]].' '.$pecahkan[3];
}


function tgl($tanggal){
$hari=array (1 =>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$bulan=array (1 =>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$pecahkan=explode('/',$tanggal);
return $pecahkan[2].' '.$bulan[(int)$pecahkan[1]].' '.$pecahkan[3];
}
$tgl=date('Ymd');
if (!is_paged()){?>
<div>
<div class="webinar">
<?php
$webinartoday=new WP_Query(array(
'post_type'=>'webinar',
'posts_per_page'=>15,
'meta_query'=> array(
     'relation'=>'AND',
     'today'=> array('key'=>'tgl','value'=>$tgl,'compare'=>'='),
     'pakaijam'=> array('key'=>'jam','compare'=>'EXISTS'),
     ),
'orderby'=> array('tgl'=>'ASC','pakaijam'=>'ASC'),
));
if($webinartoday->have_posts()){?>
<p>Tanggal Webinar</p>
<textarea id="tgl" rows="1">
<?php echo tgl(date('N/m/j/Y',strtotime($tgl)));?></textarea>
<button onclick="tgl()">Copy text</button>

<p>Daftar Webinar</p>
<textarea id="jadwal" rows="10">
<?php echo "Jadwal Webinar ".tgl_indo(date('N/m/j/Y',strtotime($tgl)))."\n\n";
$i=1;
while($webinartoday->have_posts()){$webinartoday->the_post();?>
<?php echo $i.". ";?>
<?php $berbayar=get_post_meta(get_the_ID(),'biaya',true);
if ($berbayar!=="Gratis"){echo "[".$berbayar."] ";}?><?php the_title();?>, <?php echo get_post_meta(get_the_ID(),'jam',true);?> WIB, Zoom.

<?php $i++; }?>
Rekap jadwal webinar (urut berdasarkan tanggal dan waktu kegiatan) yang pernah dibagikan di kanal ini bisa dilihat di https://muhrid.com/webinar/

Semangat menambah ilmu dan berburu SKP 😁</textarea>
<button onclick="jadwal()">Copy text</button>

<?php }
else {echo "Tidak ada kegiatan webinar hari ini.";} ?>

<p>Klik untuk membuka halaman <a href="https://muhrid.com/webinar/">webinar</a>.</p>

<script>
function jadwal() {
  var copyText = document.getElementById("jadwal");
  copyText.select();
  document.execCommand("Copy");
  alert("Copied the text: " + copyText.value);
}
</script>

<script>
function tgl() {
  var copyText = document.getElementById("tgl");
  copyText.select();
  document.execCommand("Copy");
  alert("Copied the text: " + copyText.value);
}
</script>
<?php }}?>
</body>
</html>