
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Department 
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a href="department/addNewView">
                            <div class="btn-group">

                                <button id="" class="btn green">
                                    Add Department <i class="fa fa-plus"></i>
                                </button>

                            </div>
                        </a>
                        <button class="export" onclick="javascript:window.print();">Print</button>  
                    </div>

                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($departments as $department) { ?>
                                <tr class="">
                                    <td><?php echo $department->name; ?></td>
                                    <td><?php echo $department->description; ?></td>
                                    <td>
                                        <a class="" href="department/editDepartment?id=<?php echo $department->id; ?>"><i class="fa fa-edit"></i></a>
                                        <a class="" href="department/delete?id=<?php echo $department->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i></a>
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
