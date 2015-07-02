<html>
<head>
<meta name="txtweb-appkey" content="9ba1c5f6-e8f6-41fd-89f1-2416a290c1ac"/>
</head>
<body>
<?php
$msg=$_GET['txtweb-message'];
if($msg==NULL)
{
echo "STL ALGORITHMS <br>";
echo "
    1.adjacent_find <br>
    2.binary_search <br>
    3.copy <br>
    4.copy_backward <br>
    5.count <br>
    6.count_if <br>
    7.equal <br>
    8.equal_range <br>
    9.fill <br>
    10.fill_n <br>
   11.find <br>
    12.find_end <br>
    13.find_first_of <br>
    14.find_if <br>
    15.for_each <br>
    16.generate <br>
    17.generate_n <br>
    18.includes <br>
    19.inplace_merge <br>
    20.iter_swap <br>
    21.lexicographical_compare <br>
    22.lower_bound <br>
    23.make_heap <br>
    24.max <br>
    25.max_element <br>
    26.merge <br>
    27.min <br>
    28.min_element <br>
    29.mismatch <br>
    30.next_permutation <br>
    31.nth_element <br>
    32.partial_sort <br>
    33.partial_sort_copy <br>
    34.partition <br>
    35.pop_heap <br>
    36.prev_permutation <br>
    37.push_heap <br>
    38.random_shuffle <br>
    39.remove <br>
    40.remove_copy <br>
    41.remove_copy_if <br>
    42.remove_if <br>
    43.replace <br>
    44.replace_copy <br>
    45.replace_copy_if <br>
    46.replace_if <br>
    47.reverse <br>
    48.reverse_copy <br>
    49.rotate <br>
    50.rotate_copy <br>
    51.search <br>
    52.search_n <br>
    53.set_difference   <br>
    54.set_intersection <br>
    55.set_symmetric_difference <br>
    56.set_union <br>
    57.sort <br>
    58.sort_heap <br>
    59.stable_partition <br>
    60.stable_sort <br>
    61.swap <br>
    62.swap_ranges <br>
    63.transform <br>
    64.unique <br>
    65.unique_copy <br>
    66.upper_bound <br>";
}
else
{
switch($msg)
{
case 1: $url="http://www.cplusplus.com/reference/algorithm/adjacent_find/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 2: $url="http://www.cplusplus.com/reference/algorithm/binary_search/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 3: $url="http://www.cplusplus.com/reference/algorithm/copy/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 4: $url="http://www.cplusplus.com/reference/algorithm/copy_backward/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 5: $url="http://www.cplusplus.com/reference/algorithm/count/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 6: $url="http://www.cplusplus.com/reference/algorithm/count_if/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 7: $url="http://www.cplusplus.com/reference/algorithm/equal/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 8: $url="http://www.cplusplus.com/reference/algorithm/equal_range/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 9: $url="http://www.cplusplus.com/reference/algorithm/fill/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 10: $url="http://www.cplusplus.com/reference/algorithm/fill_n/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 11: $url="http://www.cplusplus.com/reference/algorithm/find/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 12: $url="http://www.cplusplus.com/reference/algorithm/find_end/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 13: $url="http://www.cplusplus.com/reference/algorithm/find_first_of/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 14: $url="http://www.cplusplus.com/reference/algorithm/find_if/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 15: $url="http://www.cplusplus.com/reference/algorithm/for_each/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 16: $url="http://www.cplusplus.com/reference/algorithm/generate/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 17: $url="http://www.cplusplus.com/reference/algorithm/generate_n/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 18: $url="http://www.cplusplus.com/reference/algorithm/generate_n/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;

case 19: $url="http://www.cplusplus.com/reference/algorithm/inplace_merge/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;

case 20: $url="http://www.cplusplus.com/reference/algorithm/iter_swap/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 21: $url="http://www.cplusplus.com/reference/algorithm/lexicographical_compare/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 22: $url="http://www.cplusplus.com/reference/algorithm/lower_bound/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 23: $url="http://www.cplusplus.com/reference/algorithm/make_heap/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 24: $url="http://www.cplusplus.com/reference/algorithm/max/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 25: $url="http://www.cplusplus.com/reference/algorithm/max_element/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 26: $url="http://www.cplusplus.com/reference/algorithm/merge/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 27: $url="http://www.cplusplus.com/reference/algorithm/merge/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 28: $url="http://www.cplusplus.com/reference/algorithm/min_element/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 29: $url="http://www.cplusplus.com/reference/algorithm/mismatch/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 30: $url="http://www.cplusplus.com/reference/algorithm/next_permutation/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 31: $url="http://www.cplusplus.com/reference/algorithm/nth_element/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 32: $url="http://www.cplusplus.com/reference/algorithm/partial_sort/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 33: $url="http://www.cplusplus.com/reference/algorithm/partial_sort_copy/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 34: $url="http://www.cplusplus.com/reference/algorithm/partition/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 35: $url="http://www.cplusplus.com/reference/algorithm/pop_heap/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 36: $url="http://www.cplusplus.com/reference/algorithm/prev_permutation/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 37: $url="http://www.cplusplus.com/reference/algorithm/push_heap/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 38: $url="http://www.cplusplus.com/reference/algorithm/random_shuffle/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 39: $url="http://www.cplusplus.com/reference/algorithm/remove/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 40: $url="http://www.cplusplus.com/reference/algorithm/remove_copy/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 41: $url="http://www.cplusplus.com/reference/algorithm/remove_copy_if/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 42: $url="http://www.cplusplus.com/reference/algorithm/remove_if/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 43: $url="http://www.cplusplus.com/reference/algorithm/replace/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 44: $url="http://www.cplusplus.com/reference/algorithm/replace_copy/";
	$cout=file_get_contents("$url");$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 45: $url="http://www.cplusplus.com/reference/algorithm/replace_copy_if/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 46: $url="http://www.cplusplus.com/reference/algorithm/replace_if/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 47: $url="http://www.cplusplus.com/reference/algorithm/reverse/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 48: $url="http://www.cplusplus.com/reference/algorithm/reverse_copy/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 49: $url="http://www.cplusplus.com/reference/algorithm/rotate/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 50: $url="http://www.cplusplus.com/reference/algorithm/rotate_copy/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 51: $url="http://www.cplusplus.com/reference/algorithm/search/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 52: $url="http://www.cplusplus.com/reference/algorithm/search_n/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 53: $url="http://www.cplusplus.com/reference/algorithm/set_difference/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 54: $url="http://www.cplusplus.com/reference/algorithm/set_intersection/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 55: $url="http://www.cplusplus.com/reference/algorithm/set_symmetric_difference/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 56: $url="http://www.cplusplus.com/reference/algorithm/set_union/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 57: $url="http://www.cplusplus.com/reference/algorithm/sort/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 58: $url="http://www.cplusplus.com/reference/algorithm/sort_heap/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 59: $url="http://www.cplusplus.com/reference/algorithm/stable_partition/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 60: $url="http://www.cplusplus.com/reference/algorithm/stable_sort/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 61: $url="http://www.cplusplus.com/reference/algorithm/swap/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 62: $url="http://www.cplusplus.com/reference/algorithm/swap_ranges/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 63: $url="http://www.cplusplus.com/reference/algorithm/transform/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 64: $url="http://www.cplusplus.com/reference/algorithm/unique/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;

case 65: $url="http://www.cplusplus.com/reference/algorithm/unique_copy/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;
case 66: $url="http://www.cplusplus.com/reference/algorithm/upper_bound/";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<div class="C_prototype">');
	$last=strpos($cout,'</div>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>');
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'</h3>',$first+1);
	$first=strpos($cout,'<td class="source">',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	$first=strpos($cout,'<h3>',$last);
	$last=strpos($cout,'<h3>',$first+1);
	for($i=$first;$i<$last;$i++)
	{ echo $cout[$i];}
	break;

}
}
?>
</body>
</html>
