<?php
function displayOptions($options, $selectedValues){
    foreach($options as $option){
        $selected = '';
        if(in_array($options, $selectedValues))
        $selected = "selected";
        printf("<option value='%s' %s>%s</option>\n",strtolower($option), $selected, ucwords($option));
    }

}