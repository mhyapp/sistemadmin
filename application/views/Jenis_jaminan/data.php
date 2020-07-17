<section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- Header -->
                    <div class="page-header">
                        <div class="page-block">
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
                                            <h5>Data Jenis Jaminan</h5>
                                            <span class="d-block m-t-5"><code></code></span>
                                             <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></i>Tambah</button> 
                                        </div>
                                        <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                        <div class="navbar-form navbar-right">
                                           <?php echo form_open('Jenis_jaminan/search')?>
                                             <input type="text" name="keyword" class="form-control" placeholder="Search">
                                             <button type="submit" class="btn btn-success">Cari</button>
                                           <?php echo form_close()?>
                                        </div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Jenis Jaminan</th>
                                                            <th colspan="2">Aksi</th>
                                                        </tr>
                                                        <?php
                                                        $No =1;
                                                        foreach ($Jenis_jaminan as $jns_jaminan) : ?>
                                                            <tr>
                                                                <td><?php echo $No++ ?></td>
                                                                <td><?php echo $jns_jaminan->nama_jenis_jaminan ?></td>
                                                                <td onclick="javascript: return confirm('Apakah anda ingin menghapus data ini?')">
                                                                <?php echo anchor('admin/Jenis_jaminan/hapus/'.$jns_jaminan->idjns_jaminan,'<div class="btn btn-danger btn-sm">Hapus</i></div>') ?></td>
                                                                <td><?php echo anchor('admin/Jenis_jaminan/edit/'.$jns_jaminan->idjns_jaminan,'<div class="btn btn-primary btn-sm">Edit</i></div>') ?></td>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title" id="exampleModalLabel"> Tambah Data Jenis Jaminan </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form method="post" action="<?php echo base_url().'admin/Jenis_jaminan/tambah'?>">
            <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Ketik Jenis Jaminan">
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
      </div>   
    </div>
  </div>
</div>
</body>
</html>
