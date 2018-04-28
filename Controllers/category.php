<?php namespace Project\Controllers;

use Post;
use Validation;
use Categories ;
use Date,DB,Import,IS;

class Category extends Controller
{
    public function main()
    { 
     
            
          

        //sending category table to view
        $data = Categories::toTable();
         View::toVTable($data); 
    }   

    public function addCategory()
    {
          
          //adding new categories
          if (Post::c_submit()) {
            Validation::rules('category_name', ['minchar' => 3 ,'maxchar'=> 100 ], 'Category Name');

         //   $admin='Nesrullah Ekinci'; //just for now adding creator name manually
            //to calculating current creating time for category name in db
          //  $currentDatetime=Date::set('{dayNumber0}.{monthNumber}.{year} {hour024}:{minute}:{second}');
               
            if (! $error=Validation::error('string')) {
               //adding additional infos to db
             //   Post::datetime($currentDatetime);
              //  Post::creator_name($admin);
                //it will insert post infos which  matches form names with db names automatically
                Categories::insert('post');

               View::result('Category name added successfuly');           
               
               } else {
                View::result($error);
            }
        }//end of the category form
    }//end of the adding categories

    public function addAttribute()
    {
           // adding attributes
           if (Post::a_submit()) {
            Validation::rules('att_name', ['minchar'=>3 ,'maxchar'=> 100 ], 'Attribute Name');
 
           
             if (! $error=Validation::error('string')) {
                  View::result('Attributes added successfuly');           
                
                } else {
                 View::result($error);
             }  
         
     } //en of the attribute form

    }//end of the adding attributes
   
}
