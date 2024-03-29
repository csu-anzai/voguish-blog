<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php if (is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):?>
    <noindex>
        <div class="b-tag-weight" <?= $arParams["WIDTH"] ?>
            <h3>Tags Weight</h3>
            <ul>
                <?php foreach ($arResult["SEARCH"] as $key => $res): ?>
                    <li><a href="<?= $res["URL"] ?>"
                           rel="nofollow"><?= $res["NAME"] ?></a></li> 
                <?php endforeach;?>
            </ul>
        </div>
    </noindex>
<?php endif;?>