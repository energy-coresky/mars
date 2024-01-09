<?php declare(strict_types=1);

use SebastianBergmann\CodeCoverage\CodeCoverage;
#use 
#use 

class m_mars extends Model_m
{
    function head_y() {
        Plan::vendor();
        return parent::head_y();
    }

    function coverage() {
trace('00');
        $coverage = new CodeCoverage;
trace('11');
        $coverage->filter()->addDirectoryToWhitelist(DIR.'/main/mvc');
trace('22');
        $coverage->start('<my test 111>');
trace('33');
            // ...
        $coverage->stop();

        $writer = new \SebastianBergmann\CodeCoverage\Report\Clover;
        $writer->process($coverage, DIR.'/clover.xml');

        $writer = new \SebastianBergmann\CodeCoverage\Report\Html\Facade;
        $writer->process($coverage, DIR.'/code-coverage-report');
    }

    function j_delete() {
    }
}

