<?php

class Template
{

    var $template_data = array();

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE)
    {
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        $this->CI->load->vars([
            'lang' => $this->CI->lang ?? 'id',
            'is_en' => $this->CI->is_en ?? false,
            'lang_prefix' => $this->CI->lang_prefix ?? ''
        ]);
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}
