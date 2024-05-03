<?php

namespace source\Members;

class Config {
    public const COMPANY = "UpInside";
    protected const DOMAIN = "upinside.com.br";
    private const SECTOR = "Educação";

    public static $company;
    public static $domain;
    public static $sector;

    public static function setConfig($company, $domain, $sector): void
    {
        self::$company = $company;
        self::$domain = $domain;
        self::$sector = $sector;
    }
}