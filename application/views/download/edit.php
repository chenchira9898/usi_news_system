<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการดาวน์โหลด
        
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('download'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('download'); ?>"> จัดการดาวน์โหลด </a></li>
            <li class="active">ปรับปรุงข้อมูล</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Your Page Content Here -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> ปรับปรุงข้อมูล </h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('download/update'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            หัวข้อ
                                        </div>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" name="d_title" required value="<?php echo $result->d_title;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            รายละเอียด
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea id="d_detail"  name="d_detail"  class="ckeditor"  rows="10" cols="60" required="required"><?php echo $result->d_detail;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-sm-2 control-label">
                                            ไฟล์
                                        </div>
                                        <div class="col-sm-3">
                                            <br />
                                            ไฟลเก่า <br />
                                            <br />
                                            
                                            <a href="<?php echo base_url('docload/' . $result->d_file); ?>" target="_blank" class="btn btn-info btn-xs"> เปิดดูเอกสาร </a>

                                           <!-- <img src="<?php echo base_url('docload/'.$result->d_file);?>" >-->
                                            <br />
                                            <br />
                                            เลือกใหม่
                                            <br />
                                            <br />
                                            
                                            <input type="file" name="d_file" class="form-control" accept="*">
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-sm-2 control-label">
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="hidden" name="d_id" value="<?php echo $result->d_id;?>">
                                            <input type="hidden" name="d_file" value="<?php echo $result->d_file;?>">
                                            <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="<?php echo  site_url('download'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->