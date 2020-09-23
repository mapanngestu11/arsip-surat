<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arsip Surat</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <!-- Tambahan -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <!-- end tambahan -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard">
      <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
        <div class="col-md-12 nav-wrapper">
          <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
            </div>
            <a href="index.php" class="navbar-brand"> 
             <b>Arsip Surat</b>
           </a>


           <ul class="nav navbar-nav navbar-right user-nav">
            <li class="user-name"><span>Akihiko Avaron</span></li>
            <li class="dropdown avatar-dropdown">
             <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
             <ul class="dropdown-menu user-dropdown">
               <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
               <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
               <li role="separator" class="divider"></li>
               <li class="more">
                <ul>
                  <li><a href=""><span class="fa fa-cogs"></span></a></li>
                  <li><a href=""><span class="fa fa-lock"></span></a></li>
                  <li><a href=""><span class="fa fa-power-off "></span></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li ><a href="#" class="opener"><span class="fa fa-coffee"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end: Header -->

  <div class="container-fluid mimin-wrapper">


    <?php include 'page/side_menu.php';?>

        <!-- start: Content -->
        <div id="content">
         <div class="panel box-shadow-none content-header">
          <div class="panel-body">
            <div class="col-md-12">
              <h3 class="animated fadeInLeft">Data Surat Masuk</h3>
              <p class="animated fadeInDown">
                Data Surat Masuk <span class="fa-angle-right fa"></span> Lihat Semua
              </p>
            </div>
          </div>
        </div>
        <!-- start:Left Menu -->
    <?php 
    if(isset($_GET['alert'])){
      if($_GET['alert']=='gagal_ekstensi'){
        ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
          Ekstensi Tidak Diperbolehkan
        </div>                
        <?php
      }elseif($_GET['alert']=="gagal_ukuran"){
        ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
         File Gagal Terkirim !
        </div>                
        <?php
      }elseif($_GET['alert']=="berhasil"){
        ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Success</h4>
          Berhasil Disimpan
        </div>                
        <?php
      }
    }
    ?>
        <div class="col-md-12 top-20 padding-0">
          <div class="col-md-12">
            <div class="panel">

              <div class="panel-heading"><h3>Data Tables</h3></div>

              <div class="panel-body">
                <button data-toggle="modal" data-target="#exampleModalLabel" class="btn btn-primary btn-round" ><i class="fa fa-plus-square"></i> Tambah</button>
                    <button data-toggle="modal" data-target="#uploadfile" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Upload Template</button>  
                   <!-- Modal Buton -->
                   <div id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                  <div role="document" class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">Tambah Data</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                      </div>
                      <div class="modal-body">
                        
                        <form action="crud/add_surat_masuk.php" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                        <label>Nomor Surat</label>
                        <input type="text" name="nomor" class="form-control" placeholder="no." required>
                        <input type="text" name="jenis" value="surat-masuk" hidden>
                        </div>
                        <div class="form-group">
                        <label>Tanggal Terima</label>
                        <input type="date" name="tgl_terima" class="form-control" required>
                        </div>
                          <div class="form-group">
                        <label>Asal</label>
                        <input type="text" name="asal" class="form-control" placeholder="asal" required>
                        </div>
                           <div class="form-group">
                        <label>Pengirim</label>
                        <input type="text" name="pengirim" class="form-control" placeholder="pengirim" required>
                        </div>
                           <div class="form-group">
                        <label>penerima</label>
                        <input type="text" name="penerima" class="form-control" placeholder="penerima" required>
                        </div>
                          <div class="form-group">
                        <label>Perihal</label>
                        <input type="text" name="perihal" class="form-control" placeholder="hal." minlength="8"  required>
                        </div>
                          <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="keterangan" required>
                        </div>
                          <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="">--PILIH--</option>
                            <option value="penting">Penting</option>
                            <option value="biasa">Biasa</option>
                        </select>
                        </div>
                        <div class="form-group">
                          <label>File Foto</label>
                        <input type="file" name="foto">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif |docx | pdf</p>
                        </div>
                       
                        
                       
                      </div>
                          
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                <!-- akhir -->

                <!-- modal upload -->
                       <div id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="uploadfile" aria-hidden="true" class="modal fade text-left">
                  <div role="document" class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 id="uploadfile" class="modal-title">Upload Data</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>

                      </div>
                      <div class="modal-body">
                        <p>Masukan File (format : .xls)</p>
                        <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
                        <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile"> 
 
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                             <input name="upload" class="btn btn-primary" type="submit" value="Import">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  </div>
                  <!-- akhir modal -->
                <div class="responsive-table">
                  <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Tanggal</th>  
                    <th>Asal</th>
                    <th>Perihal</th>
                    <th>Keterangan</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM surat where jenis ='surat-masuk'");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      <tr>
                     <td><?php echo $no++ ;?></td>
                      <td><?php echo $d['nomor']; ?></td>
                      <td><?php echo $d['tgl_terima']; ?></td>
                      <td><?php echo $d['asal']; ?></td>
                       <td><?php echo $d['perihal']; ?></td>
                        <td><?php echo $d['keterangan']; ?></td>
                        
                          <td align="center"><a href="#" data-id="<?php echo $d['id_surat']; ?>"class="btn btn-round btn-detail btn-warning btn-sm"data-toggle="modal" data-target="#detailPesan"><i class="fa fa-pencil"></i> Edit</a></td>
                        <td align="center"><a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ?')){ location.href='crud/hapus_surat_masuk.php?id_surat=<?php echo $d['id_surat']; ?>' }" class="btn btn-round btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
                      <?php 
                  }
                  ?>
                      </tr> 

                    </tbody>
                   
                </table>
                   
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <!-- end: content -->
    <!-- Modal start -->
<div class="modal fade" id="detailPesan" tabindex="-1" role="dialog" aria-labelledby="Tambah Barang" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="Tambah Barang">Detail Surat Masuk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
          <form action="crud/update-user.php" method="post" >
          <div class="modal-body" id="bodyDetail">

          </div>

          <div class="modal-footer">
          <button type="submit" class="btn btn-warning btn-round"><i class="fa fa-check"></i> Ubah Data</button>
          </form> 
          </div>     
    </div>

    </div>
 </div>
    <!-- Modal End -->

    <!-- start: right menu -->
    <div id="right-menu">
      <ul class="nav nav-tabs">
        <li class="active">
         <a data-toggle="tab" href="#right-menu-user">
          <span class="fa fa-comment-o fa-2x"></span>
        </a>
      </li>
      <li>
       <a data-toggle="tab" href="#right-menu-notif">
        <span class="fa fa-bell-o fa-2x"></span>
      </a>
    </li>
    <li>
      <a data-toggle="tab" href="#right-menu-config">
       <span class="fa fa-cog fa-2x"></span>
     </a>
   </li>
 </ul>

 <div class="tab-content">
  <div id="right-menu-user" class="tab-pane fade in active">
    <div class="search col-md-12">
      <input type="text" placeholder="search.."/>
    </div>
    <div class="user col-md-12">
     <ul class="nav nav-list">
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="away">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-desktop"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="offline">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>
      <li class="online">
        <img src="asset/img/avatar.jpg" alt="user name">
        <div class="name">
          <h5><b>Bill Gates</b></h5>
          <p>Hi there.?</p>
        </div>
        <div class="gadget">
          <span class="fa  fa-mobile-phone fa-2x"></span> 
        </div>
        <div class="dot"></div>
      </li>

    </ul>
  </div>
  <!-- Chatbox -->
  <div class="col-md-12 chatbox">
    <div class="col-md-12">
      <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
    </div>
    <div class="chat-area">
      <div class="chat-area-content">
        <div class="msg_container_base">
          <div class="row msg_container send">
            <div class="col-md-9 col-xs-9 bubble">
              <div class="messages msg_sent">
                <p>that mongodb thing looks good, huh?
                  tiny master db, and huge document store</p>
                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                </div>
              </div>
              <div class="col-md-3 col-xs-3 avatar">
                <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
              </div>
            </div>

            <div class="row msg_container receive">
              <div class="col-md-3 col-xs-3 avatar">
                <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
              </div>
              <div class="col-md-9 col-xs-9 bubble">
                <div class="messages msg_receive">
                  <p>that mongodb thing looks good, huh?
                    tiny master db, and huge document store</p>
                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                  </div>
                </div>
              </div>

              <div class="row msg_container send">
                <div class="col-md-9 col-xs-9 bubble">
                  <div class="messages msg_sent">
                    <p>that mongodb thing looks good, huh?
                      tiny master db, and huge document store</p>
                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                    </div>
                  </div>
                  <div class="col-md-3 col-xs-3 avatar">
                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                  </div>
                </div>

                <div class="row msg_container receive">
                  <div class="col-md-3 col-xs-3 avatar">
                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                  </div>
                  <div class="col-md-9 col-xs-9 bubble">
                    <div class="messages msg_receive">
                      <p>that mongodb thing looks good, huh?
                        tiny master db, and huge document store</p>
                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                      </div>
                    </div>
                  </div>

                  <div class="row msg_container send">
                    <div class="col-md-9 col-xs-9 bubble">
                      <div class="messages msg_sent">
                        <p>that mongodb thing looks good, huh?
                          tiny master db, and huge document store</p>
                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                        </div>
                      </div>
                      <div class="col-md-3 col-xs-3 avatar">
                        <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                      </div>
                    </div>

                    <div class="row msg_container receive">
                      <div class="col-md-3 col-xs-3 avatar">
                        <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                      </div>
                      <div class="col-md-9 col-xs-9 bubble">
                        <div class="messages msg_receive">
                          <p>that mongodb thing looks good, huh?
                            tiny master db, and huge document store</p>
                            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="chat-input">
                  <textarea placeholder="type your message here.."></textarea>
                </div>
                <div class="user-list">
                  <ul>
                    <li class="online">
                      <a href=""  data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <div class="user-avatar"><img src="asset/img/avatar.jpg" alt="user name"></div>
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="online">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="offline">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="online">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                    <li class="away">
                      <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="dot"></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="right-menu-notif" class="tab-pane fade">

              <ul class="mini-timeline">
                <li class="mini-timeline-highlight">
                 <div class="mini-timeline-panel">
                  <h5 class="time">07:00</h5>
                  <p>Coding!!</p>
                </div>
              </li>

              <li class="mini-timeline-highlight">
               <div class="mini-timeline-panel">
                <h5 class="time">09:00</h5>
                <p>Playing The Games</p>
              </div>
            </li>
            <li class="mini-timeline-highlight">
             <div class="mini-timeline-panel">
              <h5 class="time">12:00</h5>
              <p>Meeting with <a href="#">Clients</a></p>
            </div>
          </li>
          <li class="mini-timeline-highlight mini-timeline-warning">
           <div class="mini-timeline-panel">
            <h5 class="time">15:00</h5>
            <p>Breakdown the Personal PC</p>
          </div>
        </li>
        <li class="mini-timeline-highlight mini-timeline-info">
         <div class="mini-timeline-panel">
          <h5 class="time">15:00</h5>
          <p>Checking Server!</p>
        </div>
      </li>
      <li class="mini-timeline-highlight mini-timeline-success">
        <div class="mini-timeline-panel">
          <h5 class="time">16:01</h5>
          <p>Hacking The public wifi</p>
        </div>
      </li>
      <li class="mini-timeline-highlight mini-timeline-danger">
        <div class="mini-timeline-panel">
          <h5 class="time">21:00</h5>
          <p>Sleep!</p>
        </div>
      </li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

  </div>
  <div id="right-menu-config" class="tab-pane fade">
    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Notification</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-info">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
          <label class="onoffswitch-label" for="myonoffswitch1"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Custom Designer</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-danger">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
          <label class="onoffswitch-label" for="myonoffswitch2"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Autologin</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-success">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
          <label class="onoffswitch-label" for="myonoffswitch3"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Auto Hacking</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-warning">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
          <label class="onoffswitch-label" for="myonoffswitch4"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Auto locking</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
          <label class="onoffswitch-label" for="myonoffswitch5"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>FireWall</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
          <label class="onoffswitch-label" for="myonoffswitch6"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>CSRF Max</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-warning">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
          <label class="onoffswitch-label" for="myonoffswitch7"></label>
        </div>
      </div>
    </div>


    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Man In The Middle</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-danger">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
          <label class="onoffswitch-label" for="myonoffswitch8"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6 padding-0">
        <h5>Auto Repair</h5>
      </div>
      <div class="col-md-6">
        <div class="mini-onoffswitch onoffswitch-success">
          <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
          <label class="onoffswitch-label" for="myonoffswitch9"></label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <input type="button" value="More.." class="btnmore">
    </div>

  </div>
</div>
</div>  
<!-- end: right menu -->

</div>

<!-- start: Mobile -->
<div id="mimin-mobile" class="reverse">
  <div class="mimin-mobile-menu-list">
    <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
      <ul class="nav nav-list">
        <li class="active ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-home fa"></span>Dashboard 
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
            <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-diamond fa"></span>Layout
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="topnav.html">Top Navigation</a></li>
            <li><a href="boxed.html">Boxed</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa-area-chart fa"></span>Charts
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="chartjs.html">ChartJs</a></li>
            <li><a href="morris.html">Morris</a></li>
            <li><a href="flot.html">Flot</a></li>
            <li><a href="sparkline.html">SparkLine</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa fa-pencil-square"></span>Ui Elements
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="color.html">Color</a></li>
            <li><a href="weather.html">Weather</a></li>
            <li><a href="typography.html">Typography</a></li>
            <li><a href="icons.html">Icons</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="media.html">Media</a></li>
            <li><a href="panels.html">Panels & Tabs</a></li>
            <li><a href="notifications.html">Notifications & Tooltip</a></li>
            <li><a href="badges.html">Badges & Label</a></li>
            <li><a href="progress.html">Progress</a></li>
            <li><a href="sliders.html">Sliders</a></li>
            <li><a href="timeline.html">Timeline</a></li>
            <li><a href="modal.html">Modals</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
           <span class="fa fa-check-square-o"></span>Forms
           <span class="fa-angle-right fa right-arrow text-right"></span>
         </a>
         <ul class="nav nav-list tree">
          <li><a href="formelement.html">Form Element</a></li>
          <li><a href="#">Wizard</a></li>
          <li><a href="#">File Upload</a></li>
          <li><a href="#">Text Editor</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a class="tree-toggle nav-header">
          <span class="fa fa-table"></span>Tables
          <span class="fa-angle-right fa right-arrow text-right"></span>
        </a>
        <ul class="nav nav-list tree">
          <li><a href="datatables.html">Data Tables</a></li>
          <li><a href="handsontable.html">handsontable</a></li>
          <li><a href="tablestatic.html">Static</a></li>
        </ul>
      </li>
      <li class="ripple">
        <a href="calendar.html">
         <span class="fa fa-calendar-o"></span>Calendar
       </a>
     </li>
     <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-envelope-o"></span>Mail
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="mail-box.html">Inbox</a></li>
        <li><a href="compose-mail.html">Compose Mail</a></li>
        <li><a href="view-mail.html">View Mail</a></li>
      </ul>
    </li>
    <li class="ripple">
      <a class="tree-toggle nav-header">
        <span class="fa fa-file-code-o"></span>Pages
        <span class="fa-angle-right fa right-arrow text-right"></span>
      </a>
      <ul class="nav nav-list tree">
        <li><a href="forgotpass.html">Forgot Password</a></li>
        <li><a href="login.html">SignIn</a></li>
        <li><a href="reg.html">SignUp</a></li>
        <li><a href="article-v1.html">Article v1</a></li>
        <li><a href="search-v1.html">Search Result v1</a></li>
        <li><a href="productgrid.html">Product Grid</a></li>
        <li><a href="profile-v1.html">Profile v1</a></li>
        <li><a href="invoice-v1.html">Invoice v1</a></li>
      </ul>
    </li>
    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
      <ul class="nav nav-list tree">
        <li><a href="view-mail.html">Level 1</a></li>
        <li><a href="view-mail.html">Level 1</a></li>
        <li class="ripple">
          <a class="sub-tree-toggle nav-header">
            <span class="fa fa-envelope-o"></span> Level 1
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list sub-tree">
            <li><a href="mail-box.html">Level 2</a></li>
            <li><a href="compose-mail.html">Level 2</a></li>
            <li><a href="view-mail.html">Level 2</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="credits.html">Credits</a></li>
  </ul>
</div>
</div>       
</div>
<button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
  <span class="fa fa-bars"></span>
</button>
<!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<script type="text/javascript">
    $('.btn-detail').click(function(){
      $.get('crud/detail_surat_masuk.php?id_surat='+$(this).data('id'),function(data){
        console.log(data)
        $('#bodyDetail').html(data)
        $('#bodyDetail :input')
      })
    })
    </script>

<!-- end: Javascript -->
</body>
</html>