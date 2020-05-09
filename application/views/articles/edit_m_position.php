<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการ Position
           
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('member/m_position/newdata_m_position'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li><a href="<?php echo  site_url('member/m_position/newdata_m_position'); ?>">จัดการ Position</a></li>
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
            <form role="form" action="<?php echo  site_url('member/update_m_position'); ?>" method="post" class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-4">
                        <label for="exampleInputEmail1">ชื่อตำแหน่ง</label> 
                        <input type="text" id="po_name" value="<?php echo $result->po_name;?>" class="form-control" name="po_name" minlength="3" required>
                        <input type="hidden" name="po_id" value="<?php echo $result->po_id;?>">
                    </div>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button class="btn btn-primary" type="submit">
                    <i class="fa fa-fw fa-save"></i> บันทึกข้อมูล</button>
                    <a class="btn btn-danger" href="<?php echo  site_url('member/m_position'); ?>" role="button"><i class="fa fa-fw fa-close"></i> ยกเลิก</a>
                </div>
            </form>
        </div>
        </div> </div> </div> 
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->