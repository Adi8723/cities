<h1>suchformular</h1>

<?php
$city = $_GET['search'];

?>
<?php if (!empty($cities)) : ?>

<table>
    <thead>
        <th>Name Der stadt</th>
        <th>Bevölkerung</th>
        <th>Fläche</th>
    </thead>
    <tbody>
        <?php foreach ($cities as $city) : ?>
            <tr>
                <td><?= e($city['title']) ?></td>
                <td><?= e($city['population']) ?></td>
                <td><?= e($city['area']) ?></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>


<?php endif; ?>