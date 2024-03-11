<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 'email1',
          1 => 'phone_mobile',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'company_c',
            'label' => 'LBL_COMPANY',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_c',
            'label' => 'LBL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'trip_charge_distance_c',
            'label' => 'LBL_TRIP_CHARGE_DISTANCE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'city_c',
            'label' => 'LBL_CITY',
          ),
          1 => 
          array (
            'name' => 'state_c',
            'label' => 'LBL_STATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_postalcode',
            'comment' => 'Postal code for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reviews_from_google_c',
            'studio' => 'visible',
            'label' => 'LBL_REVIEWS_FROM_GOOGLE',
          ),
          1 => 
          array (
            'name' => 'reviews_from_thumbtack_c',
            'studio' => 'visible',
            'label' => 'LBL_REVIEWS_FROM_THUMBTACK',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'reviews_from_yelp_c',
            'studio' => 'visible',
            'label' => 'LBL_REVIEWS_FROM_YELP',
          ),
          1 => 
          array (
            'name' => 'reviews_from_angi_c',
            'studio' => 'visible',
            'label' => 'LBL_REVIEWS_FROM_ANGI',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'pc_or_apple_c',
            'label' => 'LBL_PC_OR_APPLE',
          ),
          1 => 
          array (
            'name' => 'device_c',
            'label' => 'LBL_DEVICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'job_type_or_request_c',
            'label' => 'LBL_JOB_TYPE_OR_REQUEST',
          ),
          1 => 
          array (
            'name' => 'industry_c',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'job_type_c',
            'label' => 'LBL_JOB_TYPE',
          ),
          1 => 
          array (
            'name' => 'client_type_c',
            'label' => 'LBL_CLIENT_TYPE',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'status',
          1 => 'lead_source',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status_description',
          ),
          1 => 
          array (
            'name' => 'lead_source_description',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'lead_number_c',
            'label' => 'LBL_LEAD_NUMBER',
          ),
          1 => 
          array (
            'name' => 'lead_cost_c',
            'label' => 'LBL_LEAD_COST',
          ),
        ),
        3 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'lead_credit_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_CREDIT',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
