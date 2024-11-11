<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-8">
            <h4></h4>
         <h4>Naam leverancier : <?= $data["dataRows"][0]->LeverancierNaam ?></h4>
         <h4>Contact Persoon : <?= $data["dataRows"][0]->ContactPersoon ?></h4>
         <h4>Leverancier Nummer : <?= $data["dataRows"][0]->LeverancierNummer ?></h4>
         <h4>Mobiel : <?= $data["dataRows"][0]->Mobiel ?></h4>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Naam Product</th>
                        <th>Datum Laatste Levering</th>
                        <th>Aantal</th>
                        <th>Eerstvolgende Levering</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (is_null($data['dataRows'])) { ?>
                        <tr>
                            <td colspan='6' class='text-center'>Door een storing kunnen we op dit moment geen producten tonen uit het magazijn</td>
                        </tr>
                        <?php } else {
                        foreach ($data['dataRows'] as $Leverantieinfo) { ?>
                            <tr>
                                <td><?= $Leverantieinfo->ProductNaam ?></td>
                                <td><?= $Leverantieinfo->DatumLevering ?></td>
                                <td><?= $Leverantieinfo->Aantal ?></td>
                                <td><?= $Leverantieinfo->DatumEerstVolgendeLevering ?></td> 
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