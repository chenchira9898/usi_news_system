<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการ BANNER
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('banner'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('banner'); ?>">จัดการภาพ</a></li>
            <li class="active">เพิ่มข้อมูลใหม่</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">เพิ่มข้อมูล</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('banner/adding'); ?>" method="post"  enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ชื่อภาพ</label>
                                        <input type="text" id="bn_title" class="form-control" name="bn_title"  required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link</label>
                                        <input type="text" id="bn_link" class="form-control" name="bn_link"  required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">เลือกไฟล์</label>
                                        <input type="file" id="bn_file" class="form-control" name="bn_file" required="required" accept="image/*">
                                        <input type="hidden" name="bn_status" value="show" />
                                    </div>
                                </div>
                                
                                <div class="box-footer">
                                    <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                    <a class="btn btn-danger" href="<?php echo  site_url('banner'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                </div>
                            </form>
                        </div>
                    </div> </div> </div>
                    </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->