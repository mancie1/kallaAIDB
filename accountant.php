<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Accountant
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a href="accountant/addNewView">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    Add Accountant <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </a>
                        <button class="export" onclick="javascript:window.print();">Print</button>  
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
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

                        <?php foreach ($accountants as $accountant) { ?>
                            <tr class="">
                                <td style="width:10%;"><img style="width:95%;" src="<?php echo $accountant->img_url; ?>"></td>
                                <td> <?php echo $accountant->name; ?></td>
                                <td><?php echo $accountant->email; ?></td>
                                <td class="center"><?php echo $accountant->address; ?></td>
                                <td><?php echo $accountant->phone; ?></td>
                                <td>
                                    <a class="" href="accountant/editAccountant?id=<?php echo $accountant->id; ?>"><i class="fa fa-edit"></i></a>
                                    <a class="" href="accountant/delete?id=<?php echo $accountant->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i></a>
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
