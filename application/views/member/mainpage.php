<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        จัดการบุคลากร
        <?php $this->load->view('act')?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('member'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active"> จัดการบุคลากร </li>
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
                                <a class="btn btn-success" href="<?php echo  site_url('member/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                                <a class="btn btn-default" href="<?php echo  site_url('member'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                            </div>
                            <div class="col-sm-6">
                                <!-- <div id="" class="dataTables_filter">
                                    <form action="" method="GET" name="search">
                                        <label>ค้นหา</label>:<input type="search" name="keyword" class="form-control input-sm" placeholder="ค้นหา"></label>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10">
                                <br />
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">id</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">IMG</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 30%;">ชื่อ สกุล</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สิทธิ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">เบอร์</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">Email</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($results)){ foreach ($results as $data) { ?>
                                        <tr role="row">
                                            <td align="center"><?php echo $data->p_id; ?></td>
                                            <td><img src="<?php echo base_url('pimg/'.$data->p_img);?>" width="100%"></td>
                                            <td>
                                                
                                                <?php echo  $data->p_name; ?>
                                                
                                            </td>
                                            <td><?php echo $data->level_name; ?></td>
                                            <td><?php echo $data->p_phone; ?></td>
                                            <td><?php echo $data->p_email; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('member/edit/'.$data->p_id); ?>" class="btn btn-warning btn-xs">
                                                    แก้ไข
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-xs" href="<?php echo  site_url('member/confrm/'.$data->p_id); ?>" role="button"><i class="fa fa-fw fa-trash"></i> ลบ</a>
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