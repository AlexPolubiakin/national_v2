<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
?>
<div class="main-block container">
	<div class="row">
<h1 class="col-sm-12"><?=$arResult["NAME"]?></h1>
<?
		if(!empty($arResult['ITEMS']))
		{
			$areaIds = array();

			foreach($arResult['ITEMS'] as $item)
			{
				$uniqueId = $item['ID'].'_'.md5($this->randString().$component->getAction());
				$areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
				$this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
				$this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
			}

			foreach($arResult['ITEMS'] as $items)
			{
				?>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-3">
					<div class="catalog-block-element card align-items-center">
						<a href="<?=$items["DETAIL_PAGE_URL"]?>">
							<div class="catalog-section-element-image align-items-center">
<?
								if($items["PROPERTIES"]["NEW"]["VALUE"])
								{
?>
									<div class="catalog-block-element-new">NEW</div>
<?
								}
								elseif($items["PROPERTIES"]["TOP"]["VALUE"])
								{
?>
									<div class="block-element-top">TOP</div>
<?
								}
?>
								<img src="<?=$items["DETAIL_PICTURE"]["RESIZED"]?>" class="card-img-top" alt="">
							</div>
						</a>
						<div class="catalog-block-element-name">
							<div class="catalog-block-element-name-top">
								<a href="<?=$items["DETAIL_PAGE_URL"]?>">
									<span class="catalog-block-element-name-top-left">
										<span class="main-color-text-red">ECON</span>
										<span class="catalog-block-element-name-top-name"><?=$items["NAME"]?></span>
									</span>
								</a>
								<!--<div class="catalog-block-element-name-top-right">-->
								<!--	<div class="catalog-block-element-name-top-repost main-color-text-red">17</div>-->
								<!--	/-->
								<!--	<div class="catalog-block-element-name-top-like">42</div>-->
								<!--</div>-->
							</div>
							<div class="catalog-block-element-name-bottom">
								<div class="catalog-block-element-name-bottom-left">
									<span class="catalog-block-element-name-bottom-diagonal"><?=$items["PROPERTIES"]["DIAGONAL"]["VALUE"];?></span>
									<span class="catalog-block-element-name-bottom-type"><?=$items["PROPERTIES"]["TYPE_GOODS"]["VALUE"];?></span>
								</div>
								<!--<div class="catalog-block-element-name-bottom-right">-->
								<!--	<a>-->
								<!--	<img src="--><?//=SITE_TEMPLATE_PATH;?><!--/img/econ-like-icon.png" class="catalog-block-element-name-bottom-like">-->
								<!--	</a>-->
								<!--	<a>-->
								<!--	<img src="--><?//=SITE_TEMPLATE_PATH;?><!--/img/econ-repost-icon.png" class="catalog-block-element-name-bottom-repost">-->
								<!--	</a>-->
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
				<?
			}
		}
		?>
	</div>
</div>




========================================



<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

use \Bitrix\Main\Localization\Loc;

?>

<section class="catalog">
      <div class="container">
         <div class="row"> 

<?
if (!empty($arResult['ITEMS'])) {
	$areaIds = array();
	foreach ($arResult['ITEMS'] as $item) {
		$uniqueId = $item['ID'] . '_' . md5($this->randString() . $component->getAction());
		$areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
		$this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
		$this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
	}
	?>

  <? foreach ($arResult['ITEMS'] as $items) { ?>
		<div class="product col-md-4 col-sm-6">
            <div class="product__wrapper">
              <div class="product__item">
                <a href="<?= $items["DETAIL_PAGE_URL"] ?>" class="product__link">
                          <img
                            src="<?= $items["PREVIEW_PICTURE"]["RESIZED"] ?>"
                            alt="catalog image"
                            class="img-fluid product__image"
                          />
                </a>
              </div>
				<a href="<?= $items["DETAIL_PAGE_URL"] ?>" class="product__text"><?= $items["NAME"] ?></a>
        </div>
    </div>
<?
} ?>


<?
}
?>

	<!-- </div>
      </div>
    </section> -->





    <div class="col-md-4 col-sm-6">
          <div class="product">
            <div class="product__wrapper">
              <!-- картинка для чайников -->
              <? if (($arResult["ID"] === "29") && ($items["PROPERTIES"]["KETTLE_COOLTOUCH"]["VALUE_XML_ID"]) === "true") : ?>
                <img
                  class="icon_img_logo"
                  src="<?= SITE_TEMPLATE_PATH ?>/img/COOLTOUCH_RUS.png"
                  alt="cooltouch"
                />
              <? endif; ?>
              <!-- картинка для свч -->
              <? if (($arResult["ID"] === "26") && ($items["PROPERTIES"]["MWS_RETRO"]["VALUE_XML_ID"]) === "true") : ?>
                <img
                  class="icon_img_logo"
                  src="<?= SITE_TEMPLATE_PATH ?>/img/retro.png"
                  alt="cooltouch"
                />
              <? endif; ?>
              <!-- картинка для пылесосов -->
              <? if (($arResult["ID"] === "27") && ($items["PROPERTIES"]["VACUMCL_ICON"]["VALUE_XML_ID"]) === "true") : ?>
                <img
                  class="icon_img_logo"
                  src="<?= SITE_TEMPLATE_PATH ?>/img/2in1rus.png"
                  alt="cooltouch"
                />
              <? endif; ?>
              <div class="product__item">
                <a href="<?= $items["DETAIL_PAGE_URL"] ?>" class="product__link">
                  <img
                    class="img-fluid product__image"
                    src="<?= $items["PREVIEW_PICTURE"]["RESIZED"] ?>"
                  />
                </a>
              </div>
              <div class="product__name">
                <a href="<?= $items["DETAIL_PAGE_URL"] ?>" class="product__text">
                  <?= $items["NAME"] ?>
                </a>
              </div>
            </div>
          </div>
        </div>


        <div class="product col-md-4 col-sm-6">
            <div class="product__wrapper">
              <div class="product__item">
                <a href="<?= $items["DETAIL_PAGE_URL"] ?>" class="product__link">
                          <img
                            src="<?= $items["PREVIEW_PICTURE"]["RESIZED"] ?>"
                            alt="catalog image"
                            class="img-fluid product__image"
                          />
                </a>
              </div>
				<a href="<?= $items["DETAIL_PAGE_URL"] ?>" class="product__text"></a>
        </div>
    </div>




       