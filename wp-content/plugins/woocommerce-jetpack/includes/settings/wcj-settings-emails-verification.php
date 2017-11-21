<?php
/**
 * Booster for WooCommerce - Settings - Email Verification
 *
 * @version 3.1.0
 * @since   2.8.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

return array(
	array(
		'title'    => __( 'General Options', 'woocommerce-jetpack' ),
		'type'     => 'title',
		'id'       => 'wcj_emails_verification_general_options',
	),
	array(
		'title'    => __( 'Skip Email Verification for User Roles', 'woocommerce-jetpack' ),
		'type'     => 'multiselect',
		'options'  => wcj_get_user_roles_options(),
		'id'       => 'wcj_emails_verification_skip_user_roles',
		'default'  => 'administrator',
		'class'    => 'chosen_select',
	),
	array(
		'title'    => __( 'Enable Email Verification for Already Registered Users', 'woocommerce-jetpack' ),
		'desc'     => __( 'Enable', 'woocommerce-jetpack' ),
		'desc_tip' => __( 'If enabled, all your current users will have to verify their emails when logging to your site.', 'woocommerce-jetpack' ),
		'type'     => 'checkbox',
		'id'       => 'wcj_emails_verification_already_registered_enabled',
		'default'  => 'no',
	),
	array(
		'title'    => __( 'Redirect to "My Account" Page After Successful Verification', 'woocommerce-jetpack' ),
		'desc'     => __( 'Enable', 'woocommerce-jetpack' ),
		'type'     => 'checkbox',
		'id'       => 'wcj_emails_verification_redirect_on_success',
		'default'  => 'yes',
	),
	array(
		'type'     => 'sectionend',
		'id'       => 'wcj_emails_verification_general_options',
	),
	array(
		'title'    => __( 'Messages', 'woocommerce-jetpack' ),
		'type'     => 'title',
		'id'       => 'wcj_emails_verification_messages_options',
	),
	array(
		'title'    => __( 'Message - Success', 'woocommerce-jetpack' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_success_message',
		'default'  => __( '<strong>Success:</strong> Your account has been activated!', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
	),
	array(
		'title'    => __( 'Message - Error', 'woocommerce-jetpack' ),
		'desc_tip' => sprintf( __( 'Replaced value: %s', 'woocommerce-jetpack' ), '%resend_verification_url%' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_error_message',
		'default'  => __( 'Your account has to be activated before you can login. You can resend email with verification link by clicking <a href="%resend_verification_url%">here</a>.', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
	),
	array(
		'title'    => __( 'Message - Failed', 'woocommerce-jetpack' ),
		'desc_tip' => sprintf( __( 'Replaced value: %s', 'woocommerce-jetpack' ), '%resend_verification_url%' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_failed_message',
		'default'  => __( '<strong>Error:</strong> Activation failed, please contact our administrator. You can resend email with verification link by clicking <a href="%resend_verification_url%">here</a>.', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
	),
	array(
		'title'    => __( 'Message - Activate', 'woocommerce-jetpack' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_activation_message',
		'default'  => __( 'Thank you for your registration. Your account has to be activated before you can login. Please check your email.', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
	),
	array(
		'title'    => __( 'Message - Resend', 'woocommerce-jetpack' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_email_resend_message',
		'default'  => __( '<strong>Success:</strong> Your activation email has been resend. Please check your email.', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
	),
	array(
		'type'     => 'sectionend',
		'id'       => 'wcj_emails_verification_messages_options',
	),
	array(
		'title'    => __( 'Email Options', 'woocommerce-jetpack' ),
		'type'     => 'title',
		'id'       => 'wcj_emails_verification_email_options',
	),
	array(
		'title'    => __( 'Email Subject', 'woocommerce-jetpack' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_email_subject',
		'default'  => __( 'Please activate your account', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
		'desc'     => apply_filters( 'booster_get_message', '', 'desc' ),
		'custom_attributes' => apply_filters( 'booster_get_message', '', 'readonly' ),
	),
	array(
		'title'    => __( 'Email Content', 'woocommerce-jetpack' ),
		'desc_tip' => sprintf( __( 'Replaced value: %s', 'woocommerce-jetpack' ), '%verification_url%' ),
		'type'     => 'custom_textarea',
		'id'       => 'wcj_emails_verification_email_content',
		'default'  => __( 'Please click the following link to verify your email:<br><br><a href="%verification_url%">%verification_url%</a>', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;height:150px;',
		'desc'     => apply_filters( 'booster_get_message', '', 'desc' ),
		'custom_attributes' => apply_filters( 'booster_get_message', '', 'readonly' ),
	),
	array(
		'title'    => __( 'Email Template', 'woocommerce-jetpack' ),
		'desc_tip' => __( 'Possible values: Plain, WooCommerce.', 'woocommerce-jetpack' ),
		'id'       => 'wcj_emails_verification_email_template',
		'type'     => 'select',
		'default'  => 'plain',
		'options'  => array(
			'plain' => __( 'Plain', 'woocommerce-jetpack' ),
			'wc'    => __( 'WooCommerce', 'woocommerce-jetpack' ),
		),
		'desc'     => apply_filters( 'booster_get_message', '', 'desc' ),
		'custom_attributes' => apply_filters( 'booster_get_message', '', 'disabled' ),
	),
	array(
		'desc_tip' => __( 'If WooCommerce template is selected, set email heading here.', 'woocommerce-jetpack' ),
		'id'       => 'wcj_emails_verification_email_template_wc_heading',
		'type'     => 'custom_textarea',
		'default'  => __( 'Activate your account', 'woocommerce-jetpack' ),
		'css'      => 'width:66%;min-width:300px;',
		'desc'     => apply_filters( 'booster_get_message', '', 'desc' ),
		'custom_attributes' => apply_filters( 'booster_get_message', '', 'readonly' ),
	),
	array(
		'type'     => 'sectionend',
		'id'       => 'wcj_emails_verification_email_options',
	),
);