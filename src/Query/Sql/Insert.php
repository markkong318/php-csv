<?php

namespace PhpCsv\Query\Sql;

use PhpCsv\Query\Sql\Core\ISql;

class Insert extends ISql
{
    private $options;

    /**
     * 値を設定する
     * @param ...$args
     */
    public function set(...$args){
        $this->options = $args[0];
    }

    /**
     * 実行の際にやること
     * @param $row_array
     * @return array
     */
    public function execute(&$row_array){
        $this->entity->setRow($this->options[0]);

        return $row_array;
    }
}