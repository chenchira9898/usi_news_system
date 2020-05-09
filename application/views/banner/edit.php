<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการ BANNER
        
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('banner'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('banner'); ?>">จัดการ</a></li>
            <li class="active">แก้ไขข้อมูล</li>
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
                            <h3 class="box-title">แก้ไขข้อมูล</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('banner/update'); ?>" method="post" enctype="multipart/form-data">
                                <div class="box-body">
                                    <input type="hidden" name="bn_id" value="<?php echo $result->bn_id;?>">
                                    <input type="hidden" name="bn_file2" value="<?php echo $result->bn_file;?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ชื่อภาพ</label>
                                        <input type="text" value="<?php echo $result->bn_title;?>" id="bn_title" class="form-control" name="bn_title"  required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Link</label>
                                        <input type="text" id="bn_link" class="form-control" name="bn_link"  required="required" value="<?php echo $result->bn_link;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">สถานะ</label>
                                        <select name="bn_status" class="form-control" required>
                                            <option value="<?php echo $result->bn_status;?>"> <?php echo $result->bn_status;?>
                                            </option>
                                            <option value="">-select-</option>
                                            <option value="show">show</option>
                                            <option value="hide">hide</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        ภาพเก่า<br />
                                        <img src="<?php echo base_url('banners/' .$result->bn_file);?>" width="200px" />
                                        <hr />
                                        <label for="exampleInputEmail1">เลือกไฟล์ใหม่</label>
                                        <input type="file" id="bn_file" class="form-control" name="bn_file" accept="image/*">
                                    </div>
                                </div>
                                
                                <div class="box-footer">
                                    <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-save"></i> ยืนยัน</button>
                                    <a class="btn btn-danger" href="<?php echo  site_url('banner'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                </div>
                            </form>
                        </div>
                    </div> </div> </div>
                    </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->