    <style> 
    .list_carousel {
    background-color:white;
    margin: 0 0 50px 60px;
    width:50%;
    }
    .list_carousel ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: block;
    }
    .list_carousel li {
        font-size: 40px;
        color: #999;
        text-align: center;
        background-color: #eee;
        border: 1px solid white;
        max-width:  200%;
        height: 200%;
        padding: 0;
        margin:auto;
        display: block;
        float: left;
    }
    .list_carousel.responsive {
        width: auto;
        margin-left: 0;
    }
    .clearfix {
        float: none;
        clear: both;
    }
    .prev {
        float: left;
        margin-left: 10px;
    }
    .next {
        float: right;
        margin-right: 10px;
    }
    .pager {
        float: left;
        width: 300px;
        text-align: center;
    }
    .pager a {
        margin: 0 5px;
        text-decoration: none;
    }
    .pager a.selected {
        text-decoration: underline;
    }
    .timer {
        background-color: #999;
        height: 6px;
        width: 0px;
            }
</style>
   <script src="<?php echo base_url('application/modules/website/assets/js/jquery.min.js') ?>" type="text/javascript"></script>

<script src="<?php echo base_url('application/modules/website/assets/js/jquery.carouFredSel-6.2.1.js') ?>" type="text/javascript"></script>

<script type="text/javascript" language="javascript">
            $(function() {

                //  Basic carousel, no options
                $('#foo0').carouFredSel();
            });
        </script></script>


<div class="clearfix"></div>
<div class="main-search-container" style="background-image: url(<?php echo base_url('application/modules/website/assets/images/bg.jpg') ?>)">
    <div class="main-search-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="home-form form-block">
                        <h3 class="form-block_title"><?php echo display('search_tour'); ?></h3>
                        <div class="form-block_des"><?php echo display('find_dream'); ?></div>
                       
                        <form action="<?php echo base_url('website/search') ?>"  style="padding:29px 0">
                            <div class="form-group custom-select">
                                <?php echo form_dropdown('start_point', $location_dropdown, $search->start_point, array('class'=>'select2 form-control','required'=>'required', 'data-placeholder'=>display('start_point')) ) ?> 
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="form-group custom-select">
                                <?php echo form_dropdown('end_point', $location_dropdown, $search->end_point, array('class'=>'select2 form-control','required'=>'required', 'data-placeholder'=>display('end_point')) ) ?> 
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="form-group">
                                <input type='text' name="date" class='form-control datepicker' placeholder="<?php echo display('date') ?>" required="required" value="<?php echo $search->date ?>" autocomplete="off">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="form-group custom-select">
                                <?php echo form_dropdown('fleet_category', $fleet_dropdown, $search->fleet_category, array('class'=>'select2 form-control','required'=>'required', 'data-placeholder'=>display('fleet_type')) ) ?> 
                                <i class="fa fa-car"></i>
                            </div>

                            <button type="submit" class="btn btn-block"><?php echo display('find_now'); ?></button>
                        </form>
                    </div>
                </div>  
                
     <div class="col-sm-8">
        <div class="list_carousel">
                <ul id="foo0">
                    <li><img src="<?php echo base_url('application/modules/website/assets/images/banner1.jpg') ?>" alt=""></li>
                    <li><img src="<?php echo base_url('application/modules/website/assets/images/banner2.jpg') ?>" alt=""></li>
                    <li><img src="<?php echo base_url('application/modules/website/assets/images/banner3.jpg') ?>" alt=""></li>
                    <li><img src="<?php echo base_url('application/modules/website/assets/images/banner4.jpg') ?>" alt=""></li>                    
               </ul>
            <div class="clearfix"></div>
        </div>
        </div>
        <br />

        <!--  <div class="span7" style="float:right">
        <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
        <div class="active item"><img class="img" src="https://erp.sahabatbis.co.id/assets/img/banner/ThXvEo3ZFugPutaQhTO6.jpg"></div>
        <div class="item"><img class="img" src="https://erp.sahabatbis.co.id/assets/img/banner/nJprxA6UJDsxazM4x6Nb.jpg"></div>
        <div class="item"><img class="img" src="https://erp.sahabatbis.co.id/assets/img/banner/n8lUGImEQ3vXSLWvbEEM.jpg"></div>
        </div>

        <div style="padding-top: 150px">
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
            -->
                <!-- 
                <div class="col-sm-8">
                    <div class="header-title-inner">
                        <h2><?php echo display('travel_slogan'); ?></h2>
                        <h4><?php echo display('travel_sub_slogan'); ?></h4>
                    </div>
                    <div class="row counter-inner hidden-sm">
                        <div class="col-sm-4">
                            <div class="counter-content">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="fa fa-users" style="line-height:34px;"></i>
                                    </div>
                                </div>
                                <h6><?php echo display('total_passenger') ?></h6> 
                                <p class="count-number">
                                    <?php echo (!empty($notifications->passenger->total)?$notifications->passenger->total:0) ?>    
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter-content">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="flaticon-bus"></i>
                                    </div>
                                </div>
                                <h6><?php echo display('total_fleet') ?></h6> 
                                <p class="count-number">
                                    <?php echo (!empty($notifications->fleet->total)?$notifications->fleet->total:0) ?>    
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="counter-content">
                                <div class="border">
                                    <div class="counter-icon">
                                        <i class="flaticon-road-perspective-of-curves"></i>
                                    </div>
                                </div>
                                <h6><?php echo display('todays_trip') ?></h6> 
                                <p class="count-number">
                                    <?php echo (!empty($notifications->trip->total)?$notifications->trip->total:0) ?>    
                                </p>
                            </div>
                        </div>
                    </div>
                -->

                    <div id="offer" class="owl-carousel owl-theme">
                        <?php 
                        if (!empty($offers)) { 
                            foreach ($offers as $offer) { 
                            echo "<div class=\"item\"><img src=".base_url($offer->image)." class=\"img-responsive\" alt=\"\"></div>";
                            } 
                        } 
                        ?>  
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> 


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="payment-system">
                <h2 class="block-title"><?php echo (!empty($appSetting->about)?$appSetting->about:null) ?></h2>
                <p><?php echo (!empty($appSetting->description)?$appSetting->description:null) ?></p> 
            </div>
        </div>
    </div>
</div>
 

<section class="testimonial_inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="block-title"><?php echo display('our_customers_say') ?></h2>
                <?php 
                if (!empty($ratings)) 
                {
                    foreach ($ratings as $rate)
                    {
                        echo "<div class=\"feedback_iner\">
                            <div class=\"feedback_container\">
                                <div class=\"feedback_stars\">" .str_repeat("<i class=\"fa fa-star\"></i>", $rate->rating). "</div>
                                <p>$rate->comment</p>
                            </div>
                            <div class=\"feedback_user\">
                                <div class=\"feedback_useruser_title\">
                                    $rate->name
                                    <span>($rate->tkt_booking_id_no)</span>
                                </div>
                            </div>
                        </div>"; 
                    }
                }
                ?> 
            </div>
        </div>
    </div>
</section>
 
