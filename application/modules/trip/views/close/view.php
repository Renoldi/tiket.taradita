<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                        <a href="<?php echo base_url('trip/close/index') ?>" class="btn btn-sm btn-success" title="List"> <i class="fa fa-list"></i> <?php echo display('list') ?></a> 
                        <?php if($close->id): ?>
                        <a href="<?php echo base_url('trip/close/form') ?>" class="btn btn-sm btn-info" title="Add"><i class="fa fa-plus"></i> <?php echo display('add') ?></a> 
                        <?php endif; ?>
                        <a href="#" class="btn btn-sm btn-danger" onclick="printContent('PrintMe')" title="Print"> <i class="fa fa-print"></i></a> 
                    </h4>
                </div>
            </div>

            <div class="panel-body" id="PrintMe">
                <table class="table table-hover" width="100%">
                    <thead> 
                        <tr>
                            <th><?php echo display('trip_id') ?></th>
                            <td><?php echo $close->id_no;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('reg_no') ?></th>
                            <td><?php echo $close->fleet_registration_name;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('route_name') ?></th>
                            <td><?php echo $close->trip_route_name;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('start_date') ?></th>
                            <td><?php echo $close->start_date;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('end_date') ?></th>
                            <td><?php echo $close->end_date;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('driver_name') ?></th>
                            <td><?php echo $close->driver_name;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('assistants_ids') ?></th>
                            <td>
                                <?php
                                echo (!empty($close->assistant_1_name)?"$close->assistant_1_name":null);
                                echo (!empty($close->assistant_2_name)?", $close->assistant_2_name":null);
                                echo (!empty($close->assistant_3_name)?", $close->assistant_3_name":null);
                                ?>
                            </td>
                        </tr> 
                        <tr>
                            <th><?php echo display('sold_ticket') ?></th>
                            <td><?php echo $close->sold_ticket;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('total_income') ?></th>
                            <td><?php echo $close->total_income;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('total_expense') ?></th>
                            <td><?php echo $close->total_expense;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('total_fuel') ?></th>
                            <td><?php echo $close->total_fuel;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('trip_comment') ?></th>
                            <td><?php echo $close->trip_comment;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('closed_by') ?></th>
                            <td><?php echo $close->closed_by_id;?></td>
                        </tr> 
                        <tr>
                            <th><?php echo display('status') ?></th>
                            <td><?php echo (($close->status==1)?display('active'):display('inactive')); ?></td>
                        </tr> 
                    </thead>
                </table>

                <div class="panel-body">
 
                <div class="">
                    <table class="datatable2 table table-bordered ">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('booking_date') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('name') ?></th>
                                <th><?php echo display('route_name') ?></th>
                                <th><?php echo display('total_seat') ?></th>
                                <th><?php echo display('price') ?></th>
                                <th><?php echo display('seat_numbers') ?></th>
                                <th><?php echo display('payment_type') ?></th>
                                <th><?php echo display('payment_status') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($bookings)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($bookings as $booking) { 

                       
                                ?>

                            <tr class="<?php echo (!empty($booking->tkt_refund_id) ? "bg-danger" : null ) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $booking->booking_date; ?></td>
                                <td><?php echo $booking->id_no; ?></td>
                                <td><?php $result=$this->db->select('firstname,lastname')->from('tkt_passenger')->where('id_no',$booking->tkt_passenger_id_no)->get()->result();
                                 foreach ($result as $name) {
                                    echo $name->firstname.' '.$name->lastname;
                                 }
                                 ?></td>
                                <td><?php echo $booking->route_name; ?></td>
                                <td><?php echo $booking->total_seat; ?></td>
                                <td><?php echo $currency; ?><?php echo $booking->price; ?></td>
                                <td><?php echo $booking->seat_numbers; ?></td>
                                <td><?php  echo $booking->booking_type; ?></td>
                                <td ><?php 
                                if($booking->payment_status == 1 OR $booking->payment_status == 2){
                                    if($this->session->userdata('isAdmin')==1){
                                    echo '<a type="button" class="test btn btn-primary btn-xs" onclick="modal_load('."'".$booking->id_no."'".')" data-toggle="modal">Unpaid</a>';
                                    }else{
                                        echo '';
                                    }
                                    }else{
                                    echo "Paid";
                                } ?>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    <?= $links ?>
                </div>
            </div> 
            </div> 
        </div>
    </div> 
</div> 







