{[

Import::view('sections/header.wizard');

if( !(isset($leftside) ) ) Import::view('sections/leftside.wizard');//if a page doesnt require for left/rightSide wont showing it //



echo $view;


Import::view('sections/footer.wizard');

]} 
