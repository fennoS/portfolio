<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Files</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All files uploaded to the database.</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="Fenno" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Bestand</th>
                                    <th>Groote KB</th>
                                    <th>Upload Date</th>
                                    <th>active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($imports as $import) { ?>
                                    <tr>
                                        <td><?= $import->filename ?></td>
                                        <td><?= $import->file_size ?></td>
                                        <td><?= $import->file_date ?></td>       
                                        <td><?= $import->file_active ?></td>       
                                    </tr>
                                <?php } ?>  
                            </tbody>
                        </table>
                    </div>
                <!-- /.box-body -->
                </div>
            <!-- /.box -->
            </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
