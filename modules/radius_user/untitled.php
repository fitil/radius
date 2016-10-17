'profile_active' = array(
      'field_name' => 'profile_active',
      'label' => $t('Active(cheked)/Blocked(uncheked)'),
      'description' => $t('Specify Active(cheked)/Blocked(uncheked) User profile.'),
      'widget' => array(
        'type' => 'options_onoff',
        'settings' => array(
        'allowed_values' => array(
          '0' => t('Blocked'),
          '1' => t('Active'),
        ),
        'default_value' => array(array('value' => 1)),
      ),
    ),
    'profile_payment_method' = array(
      'field_name' => 'profile_payment_method',
      'label' => $t('User payment method'),
      'description' => $t('Select User payment method'),
      'widget' => array(
        'type' => 'options_select',
        'settings' => array(),
      ),
    ),




'profile_active' => array(
      'field_name' => 'profile_active',
      'type' => 'list_boolean',
      'cardinality' => 1,
      'translatable' => FALSE,

    ),
    'profile_payment_method' => array(
      'field_name' => 'profile_payment_method',
      'type' => 'list_text',
      'cardinality' => 1,
      'translatable' => FALSE,
    ),
