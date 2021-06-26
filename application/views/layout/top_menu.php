<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only"> MENU </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?=anchor(base_url(), 'V.O.C Shop', ['class'=>'navbar-brand'])?>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor(base_url(), 'Home');?></li>

        <li>
            <?php
                $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                $text_cart_url .= ' Shopping Cart: '.$this->cart->total_items().'items';
            ?>
            <?=anchor('welcome/cart', $text_cart_url)?>
        </li>

        <?php if($this->session->userdata('username')) { ?>
            <li><div style="line-height:50px;"> Anda : <?=$this->session->userdata('username')?></div></li>
            <li><?php echo anchor('logout', 'Logout');?></li>
        <?php } else { ?>
            <li><?php echo anchor('login', 'Login');?></li>
        <?php } ?>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>