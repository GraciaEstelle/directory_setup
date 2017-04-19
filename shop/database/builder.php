<?php

interface builder
{
    public function createNew();

    public function selectAll($select,$table, $where);
}