<?php
  $clients = $data["clients"];
?>

<div class="client-container">
    <?php 
    foreach ($clients as $client): ?>
        <div class="client-item">
                <div>
      Client : <?php echo $client->getId(); ?>
               <?php echo $client->getNomClient(); ?>
               <?php echo $client->getPrenomClient(); ?>
               <?php echo $client->getDebitClient(); ?>
                </div>
            </div>
    <?php endforeach; ?>
</div>
