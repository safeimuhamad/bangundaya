<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CkeditorBootstrap {
  public function init()
  {
    $CI =& get_instance();

    // pastikan library sudah autoload
    if (!isset($CI->ckeditor)) return;

    $cfg = $CI->config->item('ckeditor');
    if (empty($cfg)) return;

    // set basePath & config global
    $CI->ckeditor->basePath = $cfg['basePath'];
    $CI->ckeditor->config   = $cfg['config'];

    // ckfinder optional
    if (!empty($cfg['use_ckfinder']) && $cfg['use_ckfinder'] === true && isset($CI->ckfinder)) {
      $CI->ckfinder->SetupCKEditor($CI->ckeditor, $cfg['ckfinder_base_url']);
    }
  }
}
