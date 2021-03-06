<?php

class Collection
{

    private $items = [];

    /**
     * @param $value
     */
    public function addItem($value){
        $this->items[] = $value;
    }

    /**
     * @return array
     */
    public function result(){
        return $this->items;
    }

    /**
     * @param $key
     * @return array
     */
    public function pluck($key){
        $output = [];

        foreach ($this->items as $item){
            if($item->$key)
                $output[] = $item->$key;
        }

        return $output;
    }

    /**
     * @return int
     */
    public function count(){
        return count($this->items);
    }


}