
     <?php
      if(isset($_POST['submit'])){
        $msg='Name:'.$_POST['name'] ."\n"
            .'Email:'.$_POST['email'] ."\n"
            .'Message' .$_pOST['subject'] ."\n"
            .'Comment:' .$_POST['Comment'];
        mail('vvishnu405@gmail.com','Sample contact',$msg);
        header('location:thank.php')
      }
      else {
        header('location:contact.html');
        exit(0);
        } ?>
