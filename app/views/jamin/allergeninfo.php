<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            <h4>overzicht Allergenen</h4>
            <h4>Naam : <?= $data["dataRows"][0]->ProductNaam ?></h4>
            <h4>Barcode : <?= $data["dataRows"][0]->barcode ?></h4>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Naam Product</th>
                        <th>Datum Laatste Levering</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    if (is_null($data['dataRows'])) { ?>
                        <tr>
                            <td colspan='6' class='text-center'>Door een storing kunnen we op dit moment geen producten tonen uit het magazijn</td>
                        </tr>
                    <?php 
                    } else {
                        foreach ($data['dataRows'] as $allergeninfo) { ?>
                            <tr>
                                <td><?= $allergeninfo->Allergeennaam ?></td>
                                <td><?= $allergeninfo->Omschrijving ?></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>