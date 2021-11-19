<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
           <div class="panel-body">

                <div class="col-sm-12" style="margin-bottom:20px">
                    <?php echo form_open('letter_trip/index', 'class="form-horizontal" method="get"')?>

                        <!-- Filter -->
                        <div class="form-group">
                            <?php 
                            $filterList = array(
                                'trip'   => display('trip_name')
                            );
                            ?>
                            <label for="filter" class="col-sm-2 control-label"><?php echo display('filter') ?></label>
                            <div class="col-sm-10">
                                <?php echo form_dropdown('filter', $filterList,  $search->filter, "class='form-control' id='filter'") ?> 
                            </div>
                        </div>

                        <!-- Trip ID -->
                        <div class="form-group" id="trip">
                            <label for="trip_id" class="col-sm-2 control-label"><?php echo display('trip_name') ?></label>
                            <div class="col-sm-10">
                                 <?php echo form_dropdown('trip', $tripList,  $search->trip, "class='form-control' id='trip_id' style='width:100%'") ?>
                            </div>
                        </div>

                        <!-- Date 2 Date -->
                        <div class="form-group">
                            <label for="driver_id" class="col-sm-2 control-label"><?php echo display('date') ?></label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input name="start_date" id="start_date" type="text" placeholder="<?php echo display('start_date') ?>" class="form-control datepicker" value="<?php echo $search->start_date ?>">
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <input name="end_date" id="end_date" type="text" placeholder="<?php echo display('end_date') ?>" class="form-control datepicker" value="<?php echo $search->end_date ?>">
                                    </div>

                                    <div class="col-sm-4">
                                        <button type="submit"  class="form-control btn btn-success"><?php echo display('search') ?></button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    <?php echo form_close() ?>
                </div> 

                <div class="col-sm-12">

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>No Kendaraan</td>
                                <td>: <?php echo $bookingss->reg_no; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Sopir / Telfon</td>
                                <td>: <?php echo $bookingss->driver_name; ?> / <?php echo $bookingss->phone; ?></td>
                            </tr>
                            <tr>
                                <td>Dari</td>
                                <td>: <?php echo $bookingss->start_point; ?></td>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>: <?php echo $bookingss->end_point; ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Penumpang</td>
                                <td>: <?php echo $bookingss->total_seat; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="table-responsive">
                    <table class="bookingDataTable table table-bordered ">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('booking_date') ?></th>
                                <th><?php echo display('booking_id') ?></th>
                                <th><?php echo display('trip_name') ?></th>
                                <th><?php echo display('route_name') ?></th>
                                <th><?php echo display('driver_name') ?></th>
                                <th>Kendaraan</th>
                                <th><?php echo display('total_seat') ?></th>
                                <th><?php echo display('price') ?></th>
                                <th><?php echo display('discount') ?></th>
                                <th><?php echo display('amount') ?></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan="7"></th>
                                <th></th> 
                                <th></th> 
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php if (!empty($bookings)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($bookings as $booking) { ?>
                            <tr class="<?php echo (!empty($booking->tkt_refund_id) ? "bg-danger" : null ) ?>">
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $booking->booking_date; ?></td>
                                <td><a target="_blank" href="<?php echo base_url("ticket/booking/view/$booking->id_no") ?>"><?php echo $booking->id_no; ?></a></td>
                                <td><a target="_blank" href="<?php echo base_url("trip/assign/view/$booking->trip_id_no") ?>"><?php echo $booking->trip_title; ?></a></td>
                                <td><?php echo $booking->route_name; ?></td>
                                <td><a target="_blank" href="<?php echo base_url("/hr/hr_controller/emp_details/$booking->driver_id") ?>"><?php echo $booking->driver_name; ?></a></td>
                                <td><?php echo $booking->reg_no; ?></td>
                                <td><?php echo $booking->total_seat; ?></td>
                                <td><?php echo $booking->price; ?></td>
                                <td><?php echo $booking->discount; ?></td>
                                <td><?php echo ($booking->price-$booking->discount); ?></td>
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


<script type="text/javascript">
$(document).ready(function() {

    var q = '<?php echo $this->input->get("filter") ?>';
    var trip   = $("#trip");

    if (q != null) {
        if (q == "route") {
            route.removeClass('hide');
        } else if (q == "trip") {
            trip.removeClass('hide');
        } else if (q == "driver") {
            driver.removeClass('hide');
        } 
    }  

    $('#filter').on('change', function(){
        var filter = $(this);
        route.addClass('hide');
        trip.addClass('hide');
        driver.addClass('hide');

        if (filter.length > 0) {
            if (filter.val() == "route") {
                route.removeClass('hide');
            } else if (filter.val() == "trip") {
                trip.removeClass('hide');
            } else if (filter.val() == "driver") {
                driver.removeClass('hide');
            } 
        }   
    });


    $('.bookingDataTable').DataTable( {
        searching: true, 
        responsive: false, 
        paging: false,
        pageLength: 100,
        dom: "<'row'<'col-sm-8'B><'col-sm-4'f>>tp", 
        buttons: [  
            {extend: 'copy', className: 'btn-sm', footer: true}, 
            {extend: 'csv', title: 'ExampleFile', className: 'btn-sm', footer: true}, 
            {extend: 'excel', title: 'ExampleFile', className: 'btn-sm', footer: true, title: 'exportTitle'}, 
            {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm', footer: true}, 
            {extend: 'print', className: 'btn-sm', footer: true} 
        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            var intVal = function (i) {
                return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1:typeof i === 'number' ? i : 0;
            };  
            //#----------- Total over this page------------------#
            seats = api.column(7, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0);  
            price = api.column(8, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
            },0);  
            discount = api.column(9, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0);  
            grandTotal = api.column(10, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                },0); 
            //#-----------ends of Total over this page------------------#

            // Update footer
            $( api.column(7).footer()).html(seats);
            $( api.column(8).footer()).html(price.toFixed(2));
            $( api.column(9).footer()).html(discount.toFixed(2));
            $( api.column(10).footer()).html(grandTotal.toFixed(2));
        }
    });
});
</script>