<?php
function spacer_render_callback() {
    $desktop = get_field('desktop');
    $tablet = get_field('tablet');
    $mobile = get_field('mobile');
    ?>
    <div class="fullwidth spacer_desktop" style="height:<?php echo $desktop;?>px;">
    </div>
    <div class="fullwidth spacer_tablet" style="height:<?php echo $tablet;?>px;">
    </div>
    <div class="fullwidth spacer_mobile" style="height:<?php echo $mobile;?>px;">
    </div>
<?php
}