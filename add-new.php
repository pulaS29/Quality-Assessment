<?php require_once('includes/header.php'); ?>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">ODiTY QA</a></h1>
</div>
<!--close-Header-part--> 

<!-- Top Bar -->
<?php require_once('includes/top-bar.php'); ?>
<!-- Close side bar -->

<!--Sidebar-part-->
<?php require_once('includes/sidebar.php'); ?>
<!-- Close sidebar -->

<div id="content">
<div id="content-header">
  <h1>Add new agent</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Agent info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password input</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Company info :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Company name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description field:</label>
              <div class="controls">
                <input type="text" class="span11" />
                <span class="help-block">Description field</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Message</label>
              <div class="controls">
                <textarea class="span11" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->
<?php require_once('includes/footer.php'); ?>