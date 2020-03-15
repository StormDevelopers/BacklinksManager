<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.1@445796af0e873d9bd04f2502d322a7d5009b6846',
  'doctrine/persistence' => '1.3.6@5dd3ac5eebef2d0b074daa4440bb18f93132dee4',
  'doctrine/reflection' => 'v1.1.0@bc420ead87fdfe08c03ecc3549db603a45b06d4c',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.0.1@0fb9675b84a1666ab45182b6c5b29956921e818d',
  'monolog/monolog' => '2.0.2@c861fcba2ca29404dc9e617eedd9eff4616986b8',
  'ocramius/package-versions' => '1.7.0@651c372efc914aea8223e049f85afaf65e09ba23',
  'ocramius/proxy-manager' => '2.7.0@e77928e8f11ea36b388f87e75c993d05f5da6bf1',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'symfony/asset' => 'v5.0.5@b9d7f8609849c71e79a0702fdaa453c1329b0c2c',
  'symfony/cache' => 'v5.0.5@c6255e419e8592dab7de6e29b014ae9e8926989a',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.5@938905f46df484b2aeae9016fd658aed577cdceb',
  'symfony/console' => 'v5.0.5@d29e2d36941de13600c399e393a60b8cfe59ac49',
  'symfony/dependency-injection' => 'v5.0.5@3575004a9b0d51ead83473ec90121045b3a0b56f',
  'symfony/doctrine-bridge' => 'v5.0.5@671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b',
  'symfony/dom-crawler' => 'v5.0.5@4368bdd61b83af365b8f23e9616d2a2ed52cbe7c',
  'symfony/dotenv' => 'v5.0.5@48c8fdda51e5b24d031ce8ec221caa186337e36f',
  'symfony/error-handler' => 'v5.0.5@24a938d9913f42d006ee1ca0164ea1f29c1067ec',
  'symfony/event-dispatcher' => 'v5.0.5@b45ad88b253c5a9702ce218e201d89c85d148cea',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/expression-language' => 'v5.0.5@67741ad12ac7fcc157c51d335e66c7b6a475f9b2',
  'symfony/filesystem' => 'v5.0.5@3afadc0f57cd74f86379d073e694b0f2cda2a88c',
  'symfony/finder' => 'v5.0.5@6251f201187ca9d66f6b099d3de65d279e971138',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v5.0.5@7d3afc4f0776904bb199317ae71b6a0fc46e5e5d',
  'symfony/framework-bundle' => 'v5.0.5@fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4',
  'symfony/http-client' => 'v5.0.5@2edd40250649944775aad5d6b4cc8e164c1e9d72',
  'symfony/http-client-contracts' => 'v2.0.1@378868b61b85c5cac6822d4f84e26999c9f2e881',
  'symfony/http-foundation' => 'v5.0.5@6f9c2ba72f4295d7ce6cf9f79dbb18036291d335',
  'symfony/http-kernel' => 'v5.0.5@021d7d54e080405678f2d8c54cb31d0bb03b4520',
  'symfony/inflector' => 'v5.0.5@e375603b6bd12e8e3aec3fc1b640ac18a4ef4cb2',
  'symfony/intl' => 'v5.0.5@2d1fb70e6e1c455a123218bebf6287d025c5bac5',
  'symfony/mailer' => 'v5.0.5@fd0da3996c6fe31b76a354ac749a864522308243',
  'symfony/mime' => 'v5.0.5@9b3e5b5e58c56bbd76628c952d2b78556d305f3c',
  'symfony/monolog-bridge' => 'v5.0.5@3e081905b32e24742c16f7bb2cf0cd182598a32d',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.0.5@d41f42480963221ac0bceb38297e7460de12b168',
  'symfony/options-resolver' => 'v5.0.5@b1ab86ce52b0c0abe031367a173005a025e30e04',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-grapheme' => 'v1.14.0@699871accfb394eb6f34ba1210df437f79b14d58',
  'symfony/polyfill-intl-icu' => 'v1.14.0@727b3bb5bfa7ca9eeb86416784cf1c08a6289b86',
  'symfony/polyfill-intl-idn' => 'v1.14.0@6842f1a39cf7d580655688069a03dd7cd83d244a',
  'symfony/polyfill-intl-normalizer' => 'v1.14.0@e62b4845992282d14037950542fc8e8650ae2a65',
  'symfony/polyfill-mbstring' => 'v1.14.0@34094cfa9abe1f0f14f48f490772db7a775559f2',
  'symfony/polyfill-php73' => 'v1.14.0@5e66a0fa1070bf46bec4bea7962d285108edd675',
  'symfony/process' => 'v5.0.5@fd4a86dd7e36437f2fc080d8c42c7415d828a0a8',
  'symfony/property-access' => 'v5.0.5@18617a8c26b97a262f816c78765eb3cd91630e19',
  'symfony/property-info' => 'v5.0.5@8c2e9d22806acd5522691074e215bb0b04926877',
  'symfony/routing' => 'v5.0.5@d6ca39fd05c1902bf34d724ba06fb8044a0b46de',
  'symfony/security-bundle' => 'v5.0.5@bbf735c1ea1778327a33c7fdadc3308a60667d74',
  'symfony/security-core' => 'v5.0.5@2dfbd23f45e07d41e3ba94236924813b47f4fad6',
  'symfony/security-csrf' => 'v5.0.5@65066f7e0f6e38a8c5507c706e86e7a52fd7ff3e',
  'symfony/security-guard' => 'v5.0.5@8a8d4006061c59010e0b6b94b6a7803b61bf875d',
  'symfony/security-http' => 'v5.0.5@4d2b2d9b5e602747bde8937e01aee535f6ae2ec2',
  'symfony/serializer' => 'v5.0.5@4411e7356beda717880da28cdbd32b33c52bb894',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.5@5d9add8034135b9a5f7b101d1e42c797e7f053e4',
  'symfony/string' => 'v5.0.5@a45ae78382337833e3b0ab3097d1769074950007',
  'symfony/translation' => 'v5.0.5@e9b93f42a1fd6aec6a0872d59ee5c8219a7d584b',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v5.0.5@737eeafbd04bf057c9495327c5d2669be7b79ba9',
  'symfony/twig-bundle' => 'v5.0.5@7a3e2b4fc7969168d5502aa551404c500aa79891',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.5@fb9c52b2fe3a8336b65f85b61dedbcc6c427c37b',
  'symfony/var-dumper' => 'v5.0.5@3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9',
  'symfony/var-exporter' => 'v5.0.5@30779a25c736b4290449eaedefe4196c1d060378',
  'symfony/web-link' => 'v5.0.5@78dd64d9f666550f4f7d9e64b59337e7f274389d',
  'symfony/yaml' => 'v5.0.5@a4b613d7e44f62941adff5a802cff70adee57d3f',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webimpress/safe-writer' => '2.0.0@d03bea3b98abe1d4c8b24cbebf524361ffaafee4',
  'webmozart/assert' => '1.7.0@aed98a490f9a8f78468232db345ab9cf606cf598',
  'easycorp/easy-log-handler' => 'v1.0.9@224e1dfcf9455aceee89cd0af306ac097167fac1',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/browser-kit' => 'v5.0.5@6b2a9590a5868f0ce5cbf7af6abe563d1a3930a3',
  'symfony/css-selector' => 'v5.0.5@a0b51ba9938ccc206d9284de7eb527c2d4550b44',
  'symfony/debug-bundle' => 'v5.0.5@1f4d3b753f0a9effff115726ff2b5b6eaa800418',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/maker-bundle' => 'v1.14.6@bc4df88792fbaaeb275167101dc714218475db5f',
  'symfony/phpunit-bridge' => 'v5.0.5@b8fee53045a55ccbb9209e453bf6fdcf74381959',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v5.0.5@209b76b879fee706fecbd8ad2113d810322ab62a',
  'paragonie/random_compat' => '2.*@70f79aae37180abb020b1785bf38049e920b194c',
  'symfony/polyfill-ctype' => '*@70f79aae37180abb020b1785bf38049e920b194c',
  'symfony/polyfill-iconv' => '*@70f79aae37180abb020b1785bf38049e920b194c',
  'symfony/polyfill-php72' => '*@70f79aae37180abb020b1785bf38049e920b194c',
  'symfony/polyfill-php71' => '*@70f79aae37180abb020b1785bf38049e920b194c',
  'symfony/polyfill-php70' => '*@70f79aae37180abb020b1785bf38049e920b194c',
  'symfony/polyfill-php56' => '*@70f79aae37180abb020b1785bf38049e920b194c',
  '__root__' => 'dev-master@70f79aae37180abb020b1785bf38049e920b194c',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
