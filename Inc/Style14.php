<?php

namespace OXI_FLIP_BOX_PLUGINS\Inc;

/**
 * Description of Style1
 *
 * @author biplo
 */
use OXI_FLIP_BOX_PLUGINS\Page\Admin_Render;

class Style14 extends Admin_Render {

    public function register_style() {
        $data = 'oxilab-flip-type |' . sanitize_text_field($_POST['oxilab-flip-type']) . '|'
                . ' oxilab-flip-effects |' . sanitize_text_field($_POST['oxilab-flip-effects']) . '|'
                . ' front-background-color |' . sanitize_text_field($_POST['front-background-color']) . '|'
                . ' front-border-color |' . sanitize_hex_color($_POST['front-border-color']) . '| '
                . ' front-icon-color |' . sanitize_hex_color($_POST['front-icon-color']) . '|'
                . ' front-icon-background |' . sanitize_text_field($_POST['front-icon-background']) . '|'
                . ' front-heading-color |' . sanitize_hex_color($_POST['front-heading-color']) . '|'
                . ' front-info-color |' . sanitize_hex_color($_POST['front-info-color']) . '|'
                . ' backend-background-color |' . sanitize_text_field($_POST['backend-background-color']) . '|'
                . ' backend-border-color |' . sanitize_hex_color($_POST['backend-border-color']) . '|'
                . ' backend-title-color |' . sanitize_hex_color($_POST['backend-title-color']) . '|'
                . ' ||'
                . ' backend-info-color |' . sanitize_hex_color($_POST['backend-info-color']) . '|'
                . ' front-inner-border-color |' . sanitize_hex_color($_POST['front-inner-border-color']) . '|'
                . ' backend-inner-border-color |' . sanitize_hex_color($_POST['backend-inner-border-color']) . '|'
                . ' backend-button-color |' . sanitize_hex_color($_POST['backend-button-color']) . '|'
                . ' backend-button-background |' . sanitize_text_field($_POST['backend-button-background']) . '|'
                . ' backend-button-hover-color |' . sanitize_hex_color($_POST['backend-button-hover-color']) . '|'
                . ' backend-button-hover-background |' . sanitize_text_field($_POST['backend-button-hover-background']) . '|'
                . ' backend-icon-color |' . sanitize_hex_color($_POST['backend-icon-color']) . '|'
                . ' backend-icon-background |' . sanitize_text_field($_POST['backend-icon-background']) . '|'
                . ' flip-col |' . sanitize_text_field($_POST['flip-col']) . '|'
                . ' flip-width |' . sanitize_text_field($_POST['flip-width']) . '|'
                . ' flip-height |' . sanitize_text_field($_POST['flip-height']) . '|'
                . ' margin-top |' . sanitize_text_field($_POST['margin-top']) . '|'
                . ' margin-left |' . sanitize_text_field($_POST['margin-left']) . '|'
                . ' flip-open-tabs |' . sanitize_text_field($_POST['flip-open-tabs']) . '|'
                . ' oxilab-animation |' . sanitize_text_field($_POST['oxilab-animation']) . '|'
                . ' animation-duration |' . sanitize_text_field($_POST['animation-duration']) . '|'
                . ' flip-boxshow-color |' . sanitize_text_field($_POST['flip-boxshow-color']) . '|'
                . ' flip-boxshow-horizontal |' . sanitize_text_field($_POST['flip-boxshow-horizontal']) . '|'
                . ' flip-boxshow-vertical |' . sanitize_text_field($_POST['flip-boxshow-vertical']) . '|'
                . ' flip-boxshow-blur |' . sanitize_text_field($_POST['flip-boxshow-blur']) . '|'
                . ' flip-boxshow-spread |' . sanitize_text_field($_POST['flip-boxshow-spread']) . '|'
                . '  ||'
                . ' front-padding-top |' . sanitize_text_field($_POST['front-padding-top']) . '|'
                . ' front-padding-left |' . sanitize_text_field($_POST['front-padding-left']) . '|'
                . ' front-icon-height|' . sanitize_text_field($_POST['front-icon-height']) . '|'
                . ' front-icon-size |' . sanitize_text_field($_POST['front-icon-size']) . '|'
                . ' front-icon-width |' . sanitize_text_field($_POST['front-icon-width']) . '|'
                . ' front-icon-border-radius |' . sanitize_text_field($_POST['front-icon-border-radius']) . '|'
                . ' front-heading-size |' . sanitize_text_field($_POST['front-heading-size']) . '|'
                . ' front-heading-family |' . sanitize_text_field($_POST['front-heading-family']) . '|'
                . ' front-heding-style |' . sanitize_text_field($_POST['front-heding-style']) . '|'
                . ' front-heding-weight |' . sanitize_text_field($_POST['front-heding-weight']) . '|'
                . ' front-heding-text-align |' . sanitize_text_field($_POST['front-heding-text-align']) . '|'
                . ' front-heding-padding-top |' . sanitize_text_field($_POST['front-heding-padding-top']) . '|'
                . ' front-heding-padding-bottom |' . sanitize_text_field($_POST['front-heding-padding-bottom']) . '|'
                . ' front-heding-padding-left |' . sanitize_text_field($_POST['front-heding-padding-left']) . '|'
                . ' front-heding-padding-right |' . sanitize_text_field($_POST['front-heding-padding-right']) . '|'
                . ' backend-padding-top |' . sanitize_text_field($_POST['backend-padding-top']) . '|'
                . ' backend-padding-left |' . sanitize_text_field($_POST['backend-padding-left']) . '|'
                . ' ||'
                . ' backend-info-size |' . sanitize_text_field($_POST['backend-info-size']) . '|'
                . ' backend-info-family |' . sanitize_text_field($_POST['backend-info-family']) . '|'
                . ' backend-info-style |' . sanitize_text_field($_POST['backend-info-style']) . '|'
                . ' backend-info-weight |' . sanitize_text_field($_POST['backend-info-weight']) . '|'
                . ' backend-info-text-align |' . sanitize_text_field($_POST['backend-info-text-align']) . '|'
                . ' backend-info-padding-top |' . sanitize_text_field($_POST['backend-info-padding-top']) . '|'
                . ' backend-info-padding-bottom |' . sanitize_text_field($_POST['backend-info-padding-bottom']) . '|'
                . ' backend-info-padding-left |' . sanitize_text_field($_POST['backend-info-padding-left']) . '|'
                . ' backend-info-padding-right |' . sanitize_text_field($_POST['backend-info-padding-right']) . '|'
                . ' flip-col-border-size |' . sanitize_text_field($_POST['flip-col-border-size']) . '|'
                . ' flip-col-border-style |' . sanitize_text_field($_POST['flip-col-border-style']) . '|'
                . ' flip-border-radius |' . sanitize_text_field($_POST['flip-border-radius']) . '|'
                . ' flip-backend-border-size |' . sanitize_text_field($_POST['flip-backend-border-size']) . '|'
                . ' flip-backend-border-style |' . sanitize_text_field($_POST['flip-backend-border-style']) . '|'
                . ' front-icon-padding-top-bottom |' . sanitize_text_field($_POST['front-icon-padding-top-bottom']) . '|'
                . ' front-icon-padding-left-right |' . sanitize_text_field($_POST['front-icon-padding-left-right']) . '|'
                . ' front-info-size |' . sanitize_text_field($_POST['front-info-size']) . '|'
                . ' front-info-family |' . sanitize_text_field($_POST['front-info-family']) . '|'
                . ' front-info-style |' . sanitize_text_field($_POST['front-info-style']) . '|'
                . ' front-info-weight |' . sanitize_text_field($_POST['front-info-weight']) . '|'
                . ' front-info-text-align |' . sanitize_text_field($_POST['front-info-text-align']) . '|'
                . ' front-info-padding-top |' . sanitize_text_field($_POST['front-info-padding-top']) . '|'
                . ' front-info-padding-bottom |' . sanitize_text_field($_POST['front-info-padding-bottom']) . '|'
                . ' front-info-padding-left |' . sanitize_text_field($_POST['front-info-padding-left']) . '|'
                . ' front-info-padding-right |' . sanitize_text_field($_POST['front-info-padding-right']) . '|'
                . ' backend-heading-size |' . sanitize_text_field($_POST['backend-heading-size']) . '|'
                . ' backend-heading-family |' . sanitize_text_field($_POST['backend-heading-family']) . '|'
                . ' backend-heading-style |' . sanitize_text_field($_POST['backend-heading-style']) . '|'
                . ' backend-heading-weight |' . sanitize_text_field($_POST['backend-heading-weight']) . '|'
                . ' backend-heading-text-align |' . sanitize_text_field($_POST['backend-heading-text-align']) . '|'
                . ' backend-heading-padding-top |' . sanitize_text_field($_POST['backend-heading-padding-top']) . '|'
                . ' backend-heading-padding-bottom |' . sanitize_text_field($_POST['backend-heading-padding-bottom']) . '|'
                . ' backend-heading-padding-left |' . sanitize_text_field($_POST['backend-heading-padding-left']) . '|'
                . ' backend-heading-padding-right |' . sanitize_text_field($_POST['backend-heading-padding-right']) . '|'
                . '  ||'
                . ' ||'
                . ' flip-col-inner-border-size |' . sanitize_text_field($_POST['flip-col-inner-border-size']) . '|'
                . ' flip-col-inner-border-style |' . sanitize_text_field($_POST['flip-col-inner-border-style']) . '|'
                . ' flip-inner-border-radius |' . sanitize_text_field($_POST['flip-inner-border-radius']) . '|'
                . ' front-inner-padding-top |' . sanitize_text_field($_POST['front-inner-padding-top']) . '|'
                . ' front-inner-padding-left |' . sanitize_text_field($_POST['front-inner-padding-left']) . '|'
                . ' flip-backend-inner-border-size |' . sanitize_text_field($_POST['flip-backend-inner-border-size']) . '|'
                . ' flip-backend-inner-border-style |' . sanitize_text_field($_POST['flip-backend-inner-border-style']) . '|'
                . ' flip-backend-inner-border-radius |' . sanitize_text_field($_POST['flip-backend-inner-border-radius']) . '|'
                . ' front-backend-inner-padding-top |' . sanitize_text_field($_POST['front-backend-inner-padding-top']) . '|'
                . ' front-backend-inner-padding-left |' . sanitize_text_field($_POST['front-backend-inner-padding-left']) . '|'
                . ' backend-icon-size |' . sanitize_text_field($_POST['backend-icon-size']) . '|'
                . ' backend-icon-width |' . sanitize_text_field($_POST['backend-icon-width']) . '|'
                . ' backend-icon-height|' . sanitize_text_field($_POST['backend-icon-height']) . '|'
                . ' backend-icon-padding-top-bottom |' . sanitize_text_field($_POST['backend-icon-padding-top-bottom']) . '|'
                . ' backend-icon-padding-left-right |' . sanitize_text_field($_POST['backend-icon-padding-left-right']) . '|'
                . ' backend-icon-border-radius |' . sanitize_text_field($_POST['backend-icon-border-radius']) . '|'
                . ' backend-button-size |' . sanitize_text_field($_POST['backend-button-size']) . '|'
                . ' backend-button-family |' . sanitize_text_field($_POST['backend-button-family']) . '|'
                . ' backend-button-style |' . sanitize_text_field($_POST['backend-button-style']) . '|'
                . ' backend-button-weight |' . sanitize_text_field($_POST['backend-button-weight']) . '|'
                . ' backend-button-info-padding-top|' . sanitize_text_field($_POST['backend-button-info-padding-top']) . '|'
                . ' backend-button-info-padding-left |' . sanitize_text_field($_POST['backend-button-info-padding-left']) . '|'
                . ' backend-button-border-radius |' . sanitize_text_field($_POST['backend-button-border-radius']) . '|'
                . ' backend-button-text-align |' . sanitize_text_field($_POST['backend-button-text-align']) . '|'
                . ' backend-info-margin-top |' . sanitize_text_field($_POST['backend-info-margin-top']) . '|'
                . ' backend-info-margin-bottom |' . sanitize_text_field($_POST['backend-info-margin-bottom']) . '|'
                . ' backend-info-margin-left |' . sanitize_text_field($_POST['backend-info-margin-left']) . '|'
                . ' backend-info-margin-right |' . sanitize_text_field($_POST['backend-info-margin-right']) . '|'
                . ' custom-css |' . sanitize_text_field($_POST['custom-css']) . '|';
        return $data;
    }

    public function register_child() {
        $data = ' flip-box-front-title {#}|{#}' . $this->admin_special_charecter($_POST['flip-box-front-title']) . '{#}|{#}'
                . ' flip-box-front-icons {#}|{#}' . sanitize_text_field($_POST['flip-box-front-icons']) . '{#}|{#}'
                . ' flip-box-image-upload-url-01 {#}|{#}' . sanitize_text_field($_POST['flip-box-image-upload-url-01']) . '{#}|{#}'
                . ' flip-box-backend-desc {#}|{#}' . $this->admin_special_charecter($_POST['flip-box-backend-desc']) . '{#}|{#}'
                . ' flip-box-backend-button-text{#}|{#}' . $this->admin_special_charecter($_POST['flip-box-backend-button-text']) . '{#}|{#}'
                . ' flip-box-backend-link {#}|{#}' . sanitize_text_field($_POST['flip-box-backend-link']) . '{#}|{#}'
                . ' flip-box-image-upload-url-02 {#}|{#}' . sanitize_text_field($_POST['flip-box-image-upload-url-02']) . '{#}|{#}'
                . ' flip-box-font-desc {#}|{#}' . $this->admin_special_charecter($_POST['flip-box-font-desc']) . '{#}|{#}'
                . ' flip-box-backend-title {#}|{#}' . $this->admin_special_charecter($_POST['flip-box-backend-title']) . '{#}|{#}'
                . ' flip-box-backend-icons {#}|{#}' . sanitize_text_field($_POST['flip-box-backend-icons']) . '{#}|{#}';
        return $data;
    }

    public function modal_form_data() {
        ?>
        <div class="modal-header">
            <h5 class="modal-title">Front Settings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row">
        <?php
         $this->oxilab_flip_box_admin_input_text('flip-box-front-title', $this->child_editable[1], 'Front Title', 'Add your flip front title.');
         $this->oxilab_flip_box_admin_input_text_area('flip-box-font-desc', $this->child_editable[15], 'Font Info:', 'Add font Info text unless make it blank.');
         $this->oxilab_flip_box_admin_input_text('flip-box-front-icons', $this->child_editable[3], 'Number', 'Add your Serial Number, Use Any number for knowing the serial');
         $this->image_upload('flip-box-image-upload-url-01', $this->child_editable[5], 'Front Image', 'Add or modify your front image.');
        ?>                                           
        </div>
        <div class="modal-header">
            <h5 class="modal-title">Backend Settings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body row">
        <?Php
         $this->oxilab_flip_box_admin_input_text('flip-box-backend-title', $this->child_editable[17], 'Backend Title', 'Add your flip backend title.');
         $this->oxilab_flip_box_admin_input_text_area('flip-box-backend-desc', $this->child_editable[7], 'Backend Info:', 'Add backend Info text unless make it blank.');
         $this->oxilab_flip_box_admin_input_icon('flip-box-backend-icons', $this->child_editable[19], 'Backend Icon', 'Add your backend icon, Use Font-Awesome class name. As example fab fa-facebook');
         $this->oxilab_flip_box_admin_input_text('flip-box-backend-button-text', $this->child_editable[9], 'Backend Button Text', 'Add your backend button text.');
         $this->oxilab_flip_box_admin_input_text('flip-box-backend-link', $this->child_editable[11], 'Link', 'Add your desire link or url unless make it blank');
         $this->image_upload('flip-box-image-upload-url-02', $this->child_editable[13], 'Backend Background Image', 'Add or Modify Your Backend Background Image. Unless make it blank.');
        ?>                                            
        </div>
            <?php
        }

        public function register_controls() {
            ?>
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-5">
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        General Settings
                    </div> 
                    <?php
                     $this->oxilab_flip_box_flip_type_effects_type($this->style[1], $this->style[3]);
                     $this->oxilab_flip_box_admin_col_data('flip-col', $this->style[43], 'Item per Rows', 'How many item shows in single Rows');
                     $this->oxilab_flip_box_admin_number('flip-width', $this->style[45], '1', 'Width', 'Give your Filp Width');
                     $this->oxilab_flip_box_admin_number('flip-height', $this->style[47], '1', 'Height', 'Give your Flip Height');
                     $this->oxilab_flip_box_admin_number('flip-border-radius', $this->style[129], '1', 'Border Radius', 'Set your flip Border Radius');
                    ?>    
                </div> 
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Optional Settings
                    </div>  
                    <?php
                     $this->oxilab_flip_box_admin_number_double('margin-top', $this->style[49], 'margin-left', $this->style[51], 'Margin', 'Set your Margin top bottom and left right');
                     $this->oxilab_flip_box_admin_true_false('flip-open-tabs', $this->style[53], 'New tabs', '_blank', 'Normal', '', 'Link Open', 'Dow you want to open link at same Tabs or new Windows');
                    ?> 
                </div>
            </div>
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Animation
                    </div>
                    <?php
                     $this->oxilab_flip_box_admin_animation_select($this->style[55]);
                     $this->oxilab_flip_box_admin_number('animation-duration', $this->style[57], '0.1', 'Animation Duration', 'Give your Animation Duration into Second');
                    ?> 
                </div> 
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Box Shadow
                    </div>
                    <?php
                     $this->oxilab_flip_box_admin_color('flip-boxshow-color', $this->style[59], 'rgba', 'Color', 'Give your Box Shadow Color', '', '');
                     $this->oxilab_flip_box_admin_number_double('flip-boxshow-horizontal', $this->style[61], 'flip-boxshow-vertical', $this->style[63], 'Shadow Length', 'Giveyour Box Shadow lenth as horizontal and vertical');
                     $this->oxilab_flip_box_admin_number_double('flip-boxshow-blur', $this->style[65], 'flip-boxshow-spread', $this->style[67], 'Shadow Radius', 'Giveyour Box Shadow Radius as Blur and Spread');
                    ?> 
                </div> 
            </div>
        </div>
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-4">
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        General Settings
                    </div> 
                    <?php
                     $this->oxilab_flip_box_admin_color('front-background-color', $this->style[5], 'rgba', 'Background Color', 'Set your Front Background Color', 'background-color', '.oxilab-flip-box-body-' . $this->oxiid . ' .oxilab-flip-box-front');
                     $this->oxilab_flip_box_admin_number_double('front-padding-top', $this->style[71], 'front-padding-left', $this->style[73], 'Padding', 'Set your Front Padding as Top Bottom and Left Right');
                     $this->oxilab_flip_box_admin_number_double('front-inner-padding-top', $this->style[185], 'front-inner-padding-left', $this->style[187], 'Inner Padding', 'Set your Front Inner Padding as Top Bottom and Left Right');
                     $this->oxilab_flip_box_admin_color('front-border-color', $this->style[7], '', 'Border Color', 'Set your Border Color', 'border-color', '.oxilab-flip-box-body-' . $this->oxiid . ' .oxilab-flip-box-front');
                     $this->oxilab_flip_box_admin_border('flip-col-border-size', $this->style[125], 'flip-col-border-style', $this->style[127], 'Border Size', 'Set your front border size with different style');
                     $this->oxilab_flip_box_admin_border('flip-col-inner-border-size', $this->style[179], 'flip-col-inner-border-style', $this->style[181], 'Inner Border Size', 'Set your front border size with different style');
                     $this->oxilab_flip_box_admin_color('front-inner-border-color', $this->style[27], '', 'Inner Border Color', 'Set your Inner Border Color', 'border-color', '.oxilab-flip-box-' . $this->oxiid . '');
                     $this->oxilab_flip_box_admin_number('flip-inner-border-radius', $this->style[183], '1', 'Inner Border Radius', 'Set your flip Inner Border Radius');
                    ?>    
                </div> 
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Number Settings
                    </div>  
                    <?php
                     $this->oxilab_flip_box_admin_number('front-icon-size', $this->style[77], '1', 'Number Size', 'Set your Number Font Size');
                     $this->oxilab_flip_box_admin_color('front-icon-color', $this->style[9], '', 'Icon Color', 'Set your Icon Color', 'color', '.oxilab-flip-box-' . $this->oxiid . '-data2 .oxilab-icon-data .oxilab-span');
                     $this->oxilab_flip_box_admin_color('front-icon-background', $this->style[11], 'rgba', 'Icon Background', 'Set your icon Background Color', 'background-color', '.oxilab-flip-box-' . $this->oxiid . '-data2');
                     $this->oxilab_flip_box_admin_number('front-icon-width', $this->style[79], '1', 'Number width', 'Set your Number Width and Height Size.');
                     $this->oxilab_flip_box_admin_number('front-icon-height', $this->style[75], '1', 'Number Box Hight', 'Set your Number Box height, start with the top.');
                     $this->oxilab_flip_box_admin_number_double('front-icon-padding-top-bottom', $this->style[135], 'front-icon-padding-left-right', $this->style[137], 'Icon Padding', 'Set your Number Padding as Top Bottom and Left Right');
                     $this->oxilab_flip_box_admin_number('front-icon-border-radius', $this->style[81], '1', 'Border Radius', 'Set Your Number Border Radius');
                    ?> 
                </div>
            </div>
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Heading Settings
                    </div>
                    <?php
                     $this->oxilab_flip_box_admin_number('front-heading-size', $this->style[83], '1', 'Font Size', 'Set your front Heading Font Size');
                     $this->oxilab_flip_box_admin_color('front-heading-color', $this->style[13], '', 'Heading Color', 'Set your Front Heading Color', 'color', '.oxilab-flip-box-' . $this->oxiid . '-data .oxilab-heading');
                     $this->oxilab_flip_box_admin_font_family('front-heading-family', $this->style[85], 'Font Family', 'Give your Prepared Font from our Google Font List');
                     $this->oxilab_flip_box_admin_font_style('front-heding-style', $this->style[87], 'Font Style', 'Set your Heading Font Style');
                     $this->oxilab_flip_box_admin_font_weight('front-heding-weight', $this->style[89], 'Font Weight', 'Give your Front Heading Font Weight');
                     $this->oxilab_flip_box_admin_text_align('front-heding-text-align', $this->style[91], 'Text Align', 'Give your Heading Text Align');
                     $this->oxilab_flip_box_admin_number_double('front-heding-padding-top', $this->style[93], 'front-heding-padding-bottom', $this->style[95], 'Padding Top Bottom', 'Set Your Heading  Padding Top and Bottom');
                     $this->oxilab_flip_box_admin_number_double('front-heding-padding-left', $this->style[97], 'front-heding-padding-right', $this->style[99], 'Padding Left Right', 'Set Your Heading  Padding Left and Right');
                    ?> 
                </div> 
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Information Settings
                    </div>
                    <?php
                     $this->oxilab_flip_box_admin_number('front-info-size', $this->style[139], '1', 'Font Size', 'Set your front Info Font Size');
                     $this->oxilab_flip_box_admin_color('front-info-color', $this->style[15], '', 'Text Color', 'Set your Front Heading Color', 'color', '.oxilab-flip-box-' . $this->oxiid . '-data .oxilab-info');
                     $this->oxilab_flip_box_admin_font_family('front-info-family', $this->style[141], 'Font Family', 'Give your Prepared Font from our Google Font List');
                     $this->oxilab_flip_box_admin_font_style('front-info-style', $this->style[143], 'Font Style', 'Set your Info Font Style');
                     $this->oxilab_flip_box_admin_font_weight('front-info-weight', $this->style[145], 'Font Weight', 'Give your Front Info Font Weight');
                     $this->oxilab_flip_box_admin_text_align('front-info-text-align', $this->style[147], 'Text Align', 'Give your Info Text Align');
                     $this->oxilab_flip_box_admin_number_double('front-info-padding-top', $this->style[149], 'front-info-padding-bottom', $this->style[151], 'Padding Top Bottom', 'Set Your Info  Padding Top and Bottom');
                     $this->oxilab_flip_box_admin_number_double('front-info-padding-left', $this->style[153], 'front-info-padding-right', $this->style[155], 'Padding Left Right', 'Set Your Info  Padding Left and Right');
                    ?> 
                </div> 
            </div>
        </div>
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-3">
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        General Settings
                    </div> 
                    <?php
                     $this->oxilab_flip_box_admin_color('backend-background-color', $this->style[17], 'rgba', 'Background Color', 'Set your Backend Background Color', 'background-color', '.oxilab-flip-box-body-' . $this->oxiid . ' .oxilab-flip-box-back');
                     $this->oxilab_flip_box_admin_number_double('backend-padding-top', $this->style[101], 'backend-padding-left', $this->style[103], 'Padding', 'Set your Backend Padding as Top Bottom and Left Right');
                     $this->oxilab_flip_box_admin_number_double('front-backend-inner-padding-top', $this->style[195], 'front-backend-inner-padding-left', $this->style[197], 'Inner Padding', 'Set your backend Inner Padding as Top Bottom and Left Right');
                     $this->oxilab_flip_box_admin_border('flip-backend-border-size', $this->style[131], 'flip-backend-border-style', $this->style[133], 'Border Size', 'Set your backend border size with different style');
                     $this->oxilab_flip_box_admin_color('backend-border-color', $this->style[19], '', 'Border Color', 'Set your Border Color', 'border-color', '.oxilab-flip-box-body-' . $this->oxiid . ' .oxilab-flip-box-back');
                     $this->oxilab_flip_box_admin_border('flip-backend-inner-border-size', $this->style[189], 'flip-backend-inner-border-style', $this->style[191], 'Inner Border Size', 'Set your Backend border size with different style');
                     $this->oxilab_flip_box_admin_color('backend-inner-border-color', $this->style[29], '', 'Inner Border Color', 'Set your Inner Border Color', 'border-color', '.oxilab-flip-box-back-' . $this->oxiid . '');
                     $this->oxilab_flip_box_admin_number('flip-backend-inner-border-radius', $this->style[193], '1', 'Inner Border Radius', 'Set your Backend flip Inner Border Radius');
                    ?>    
                </div> 
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Icon Settings
                    </div>  
                    <?php
                     $this->oxilab_flip_box_admin_number('backend-icon-size', $this->style[199], '1', 'Icon Size', 'Set your Icon Font Size');
                     $this->oxilab_flip_box_admin_color('backend-icon-color', $this->style[39], '', 'Icon Color', 'Set your Icon Color', 'color', '.oxilab-flip-box-back-' . $this->oxiid . '-data2 .oxilab-icon-data [class^=\'fa\']');
                     $this->oxilab_flip_box_admin_color('backend-icon-background', $this->style[41], 'rgba', 'Icon Background', 'Set your icon Background Color', 'background-color', '.oxilab-flip-box-back-' . $this->oxiid . '-data2');
                     $this->oxilab_flip_box_admin_number('backend-icon-width', $this->style[201], '1', 'Icon width', 'Set your Icon Width and Height Size.');
                     $this->oxilab_flip_box_admin_number('backend-icon-height', $this->style[203], '1', 'Icon Box Hight', 'Set your Icon Box height, start with the top.');
                     $this->oxilab_flip_box_admin_number_double('backend-icon-padding-top-bottom', $this->style[205], 'backend-icon-padding-left-right', $this->style[207], 'Icon Padding', 'Set your Icon Padding as Top Bottom and Left Right');
                     $this->oxilab_flip_box_admin_number('backend-icon-border-radius', $this->style[209], '1', 'Border Radius', 'Set Your Icon Border Radius');
                    ?> 
                </div>
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Heading Settings
                    </div>
                    <?php
                     $this->oxilab_flip_box_admin_number('backend-heading-size', $this->style[157], '1', 'Font Size', 'Set your backend Heading Font Size');
                     $this->oxilab_flip_box_admin_color('backend-title-color', $this->style[21], '', 'Heading Color', 'Set your Backend title Color', 'color', '.oxilab-flip-box-back-' . $this->oxiid . '-data .oxilab-heading');
                     $this->oxilab_flip_box_admin_font_family('backend-heading-family', $this->style[159], 'Font Family', 'Give your Prepared Font from our Google Font List');
                     $this->oxilab_flip_box_admin_font_style('backend-heading-style', $this->style[161], 'Font Style', 'Set your Heading Font Style');
                     $this->oxilab_flip_box_admin_font_weight('backend-heading-weight', $this->style[163], 'Font Weight', 'Give your backend Heading Font Weight');
                     $this->oxilab_flip_box_admin_text_align('backend-heading-text-align', $this->style[165], 'Text Align', 'Give your Heading Text Align');
                     $this->oxilab_flip_box_admin_number_double('backend-heading-padding-top', $this->style[167], 'backend-heading-padding-bottom', $this->style[169], 'Padding Top Bottom', 'Set Your backend Heading  Padding Top and Bottom');
                     $this->oxilab_flip_box_admin_number_double('backend-heading-padding-left', $this->style[171], 'backend-heading-padding-right', $this->style[173], 'Padding Left Right', 'Set Your backend Heading  Padding Left and Right');
                    ?> 
                </div>
            </div>
            <div class="oxi-addons-col-6">
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Backend Info
                    </div>  
                    <?php
                     $this->oxilab_flip_box_admin_number('backend-info-size', $this->style[107], '1', 'Font Size', 'Set your Backend Info Font Size');
                     $this->oxilab_flip_box_admin_color('backend-info-color', $this->style[25], '', 'Text Color', 'Set your Backend Info Color', 'color', '.oxilab-flip-box-back-' . $this->oxiid . '-data .oxilab-info');
                     $this->oxilab_flip_box_admin_font_family('backend-info-family', $this->style[109], 'Font Family', 'Give your Prepared Font from our Google Font List');
                     $this->oxilab_flip_box_admin_font_style('backend-info-style', $this->style[111], 'Font Style', 'Set your Backend Info Font Style');
                     $this->oxilab_flip_box_admin_font_weight('backend-info-weight', $this->style[113], 'Font Weight', 'Give your Backend Info Font Weight');
                     $this->oxilab_flip_box_admin_text_align('backend-info-text-align', $this->style[115], 'Text Align', 'Give your Backend Info Text Align');
                     $this->oxilab_flip_box_admin_number_double('backend-info-padding-top', $this->style[117], 'backend-info-padding-bottom', $this->style[119], 'Padding Top Bottom', 'Set Your Backend Info  Padding Top and Bottom');
                     $this->oxilab_flip_box_admin_number_double('backend-info-padding-left', $this->style[121], 'backend-info-padding-right', $this->style[123], 'Padding Left Right', 'Set Your Backend Info  Padding Left and Right');
                    ?> 
                </div>    
                <div class="oxi-addons-content-div">
                    <div class="oxi-head">
                        Button Settings
                    </div>
                    <?php
                     $this->oxilab_flip_box_admin_number('backend-button-size', $this->style[211], '1', 'Font Size', 'Set your Backend Button Font Size');
                     $this->oxilab_flip_box_admin_color('backend-button-color', $this->style[31], '', 'Button Color', 'Set your Backend Button Color', 'color', '.oxilab-flip-box-back-' . $this->oxiid . '-data .oxilab-button-data');
                     $this->oxilab_flip_box_admin_color('backend-button-background', $this->style[33], 'rgba', 'Buton Background', 'Set your Backend Button Background Color', 'background-color', '.oxilab-flip-box-back-' . $this->oxiid . '-data .oxilab-button-data');
                     $this->oxilab_flip_box_admin_color('backend-button-hover-color', $this->style[35], '', 'Button Hover', 'Set your Backend Button Hover Color', 'color', '.oxilab-flip-box-back-' . $this->oxiid . '-data .oxilab-button-data:hover');
                     $this->oxilab_flip_box_admin_color('backend-button-hover-background', $this->style[37], 'rgba', 'Button Hover Background', 'Set your Backend Button Hover Background Color', 'background-color', '.oxilab-flip-box-back-' . $this->oxiid . '-data .oxilab-button-data:hover');
                     $this->oxilab_flip_box_admin_font_family('backend-button-family', $this->style[213], 'Font Family', 'Give your Prepared Font from our Google Font List');
                     $this->oxilab_flip_box_admin_font_style('backend-button-style', $this->style[215], 'Font Style', 'Set your Backend Button Font Style');
                     $this->oxilab_flip_box_admin_font_weight('backend-button-weight', $this->style[117], 'Font Weight', 'Give your Backend Button Font Weight');
                     $this->oxilab_flip_box_admin_number_double('backend-button-info-padding-top', $this->style[219], 'backend-button-info-padding-left', $this->style[221], 'Padding', 'Set Your Backend Button Padding Top Bottom and left Right');
                     $this->oxilab_flip_box_admin_number('backend-button-border-radius', $this->style[223], '1', 'Border Radius', 'Set your Backend Button Border Radius');
                     $this->oxilab_flip_box_admin_text_align('backend-button-text-align', $this->style[225], 'Text Align', 'Give your Backend Button Text Align');
                     $this->oxilab_flip_box_admin_number_double('backend-info-margin-top', $this->style[227], 'backend-info-margin-bottom', $this->style[229], 'Margin Top Bottom', 'Set Your Backend Info Margin Top and Bottom');
                     $this->oxilab_flip_box_admin_number_double('backend-info-margin-left', $this->style[231], 'backend-info-margin-right', $this->style[233], 'Margin Left Right', 'Set Your Backend Info Margin Left and Right');
                    ?> 
                </div> 
            </div>
        </div>    
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-2">
            <div class="col-xs-12 p-2">
                <div class="form-group">
                    <label for="custom-css" class="custom-css">Custom CSS:</label>
                    <textarea class="form-control" rows="4" id="custom-css" name="custom-css"><?php echo $this->style[235]; ?></textarea>
                    <small class="form-text text-muted">Add Your Custom CSS Unless make it blank.</small>
                </div>
            </div>

        </div>
        <div class="oxi-addons-tabs-content-tabs" id="oxilab-tabs-id-1">
            <?php
             $this->oxilab_flip_box_admin_support();
            ?>
        </div>
        <?php
    }

    public function Rearrange() {
        return ['tag' => 'title', 'id' => 1];
    }

}
