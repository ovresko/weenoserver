<?php
 return array (
  'name' => 'favorite',
  'label' => 'Favorite',
  '_id' => 'favorite5e79199e6faa1',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'user',
      'label' => '',
      'type' => 'account-link',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
    1 => 
    array (
      'name' => 'business',
      'label' => '',
      'type' => 'collectionlink',
      'default' => '',
      'info' => '',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
        'link' => 'business',
        'display' => 'fieldname',
        'multiple' => false,
        'limit' => false,
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1584994718,
  '_modified' => 1585001577,
  'color' => '',
  'acl' => 
  array (
    'user' => 
    array (
      'collection_edit' => false,
      'entries_view' => true,
      'entries_edit' => true,
      'entries_create' => true,
      'entries_delete' => true,
    ),
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'button.svg',
);