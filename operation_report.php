
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Operation Report
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a href="report/addReportView">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    Add New Report  <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </a>
                        <button class="export" onclick="javascript:window.print();">Print</button>  
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Patient</th>
                                <th>Description</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>

                        <style>

                            .img_url{
                                height:20px;
                                width:20px;
                                background-size: contain; 
                                max-height:20px;
                                border-radius: 100px;
                            }

                        </style>

                        <?php foreach ($reports as $report) { ?>
                            <tr class="">
                                <td><?php echo explode('*', $report->patient)[0]; ?></td>
                                <td> <?php echo $report->description; ?></td>
                                <td><?php echo $report->doctor; ?></td>
                                <td class="center"><?php echo $report->date; ?></td>
                                <td>
                                    <a class="" href="report/editReport?id=<?php echo $report->id; ?>"><i class="fa fa-edit"></i></a>
                                    <a class="" href="report/delete?id=<?php echo $report->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->
