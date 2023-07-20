<?php include 'includes/header.php';

 if(isset($_GET['s'])&&$_GET['s']) {
    $serv=array_values(array_filter($serv2,function($each){
   
      
      return $_GET['s'] ==trim($each['name']);
    }));
  if(!count($serv)){include 'includes/footer.php';
    exit;
  }else{
    $serv = $serv[0];
  }

?>
<div style="background-image: url(assets/img/slide/slide-1.webp);" id="heroserv">
        <div class="container" style="max-width: 900px;padding-top:37px;">
            <h2 class="aboutserv animate__animated animate__fadeInDown">
            <?php echo $serv['name'];?> 
          </h2>

    </div>
</div>
<div style="background: #efefef">
    <div class="container" style="max-width: 900px;font-size:20px;">
    <br><br>
   
    <?php foreach($serv['p'] as $p){?>
      <p class="servp"> <?php echo $p;?>  </p>
   <?php  } ?>
        <br><br>
        
    </div>
</div>
<div class="container" style="max-width: 900px;font-size:20px;">
<br><br>
<?php if(count($serv['bulletPoints'])){?>
<h3 style="color:#ac1d37">Rely on us for all your <?php echo $serv['name'];?> needs:</h3>
    <ul>
    <?php foreach($serv['bulletPoints'] as $p){?>
      <li style="margin-top: 5px;"><?php echo $p;?>  </li>  
       <?php  } ?>

        
    </ul>
    <br><br><?php } ?>
</div>
  


<?php };include 'includes/footer.php'; ?>