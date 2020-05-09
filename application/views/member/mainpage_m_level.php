<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการระดับสิทธิการใช้งาน
        <?php $this->load->view('act')?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('member/m_level'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active">จัดการระดับสิทธิการใช้งาน </li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); ?>
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ตารางข้อมูล</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-success" href="<?php echo  site_url('member/newdata_m_level'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                                <a class="btn btn-default" href="<?php echo  site_url('member/m_level'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <br/>
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 2%;">id</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 90%;">ชื่อสิทธิ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5px;">แก้ไข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5px;">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td align="center"><?php echo $data->level_id; ?></td>
                                            <td>
                                                
                                                <?php echo  $data->level_name; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('member/edit_m_level/'.$data->level_id); ?>" class="btn btn-warning btn-xs">
                                                    แก้ไข
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-xs" href="<?php echo  site_url('member/confrm_m_level/'.$data->level_id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบ</a>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div><!-- /.box-body -->
                </div>
                </section><!-- /.content -->
                </div><!-- /.content-wrapper -->