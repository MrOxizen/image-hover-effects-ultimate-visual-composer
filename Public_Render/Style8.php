<?php

namespace OXI_FLIP_BOX_PLUGINS\Public_Render;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Flipbox Plugins
 *
 * @author $biplob018
 */

/**
 * Description of Create
 *
 * @author biplo
 */
use OXI_FLIP_BOX_PLUGINS\Page\Public_Render;

class Style8 extends Public_Render {

    public function default_render() {
        $styleid = $this->oxiid;
        $styledata = explode('|', $this->dbdata['css']);
        $styledata = array_map('esc_attr', explode('|', $this->dbdata['css']));
        $listdata = $this->child;
        ?>
        <div class="oxilab-flip-box-wrapper">
            <?php
            foreach ($listdata as $value) {
                if (!empty($value['files'])):


                    $filesdata = array_map('wp_kses_post', explode("{#}|{#}", $value['files']));
                    ?>
                    <div class="<?php echo $styledata[43]; ?> oxilab-flip-box-padding-<?php echo $styleid; ?> "
                         sa-data-animation="<?php echo $styledata[55]; ?>"
                         sa-data-animation-offset="100%"
                         sa-data-animation-delay="0ms"
                         sa-data-animation-duration=" <?php echo ($styledata[57] * 1000); ?>ms"
                         >
                        <div class="<?php echo ($this->admin == 'admin') ? 'oxilab-ab-id' : ''; ?> oxilab-flip-box-body-<?php echo $styleid; ?> oxilab-flip-box-body-<?php echo $styleid; ?>-<?php echo $value['id']; ?>">
                            <?php
                            if ($filesdata[3] != '') {
                                echo '<a href="' . $filesdata[3] . '" target="' . $styledata[53] . '">';
                                $fileslinkend = '</a>';
                            } else {
                                $fileslinkend = '';
                            }
                            ?>
                            <div class="oxilab-flip-box-body-absulote">
                                <div class="<?php echo $styledata[1]; ?>">
                                    <div class="oxilab-flip-box-style-data <?php echo $styledata[3]; ?>">
                                        <div class="oxilab-flip-box-style">
                                            <div class="oxilab-flip-box-front">
                                                <div class="oxilab-flip-box-<?php echo $styleid; ?>">
                                                    <div class="oxilab-flip-box-<?php echo $styleid; ?>-data">
                                                        <div class="oxilab-icon">
                                                            <div class="oxilab-icon-data">
                                                                <?php echo $this->font_awesome_render($filesdata[7]) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="oxilab-flip-box-back">
                                                <div class="oxilab-flip-box-back-<?php echo $styleid; ?>">
                                                    <div class="oxilab-flip-box-back-<?php echo $styleid; ?>-data">
                                                        <div class="oxilab-icon">
                                                            <div class="oxilab-icon-data">
                                                                <?php echo $this->font_awesome_render($filesdata[9]) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            echo $fileslinkend;
                            echo $this->admin_edit_panel($value['id']);
                            ?>

                        </div>

                        <style>
                <?php
                if ($filesdata[1] != '') {
                    echo '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-' . $styleid . '{
background: linear-gradient(' . $styledata[5] . ', ' . $styledata[5] . '), url("' . $filesdata[1] . '");
-moz-background-size: 100% 100%;
-o-background-size: 100% 100%;
background-size: 100% 100%;
}';
                }
                ?>
                <?php
                if ($filesdata[5] != '') {
                    echo '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-back-' . $styleid . '{
background: linear-gradient(' . $styledata[9] . ', ' . $styledata[9] . '), url("' . $filesdata[5] . '");
-moz-background-size: 100% 100%;
-o-background-size: 100% 100%;
background-size: 100% 100%;
}';
                }
                ?>
                        </style>
                    </div>
                    <?php
                endif;
            }
            ?>

            <style>
                .oxilab-flip-box-padding-<?php echo $styleid; ?>{
                    padding: <?php echo $styledata[49]; ?>px <?php echo $styledata[51]; ?>px;
                    -webkit-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -moz-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -ms-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -o-transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    transition:  opacity <?php echo $styledata[57]; ?>s linear;
                    -webkit-animation-duration: <?php echo $styledata[57]; ?>s;
                    -moz-animation-duration: <?php echo $styledata[57]; ?>s;
                    -ms-animation-duration: <?php echo $styledata[57]; ?>s;
                    -o-animation-duration: <?php echo $styledata[57]; ?>s;
                    animation-duration: <?php echo $styledata[57]; ?>s;
                }
                .oxilab-flip-box-body-<?php echo $styleid; ?>{
                    max-width: <?php echo $styledata[45]; ?>px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .oxilab-flip-box-body-<?php echo $styleid; ?>:after {
                    padding-bottom: <?php echo $styledata[47] / $styledata[45] * 100; ?>%;
                    content: "";
                    display: block;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    border-color: <?php echo $styledata[7]; ?>;
                    background-color: <?php echo $styledata[5]; ?>;
                    border-width: <?php echo $styledata[69]; ?>px;
                    border-style:<?php echo $styledata[71]; ?>;
                    display: block;
                    -webkit-border-radius: <?php echo $styledata[93]; ?>px;
                    -moz-border-radius: <?php echo $styledata[93]; ?>px;
                    -ms-border-radius: <?php echo $styledata[93]; ?>px;
                    -o-border-radius: <?php echo $styledata[93]; ?>px;
                    border-radius: <?php echo $styledata[93]; ?>px;
                    overflow: hidden;
                    -webkit-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -moz-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -ms-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -o-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;

                }
                .oxilab-flip-box-<?php echo $styleid; ?>-data{
                    position: absolute;
                    left: 0%;
                    top: 50%;
                    padding: 10px 10px;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    -o-transform: translateY(-50%);
                    transform: translateY(-50%);
                    right: 0;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-data .oxilab-icon{
                    display: block;
                    text-align: center;
                    padding: <?php echo $styledata[81]; ?>px <?php echo $styledata[83]; ?>px;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-data .oxilab-icon-data{
                    display: inline-block;
                }
                .oxilab-flip-box-<?php echo $styleid; ?>-data .oxilab-icon-data .oxi-icons{
                    line-height: <?php echo $styledata[79]; ?>px;
                    font-size: <?php echo $styledata[77]; ?>px;
                    color: <?php echo $styledata[13]; ?>;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    border-color: <?php echo $styledata[11]; ?>;
                    background-color: <?php echo $styledata[9]; ?>;
                    border-width: <?php echo $styledata[73]; ?>px;
                    border-style:<?php echo $styledata[75]; ?>;
                    display: block;
                    -webkit-border-radius: <?php echo $styledata[93]; ?>px;
                    -moz-border-radius: <?php echo $styledata[93]; ?>px;
                    -ms-border-radius: <?php echo $styledata[93]; ?>px;
                    -o-border-radius: <?php echo $styledata[93]; ?>px;
                    border-radius: <?php echo $styledata[93]; ?>px;
                    overflow: hidden;
                    -webkit-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -moz-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -ms-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    -o-box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;
                    box-shadow: <?php echo $styledata[61]; ?>px <?php echo $styledata[63]; ?>px <?php echo $styledata[65]; ?>px <?php echo $styledata[67]; ?>px <?php echo $styledata[59]; ?>;

                }
                .oxilab-flip-box-back-<?php echo $styleid; ?>-data{
                    position: absolute;
                    left: 0%;
                    right: 0;
                    top: 50%;
                    padding: 10px 10px;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    -o-transform: translateY(-50%);
                    transform: translateY(-50%);
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?> .oxilab-icon{
                    display: block;
                    text-align: center;
                    padding: <?php echo $styledata[89]; ?>px <?php echo $styledata[91]; ?>px;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?> .oxilab-icon-data{
                    display: inline-block;
                }
                .oxilab-flip-box-back-<?php echo $styleid; ?> .oxilab-icon-data .oxi-icons{
                    line-height: <?php echo $styledata[87]; ?>px;
                    font-size: <?php echo $styledata[85]; ?>px;
                    color: <?php echo $styledata[15]; ?>;
                }
                <?php echo $styledata[95]; ?>
            </style>
        </div>
        <?php
    }

}
