<div class="col-sm-10">
    <!-- creating the main area -->

    <h1>Manage Categories </h1>
    <div>
     <!-- showing submit result success or error -->
     <?php if (isset($result)) { ?>
                <div class="form-group text">
                    <?php echo $result; ?>
                </div>
                <?php    } ?>
        
        <form method="post" > <!-- adding  new categories-->
            <fieldset>
                <div class="form-group"><!-- adding category-->
                    <label for="categoryName">Category Name:</label>
                    <input class="form-control" type="text" name="category_name" id="categoryName" placeholder="Category Name">
                </div>
                <br>
                <input class="btn btn-primary btn-block" type="submit" name="c_submit" value="Add New Category">
                <br>
                </fieldset>
            <br>
        </form> <!-- end of the adding category-->
         
        <!-- showing table if there are categories or new categories and adding select options-->
<div class="table-responsive"><!-- category table-->
        <table class="table table-striped table-hover">
            <tr>
                <th>No</th>
                
                <th>Category Name</th>
                <th>Creator Name</th>
            </tr>

            <?php $No=0;

                foreach ($toVTable as $Data)
                {
                 //$Id=$Data["id"];
               ;
                  $CategoryName=$Data["category_name"];
                //   $CreatorName=$Data["creator_name"];
                       $No++; ?>
                         <tr>
                             <td>
                                <?php echo $No; ?>
                             </td>
                             <td>
                              <?php echo $CategoryName; ?>
                             </td>
                            <!-- <td>
                            should fetch name from which admin is on
                               ?php echo $CreatorName; ?
                             </td> -->

                           </tr>
         <?php  } ?>
        </table>

    </div><!-- end of the category name-->
 
         
        <form method="post">
            <fieldset>
                <div class="form-group"><!-- adding attributes -->
                    <label for="attributeName">Attribute Name:</label>
                    <input class="form-control" type="text" name="att_name" id="attributeName" placeholder="Attribute Name">
                </div>
                <br>
                <input class="btn btn-primary btn-block" type="submit" name="a_submit" value="Add New Attributes">
                <br>
               
            </fieldset>
            <br>
        </form>

    </div>

    
</div>
<!-- end of the main area -->