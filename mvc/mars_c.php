<?php

class mars_c extends Controller
{
    function tail_y() {
        if (!MVC::$layout)
            return;
        return parent::tail_y();
    }

    function a_ware() {
        '_mars?ware' != $this->w_last_link or $this->w_last_link = '';
        jump($this->w_last_link ?: '_mars?phobos');
    }

    function empty_a() {
        return [        ];
    }

    function a_dev_crash() {
        if ($this->_2)
            return [];
        throw new Error('a_dev_crash');
    }

    function a_phobos() {
        return [];
    }

    function a_deimos() {
        return [];
    }

    function j_coverage() {
        $this->m_mars->coverage();
        echo 'Done';
    }
}

