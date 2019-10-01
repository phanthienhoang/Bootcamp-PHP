<?php
    class ArrayList
    {
        public $arrayList;
        public function ArrayList($arr = "")
        {
            if (is_array($arr) == true)
                $this->arrayList = $arr;
            else
                $this->arrayList = array();
        }

        public function add($obj)
        {
            array_push($this->arrayList, $obj);
        }
        public function clear()
        {
            $this->arrayList = array();
        }
        public function get($index)
        {
            if ($this->isInteger($index) && $index < $this->size()) {
                return $this->arrayList[$index];
            } else {
                die("ERROR in ArrayList.get");
            }
        }
        public function isEmpty()
        {
            if (count($this->arrayList) == 0) {
                return true;
            }
            return false;
        }       
        // public function remove($index)
        // {
        //     if ($this->isInteger($index) && $index < count($this->arrayList) ) {
        //         unset($this->arrList[$index]);
        //         $newArrayList = array();
        //         for ($i = 0; $i < $this->size(); $i++) {
        //             if ($index != $i) {
        //                 $newArrayList[] = $this->get($i);
        //             }
        //         }
        //         $this->arrList = $newArrayList;
        //     } else {
        //         die("ERROR in ArrayList.remove <br> Integer value required");
        //     }
        // }
        public function size()
        {
            return count($this->arrayList);
        }
        public function sort()
        {
            sort($this->arrayList);
        }

        public function toArray()
        {
            return $this->arrayList;
        }
        public function isInteger($toCheck) {
            return preg_match("/^[0-9]+$/", $toCheck);
        }
    }
    $arr1 = Array(5,6,7,8);
    $listInteger = new ArrayList($arr1);
    $listInteger->add(3);
    $listInteger->add(4);
    $listInteger->add(5);
    echo $listInteger->get(5);
    echo '<pre>';
    print_r($listInteger);
    echo '<pre/>'

?>