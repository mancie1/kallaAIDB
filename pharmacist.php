
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Pharmacist
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a href="pharmacist/addNewView">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    Add Pharmacist <i class="fa fa-plus"></i>
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

                        <?php foreach ($pharmacists as $pharmacist) { ?>
                            <tr class="">
                                <td style="width:10%;"><img style="width:95%;" src="<?php echo $pharmacist->img_url; ?>"></td>
                                <td> <?php echo $pharmacist->name; ?></td>
                                <td><?php echo $pharmacist->email; ?></td>
                                <td class="center"><?php echo $pharmacist->address; ?></td>
                                <td><?php echo $pharmacist->phone; ?></td>
                                <td>
                                    <a class="" href="pharmacist/editPharmacist?id=<?php echo $pharmacist->id; ?>"><i class="fa fa-edit"></i></a>
                                    <a class="" href="pharmacist/delete?id=<?php echo $pharmacist->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i></a>
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
