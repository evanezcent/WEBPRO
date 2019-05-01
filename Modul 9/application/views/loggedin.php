<html>
<head>
<title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url('Assets/Login/login.css'); ?>">
<script src="<?php echo base_url('Assets/Login/login.js'); ?>"></script>
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <?php
                $cookie = $this->input->cookie('logged');
                if(isset($cookie)){
                    echo $cookie;
                } else if(isset($_SESSION['successLogin'])) {
                    echo $_SESSION['successLogin'];
                }
            ?>
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo site_url('UserController/Logout'); ?>">Log Out<span class="sr-only">(current)</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="col-md-6">
            <strong>Upload Image : </strong>
            <?php echo form_open_multipart('Uploads/do_upload'); ?>
                <div class="form-group">
                    <?php 
                        if(isset($_SESSION['error'])) {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo $_SESSION['error'];
                            echo "</div>";
                        } else if (isset($_SESSION['upload_data'])) {
                            echo "<div class='alert alert-danger' role='alert'>";
                            echo "Uploading ".$_SESSION['upload_data']." Success!";
                            echo "</div>";
                        }
                    ?>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp" name='userfile'>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                        <span class="input-group-btn">
                            <input class="btn btn-primary" type="submit" value="Upload">
                        </span>
                    </div>
                    <img id='img-upload'/>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($image as $data): ?>
            <div class="col-md-3 col-sm-4 col-xs-6">
                <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $data['ImgName']; ?>"/>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>