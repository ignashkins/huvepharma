<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Первый Бит
// Август 2019
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js");

Asset::getInstance()->addJs("/local/task/task.js");
Asset::getInstance()->addCss("/local/task/task.css");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
