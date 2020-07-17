
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Halaman Notaris</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Tables</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Tables</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ basic-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Form Data Notaris</h5>
                                           
                                            <span class="d-block m-t-5"><code></code></span>
                                             <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
                                             Tambah Data Notaris</button> 
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Notaris</th>
                                                            
                                                            <th colspan="2">Aksi</th>
                                                        </tr>

                                                        <?php

                                                        $No =1;
                                                        foreach ($Notaris as $ntrs) : ?>
                                                            <tr>
                                                                <td><?php echo $No++ ?></td>
                                                                <td><?php echo $ntrs->nama_notaris ?></td>
                                                                <td onclick="javascript: return confirm('Anda Yakin ingin menghapus data?')"><?php echo anchor('admin/Notaris/hapus/'.$ntrs->idnotaris,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                                                    
                                                                     <td><?php echo anchor('admin/Notaris/edit/'.$ntrs->idnotaris,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> </td>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>


                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td></td>
                                                            <td></td>
                                                               <td></td>
                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- [ basic-table ] end -->

                               
                               
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> Form Input Data Notaris </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/Notaris/Tambah_aksi'?>">
             <div class="form-group">
                <label> Nama Notaris </label>
                <input type="text" name="nama" class="form-control">
            </div>

        <button type="reset" class="btn btn-danger" 
        data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>


        </form>
      </div>
     
    </div>
  </div>
</div>
    <!-- [ Main Content ] end -->

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
