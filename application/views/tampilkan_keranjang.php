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
        
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Produk </th>
                    <th> Jumlah </th>
                    <th> Harga </th>
                    <th> Subtotal </th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $i=0;
                    foreach ($this->cart->contents() as $items) : 
                    $i++;
                ?>

                <tr>
                    <td><?= $i ?></td>
                    <td><?= $items['nama'] ?></td>
                    <td><?= $items['qty'] ?></td>
                    <td align="right"><?= number_format($items['harga'],0,',','.') ?></td>
                    <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
                </tr>
                
                <?php endforeach; ?>
            </tbody>

            <tfoot>
                <tr>
                    <td align="right" colspan="4"> Total </td>
                    <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                </tr>
            </tfoot>
        </table>

        <div align="center">
            <?= anchor('welcome/hapus_keranjang','Hapus Keranjang',['class'=>'btn btn-danger']) ?> 
            <?= anchor(base_url(),'Lanjutkan Belanja',['class'=>'btn btn-primary']) ?> 
            <?= anchor('pesan','Periksa',['class'=>'btn btn-success']) ?>
        </div>
    </body>
</html>