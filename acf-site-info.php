<?php 
/*
Feature Name:   ACF Fields: Site Information
Description:    Settings to keep the company or site details in one place to use throughout theme development
Dependencies:   ACF
*/

if( function_exists('acf_add_local_field_group') ):

/**
 * Site Information
 */
acf_add_local_field_group(array (
        'key' => 'group_540652e7b47b9',
        'title' => 'Site Information',
        'fields' => array (
                array (
                    'key' => 'field_5406561db1958',
                    'label' => 'Company Details',
                    'name' => '',
                    'prefix' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                ),
                array (
                    'key' => 'field_5406530bb1951',
                    'label' => 'Brand Name',
                    'name' => 'brand_name',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'The full company/business or brand name <strong style="float:right;">(ACF: brand_name)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => 'Brand or Company Name',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_54065673b195b',
                    'label' => 'Email',
                    'name' => 'email',
                    'prefix' => '',
                    'type' => 'email',
                    'instructions' => 'Enter the email to be publicly displayed <strong style="float:right;">(ACF: email)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => 'admin@mycompany.com',
                    'prepend' => '',
                    'append' => '',
                ),
                array (
                    'key' => 'field_540653a7b1952',
                    'label' => 'Phone',
                    'name' => 'phone',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'Enter the main phone number <strong style="float:right;">(ACF: phone)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => '123.456.7890',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 20,
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_5406542bb1953',
                    'label' => 'Alt Phone',
                    'name' => 'alt_phone',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'Enter the alternative phone number <strong style="float:right;">(ACF: alt_phone)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => '987.654.3210',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => 20,
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_540654a3b1954',
                    'label' => 'Street Address',
                    'name' => 'street_address',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'Enter the street address of the place or business <strong style="float:right;">(ACF: street_address)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => '777 N. Calvary Rd',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_54065509b1955',
                    'label' => 'City',
                    'name' => 'city',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'Enter the city of the place or business <strong style="float:right;">(ACF: city)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => 'Los Angeles',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_540655ccb1956',
                    'label' => 'State',
                    'name' => 'state',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'Enter the state of the place or business <strong style="float:right;">(ACF: state)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => 'CA',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_540655eab1957',
                    'label' => 'Zip Code',
                    'name' => 'zip_code',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => 'Enter the zip code of the place or business <strong style="float:right;">(ACF: zip_code)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => 90210,
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array (
                    'key' => 'field_eh9813wg87wetr',
                    'label' => 'Scripts',
                    'name' => '',
                    'prefix' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                ),
                array (
                    'key' => 'field_5625dfb37657d',
                    'label' => 'Tracking Scripts Position',
                    'name' => 'tracking_scripts_position',
                    'type' => 'select',
                    'instructions' => 'Select where/when you want the tracking scripts deployed',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array (
                        'wp_head' => 'Header',
                        'wp_footer' => 'Footer',
                    ),
                    'default_value' => array (
                        'wp_footer' => 'wp_footer',
                    ),
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'ajax' => 0,
                    'placeholder' => '',
                    'disabled' => 0,
                    'readonly' => 0,
                ),
                array (
                    'key' => 'field_987gh198732',
                    'label' => 'Tracking Scripts',
                    'name' => 'tracking_scripts',
                    'prefix' => '',
                    'type' => 'textarea',
                    'instructions' => 'Insert the google analytics tracking code to be used on the site <strong style="float:right;">(ACF: tracking_scripts)</strong>',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'default_value' => '',
                    'placeholder' => '<script>
(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,"script","//www.google-analytics.com/analytics.js","ga");

ga("create", "UA-XXXXXXXX-X":, "auto");
ga("send", "pageview");

</script>',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                    'rows' => '25',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
        ),
        'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'site-info',
                    ),
                ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
));

endif;
?>