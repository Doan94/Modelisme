<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
       <div class="navindex">
            <a href="create_orders.php" class="button btn-warning">Creation de bon de commande</a></br>
            <a href="create_customer.php" class="button btn-warning">Nouveau client</a></br>
        </div>

    <section class="indexbody">
        <table class="standard-table">
            <caption>Liste des commandes</caption>
            <thead>
                <tr>
                    <th>Commande</th>
                    <th>Date de la commande</th>
                    <th>Date de livraison</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($orders as $order): ?>
                    <tr>
                        <td>
                            <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a>
                        </td>
                        <td><?= $order['orderDate'] ?></td>
                        <td><?= $order['shippedDate'] ?></td>
                        <td><?= $order['status'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</body>
</html>