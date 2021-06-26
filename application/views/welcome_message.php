<!DOCTYPE html>
<html lang="en">
    <head>
        <title> V.O.C Shop </title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	
    <body>

        <?php $this->load->view('layout/top_menu') ?>
      
        <div class="row">	
		
			<?php foreach($products as $product) : ?>
			<div class="col-sm-3 col-md-3">
				<div class="thumbnail">
				<?=img([
					'src' => 'uploads/' . $product->gambar,
					'style'=> 'max-width: 100%; max-height:100%; height:100px'
				])?>
				<div class="caption">
					<h3 style="min-height:60px;"><?=$product->nama?></h3>
					<p><?=$product->deskripsi?></p>
					<p>Rp. <?=$product->harga?></p>
					<p>
						<?=anchor('welcome/add_to_cart/' . $product->no, 'Beli' , [
							'class' => 'btn btn-primary',
							'role' => 'button'
						])?>
					</p>
				</div>
				</div>
			</div>
			<?php endforeach; ?>
        
        </div>
        
    </body>
</html>