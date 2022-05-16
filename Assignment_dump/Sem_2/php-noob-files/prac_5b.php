<?php
    $nums=array(33,34);
    $padded=array_pad($nums,7,0);
    foreach($padded as $val)
    {
        echo $val."\n";
    }
    echo '<br>';
    $users=array('Joe','Rick','Lily','Umbridge');
    $slice=array_slice($users,2,2);
    foreach($slice as $val)
    {
        echo $val."\n";
    }   
    echo '<br>';
    $a=[34,22,44,22];
    $b=[33,44];
    array_splice($a,2,4,$b);
    
    foreach($a as $x)
    {
        echo "$x";
        echo "<br>";
    }
    echo "<br>";
    $instruments = array("Piano","Guitar","Trumpet");
    list($a, $b, $c) = $instruments;
    echo "$a, $b and $c.<br>";
?>