<?php

namespace ContainerPgnrVzj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.manager' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'ImportMapManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'PackageResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'Resolver'.\DIRECTORY_SEPARATOR.'PackageResolver.php';

        return $container->privates['asset_mapper.importmap.manager'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapManager(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.public_assets_path_resolver'] ??= new \Symfony\Component\AssetMapper\Path\PublicAssetsPathResolver(\dirname(__DIR__, 4), '/assets/', 'public')), (\dirname(__DIR__, 4).'/importmap.php'), (\dirname(__DIR__, 4).'/assets/vendor'), new \Symfony\Component\AssetMapper\ImportMap\Resolver\PackageResolver('jsdelivr.esm', new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'jsdelivr' => ['privates', 'asset_mapper.importmap.resolver.jsdelivr', 'getAssetMapper_Importmap_Resolver_JsdelivrService', true],
            'jsdelivr.esm' => ['privates', 'asset_mapper.importmap.resolver.jsdelivr_esm', 'getAssetMapper_Importmap_Resolver_JsdelivrEsmService', true],
            'jspm' => ['privates', 'asset_mapper.importmap.resolver.jspm', 'getAssetMapper_Importmap_Resolver_JspmService', true],
            'jspm.system' => ['privates', 'asset_mapper.importmap.resolver.jspm_system', 'getAssetMapper_Importmap_Resolver_JspmSystemService', true],
            'skypack' => ['privates', 'asset_mapper.importmap.resolver.skypack', 'getAssetMapper_Importmap_Resolver_SkypackService', true],
            'unpkg' => ['privates', 'asset_mapper.importmap.resolver.unpkg', 'getAssetMapper_Importmap_Resolver_UnpkgService', true],
        ], [
            'jsdelivr' => 'Symfony\\Component\\AssetMapper\\ImportMap\\Resolver\\JspmResolver',
            'jsdelivr.esm' => 'Symfony\\Component\\AssetMapper\\ImportMap\\Resolver\\JsDelivrEsmResolver',
            'jspm' => 'Symfony\\Component\\AssetMapper\\ImportMap\\Resolver\\JspmResolver',
            'jspm.system' => 'Symfony\\Component\\AssetMapper\\ImportMap\\Resolver\\JspmResolver',
            'skypack' => 'Symfony\\Component\\AssetMapper\\ImportMap\\Resolver\\JspmResolver',
            'unpkg' => 'Symfony\\Component\\AssetMapper\\ImportMap\\Resolver\\JspmResolver',
        ])));
    }
}
