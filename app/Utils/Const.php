<?php

function getCateType(){
    $arr = [
      '0' => 'Location',
      '1' => 'Title',
      '2' => 'Park',
      '3' => 'Pagodas',
      '4' => 'Cinema',
      '5' => 'Playground'
    ];
    return $arr;
}

function getArrDisplay(){
    $arr = [
      'Category' => 'Category',
      'Page' => 'Page'
    ];
    return $arr;
}

function getStatus($status)
{
	switch ($status) 
	{
	  case 1:
	    return "<span style='color:red'>Blocked</span>";
	    break;
	  case 0:
	    return "Active";
	}
}

function getCodeAttribute($code)
{
	switch ($code) 
	{
	  case 'UOM':
	    return "Unit Of Measure";
	    break;
	  case 'COLOR':
	    return "Color";
	    break;
	  case 'SIZE':
	    return "Size";
	}
}

function randomColor($id)
{
	$color = "Green";
	switch ($id) 
	{
	  case 1:
	    $color = "Olive";
	    break;
	  case 2:
	    $color = "Maroon";
	    break;
	  case 3:
	    $color = "Purple";
	    break;
	  case 4:
	    $color = "Navy";
	    break;
	  case 5:
	    $color = "Teal";
	    break;
	  case 6:
	    $color = "LightSlateGray";
	    break;
	  case 7:
	    $color = "DarkSlateGrey";
	    break;
	  default:
	    $color = "RoyalBlue";
	}
	return $color;
}