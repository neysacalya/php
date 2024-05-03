<?php 
    $dataproduk=array(
        array("Galaxy S21", "Samsung", 19000000,true),
        array("Galaxy A71", "Samsung", 6999000,false),
        array("iPhone 12 Pro Max", "Apple", 20999000,true),
        array("iPhone 12 Mini", "Apple", 10999000,false),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <?php 
        foreach ($dataproduk as $produk) { ?>

        <?php 
        $namaProduk = $produk [0];
        $merkProduk = $produk [1];
        $hargaProduk = $produk [2];
        $stokProduk = $produk [3];
        ?>

        <div>
            <table border = "1" >
            <tr>
            <td>
                <p><?php echo $merkProduk; ?></p>
                <h2><?php echo $namaProduk; ?></h2>
                <h3><?php echo $hargaProduk; ?></h3>
                <h3><?php echo $stokProduk ? 'Stok tersedia' : 'Stok habis' ; ?></h3>
                <?php  if($stokProduk) { ?>
                    <button>Order</button>
                <?php } ?>
            </td>
            </tr>
        </div>
        
        <?php } ?>
</body>
</html>