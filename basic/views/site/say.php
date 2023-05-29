<?php

foreach ($residents as $resident) {
    ?>
    <p> <?=$resident->surname . ' ' . $resident->name?></p>
<?php
}