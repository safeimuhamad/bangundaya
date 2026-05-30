<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['ckeditor'] = [
  'basePath' => base_url('template/assets_admin/plugins/ckeditor/js/'),
  'config'   => [
    'toolbar'  => [
      ['Source','-','Bold','Italic','Underline','-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList','-','Link','Unlink','Image','Table']
    ],
    'language' => 'id',
    'width'    => '730px',
    'height'   => '300px',
    'removeDialogTabs' => 'image:advanced;link:advanced',
  ],
  // pakai ckfinder? set true/false
  'use_ckfinder' => true,
  'ckfinder_base_url' => base_url('assets/ckfinder/')
];
