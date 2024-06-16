<?php

class OrderedStream {
    /**
     * @param Integer $n
     */

    private $stream;
    private $ptr;

    function __construct($n) {
$this->stream = array_fill(0,$n,null);
$this->ptr = 0;
    }


    /**
     * @param Integer $idKey
     * @param String $value
     * @return String[]
     */
    function insert($idKey, $value) {
        $this->stream[$idKey-1] = $value;
        $result = [];
        while($this->ptr < count($this->stream) && $this->stream[$this->ptr] != null ){
            $result []=$this->stream[$this->ptr];
            $this->ptr++;
        }
        return $result;
    }

    public function getStream() {
        return $this->stream;
    }

    public function getPtr() {
        return $this->ptr;
    }
}

/**
 * Your OrderedStream object will be instantiated and called as such:
 * $obj = OrderedStream($n);
 * $ret_1 = $obj->insert($idKey, $value);
 */