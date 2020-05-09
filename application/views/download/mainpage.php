<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            จัดการดาวน์โหลด
            <?php $this->load->view('act') ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  site_url('download'); ?>"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
            <li class="active"> จัดการดาวน์โหลด </li>
        </ol>
    </section>
    <!-- Top menu -->
    <?php // echo $this->session->flashdata('msginfo'); 
    ?>
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
                            <a class="btn btn-success" href="<?php echo  site_url('download/newdata'); ?>" role="button"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล</a>
                            <a class="btn btn-default" href="<?php echo  site_url('download'); ?>" role="button"><i class="fa fa-fw fa-refresh"></i> Refresh Data</a>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br />
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">id</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ไฟล์</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 50%;">ชื่อไฟล์</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">โดย</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ดาวน์โหลด</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">แก้ไข</th>
                                        <th tabindex="0" rowspan="1" colspan="1" style="width: 3%;">ลบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($results)) {
                                        foreach ($results as $data) { ?>
                                            <tr role="row">
                                                <td align="center"><?php echo $data->d_id; ?></td>

                                                <td><?php echo $data->d_file; ?>

                                                <td>
                                                    <b>
                                                        <?php echo  $data->d_title; ?>
                                                    </b>
                                                    <br />
                                                    <?php echo $data->d_detail; ?>
                                                    เพิ่มเมื่อ : <?php echo date('d/m/Y', strtotime($data->p_regis_date)); ?>
                                                    <br />
                                                  
                                                    แก้ไขล่าสุด : <?php echo $data->d_last_update; ?>
                                                </td>

                                                <td><?php echo $data->p_name; ?></td>


                                                <td>

                                                    <a href="<?php echo base_url('docload/' . $data->d_file); ?>" target="_blank" class="btn btn-info btn-xs"><i class="fa fa-fw fa-download"></i> เปิดดูเอกสาร </a>

                                                   
                                                </td>
                                                <td>
                                                    <a href="<?php echo site_url('download/edit/' . $data->d_id); ?>" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-pencil"></i>
                                                        แก้ไข
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-xs" href="<?php echo  site_url('download/confrm/' . $data->d_id); ?>" role="button"><i class="fa fa-fw fa-trash"></i>
                                                        ลบ
                                                    </a>
                                                </td>


                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->