<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$Img = SITE_TEMPLATE_PATH. "/img/rew/no_photo_left_block.jpg";
?><div class="rew-footer-carousel">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    if (isset($arItem["PREVIEW_PICTURE"]["ID"])) {

        $arImg = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"],array("width"=>49,"height"=>49),BX_RESIZE_IMAGE_PROPORTIONAL,true);
        $Img = $arImg["src"];
    }
	?> <div class="item">
        <div class="side-block side-opin">
            <div class="inner-block">
                <div class="title">
                    <div class="photo-block">
                        <img src="<?=$Img;?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                    </div>
                    <div class="name-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <?=$arItem["NAME"]?>
                        </a>
                    </div>
                    <div class="pos-block">
                        <?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"]?>
                        <?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>
                    </div>
                </div>
                <div class="text-block">
                    <?=TruncateText($arItem["PREVIEW_TEXT"],150)?>
                </div>
            </div>
        </div>
    </div><? }?>
</div>