<?php
/**
 * HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. 
 * Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. 
 * But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. 
 * If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. 
 * If the tuition fee is below seven thousand dollars the data will be invalid. 
 * As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
 */
$tutionFee = 10000;
$commision = ($tutionFee >= 20000) ? $tutionFee * 0.25 : 
             (($tutionFee >= 10000 && $tutionFee < 20000) ? $tutionFee * 0.20 : 
             (($tutionFee >= 7000 && $tutionFee < 10000) ? $tutionFee * 0.15 :"Invalid Tution Fee"));
echo $commision;