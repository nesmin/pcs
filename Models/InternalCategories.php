<?php

class InternalCategories extends GrandModel
{
    public static  function toTable()
    {
      
       return   DB::get('categories')->resultArray();
    
      
    }
}