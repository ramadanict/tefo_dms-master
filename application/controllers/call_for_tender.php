<?php
get_headers();
if ( true === apply_filters( 'graduate_filter_frontpage_content_enable', true ) ) :?>
        <div class="container page-section">
                <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                             
<form role="form" method="POST"> 
        <div class="form-group"></div>
        <input id="bid_no" name="bid_no" type="text" placeholder="Bid No" class="form-control input-sm" required="">
</div>
<div class="form-group"></div>
        <input id="procurement_type" name="procurement_type" type="text" placeholder="Procurement Type" class="form-control input-sm" required="">
</div>
<div class="form-group"></div>
        <input id="modeof_procurement" name="modeof_procurement" type="text" placeholder="Mode Of Procurement" class="form-control input-sm" required="">
</div>
<div class="form-group"></div>
        <input id="bid_closingdate" name="bid_closingdate" type="text" placeholder="Bid Closing Date" class="form-control input-sm" required="">
</div>
<div class="form-group"></div>
        <input id="bid_closingtime" name="bid_closingtime" type="text" placeholder="Bid Closing Time" class="form-control input-sm" required="">
</div>
<div class="form-group"></div>
        <input id="public_body" name="public_body" type="text" placeholder="Public Body" class="form-control input-sm" required="">
</div>
<div class="row justify-content-center">
        <div class="col-xs-4 col-sm-4 col-md-4">
                <input type="submit" value="Submit" class="btn btn-info btn-block" name="submitbtn">
        </div>
</div>
</form>

                        </main>
                </div>
                <?php
                if (graduate_is_sidebar_enable() ) {
                        get_sidebar();

                } ?>
                 </div>
                 <?php
         endif;
         get_footer();
