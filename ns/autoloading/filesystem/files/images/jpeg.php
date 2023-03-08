<?php
namespace CloudStorage\FileSystem\Files\Images;
use \CloudStorage\FileSystem\Files\Contracts\ImageContract;
class Jpeg implements ImageContract{
    function getDimention(){
        return "100 X 100";
    }
}