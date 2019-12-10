var styleid = jQuery('#style-id').val();
jQuery("#flip-col").on("change", function () {
    jQuery(".oxilab-flip-box-padding-" + styleid + "").removeClass("oxilab-flip-box-col-1");
    jQuery(".oxilab-flip-box-padding-" + styleid + "").removeClass("oxilab-flip-box-col-2");
    jQuery(".oxilab-flip-box-padding-" + styleid + "").removeClass("oxilab-flip-box-col-3");
    jQuery(".oxilab-flip-box-padding-" + styleid + "").removeClass("oxilab-flip-box-col-4");
    jQuery(".oxilab-flip-box-padding-" + styleid + "").removeClass("oxilab-flip-box-col-5");
    jQuery(".oxilab-flip-box-padding-" + styleid + "").removeClass("oxilab-flip-box-col-6");
    jQuery(".oxilab-flip-box-padding-" + styleid + "").addClass(jQuery(this).val());
});
jQuery("#flip-width").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-body-" + styleid + "{max-width: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
    var intvalue = parseInt(jQuery(this).val(), 10);
    var intvalue2 = parseInt(jQuery("#flip-height").val(), 10);
    var value = (intvalue2 / intvalue) * 100;
    jQuery("<style type='text/css'> .oxilab-flip-box-body-" + styleid + ":after{padding-bottom: " + value + "%; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-height").on("change", function () {
    var intvalue = parseInt(jQuery("#flip-width").val(), 10);
    var intvalue2 = parseInt(jQuery(this).val(), 10);
    var value = (intvalue2 / intvalue) * 100;
    jQuery("<style type='text/css'> .oxilab-flip-box-body-" + styleid + ":after{padding-bottom: " + value + "%; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{border-radius: " + jQuery(this).val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{border-radius: " + jQuery(this).val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#margin-top").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-padding-" + styleid + "{padding: " + jQuery(this).val() + "px " + jQuery("#margin-left").val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#margin-left").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-padding-" + styleid + "{padding: " + jQuery("#margin-top").val() + "px " + jQuery(this).val() + "px;} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-open-tabs-yes").on("change", function () {
    var data = "<strong>Link Open</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#flip-open-tabs-no").on("change", function () {
    var data = "<strong>Link Open</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-animation").on("change", function () {
    var data = "<strong>Animation</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#animation-duration").on("change", function () {
    var data = "<strong>Animation Duration</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#flip-boxshow-color").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery(this).val() + ";} </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery(this).val() + ";} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-boxshow-horizontal").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{box-shadow: " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{box-shadow: " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-boxshow-vertical").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-boxshow-blur").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-spread").val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-boxshow-spread").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{box-shadow: " + jQuery("#flip-boxshow-horizontal").val() + "px " + jQuery("#flip-boxshow-vertical").val() + "px " + jQuery("#flip-boxshow-blur").val() + "px " + jQuery(this).val() + "px " + jQuery("#flip-boxshow-color").val() + ";} </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-font-border-size").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{border-width: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-font-border-style").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "{border-style: " + jQuery(this).val() + "; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#front-icon-size").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "-data .oxilab-icon-data .oxi-icons{font-size: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#front-icon-width").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "-data .oxilab-icon-data{width: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "-data .oxilab-icon-data{height: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "-data .oxilab-icon-data .oxi-icons{line-height: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#front-icon-padding-top-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "-data .oxilab-icon{padding: " + jQuery(this).val() + "px " + jQuery("#front-icon-padding-left-right").val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#front-icon-padding-left-right").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-" + styleid + "-data .oxilab-icon{padding: " + jQuery("#front-icon-padding-top-bottom").val() + "px " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-backend-border-size").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{border-width: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#flip-backend-border-style").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + "{border-style: " + jQuery(this).val() + "; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#backend-icon-size").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + " .oxilab-icon-data .oxi-icons{font-size: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#backend-icon-width").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + " .oxilab-icon-data{width: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + " .oxilab-icon-data{height: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + " .oxilab-icon-data .oxi-icons{line-height: " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#backend-icon-padding-top-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + " .oxilab-icon{padding: " + jQuery(this).val() + "px " + jQuery("#front-icon-padding-left-right").val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});
jQuery("#backend-icon-padding-left-right").on("change", function () {
    jQuery("<style type='text/css'> .oxilab-flip-box-back-" + styleid + " .oxilab-icon{padding: " + jQuery("#front-icon-padding-top-bottom").val() + "px " + jQuery(this).val() + "px; } </style>").appendTo("#oxi-addons-preview-data");
});