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
                                        <h5 class="m-b-10">Edit Data Notaris</h5>
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
                                            <h5>Edit Data Notaris</h5>
                                               
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <?php 
foreach ($Notaris as $ntrs): ?>

<form action="<?php echo base_url('admin/Notaris/update') ?>"
    method="post">

    <div class="form-group">

        <label>Nama Notaris</label>

        <input type="text" name="nama" class="form-control"value="<?php echo $ntrs->nama_notaris ?>">
        <input type="text" name="id" class="form-control" 
        value="<?php echo $ntrs->idnotaris ?>">
    </div>
   <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php endforeach; ?>
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


