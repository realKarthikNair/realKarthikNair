<?php

$array0=[34,85,55,28,11,62,22];

print_r($array0);
echo "<br/><br/>";

echo "Input 1 for Bubble Sort<br/>";

echo "Input 2 Insertion Sort<br/>";

echo "Input 3 for Selection Sort<br/>";

echo "Input 4 for Merge Sort<br/>";

$input = 4;

echo "<br/>Array after ";

switch ($input)
{
    case 1:
    do
	{
		$swapped = false;
		for( $i = 0, $c = count( $array0 ) - 1; $i < $c; $i++ )
		{
			if( $array0[$i] > $array0[$i + 1] )
			{
				list( $array0[$i + 1], $array0[$i] ) =
						array( $array0[$i], $array0[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
    
    echo "Bubble Sort is <br/>";
    print_r($array0);break;
    
    case 2: 
        for($i=0;$i<count($array0);$i++){
            $val = $array0[$i];
            $j = $i-1;
            while($j>=0 && $array0[$j] > $val){
                $array0[$j+1] = $array0[$j];
                $j--;
            }
            $array0[$j+1] = $val;
        }
    
    echo "Insertion Sort is <br/>";
    print_r($array0);break;

    case 3:

        function selection_sort($data)
        {
        for($i=0; $i<count($data)-1; $i++) {
            $min = $i;
            for($j=$i+1; $j<count($data); $j++) {
                if ($data[$j]<$data[$min]) {
                    $min = $j;
                }
            }
            $data = swap_positions($data, $i, $min);
        }
        return $data;
        }

        function swap_positions($data1, $left, $right) {
            $backup_old_data_right_value = $data1[$right];
            $data1[$right] = $data1[$left];
            $data1[$left] = $backup_old_data_right_value;
            return $data1;
        }
        echo "Selection Sort is <br/>";
        print_r(selection_sort($array0));
        break;
    
    case 4:

        function merge_sort($array0){
            if(count($array0) == 1 ) return $array0;
            $mid = count($array0) / 2;
            $left = array_slice($array0, 0, $mid);
            $right = array_slice($array0, $mid);
            $left = merge_sort($left);
            $right = merge_sort($right);
            return merge($left, $right);
        }
        function merge($left, $right){
            $res = array();
            while (count($left) > 0 && count($right) > 0){
                if($left[0] > $right[0]){
                    $res[] = $right[0];
                    $right = array_slice($right , 1);
                }else{
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
            }
            while (count($left) > 0){
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
            while (count($right) > 0){
                $res[] = $right[0];
                $right = array_slice($right, 1);
            }
            return $res;
        }

        echo "Merge Sort is <br/>";
        print_r(merge_sort($array0));
}

