<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการบุคลากร
        
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('member'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('member'); ?>"> จัดการบุคลากร </a></li>
            <li class="active">เพิ่มข้อมูลใหม่</li>
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
                            <h3 class="box-title">ADD NEW DATA</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('member/adding'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Level</label>
                                            <select class="form-control" name="p_level" required>
                                                <option value="">เลือกข้อมูล</option>
                                                <?php
                                                foreach($rslevel as $result){?>
                                                <option value="<?php echo $result->level_id; ?>">
                                                    <?php echo $result->level_name; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">username</label>
                                            <input type="text" id="username" class="form-control" name="username"  minlength="3" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">password</label>
                                            <input type="password" id="password" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" class="form-control" name="password" minlength="3" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                                            <input type="text" id="p_name" class="form-control" name="p_name" minlength="3" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" id="p_email" class="form-control" name="p_email" minlength="3" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Mobile</label>
                                            <input type="text" id="p_phone" class="form-control" name="p_phone" minlength="3" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">ภาพ Profile </label>
                                            <input type="file" id="p_img" class="form-control" name="p_img"  accept="image/*" required>
                                        </div>
                                    </div>
                                    
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                        <a class="btn btn-danger" href="<?php echo  site_url('member'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                    </div>
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->