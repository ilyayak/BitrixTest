<?php


if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult["PROPERTIES"]["FILE"]["VALUE"])) {
    foreach ($arResult["PROPERTIES"]["FILE"]["VALUE"] as $idFile) {
$arFile = CFile::GetFileArray($idFile);

$arResult["FILE"]["NAME"][$idFile] =
    $arFile["ORIGINAL_NAME"];
$arResult["FILE"]["SRC"][$idFile] = $arFile["SRC"];
//echo '<pre>';print_r($arResult["FILE"]);echo '</pre>';
 }
}
