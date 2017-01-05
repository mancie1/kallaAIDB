
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Patient
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a href="patient/addNewView">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    Add New Patient <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </a>
                        <button class="export" onclick="javascript:window.print();">Print</button>  
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Patient Id</th>                        
                                <th>Image</th>
                                <th>Name</th>
                                <th class="center">Email</th>
                                <th>Doctor</th>
                                <th>Birth Date</th>
                                <th>Phone</th>
                                <th>Blood Group</th>
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

                        <?php foreach ($patients as $patient) { ?>
                            <tr class="">
                                <td> <?php echo $patient->patient_id; ?></td>
                                <td style="width:10%;"><img style="width:95%;" src="<?php echo $patient->img_url; ?>"></td>
                                <td> <?php echo $patient->name; ?></td>
                                <td><?php echo $patient->email; ?></td>
                                <td> <?php echo $patient->doctor; ?></td>
                                <td class="center"><?php echo $patient->birthdate; ?></td>
                                <td><?php echo $patient->phone; ?></td>
                                <td><?php echo $patient->bloodgroup; ?></td>
                                <td>
                                    <a class="" href="patient/patientDetails?id=<?php echo $patient->id; ?>"><i class="fa fa details">details</i></a>
                                    <a class="" href="patient/editPatient?id=<?php echo $patient->id; ?>"><i class="fa fa-edit"></i></a>
                                    <a class="" href="patient/delete?id=<?php echo $patient->id; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-times"></i></a>
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
