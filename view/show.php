<?php $title = $post['nome_cliente'] 
#$query = mysql_query("SELECT id_cliente, nome_cliente, telefone_cliente, endereco_cliente , numero_cliente, outras_info FROM cliente");
?>

<?php ob_start() ?>
    <h1><?php echo $post['nome_cliente'] ?></h1>

    <div class="date"><?php echo $post['id_cliente'] ?></div>
    <div class="body">
        <?php echo $post['numero_cliente'] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>