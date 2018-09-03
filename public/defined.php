<?php
// duong dan thu muc chua ung dung

defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(dirname(dirname(__FILE__))."/application"));

// khai bao phan doan cau hinh su dung cho ung dung
defined("APPLICATION_ENV") || define("APPLICATION_ENV", (getenv("APPLICATION_ENV") ? getenv("APPLICATION_ENV") : "developer"));

// Nap duong dan den cac thu vien su dung trong ung dung

set_include_path(implode(PATH_SEPARATOR, array(
    dirname(dirname(__FILE__))."/library",
    get_include_path()

)));

define("CONFIG_PATH",realpath(APPLICATION_PATH."/configs"));
define("LAYOUT_PATH",realpath(APPLICATION_PATH."/layouts"));
define("PUBLIC_URL", "/zend_1x/public/");