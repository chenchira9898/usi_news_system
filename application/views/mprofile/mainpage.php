<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการบุคลากร

        <?php $this->load->view('act')?>
        
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
                            <h3 class="box-title">UPDATE DATA</h3>
                            </div><!-- /.box-header -->
                            <!-- form start -->
                            <form role="form" action="<?php echo  site_url('member/update_member'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Level</label>
                                            <select class="form-control" name="p_level" required disabled="disabled">
                                                <option value="<?php echo $result->p_level; ?>">
                                                    <?php echo $result->level_name; ?>
                                                </option>
                                                <option value="">-เลือกข้อมูลใหม่-</option>
                                                <?php
                                                foreach($rslevel as $result1){?>
                                                <option value="<?php echo $result1->level_id; ?>">
                                                    <?php echo $result1->level_name; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">username</label>
                                            <input type="text" id="username" class="form-control" name="username"  minlength="3" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" value="<?php echo $result->username;?>" required disabled="disabled">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label for="exampleInputEmail1">ชื่อ-สกุล</label>
                                            <input type="text" id="p_name" class="form-control" name="p_name" minlength="3" value="<?php echo $result->p_name;?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" id="p_email" class="form-control" name="p_email" minlength="3" required value="<?php echo $result->p_email;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">Mobile</label>
                                            <input type="text" id="p_phone" class="form-control" name="p_phone" minlength="3" required value="<?php echo $result->p_phone;?>">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="exampleInputEmail1">ภาพ Profile </label>
                                            <br />
                                            ภาพเก่า
                                            <br />
                                            <img src="<?php echo base_url('pimg/'.$result->p_img);?>" width="100px">
                                            <br />
                                            <br />
                                            เลือกใหม่
                                            <br />
                                            <input type="file" id="p_img" class="form-control" name="p_img"  accept="image/*">
                                        </div>
                                    </div>
                                    <input type="hidden" name="p_id" value="<?php echo $result->p_id;?>">
                                    <input type="hidden" name="p_img1" value="<?php echo $result->p_img;?>">
                                    
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                                        <a class="btn btn-danger" href="<?php echo  site_url('dashboard'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                                    </div>
                                </form>
                            </div>
                        </div> </div> </div>
                        </section><!-- /.content -->
                        </div><!-- /.content-wrapper -->