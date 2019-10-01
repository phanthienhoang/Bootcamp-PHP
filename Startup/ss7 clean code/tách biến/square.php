<?php
    class Square extends Rectangle implements Colorable{
        
        public function __construct($name, $width, $height)
        {
        parent::__construct($name, $width, $height);
        }
        public function resize($number)
        {
            $this->width += $this->width*$number;
            $this->height += $this->height*$number;
        }
        public function howtoColor()
        {
            return "Color all four sides";
        }
        
    }