<div class="col-sm-10">
    <!-- creating the main area -->

    <h1>Add New Project </h1>
    <div>
     <!-- showing submit result success or error -->
     <?php if (isset($result)) { ?>
                <div class="form-group text">
                    <?php echo $result; ?>
                </div>
                <?php    } ?>
        <form method="post">
            <fieldset>
                    <div class="form-group"><!-- form starts -->
                     <!-- pr_ stands for project , -->
                     <label for="projectName">Project Name:</label>
                     <input class="form-control" type="text" name="pr_name" id="projectName" placeholder="Project name">
                    </div>

                    <div class="form-group">
                     <!-- pr_ stands for project , attributes should have been selected multiple -->
                     <label for="projectAttributes">Select Attributes:</label>
                     <input class="form-control" type="text" name="pr_attributes" id="projectAttributes" placeholder="Select attributes">
                    </div>  
                     <!-- pr_ stands for project ,dr stands for duration ,should be two input start and end-->
                    <div class="form-inline">
                      <label class=" mb-4 mr-sm-4 mb-sm-4" for="projectDrDates">Select Project durations:</label>
                          <label class="sr-only" for="projectDrStart">Start date</label>
                         <input class="form-control mb-4 mr-sm-4 mb-sm-4"  type="text" name="pr_drstart"                        id="projectDrStart" placeholder="Select Project start date">
                          <label class="sr-only" for="projectDrEnd">End date</label>
                           <input class="form-control mb-4 mr-sm-4 mb-sm-4" type="text" name="pr_drend" id="projectDrEnd" placeholder="Select Project end date">
                    </div>
                   
                    <div class="form-inline">
                     <!-- pr_ stands for project , attributes should have been selected multiple -->
                     <label  class=" mb-4 mr-sm-4 mb-sm-0" for="projectForms">Select an Apply Form:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                     <input class="form-control mb-4 mr-sm-4 mb-sm-0" type="text" name="pr_applyform" id="projectForms" placeholder="Select an apply form">
                     <label class="sr-only" for="projectCategory">End date</label>
                           <input class="form-control mb-4 mr-sm-2 mb-sm-0" type="text" name="pr_category" id="projectCategory" placeholder="Select Project Category ">
                    </div>
                <br>
                <input class="btn btn-primary btn-block" type="submit" name="submit" value="Add New Project">
                
            </fieldset>
            <br>
        </form>
</div>
<!-- showing added projects may move somewhere else like manage pr-->
    <div class="table-responsive">
        <table class="table table-striped table-hover">
    
        </table>

    </div>
</div>
<!-- end of the main area -->