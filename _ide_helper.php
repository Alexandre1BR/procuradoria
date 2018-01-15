<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.5.28 on 2018-01-12.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
<<<<<<< HEAD
 * @see https://github.com/barryvdh/laravel-ide-helper
 */
namespace  {
    exit("This file should not be included, only analyzed by your IDE");
}

namespace Illuminate\Support\Facades { 

    class App {
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */ 
=======
 *
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace  {
    exit('This file should not be included, only analyzed by your IDE');
}

namespace Illuminate\Support\Facades {

    class App
    {
        /**
         * Get the version number of the application.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function version()
        {
            return \Illuminate\Foundation\Application::version();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function bootstrapWith($bootstrappers)
        {
            \Illuminate\Foundation\Application::bootstrapWith($bootstrappers);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function afterLoadingEnvironment($callback)
        {
            \Illuminate\Foundation\Application::afterLoadingEnvironment($callback);
        }
<<<<<<< HEAD
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string   $bootstrapper
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
            \Illuminate\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
<<<<<<< HEAD
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string   $bootstrapper
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function afterBootstrapping($bootstrapper, $callback)
        {
            \Illuminate\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasBeenBootstrapped()
        {
            return \Illuminate\Foundation\Application::hasBeenBootstrapped();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setBasePath($basePath)
        {
            return \Illuminate\Foundation\Application::setBasePath($basePath);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path Optionally, a path to append to the app path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function path($path = '')
        {
            return \Illuminate\Foundation\Application::path($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path Optionally, a path to append to the base path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function basePath($path = '')
        {
            return \Illuminate\Foundation\Application::basePath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path Optionally, a path to append to the bootstrap path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function bootstrapPath($path = '')
        {
            return \Illuminate\Foundation\Application::bootstrapPath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the path to the application configuration files.
         *
         * @param string $path Optionally, a path to append to the config path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function configPath($path = '')
        {
            return \Illuminate\Foundation\Application::configPath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the path to the database directory.
         *
         * @param string $path Optionally, a path to append to the database path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function databasePath($path = '')
        {
            return \Illuminate\Foundation\Application::databasePath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the database directory.
         *
         * @param string $path
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function useDatabasePath($path)
        {
            return \Illuminate\Foundation\Application::useDatabasePath($path);
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the language files.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function langPath()
        {
            return \Illuminate\Foundation\Application::langPath();
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the public / web directory.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function publicPath()
        {
            return \Illuminate\Foundation\Application::publicPath();
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the storage directory.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function storagePath()
        {
            return \Illuminate\Foundation\Application::storagePath();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the storage directory.
         *
         * @param string $path
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function useStoragePath($path)
        {
            return \Illuminate\Foundation\Application::useStoragePath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the path to the resources directory.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function resourcePath($path = '')
        {
            return \Illuminate\Foundation\Application::resourcePath($path);
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the environment file directory.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function environmentPath()
        {
            return \Illuminate\Foundation\Application::environmentPath();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function useEnvironmentPath($path)
        {
            return \Illuminate\Foundation\Application::useEnvironmentPath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function loadEnvironmentFrom($file)
        {
            return \Illuminate\Foundation\Application::loadEnvironmentFrom($file);
        }
<<<<<<< HEAD
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the environment file the application is using.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function environmentFile()
        {
            return \Illuminate\Foundation\Application::environmentFile();
        }
<<<<<<< HEAD
        
        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function environmentFilePath()
        {
            return \Illuminate\Foundation\Application::environmentFilePath();
        }
<<<<<<< HEAD
        
        /**
         * Get or check the current application environment.
         *
         * @return string|bool 
         * @static 
         */ 
=======

        /**
         * Get or check the current application environment.
         *
         * @return string|bool
         * @static
         */
>>>>>>> upstream/master
        public static function environment()
        {
            return \Illuminate\Foundation\Application::environment();
        }
<<<<<<< HEAD
        
        /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if application is in local environment.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isLocal()
        {
            return \Illuminate\Foundation\Application::isLocal();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function detectEnvironment($callback)
        {
            return \Illuminate\Foundation\Application::detectEnvironment($callback);
        }
<<<<<<< HEAD
        
        /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if we are running in the console.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function runningInConsole()
        {
            return \Illuminate\Foundation\Application::runningInConsole();
        }
<<<<<<< HEAD
        
        /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if we are running unit tests.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function runningUnitTests()
        {
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
<<<<<<< HEAD
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register all of the configured providers.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function registerConfiguredProviders()
        {
            \Illuminate\Foundation\Application::registerConfiguredProviders();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
<<<<<<< HEAD
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function register($provider, $options = array(), $force = false)
        {
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }
        
=======
         * @param array                                      $options
         * @param bool                                       $force
         *
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
        public static function register($provider, $options = [], $force = false)
        {
            return \Illuminate\Foundation\Application::register($provider, $options, $force);
        }

>>>>>>> upstream/master
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
<<<<<<< HEAD
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Support\ServiceProvider|null
         * @static
         */
>>>>>>> upstream/master
        public static function getProvider($provider)
        {
            return \Illuminate\Foundation\Application::getProvider($provider);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getProviders($provider)
        {
            return \Illuminate\Foundation\Application::getProviders($provider);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
<<<<<<< HEAD
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
>>>>>>> upstream/master
        public static function resolveProvider($provider)
        {
            return \Illuminate\Foundation\Application::resolveProvider($provider);
        }
<<<<<<< HEAD
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function loadDeferredProviders()
        {
            \Illuminate\Foundation\Application::loadDeferredProviders();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function loadDeferredProvider($service)
        {
            \Illuminate\Foundation\Application::loadDeferredProvider($service);
        }
<<<<<<< HEAD
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a deferred provider and service.
         *
         * @param string      $provider
         * @param string|null $service
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function registerDeferredProvider($provider, $service = null)
        {
            \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
<<<<<<< HEAD
        
        /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function make($abstract, $parameters = array())
        {
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Resolve the given type from the container.
         *
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @param array  $parameters
         *
         * @return mixed
         * @static
         */
        public static function make($abstract, $parameters = [])
        {
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }

        /**
         * Determine if the given abstract type has been bound.
         *
         * (Overriding Container::bound)
         *
         * @param string $abstract
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function bound($abstract)
        {
            return \Illuminate\Foundation\Application::bound($abstract);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application has booted.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isBooted()
        {
            return \Illuminate\Foundation\Application::isBooted();
        }
<<<<<<< HEAD
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Boot the application's service providers.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function boot()
        {
            \Illuminate\Foundation\Application::boot();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function booting($callback)
        {
            \Illuminate\Foundation\Application::booting($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function booted($callback)
        {
            \Illuminate\Foundation\Application::booted($callback);
        }
<<<<<<< HEAD
        
        /**
         * {@inheritdoc}
         *
         * @static 
         */ 
=======

        /**
         * @static
         */
>>>>>>> upstream/master
        public static function handle($request, $type = 1, $catch = true)
        {
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
<<<<<<< HEAD
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function shouldSkipMiddleware()
        {
            return \Illuminate\Foundation\Application::shouldSkipMiddleware();
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the cached services.php file.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getCachedServicesPath()
        {
            return \Illuminate\Foundation\Application::getCachedServicesPath();
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the cached packages.php file.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getCachedPackagesPath()
        {
            return \Illuminate\Foundation\Application::getCachedPackagesPath();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application configuration is cached.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function configurationIsCached()
        {
            return \Illuminate\Foundation\Application::configurationIsCached();
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the configuration cache file.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getCachedConfigPath()
        {
            return \Illuminate\Foundation\Application::getCachedConfigPath();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function routesAreCached()
        {
            return \Illuminate\Foundation\Application::routesAreCached();
        }
<<<<<<< HEAD
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path to the routes cache file.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getCachedRoutesPath()
        {
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isDownForMaintenance()
        {
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
<<<<<<< HEAD
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = array())
        {
            \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
=======

        /**
         * Throw an HttpException with the given data.
         *
         * @param int    $code
         * @param string $message
         * @param array  $headers
         *
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         *
         * @return void
         * @static
         */
        public static function abort($code, $message = '', $headers = [])
        {
            \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }

>>>>>>> upstream/master
        /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function terminating($callback)
        {
            return \Illuminate\Foundation\Application::terminating($callback);
        }
<<<<<<< HEAD
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Terminate the application.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function terminate()
        {
            \Illuminate\Foundation\Application::terminate();
        }
<<<<<<< HEAD
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the service providers that have been loaded.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getLoadedProviders()
        {
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
<<<<<<< HEAD
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the application's deferred services.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getDeferredServices()
        {
            return \Illuminate\Foundation\Application::getDeferredServices();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the application's deferred services.
         *
         * @param array $services
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDeferredServices($services)
        {
            \Illuminate\Foundation\Application::setDeferredServices($services);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addDeferredServices($services)
        {
            \Illuminate\Foundation\Application::addDeferredServices($services);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isDeferredService($service)
        {
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function provideFacades($namespace)
        {
            \Illuminate\Foundation\Application::provideFacades($namespace);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function configureMonologUsing($callback)
        {
            return \Illuminate\Foundation\Application::configureMonologUsing($callback);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMonologConfigurator()
        {
            return \Illuminate\Foundation\Application::hasMonologConfigurator();
        }
<<<<<<< HEAD
        
        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */ 
=======

        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable
         * @static
         */
>>>>>>> upstream/master
        public static function getMonologConfigurator()
        {
            return \Illuminate\Foundation\Application::getMonologConfigurator();
        }
<<<<<<< HEAD
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getLocale()
        {
            return \Illuminate\Foundation\Application::getLocale();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the current application locale.
         *
         * @param string $locale
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setLocale($locale)
        {
            \Illuminate\Foundation\Application::setLocale($locale);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if application locale is the given locale.
         *
         * @param string $locale
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isLocale($locale)
        {
            return \Illuminate\Foundation\Application::isLocale($locale);
        }
<<<<<<< HEAD
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register the core class aliases in the container.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function registerCoreContainerAliases()
        {
            \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
<<<<<<< HEAD
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flush()
        {
            \Illuminate\Foundation\Application::flush();
        }
<<<<<<< HEAD
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
=======

        /**
         * Get the application namespace.
         *
         * @throws \RuntimeException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getNamespace()
        {
            return \Illuminate\Foundation\Application::getNamespace();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Define a contextual binding.
         *
         * @param string $concrete
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */ 
        public static function when($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * Returns true if the container can return an entry for the given identifier.
         * 
         * Returns false otherwise.
         * 
=======
         *
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
         * @static
         */
        public static function when($concrete)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::when($concrete);
        }

        /**
         * Returns true if the container can return an entry for the given identifier.
         *
         * Returns false otherwise.
         *
>>>>>>> upstream/master
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function has($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::has($id);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function has($id)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::has($id);
        }

>>>>>>> upstream/master
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function resolved($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function resolved($abstract)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::resolved($abstract);
        }

>>>>>>> upstream/master
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function isShared($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function isShared($abstract)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::isShared($abstract);
        }

>>>>>>> upstream/master
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function isAlias($name)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function isAlias($name)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::isAlias($name);
        }

        /**
         * Register a binding with the container.
         *
         * @param string|array         $abstract
         * @param \Closure|string|null $concrete
         * @param bool                 $shared
         *
         * @return void
         * @static
         */
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }

>>>>>>> upstream/master
        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::hasMethodBinding($method);
        }
        
        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param string $method
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindMethod($method, $callback);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function hasMethodBinding($method)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::hasMethodBinding($method);
        }

        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param string   $method
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static function bindMethod($method, $callback)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::bindMethod($method, $callback);
        }

>>>>>>> upstream/master
        /**
         * Get the method binding for the given method.
         *
         * @param string $method
<<<<<<< HEAD
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::callMethodBinding($method, $instance);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
=======
         * @param mixed  $instance
         *
         * @return mixed
         * @static
         */
        public static function callMethodBinding($method, $instance)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::callMethodBinding($method, $instance);
        }

        /**
         * Add a contextual binding to the container.
         *
         * @param string          $concrete
         * @param string          $abstract
         * @param \Closure|string $implementation
         *
         * @return void
         * @static
         */
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }

        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string               $abstract
         * @param \Closure|string|null $concrete
         * @param bool                 $shared
         *
         * @return void
         * @static
         */
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }

        /**
         * Register a shared binding in the container.
         *
         * @param string|array         $abstract
         * @param \Closure|string|null $concrete
         *
         * @return void
         * @static
         */
        public static function singleton($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }

        /**
         * "Extend" an abstract type in the container.
         *
         * @param string   $abstract
         * @param \Closure $closure
         *
         * @throws \InvalidArgumentException
         *
         * @return void
         * @static
         */
        public static function extend($abstract, $closure)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::extend($abstract, $closure);
        }

>>>>>>> upstream/master
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
=======
         * @param mixed  $instance
         *
         * @return mixed
         * @static
         */
        public static function instance($abstract, $instance)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }

>>>>>>> upstream/master
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
<<<<<<< HEAD
         * @param array|mixed $tags
         * @return void 
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
=======
         * @param array|mixed  $tags
         *
         * @return void
         * @static
         */
        public static function tag($abstracts, $tags)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }

>>>>>>> upstream/master
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
        public static function tagged($tag)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
=======
         *
         * @return array
         * @static
         */
        public static function tagged($tag)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::tagged($tag);
        }

>>>>>>> upstream/master
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function alias($abstract, $alias)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::alias($abstract, $alias);
        }

        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string   $abstract
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
        public static function rebinding($abstract, $callback)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }

>>>>>>> upstream/master
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
=======
         * @param mixed  $target
         * @param string $method
         *
         * @return mixed
         * @static
         */
        public static function refresh($abstract, $target, $method)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }

>>>>>>> upstream/master
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @param array $parameters
         * @return \Closure 
         * @static 
         */ 
        public static function wrap($callback, $parameters = array())
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
=======
         * @param array    $parameters
         *
         * @return \Closure
         * @static
         */
        public static function wrap($callback, $parameters = [])
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }

>>>>>>> upstream/master
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
<<<<<<< HEAD
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */ 
        public static function call($callback, $parameters = array(), $defaultMethod = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
=======
         * @param array           $parameters
         * @param string|null     $defaultMethod
         *
         * @return mixed
         * @static
         */
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }

>>>>>>> upstream/master
        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @return \Closure 
         * @static 
         */ 
        public static function factory($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::factory($abstract);
        }
        
=======
         *
         * @return \Closure
         * @static
         */
        public static function factory($abstract)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::factory($abstract);
        }

>>>>>>> upstream/master
        /**
         * An alias function name for make().
         *
         * @param string $abstract
<<<<<<< HEAD
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = array())
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::makeWith($abstract, $parameters);
        }
        
=======
         * @param array  $parameters
         *
         * @return mixed
         * @static
         */
        public static function makeWith($abstract, $parameters = [])
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::makeWith($abstract, $parameters);
        }

>>>>>>> upstream/master
        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
<<<<<<< HEAD
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed Entry.
         * @static 
         */ 
        public static function get($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::get($id);
        }
        
=======
         *
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         *
         * @return mixed Entry.
         * @static
         */
        public static function get($id)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::get($id);
        }

>>>>>>> upstream/master
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
<<<<<<< HEAD
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function build($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getBindings()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
=======
         *
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         *
         * @return mixed
         * @static
         */
        public static function build($concrete)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::build($concrete);
        }

        /**
         * Register a new resolving callback.
         *
         * @param string        $abstract
         * @param \Closure|null $callback
         *
         * @return void
         * @static
         */
        public static function resolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }

        /**
         * Register a new after resolving callback for all types.
         *
         * @param string        $abstract
         * @param \Closure|null $callback
         *
         * @return void
         * @static
         */
        public static function afterResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }

        /**
         * Get the container's bindings.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::getBindings();
        }

>>>>>>> upstream/master
        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @return string 
         * @throws \LogicException
         * @static 
         */ 
        public static function getAlias($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getAlias($abstract);
        }
        
=======
         *
         * @throws \LogicException
         *
         * @return string
         * @static
         */
        public static function getAlias($abstract)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::getAlias($abstract);
        }

>>>>>>> upstream/master
        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetExtenders($abstract);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function forgetExtenders($abstract)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::forgetExtenders($abstract);
        }

>>>>>>> upstream/master
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetInstances()
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */ 
        public static function getInstance()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getInstance();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function forgetInstance($abstract)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::forgetInstance($abstract);
        }

        /**
         * Clear all of the instances from the container.
         *
         * @return void
         * @static
         */
        public static function forgetInstances()
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::forgetInstances();
        }

        /**
         * Set the globally available instance of the container.
         *
         * @return static
         * @static
         */
        public static function getInstance()
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::getInstance();
        }

>>>>>>> upstream/master
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
<<<<<<< HEAD
         * @return static 
         * @static 
         */ 
        public static function setInstance($container = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::setInstance($container);
        }
        
=======
         *
         * @return static
         * @static
         */
        public static function setInstance($container = null)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::setInstance($container);
        }

>>>>>>> upstream/master
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::offsetExists($key);
        }

>>>>>>> upstream/master
        /**
         * Get the value at a given offset.
         *
         * @param string $key
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
=======
         *
         * @return mixed
         * @static
         */
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::offsetGet($key);
        }

>>>>>>> upstream/master
        /**
         * Set the value at a given offset.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::offsetSet($key, $value);
        }

>>>>>>> upstream/master
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetUnset($key);
        }
         
    }

    class Artisan {
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */ 
        public static function handle($input, $output = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Container\Container
            \Illuminate\Foundation\Application::offsetUnset($key);
        }
    }

    class Artisan
    {
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface   $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         *
         * @return int
         * @static
         */
        public static function handle($input, $output = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            return \App\Console\Kernel::handle($input, $output);
        }

>>>>>>> upstream/master
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
<<<<<<< HEAD
         * @param int $status
         * @return void 
         * @static 
         */ 
        public static function terminate($input, $status)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand 
         * @static 
         */ 
        public static function command($signature, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::command($signature, $callback);
        }
        
=======
         * @param int                                             $status
         *
         * @return void
         * @static
         */
        public static function terminate($input, $status)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            \App\Console\Kernel::terminate($input, $status);
        }

        /**
         * Register a Closure based command with the application.
         *
         * @param string   $signature
         * @param \Closure $callback
         *
         * @return \Illuminate\Foundation\Console\ClosureCommand
         * @static
         */
        public static function command($signature, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            return \App\Console\Kernel::command($signature, $callback);
        }

>>>>>>> upstream/master
        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function registerCommand($command)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::registerCommand($command);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface $outputBuffer
         * @return int 
         * @static 
         */ 
        public static function call($command, $parameters = array(), $outputBuffer = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters, $outputBuffer);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function registerCommand($command)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            \App\Console\Kernel::registerCommand($command);
        }

        /**
         * Run an Artisan console command by name.
         *
         * @param string                                            $command
         * @param array                                             $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface $outputBuffer
         *
         * @return int
         * @static
         */
        public static function call($command, $parameters = [], $outputBuffer = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            return \App\Console\Kernel::call($command, $parameters, $outputBuffer);
        }

>>>>>>> upstream/master
        /**
         * Queue the given console command.
         *
         * @param string $command
<<<<<<< HEAD
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch 
         * @static 
         */ 
        public static function queue($command, $parameters = array())
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */ 
        public static function output()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrap()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrap();
        }
        
=======
         * @param array  $parameters
         *
         * @return \Illuminate\Foundation\Bus\PendingDispatch
         * @static
         */
        public static function queue($command, $parameters = [])
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            return \App\Console\Kernel::queue($command, $parameters);
        }

        /**
         * Get all of the commands registered with the console.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            return \App\Console\Kernel::all();
        }

        /**
         * Get the output for the last run command.
         *
         * @return string
         * @static
         */
        public static function output()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            return \App\Console\Kernel::output();
        }

        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void
         * @static
         */
        public static function bootstrap()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            \App\Console\Kernel::bootstrap();
        }

>>>>>>> upstream/master
        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setArtisan($artisan)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::setArtisan($artisan);
        }
         
    }

    class Auth {
        
=======
         *
         * @return void
         * @static
         */
        public static function setArtisan($artisan)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel
            \App\Console\Kernel::setArtisan($artisan);
        }
    }

    class Auth
    {
>>>>>>> upstream/master
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
         * @static
         */
>>>>>>> upstream/master
        public static function guard($name = null)
        {
            return \Illuminate\Auth\AuthManager::guard($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a session based authentication guard.
         *
         * @param string $name
<<<<<<< HEAD
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
=======
         * @param array  $config
         *
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
>>>>>>> upstream/master
        public static function createSessionDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a token based authentication guard.
         *
         * @param string $name
<<<<<<< HEAD
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */ 
=======
         * @param array  $config
         *
         * @return \Illuminate\Auth\TokenGuard
         * @static
         */
>>>>>>> upstream/master
        public static function createTokenDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
<<<<<<< HEAD
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default authentication driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function shouldUse($name)
        {
            \Illuminate\Auth\AuthManager::shouldUse($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
<<<<<<< HEAD
        
        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Register a new callback based request guard.
         *
         * @param string   $driver
         * @param callable $callback
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function viaRequest($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
<<<<<<< HEAD
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
=======

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
>>>>>>> upstream/master
        public static function userResolver()
        {
            return \Illuminate\Auth\AuthManager::userResolver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function resolveUsersUsing($userResolver)
        {
            return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Register a custom driver creator Closure.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function extend($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Register a custom provider creator Closure.
         *
         * @param string   $name
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function provider($name, $callback)
        {
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Auth\UserProvider|null 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======
         *
         * @throws \InvalidArgumentException
         *
         * @return \Illuminate\Contracts\Auth\UserProvider|null
         * @static
         */
>>>>>>> upstream/master
        public static function createUserProvider($provider = null)
        {
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
<<<<<<< HEAD
        
        /**
         * Get the default user provider name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default user provider name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultUserProvider()
        {
            return \Illuminate\Auth\AuthManager::getDefaultUserProvider();
        }
<<<<<<< HEAD
        
        /**
         * Get the currently authenticated user.
         *
         * @return \App\Data\Models\User|null 
         * @static 
         */ 
=======

        /**
         * Get the currently authenticated user.
         *
         * @return \App\Data\Models\User|null
         * @static
         */
>>>>>>> upstream/master
        public static function user()
        {
            return \Illuminate\Auth\SessionGuard::user();
        }
<<<<<<< HEAD
        
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null 
         * @static 
         */ 
=======

        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null
         * @static
         */
>>>>>>> upstream/master
        public static function id()
        {
            return \Illuminate\Auth\SessionGuard::id();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function once($credentials = array())
        {
            return \Illuminate\Auth\SessionGuard::once($credentials);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function once($credentials = [])
        {
            return \Illuminate\Auth\SessionGuard::once($credentials);
        }

>>>>>>> upstream/master
        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
<<<<<<< HEAD
         * @return \App\Data\Models\User|false 
         * @static 
         */ 
=======
         *
         * @return \App\Data\Models\User|false
         * @static
         */
>>>>>>> upstream/master
        public static function onceUsingId($id)
        {
            return \Illuminate\Auth\SessionGuard::onceUsingId($id);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = array())
        {
            return \Illuminate\Auth\SessionGuard::validate($credentials);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function validate($credentials = [])
        {
            return \Illuminate\Auth\SessionGuard::validate($credentials);
        }

>>>>>>> upstream/master
        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
<<<<<<< HEAD
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */ 
        public static function basic($field = 'email', $extraConditions = array())
        {
            return \Illuminate\Auth\SessionGuard::basic($field, $extraConditions);
        }
        
=======
         * @param array  $extraConditions
         *
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */
        public static function basic($field = 'email', $extraConditions = [])
        {
            return \Illuminate\Auth\SessionGuard::basic($field, $extraConditions);
        }

>>>>>>> upstream/master
        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
<<<<<<< HEAD
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @static 
         */ 
        public static function onceBasic($field = 'email', $extraConditions = array())
        {
            return \Illuminate\Auth\SessionGuard::onceBasic($field, $extraConditions);
        }
        
=======
         * @param array  $extraConditions
         *
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */
        public static function onceBasic($field = 'email', $extraConditions = [])
        {
            return \Illuminate\Auth\SessionGuard::onceBasic($field, $extraConditions);
        }

>>>>>>> upstream/master
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
<<<<<<< HEAD
         * @param bool $remember
         * @return bool 
         * @static 
         */ 
        public static function attempt($credentials = array(), $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::attempt($credentials, $remember);
        }
        
=======
         * @param bool  $remember
         *
         * @return bool
         * @static
         */
        public static function attempt($credentials = [], $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::attempt($credentials, $remember);
        }

>>>>>>> upstream/master
        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
<<<<<<< HEAD
         * @param bool $remember
         * @return \App\Data\Models\User|false 
         * @static 
         */ 
=======
         * @param bool  $remember
         *
         * @return \App\Data\Models\User|false
         * @static
         */
>>>>>>> upstream/master
        public static function loginUsingId($id, $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::loginUsingId($id, $remember);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
<<<<<<< HEAD
         * @param bool $remember
         * @return void 
         * @static 
         */ 
=======
         * @param bool                                       $remember
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function login($user, $remember = false)
        {
            \Illuminate\Auth\SessionGuard::login($user, $remember);
        }
<<<<<<< HEAD
        
        /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Log the user out of the application.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function logout()
        {
            \Illuminate\Auth\SessionGuard::logout();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function attempting($callback)
        {
            \Illuminate\Auth\SessionGuard::attempting($callback);
        }
<<<<<<< HEAD
        
        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\Data\Models\User 
         * @static 
         */ 
=======

        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\Data\Models\User
         * @static
         */
>>>>>>> upstream/master
        public static function getLastAttempted()
        {
            return \Illuminate\Auth\SessionGuard::getLastAttempted();
        }
<<<<<<< HEAD
        
        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getName()
        {
            return \Illuminate\Auth\SessionGuard::getName();
        }
<<<<<<< HEAD
        
        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getRecallerName()
        {
            return \Illuminate\Auth\SessionGuard::getRecallerName();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function viaRemember()
        {
            return \Illuminate\Auth\SessionGuard::viaRemember();
        }
<<<<<<< HEAD
        
        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */ 
=======

        /**
         * Get the cookie creator instance used by the guard.
         *
         * @throws \RuntimeException
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory
         * @static
         */
>>>>>>> upstream/master
        public static function getCookieJar()
        {
            return \Illuminate\Auth\SessionGuard::getCookieJar();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setCookieJar($cookie)
        {
            \Illuminate\Auth\SessionGuard::setCookieJar($cookie);
        }
<<<<<<< HEAD
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
=======

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
>>>>>>> upstream/master
        public static function getDispatcher()
        {
            return \Illuminate\Auth\SessionGuard::getDispatcher();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDispatcher($events)
        {
            \Illuminate\Auth\SessionGuard::setDispatcher($events);
        }
<<<<<<< HEAD
        
        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @static 
         */ 
=======

        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @static
         */
>>>>>>> upstream/master
        public static function getSession()
        {
            return \Illuminate\Auth\SessionGuard::getSession();
        }
<<<<<<< HEAD
        
        /**
         * Return the currently cached user.
         *
         * @return \App\Data\Models\User|null 
         * @static 
         */ 
=======

        /**
         * Return the currently cached user.
         *
         * @return \App\Data\Models\User|null
         * @static
         */
>>>>>>> upstream/master
        public static function getUser()
        {
            return \Illuminate\Auth\SessionGuard::getUser();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setUser($user)
        {
            return \Illuminate\Auth\SessionGuard::setUser($user);
        }
<<<<<<< HEAD
        
        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */ 
=======

        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request
         * @static
         */
>>>>>>> upstream/master
        public static function getRequest()
        {
            return \Illuminate\Auth\SessionGuard::getRequest();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setRequest($request)
        {
            return \Illuminate\Auth\SessionGuard::setRequest($request);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return \App\Data\Models\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */ 
=======

        /**
         * Determine if the current user is authenticated.
         *
         * @throws \Illuminate\Auth\AuthenticationException
         *
         * @return \App\Data\Models\User
         * @static
         */
>>>>>>> upstream/master
        public static function authenticate()
        {
            return \Illuminate\Auth\SessionGuard::authenticate();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the current user is authenticated.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function check()
        {
            return \Illuminate\Auth\SessionGuard::check();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the current user is a guest.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function guest()
        {
            return \Illuminate\Auth\SessionGuard::guest();
        }
<<<<<<< HEAD
        
        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */ 
=======

        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider
         * @static
         */
>>>>>>> upstream/master
        public static function getProvider()
        {
            return \Illuminate\Auth\SessionGuard::getProvider();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setProvider($provider)
        {
            \Illuminate\Auth\SessionGuard::setProvider($provider);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Auth\SessionGuard::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Blade {
        
=======
    }

    class Blade
    {
>>>>>>> upstream/master
        /**
         * Compile the view at the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function compile($path = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
<<<<<<< HEAD
        
        /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the path currently being compiled.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getPath()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setPath($path)
        {
            \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function compileString($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function stripParentheses($expression)
        {
            return \Illuminate\View\Compilers\BladeCompiler::stripParentheses($expression);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function extend($compiler)
        {
            \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
<<<<<<< HEAD
        
        /**
         * Get the extensions used by the compiler.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the extensions used by the compiler.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getExtensions()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getExtensions();
        }
<<<<<<< HEAD
        
        /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register an "if" statement directive.
         *
         * @param string   $name
         * @param callable $callback
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function if($name, $callback)
        {
            \Illuminate\View\Compilers\BladeCompiler::if($name, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Check the result of a condition.
         *
         * @param string $name
<<<<<<< HEAD
         * @param array $parameters
         * @return bool 
         * @static 
         */ 
=======
         * @param array  $parameters
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function check($name, $parameters = null)
        {
            return \Illuminate\View\Compilers\BladeCompiler::check($name, $parameters);
        }
<<<<<<< HEAD
        
        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a handler for custom directives.
         *
         * @param string   $name
         * @param callable $handler
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function directive($name, $handler)
        {
            \Illuminate\View\Compilers\BladeCompiler::directive($name, $handler);
        }
<<<<<<< HEAD
        
        /**
         * Get the list of custom directives.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the list of custom directives.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getCustomDirectives()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setEchoFormat($format)
        {
            \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
        public static function getCompiledPath($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
=======
         *
         * @return string
         * @static
         */
        public static function getCompiledPath($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }

>>>>>>> upstream/master
        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function isExpired($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function isExpired($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }

>>>>>>> upstream/master
        /**
         * Compile the default values for the echo statement.
         *
         * @param string $value
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function compileEchoDefaults($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
        }
<<<<<<< HEAD
         
    }

    class Broadcast {
        
=======
    }

    class Broadcast
    {
>>>>>>> upstream/master
        /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * @param array|null $attributes
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function routes($attributes = null)
        {
            \Illuminate\Broadcasting\BroadcastManager::routes($attributes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
<<<<<<< HEAD
         * @return string|null 
         * @static 
         */ 
=======
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function socket($request = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::socket($request);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Begin broadcasting an event.
         *
         * @param mixed|null $event
<<<<<<< HEAD
         * @return \Illuminate\Broadcasting\PendingBroadcast|void 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Broadcasting\PendingBroadcast|void
         * @static
         */
>>>>>>> upstream/master
        public static function event($event = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::event($event);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function queue($event)
        {
            \Illuminate\Broadcasting\BroadcastManager::queue($event);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a driver instance.
         *
         * @param string $driver
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function connection($driver = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::connection($driver);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a driver instance.
         *
         * @param string $name
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function driver($name = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::driver($name);
        }
<<<<<<< HEAD
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Broadcasting\BroadcastManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default driver name.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultDriver($name)
        {
            \Illuminate\Broadcasting\BroadcastManager::setDefaultDriver($name);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Register a custom driver creator Closure.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function extend($driver, $callback)
        {
            return \Illuminate\Broadcasting\BroadcastManager::extend($driver, $callback);
        }
<<<<<<< HEAD
         
    }

    class Bus {
        
=======
    }

    class Bus
    {
>>>>>>> upstream/master
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function dispatch($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatch($command);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @param mixed $command
         * @param mixed $handler
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function dispatchNow($command, $handler = null)
        {
            return \Illuminate\Bus\Dispatcher::dispatchNow($command, $handler);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::hasCommandHandler($command);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
<<<<<<< HEAD
         * @return bool|mixed 
         * @static 
         */ 
=======
         *
         * @return bool|mixed
         * @static
         */
>>>>>>> upstream/master
        public static function getCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::getCommandHandler($command);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
<<<<<<< HEAD
         * @return mixed 
         * @throws \RuntimeException
         * @static 
         */ 
=======
         *
         * @throws \RuntimeException
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function dispatchToQueue($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatchToQueue($command);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function pipeThrough($pipes)
        {
            return \Illuminate\Bus\Dispatcher::pipeThrough($pipes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Map a command to a handler.
         *
         * @param array $map
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function map($map)
        {
            return \Illuminate\Bus\Dispatcher::map($map);
        }
<<<<<<< HEAD
         
    }

    class Cache {
        
=======
    }

    class Cache
    {
>>>>>>> upstream/master
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
>>>>>>> upstream/master
        public static function store($name = null)
        {
            return \Illuminate\Cache\CacheManager::store($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function driver($driver = null)
        {
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
<<<<<<< HEAD
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Cache\Repository
         * @static
         */
>>>>>>> upstream/master
        public static function repository($store)
        {
            return \Illuminate\Cache\CacheManager::repository($store);
        }
<<<<<<< HEAD
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default cache driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default cache driver name.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultDriver($name)
        {
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Register a custom driver creator Closure.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function extend($driver, $callback)
        {
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($key)
        {
            return \Illuminate\Cache\Repository::has($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function get($key, $default = null)
        {
            return \Illuminate\Cache\Repository::get($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
=======

        /**
         * Retrieve multiple items from the cache by key.
         *
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function many($keys)
        {
            return \Illuminate\Cache\Repository::many($keys);
        }
<<<<<<< HEAD
        
        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
=======

        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys    A list of keys that can obtained in a single operation.
         * @param mixed                     $default Default value to return for keys that do not exist.
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if $keys is neither an array nor a Traversable,
         *                                                   or if any of the $keys are not a legal value.
         *
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @static
         */
>>>>>>> upstream/master
        public static function getMultiple($keys, $default = null)
        {
            return \Illuminate\Cache\Repository::getMultiple($keys, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function pull($key, $default = null)
        {
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
=======

        /**
         * Store an item in the cache.
         *
         * @param string                                     $key
         * @param mixed                                      $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function put($key, $value, $minutes = null)
        {
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }
<<<<<<< HEAD
        
        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                     the driver supports TTL then the library may set a default value
         *                                     for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
=======

        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string                 $key   The key of the item to store.
         * @param mixed                  $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if the $key string is not a legal value.
         *
         * @return bool True on success and false on failure.
         * @static
         */
>>>>>>> upstream/master
        public static function set($key, $value, $ttl = null)
        {
            return \Illuminate\Cache\Repository::set($key, $value, $ttl);
        }
<<<<<<< HEAD
        
        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
=======

        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array                                      $values
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function putMany($values, $minutes)
        {
            \Illuminate\Cache\Repository::putMany($values, $minutes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
<<<<<<< HEAD
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
=======
         * @param null|int|\DateInterval    $ttl    Optional. The TTL value of this item. If no value is sent and
         *                                          the driver supports TTL then the library may set a default value
         *                                          for it or let the driver take care of that.
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if $values is neither an array nor a Traversable,
         *                                                   or if any of the $values are not a legal value.
         *
         * @return bool True on success and false on failure.
         * @static
         */
>>>>>>> upstream/master
        public static function setMultiple($values, $ttl = null)
        {
            return \Illuminate\Cache\Repository::setMultiple($values, $ttl);
        }
<<<<<<< HEAD
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string                                     $key
         * @param mixed                                      $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function add($key, $value, $minutes)
        {
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return int|bool
         * @static
         */
>>>>>>> upstream/master
        public static function increment($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::increment($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return int|bool
         * @static
         */
>>>>>>> upstream/master
        public static function decrement($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::decrement($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function forever($key, $value)
        {
            \Illuminate\Cache\Repository::forever($key, $value);
        }
<<<<<<< HEAD
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string                                     $key
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @param \Closure                                   $callback
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function remember($key, $minutes, $callback)
        {
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }
<<<<<<< HEAD
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string   $key
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function sear($key, $callback)
        {
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
<<<<<<< HEAD
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string   $key
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function rememberForever($key, $callback)
        {
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove an item from the cache.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function forget($key)
        {
            return \Illuminate\Cache\Repository::forget($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
<<<<<<< HEAD
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
=======
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if the $key string is not a legal value.
         *
         * @return bool True if the item was successfully removed. False if there was an error.
         * @static
         */
>>>>>>> upstream/master
        public static function delete($key)
        {
            return \Illuminate\Cache\Repository::delete($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
<<<<<<< HEAD
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
=======
         *
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if $keys is neither an array nor a Traversable,
         *                                                   or if any of the $keys are not a legal value.
         *
         * @return bool True if the items were successfully removed. False if there was an error.
         * @static
         */
>>>>>>> upstream/master
        public static function deleteMultiple($keys)
        {
            return \Illuminate\Cache\Repository::deleteMultiple($keys);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
<<<<<<< HEAD
         * @static 
         */ 
=======
         * @static
         */
>>>>>>> upstream/master
        public static function clear()
        {
            return \Illuminate\Cache\Repository::clear();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
<<<<<<< HEAD
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
=======
         *
         * @throws \BadMethodCallException
         *
         * @return \Illuminate\Cache\TaggedCache
         * @static
         */
>>>>>>> upstream/master
        public static function tags($names)
        {
            return \Illuminate\Cache\Repository::tags($names);
        }
<<<<<<< HEAD
        
        /**
         * Get the default cache time.
         *
         * @return float|int 
         * @static 
         */ 
=======

        /**
         * Get the default cache time.
         *
         * @return float|int
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultCacheTime()
        {
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default cache time in minutes.
         *
         * @param float|int $minutes
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultCacheTime($minutes)
        {
            return \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }
<<<<<<< HEAD
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
=======

        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store
         * @static
         */
>>>>>>> upstream/master
        public static function getStore()
        {
            return \Illuminate\Cache\Repository::getStore();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setEventDispatcher($events)
        {
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function offsetExists($key)
        {
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function offsetGet($key)
        {
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function offsetSet($key, $value)
        {
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove an item from the cache.
         *
         * @param string $key
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function offsetUnset($key)
        {
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Cache\Repository::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
<<<<<<< HEAD
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
=======
         * @param array  $parameters
         *
         * @throws \BadMethodCallException
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
<<<<<<< HEAD
        
        /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Remove all items from the cache.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function flush()
        {
            return \Illuminate\Cache\FileStore::flush();
        }
<<<<<<< HEAD
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
=======

        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem
         * @static
         */
>>>>>>> upstream/master
        public static function getFilesystem()
        {
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
<<<<<<< HEAD
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the working directory of the cache.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDirectory()
        {
            return \Illuminate\Cache\FileStore::getDirectory();
        }
<<<<<<< HEAD
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the cache key prefix.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getPrefix()
        {
            return \Illuminate\Cache\FileStore::getPrefix();
        }
<<<<<<< HEAD
         
    }

    class Config {
        
=======
    }

    class Config
    {
>>>>>>> upstream/master
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($key)
        {
            return \Illuminate\Config\Repository::has($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed        $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function get($key, $default = null)
        {
            return \Illuminate\Config\Repository::get($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get many configuration values.
         *
         * @param array $keys
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getMany($keys)
        {
            return \Illuminate\Config\Repository::getMany($keys);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed        $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function set($key, $value = null)
        {
            \Illuminate\Config\Repository::set($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function prepend($key, $value)
        {
            \Illuminate\Config\Repository::prepend($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function push($key, $value)
        {
            \Illuminate\Config\Repository::push($key, $value);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function all()
        {
            return \Illuminate\Config\Repository::all();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function offsetExists($key)
        {
            return \Illuminate\Config\Repository::offsetExists($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a configuration option.
         *
         * @param string $key
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function offsetGet($key)
        {
            return \Illuminate\Config\Repository::offsetGet($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set a configuration option.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function offsetSet($key, $value)
        {
            \Illuminate\Config\Repository::offsetSet($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Unset a configuration option.
         *
         * @param string $key
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function offsetUnset($key)
        {
            \Illuminate\Config\Repository::offsetUnset($key);
        }
<<<<<<< HEAD
         
    }

    class Cookie {
        
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
=======
    }

    class Cookie
    {
        /**
         * Create a new cookie instance.
         *
         * @param string      $name
         * @param string      $value
         * @param int         $minutes
         * @param string      $path
         * @param string      $domain
         * @param bool        $secure
         * @param bool        $httpOnly
         * @param bool        $raw
         * @param string|null $sameSite
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
>>>>>>> upstream/master
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
<<<<<<< HEAD
        
        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
=======

        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string      $name
         * @param string      $value
         * @param string      $path
         * @param string      $domain
         * @param bool        $secure
         * @param bool        $httpOnly
         * @param bool        $raw
         * @param string|null $sameSite
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
>>>>>>> upstream/master
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $path
         * @param string $domain
<<<<<<< HEAD
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
=======
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
>>>>>>> upstream/master
        public static function forget($name, $path = null, $domain = null)
        {
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasQueued($key)
        {
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a queued cookie instance.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
>>>>>>> upstream/master
        public static function queued($key, $default = null)
        {
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Queue a cookie to send with the next response.
         *
         * @param array $parameters
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function queue($parameters = null)
        {
            \Illuminate\Cookie\CookieJar::queue($parameters);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function unqueue($name)
        {
            \Illuminate\Cookie\CookieJar::unqueue($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
<<<<<<< HEAD
         * @param bool $secure
         * @param string $sameSite
         * @return $this 
         * @static 
         */ 
=======
         * @param bool   $secure
         * @param string $sameSite
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
<<<<<<< HEAD
        
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[] 
         * @static 
         */ 
=======

        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[]
         * @static
         */
>>>>>>> upstream/master
        public static function getQueuedCookies()
        {
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
<<<<<<< HEAD
         
    }

    class Crypt {
        
=======
    }

    class Crypt
    {
>>>>>>> upstream/master
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function supported($key, $cipher)
        {
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function generateKey($cipher)
        {
            return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Encrypt the given value.
         *
         * @param mixed $value
<<<<<<< HEAD
         * @param bool $serialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
=======
         * @param bool  $serialize
         *
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function encrypt($value, $serialize = true)
        {
            return \Illuminate\Encryption\Encrypter::encrypt($value, $serialize);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function encryptString($value)
        {
            return \Illuminate\Encryption\Encrypter::encryptString($value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Decrypt the given value.
         *
         * @param mixed $payload
<<<<<<< HEAD
         * @param bool $unserialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
=======
         * @param bool  $unserialize
         *
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function decrypt($payload, $unserialize = true)
        {
            return \Illuminate\Encryption\Encrypter::decrypt($payload, $unserialize);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function decryptString($payload)
        {
            return \Illuminate\Encryption\Encrypter::decryptString($payload);
        }
<<<<<<< HEAD
        
        /**
         * Get the encryption key.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the encryption key.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getKey()
        {
            return \Illuminate\Encryption\Encrypter::getKey();
        }
<<<<<<< HEAD
         
    }

    class DB {
        
=======
    }

    class DB
    {
>>>>>>> upstream/master
        /**
         * Get a database connection instance.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
>>>>>>> upstream/master
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Disconnect from the given database.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Reconnect to the given database.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
>>>>>>> upstream/master
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
<<<<<<< HEAD
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default connection name.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the support drivers.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function supportedDrivers()
        {
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
<<<<<<< HEAD
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the drivers that are actually available.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function availableDrivers()
        {
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
<<<<<<< HEAD
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register an extension connection resolver.
         *
         * @param string   $name
         * @param callable $resolver
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
<<<<<<< HEAD
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Return all of the created connections.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
<<<<<<< HEAD
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\PostgresBuilder 
         * @static 
         */ 
=======

        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\PostgresBuilder
         * @static
         */
>>>>>>> upstream/master
        public static function getSchemaBuilder()
        {
            return \Illuminate\Database\PostgresConnection::getSchemaBuilder();
        }
<<<<<<< HEAD
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::useDefaultPostProcessor();
        }
        
=======

        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::useDefaultQueryGrammar();
        }

        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::useDefaultSchemaGrammar();
        }

        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::useDefaultPostProcessor();
        }

>>>>>>> upstream/master
        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
<<<<<<< HEAD
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::table($table);
        }
        
        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function query()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::query();
        }
        
=======
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function table($table)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::table($table);
        }

        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function query()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::query();
        }

>>>>>>> upstream/master
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::selectOne($query, $bindings, $useReadPdo);
        }
        
=======
         * @param array  $bindings
         * @param bool   $useReadPdo
         *
         * @return mixed
         * @static
         */
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::selectOne($query, $bindings, $useReadPdo);
        }

>>>>>>> upstream/master
        /**
         * Run a select statement against the database.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::selectFromWriteConnection($query, $bindings);
        }
        
=======
         * @param array  $bindings
         *
         * @return array
         * @static
         */
        public static function selectFromWriteConnection($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::selectFromWriteConnection($query, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Run a select statement against the database.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::select($query, $bindings, $useReadPdo);
        }
        
=======
         * @param array  $bindings
         * @param bool   $useReadPdo
         *
         * @return array
         * @static
         */
        public static function select($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::select($query, $bindings, $useReadPdo);
        }

>>>>>>> upstream/master
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::cursor($query, $bindings, $useReadPdo);
        }
        
=======
         * @param array  $bindings
         * @param bool   $useReadPdo
         *
         * @return \Generator
         * @static
         */
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::cursor($query, $bindings, $useReadPdo);
        }

>>>>>>> upstream/master
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::insert($query, $bindings);
        }
        
=======
         * @param array  $bindings
         *
         * @return bool
         * @static
         */
        public static function insert($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::insert($query, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Run an update statement against the database.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::update($query, $bindings);
        }
        
=======
         * @param array  $bindings
         *
         * @return int
         * @static
         */
        public static function update($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::update($query, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::delete($query, $bindings);
        }
        
=======
         * @param array  $bindings
         *
         * @return int
         * @static
         */
        public static function delete($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::delete($query, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::statement($query, $bindings);
        }
        
=======
         * @param array  $bindings
         *
         * @return bool
         * @static
         */
        public static function statement($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::statement($query, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
<<<<<<< HEAD
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::affectingStatement($query, $bindings);
        }
        
=======
         * @param array  $bindings
         *
         * @return int
         * @static
         */
        public static function affectingStatement($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::affectingStatement($query, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::unprepared($query);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::unprepared($query);
        }

>>>>>>> upstream/master
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::pretend($callback);
        }
        
=======
         *
         * @return array
         * @static
         */
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::pretend($callback);
        }

>>>>>>> upstream/master
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
<<<<<<< HEAD
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::bindValues($statement, $bindings);
        }
        
=======
         * @param array         $bindings
         *
         * @return void
         * @static
         */
        public static function bindValues($statement, $bindings)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::bindValues($statement, $bindings);
        }

>>>>>>> upstream/master
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::prepareBindings($bindings);
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::logQuery($query, $bindings, $time);
        }
        
=======
         *
         * @return array
         * @static
         */
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::prepareBindings($bindings);
        }

        /**
         * Log a query in the connection's query log.
         *
         * @param string     $query
         * @param array      $bindings
         * @param float|null $time
         *
         * @return void
         * @static
         */
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::logQuery($query, $bindings, $time);
        }

>>>>>>> upstream/master
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::listen($callback);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::listen($callback);
        }

>>>>>>> upstream/master
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
<<<<<<< HEAD
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::raw($value);
        }
        
=======
         *
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::raw($value);
        }

>>>>>>> upstream/master
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::recordsHaveBeenModified($value);
        }
        
        /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::isDoctrineAvailable();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::recordsHaveBeenModified($value);
        }

        /**
         * Is Doctrine available?
         *
         * @return bool
         * @static
         */
        public static function isDoctrineAvailable()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::isDoctrineAvailable();
        }

>>>>>>> upstream/master
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
<<<<<<< HEAD
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getReadPdo();
        }
        
=======
         *
         * @return \Doctrine\DBAL\Schema\Column
         * @static
         */
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getDoctrineColumn($table, $column);
        }

        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
         * @static
         */
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getDoctrineSchemaManager();
        }

        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection
         * @static
         */
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getDoctrineConnection();
        }

        /**
         * Get the current PDO connection.
         *
         * @return \PDO
         * @static
         */
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getPdo();
        }

        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO
         * @static
         */
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getReadPdo();
        }

>>>>>>> upstream/master
        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::setPdo($pdo);
        }
        
=======
         *
         * @return $this
         * @static
         */
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::setPdo($pdo);
        }

>>>>>>> upstream/master
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::setReadPdo($pdo);
        }
        
=======
         *
         * @return $this
         * @static
         */
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::setReadPdo($pdo);
        }

>>>>>>> upstream/master
        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::setReconnector($reconnector);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getName();
        }
        
=======
         *
         * @return $this
         * @static
         */
        public static function setReconnector($reconnector)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::setReconnector($reconnector);
        }

        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getName();
        }

>>>>>>> upstream/master
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getQueryGrammar();
        }
        
=======
         *
         * @return mixed
         * @static
         */
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getConfig($option);
        }

        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getDriverName();
        }

        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getQueryGrammar();
        }

>>>>>>> upstream/master
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getSchemaGrammar();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::setQueryGrammar($grammar);
        }

        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getSchemaGrammar();
        }

>>>>>>> upstream/master
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getPostProcessor();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::setSchemaGrammar($grammar);
        }

        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getPostProcessor();
        }

>>>>>>> upstream/master
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getEventDispatcher();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::setPostProcessor($processor);
        }

        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getEventDispatcher();
        }

>>>>>>> upstream/master
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::setEventDispatcher($events);
        }
        
        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::pretending();
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getDatabaseName();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::setEventDispatcher($events);
        }

        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool
         * @static
         */
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::pretending();
        }

        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getQueryLog();
        }

        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::flushQueryLog();
        }

        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::enableQueryLog();
        }

        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::disableQueryLog();
        }

        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::logging();
        }

        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getDatabaseName();
        }

>>>>>>> upstream/master
        /**
         * Set the name of the connected database.
         *
         * @param string $database
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::setDatabaseName($database);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getTablePrefix();
        }
        
=======
         *
         * @return string
         * @static
         */
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::setDatabaseName($database);
        }

        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getTablePrefix();
        }

>>>>>>> upstream/master
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::setTablePrefix($prefix);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::setTablePrefix($prefix);
        }

>>>>>>> upstream/master
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
<<<<<<< HEAD
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::withTablePrefix($grammar);
        }
        
        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::resolverFor($driver, $callback);
        }
        
=======
         *
         * @return \Illuminate\Database\Grammar
         * @static
         */
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::withTablePrefix($grammar);
        }

        /**
         * Register a connection resolver.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::resolverFor($driver, $callback);
        }

>>>>>>> upstream/master
        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::getResolver($driver);
        }
        
=======
         *
         * @return mixed
         * @static
         */
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::getResolver($driver);
        }

>>>>>>> upstream/master
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @param int $attempts
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::transaction($callback, $attempts);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */ 
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::commit();
        }
        
=======
         * @param int      $attempts
         *
         * @throws \Exception|\Throwable
         *
         * @return mixed
         * @static
         */
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::transaction($callback, $attempts);
        }

        /**
         * Start a new database transaction.
         *
         * @throws \Exception
         *
         * @return void
         * @static
         */
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::beginTransaction();
        }

        /**
         * Commit the active database transaction.
         *
         * @return void
         * @static
         */
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::commit();
        }

>>>>>>> upstream/master
        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\PostgresConnection::rollBack($toLevel);
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\PostgresConnection::transactionLevel();
        }
         
    }

    class Event {
        
=======
         *
         * @return void
         * @static
         */
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\PostgresConnection::rollBack($toLevel);
        }

        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\PostgresConnection::transactionLevel();
        }
    }

    class Event
    {
>>>>>>> upstream/master
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
<<<<<<< HEAD
         * @param mixed $listener
         * @return void 
         * @static 
         */ 
=======
         * @param mixed        $listener
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function listen($events, $listener)
        {
            \Illuminate\Events\Dispatcher::listen($events, $listener);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
<<<<<<< HEAD
         * @param array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = array())
        {
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
=======
         * @param array  $payload
         *
         * @return void
         * @static
         */
        public static function push($event, $payload = [])
        {
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }

>>>>>>> upstream/master
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flush($event)
        {
            \Illuminate\Events\Dispatcher::flush($event);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function subscribe($subscriber)
        {
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
<<<<<<< HEAD
         * @param mixed $payload
         * @return array|null 
         * @static 
         */ 
        public static function until($event, $payload = array())
        {
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
=======
         * @param mixed         $payload
         *
         * @return array|null
         * @static
         */
        public static function until($event, $payload = [])
        {
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }

>>>>>>> upstream/master
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
<<<<<<< HEAD
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function fire($event, $payload = array(), $halt = false)
        {
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
=======
         * @param mixed         $payload
         * @param bool          $halt
         *
         * @return array|null
         * @static
         */
        public static function fire($event, $payload = [], $halt = false)
        {
            return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
        }

>>>>>>> upstream/master
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
<<<<<<< HEAD
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = array(), $halt = false)
        {
            return \Illuminate\Events\Dispatcher::dispatch($event, $payload, $halt);
        }
        
=======
         * @param mixed         $payload
         * @param bool          $halt
         *
         * @return array|null
         * @static
         */
        public static function dispatch($event, $payload = [], $halt = false)
        {
            return \Illuminate\Events\Dispatcher::dispatch($event, $payload, $halt);
        }

>>>>>>> upstream/master
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string $listener
<<<<<<< HEAD
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
=======
         * @param bool            $wildcard
         *
         * @return \Closure
         * @static
         */
>>>>>>> upstream/master
        public static function makeListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::makeListener($listener, $wildcard);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
<<<<<<< HEAD
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
=======
         * @param bool   $wildcard
         *
         * @return \Closure
         * @static
         */
>>>>>>> upstream/master
        public static function createClassListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::createClassListener($listener, $wildcard);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function forget($event)
        {
            \Illuminate\Events\Dispatcher::forget($event);
        }
<<<<<<< HEAD
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Forget all of the pushed listeners.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function forgetPushed()
        {
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setQueueResolver($resolver)
        {
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
<<<<<<< HEAD
         
    }

    class File {
        
=======
    }

    class File
    {
>>>>>>> upstream/master
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function exists($path)
        {
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the contents of a file.
         *
         * @param string $path
<<<<<<< HEAD
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
=======
         * @param bool   $lock
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function get($path, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::get($path, $lock);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function sharedGet($path)
        {
            return \Illuminate\Filesystem\Filesystem::sharedGet($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the returned value of a file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
=======
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function getRequire($path)
        {
            return \Illuminate\Filesystem\Filesystem::getRequire($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Require the given file once.
         *
         * @param string $file
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function requireOnce($file)
        {
            return \Illuminate\Filesystem\Filesystem::requireOnce($file);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the MD5 hash of the file at the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function hash($path)
        {
            return \Illuminate\Filesystem\Filesystem::hash($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
<<<<<<< HEAD
         * @param bool $lock
         * @return int 
         * @static 
         */ 
=======
         * @param bool   $lock
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function put($path, $contents, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function prepend($path, $data)
        {
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function append($path, $data)
        {
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $mode
         * @return mixed 
         * @static 
         */ 
=======
         * @param int    $mode
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function chmod($path, $mode = null)
        {
            return \Illuminate\Filesystem\Filesystem::chmod($path, $mode);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function move($path, $target)
        {
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function copy($path, $target)
        {
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a hard link to the target file or directory.
         *
         * @param string $target
         * @param string $link
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function link($target, $link)
        {
            \Illuminate\Filesystem\Filesystem::link($target, $link);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Extract the file name from a file path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function name($path)
        {
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function basename($path)
        {
            return \Illuminate\Filesystem\Filesystem::basename($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function dirname($path)
        {
            return \Illuminate\Filesystem\Filesystem::dirname($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function extension($path)
        {
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the file type of a given file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function type($path)
        {
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string|false 
         * @static 
         */ 
=======
         *
         * @return string|false
         * @static
         */
>>>>>>> upstream/master
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the file size of a given file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function size($path)
        {
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the file's last modification time.
         *
         * @param string $path
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isDirectory($directory)
        {
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given path is readable.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isReadable($path)
        {
            return \Illuminate\Filesystem\Filesystem::isReadable($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given path is writable.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isWritable($path)
        {
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given path is a file.
         *
         * @param string $file
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isFile($file)
        {
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
<<<<<<< HEAD
         * @param int $flags
         * @return array 
         * @static 
         */ 
=======
         * @param int    $flags
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function glob($pattern, $flags = 0)
        {
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
<<<<<<< HEAD
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
=======
         * @param bool   $hidden
         *
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
>>>>>>> upstream/master
        public static function files($directory, $hidden = false)
        {
            return \Illuminate\Filesystem\Filesystem::files($directory, $hidden);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
<<<<<<< HEAD
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
=======
         * @param bool   $hidden
         *
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
>>>>>>> upstream/master
        public static function allFiles($directory, $hidden = false)
        {
            return \Illuminate\Filesystem\Filesystem::allFiles($directory, $hidden);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function directories($directory)
        {
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a directory.
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */ 
=======
         * @param int    $mode
         * @param bool   $recursive
         * @param bool   $force
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
<<<<<<< HEAD
         * @param bool $overwrite
         * @return bool 
         * @static 
         */ 
=======
         * @param bool   $overwrite
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            return \Illuminate\Filesystem\Filesystem::moveDirectory($from, $to, $overwrite);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
<<<<<<< HEAD
         * @param int $options
         * @return bool 
         * @static 
         */ 
=======
         * @param int    $options
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function copyDirectory($directory, $destination, $options = null)
        {
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
<<<<<<< HEAD
        
        /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Recursively delete a directory.
         *
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool   $preserve
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function deleteDirectory($directory, $preserve = false)
        {
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function cleanDirectory($directory)
        {
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Filesystem\Filesystem::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Gate {
        
=======
    }

    class Gate
    {
>>>>>>> upstream/master
        /**
         * Determine if a given ability has been defined.
         *
         * @param string|array $ability
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($ability)
        {
            return \Illuminate\Auth\Access\Gate::has($ability);
        }
<<<<<<< HEAD
        
        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|string $callback
         * @return $this 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======

        /**
         * Define a new ability.
         *
         * @param string          $ability
         * @param callable|string $callback
         *
         * @throws \InvalidArgumentException
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function define($ability, $callback)
        {
            return \Illuminate\Auth\Access\Gate::define($ability, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
<<<<<<< HEAD
         * @param array $abilities
         * @return $this 
         * @static 
         */ 
=======
         * @param array  $abilities
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function resource($name, $class, $abilities = null)
        {
            return \Illuminate\Auth\Access\Gate::resource($name, $class, $abilities);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function policy($class, $policy)
        {
            return \Illuminate\Auth\Access\Gate::policy($class, $policy);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function before($callback)
        {
            return \Illuminate\Auth\Access\Gate::before($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function after($callback)
        {
            return \Illuminate\Auth\Access\Gate::after($callback);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function allows($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function denies($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }
        
=======

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string      $ability
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static function allows($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }

        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string      $ability
         * @param array|mixed $arguments
         *
         * @return bool
         * @static
         */
        public static function denies($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }

>>>>>>> upstream/master
        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
<<<<<<< HEAD
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function check($abilities, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::check($abilities, $arguments);
        }
        
=======
         * @param array|mixed                             $arguments
         *
         * @return bool
         * @static
         */
        public static function check($abilities, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::check($abilities, $arguments);
        }

>>>>>>> upstream/master
        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
<<<<<<< HEAD
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function any($abilities, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::any($abilities, $arguments);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function authorize($ability, $arguments = array())
        {
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }
        
=======
         * @param array|mixed                             $arguments
         *
         * @return bool
         * @static
         */
        public static function any($abilities, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::any($abilities, $arguments);
        }

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string      $ability
         * @param array|mixed $arguments
         *
         * @throws \Illuminate\Auth\Access\AuthorizationException
         *
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static function authorize($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }

>>>>>>> upstream/master
        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function getPolicyFor($class)
        {
            return \Illuminate\Auth\Access\Gate::getPolicyFor($class);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function resolvePolicy($class)
        {
            return \Illuminate\Auth\Access\Gate::resolvePolicy($class);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a gate instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
<<<<<<< HEAD
         * @return static 
         * @static 
         */ 
=======
         *
         * @return static
         * @static
         */
>>>>>>> upstream/master
        public static function forUser($user)
        {
            return \Illuminate\Auth\Access\Gate::forUser($user);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the defined abilities.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the defined abilities.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function abilities()
        {
            return \Illuminate\Auth\Access\Gate::abilities();
        }
<<<<<<< HEAD
        
        /**
         * Get all of the defined policies.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the defined policies.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function policies()
        {
            return \Illuminate\Auth\Access\Gate::policies();
        }
<<<<<<< HEAD
         
    }

    class Hash {
        
=======
    }

    class Hash
    {
>>>>>>> upstream/master
        /**
         * Hash the given value.
         *
         * @param string $value
<<<<<<< HEAD
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function make($value, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
=======
         * @param array  $options
         *
         * @throws \RuntimeException
         *
         * @return string
         * @static
         */
        public static function make($value, $options = [])
        {
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }

>>>>>>> upstream/master
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
<<<<<<< HEAD
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function check($value, $hashedValue, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
=======
         * @param array  $options
         *
         * @return bool
         * @static
         */
        public static function check($value, $hashedValue, $options = [])
        {
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }

>>>>>>> upstream/master
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
<<<<<<< HEAD
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function needsRehash($hashedValue, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
=======
         * @param array  $options
         *
         * @return bool
         * @static
         */
        public static function needsRehash($hashedValue, $options = [])
        {
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }

>>>>>>> upstream/master
        /**
         * Set the default password work factor.
         *
         * @param int $rounds
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setRounds($rounds)
        {
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
<<<<<<< HEAD
         
    }

    class Lang {
        
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool 
         * @static 
         */ 
=======
    }

    class Lang
    {
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string      $key
         * @param string|null $locale
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasForLocale($key, $locale = null)
        {
            return \Illuminate\Translation\Translator::hasForLocale($key, $locale);
        }
<<<<<<< HEAD
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if a translation exists.
         *
         * @param string      $key
         * @param string|null $locale
         * @param bool        $fallback
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($key, $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::has($key, $locale, $fallback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the translation for a given key.
         *
         * @param string $key
<<<<<<< HEAD
         * @param array $replace
         * @param string $locale
         * @return string|array|null 
         * @static 
         */ 
        public static function trans($key, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::trans($key, $replace, $locale);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array|null 
         * @static 
         */ 
        public static function get($key, $replace = array(), $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
        }
        
=======
         * @param array  $replace
         * @param string $locale
         *
         * @return string|array|null
         * @static
         */
        public static function trans($key, $replace = [], $locale = null)
        {
            return \Illuminate\Translation\Translator::trans($key, $replace, $locale);
        }

        /**
         * Get the translation for the given key.
         *
         * @param string      $key
         * @param array       $replace
         * @param string|null $locale
         * @param bool        $fallback
         *
         * @return string|array|null
         * @static
         */
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
        }

>>>>>>> upstream/master
        /**
         * Get the translation for a given key from the JSON translation files.
         *
         * @param string $key
<<<<<<< HEAD
         * @param array $replace
         * @param string $locale
         * @return string|array|null 
         * @static 
         */ 
        public static function getFromJson($key, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::getFromJson($key, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function transChoice($key, $number, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::transChoice($key, $number, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int|array|\Countable $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function choice($key, $number, $replace = array(), $locale = null)
        {
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void 
         * @static 
         */ 
=======
         * @param array  $replace
         * @param string $locale
         *
         * @return string|array|null
         * @static
         */
        public static function getFromJson($key, $replace = [], $locale = null)
        {
            return \Illuminate\Translation\Translator::getFromJson($key, $replace, $locale);
        }

        /**
         * Get a translation according to an integer value.
         *
         * @param string               $key
         * @param int|array|\Countable $number
         * @param array                $replace
         * @param string               $locale
         *
         * @return string
         * @static
         */
        public static function transChoice($key, $number, $replace = [], $locale = null)
        {
            return \Illuminate\Translation\Translator::transChoice($key, $number, $replace, $locale);
        }

        /**
         * Get a translation according to an integer value.
         *
         * @param string               $key
         * @param int|array|\Countable $number
         * @param array                $replace
         * @param string               $locale
         *
         * @return string
         * @static
         */
        public static function choice($key, $number, $replace = [], $locale = null)
        {
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }

        /**
         * Add translation lines to the given locale.
         *
         * @param array  $lines
         * @param string $locale
         * @param string $namespace
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addLines($lines, $locale, $namespace = '*')
        {
            \Illuminate\Translation\Translator::addLines($lines, $locale, $namespace);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function load($namespace, $group, $locale)
        {
            \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addNamespace($namespace, $hint)
        {
            \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addJsonPath($path)
        {
            \Illuminate\Translation\Translator::addJsonPath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function parseKey($key)
        {
            return \Illuminate\Translation\Translator::parseKey($key);
        }
<<<<<<< HEAD
        
        /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector 
         * @static 
         */ 
=======

        /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector
         * @static
         */
>>>>>>> upstream/master
        public static function getSelector()
        {
            return \Illuminate\Translation\Translator::getSelector();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setSelector($selector)
        {
            \Illuminate\Translation\Translator::setSelector($selector);
        }
<<<<<<< HEAD
        
        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader 
         * @static 
         */ 
=======

        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader
         * @static
         */
>>>>>>> upstream/master
        public static function getLoader()
        {
            return \Illuminate\Translation\Translator::getLoader();
        }
<<<<<<< HEAD
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function locale()
        {
            return \Illuminate\Translation\Translator::locale();
        }
<<<<<<< HEAD
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getLocale()
        {
            return \Illuminate\Translation\Translator::getLocale();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default locale.
         *
         * @param string $locale
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setLocale($locale)
        {
            \Illuminate\Translation\Translator::setLocale($locale);
        }
<<<<<<< HEAD
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the fallback locale being used.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getFallback()
        {
            return \Illuminate\Translation\Translator::getFallback();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setFallback($fallback)
        {
            \Illuminate\Translation\Translator::setFallback($fallback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
<<<<<<< HEAD
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======
         * @param array  $parsed
         *
         * @return void
         * @static
         */
        public static function setParsedKey($key, $parsed)
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver
            \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Translation\Translator::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Translation\Translator::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Log {
        
=======
    }

    class Log
    {
>>>>>>> upstream/master
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function debug($message, $context = array())
        {
            return \Monolog\Logger::debug($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function debug($message, $context = [])
        {
            return \Monolog\Logger::debug($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function info($message, $context = array())
        {
            return \Monolog\Logger::info($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function info($message, $context = [])
        {
            return \Monolog\Logger::info($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function notice($message, $context = array())
        {
            return \Monolog\Logger::notice($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function notice($message, $context = [])
        {
            return \Monolog\Logger::notice($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function warning($message, $context = array())
        {
            return \Monolog\Logger::warning($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function warning($message, $context = [])
        {
            return \Monolog\Logger::warning($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function error($message, $context = array())
        {
            return \Monolog\Logger::error($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function error($message, $context = [])
        {
            return \Monolog\Logger::error($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function critical($message, $context = array())
        {
            return \Monolog\Logger::critical($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function critical($message, $context = [])
        {
            return \Monolog\Logger::critical($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function alert($message, $context = array())
        {
            return \Monolog\Logger::alert($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function alert($message, $context = [])
        {
            return \Monolog\Logger::alert($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
<<<<<<< HEAD
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function emergency($message, $context = array())
        {
            return \Monolog\Logger::emergency($message, $context);
        }
        
=======
         * @param array  $context The log context
         *
         * @return bool Whether the record has been processed
         * @static
         */
        public static function emergency($message, $context = [])
        {
            return \Monolog\Logger::emergency($message, $context);
        }

>>>>>>> upstream/master
        /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
<<<<<<< HEAD
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function log($level, $message, $context = array())
        {
            \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
=======
         * @param array  $context
         *
         * @return void
         * @static
         */
        public static function log($level, $message, $context = [])
        {
            \Illuminate\Log\Writer::log($level, $message, $context);
        }

>>>>>>> upstream/master
        /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
<<<<<<< HEAD
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function write($level, $message, $context = array())
        {
            \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
=======
         * @param array  $context
         *
         * @return void
         * @static
         */
        public static function write($level, $message, $context = [])
        {
            \Illuminate\Log\Writer::write($level, $message, $context);
        }

>>>>>>> upstream/master
        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function useFiles($path, $level = 'debug')
        {
            \Illuminate\Log\Writer::useFiles($path, $level);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a daily file log handler.
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */ 
=======
         * @param int    $days
         * @param string $level
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function useDailyFiles($path, $days = 0, $level = 'debug')
        {
            \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
<<<<<<< HEAD
         * @param mixed $facility
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
=======
         * @param mixed  $facility
         *
         * @return \Psr\Log\LoggerInterface
         * @static
         */
>>>>>>> upstream/master
        public static function useSyslog($name = 'laravel', $level = 'debug', $facility = 8)
        {
            return \Illuminate\Log\Writer::useSyslog($name, $level, $facility);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an error_log handler.
         *
         * @param string $level
<<<<<<< HEAD
         * @param int $messageType
         * @return void 
         * @static 
         */ 
=======
         * @param int    $messageType
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function useErrorLog($level = 'debug', $messageType = 0)
        {
            \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return void 
         * @throws \RuntimeException
         * @static 
         */ 
=======
         *
         * @throws \RuntimeException
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function listen($callback)
        {
            \Illuminate\Log\Writer::listen($callback);
        }
<<<<<<< HEAD
        
        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */ 
=======

        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger
         * @static
         */
>>>>>>> upstream/master
        public static function getMonolog()
        {
            return \Illuminate\Log\Writer::getMonolog();
        }
<<<<<<< HEAD
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
=======

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
>>>>>>> upstream/master
        public static function getEventDispatcher()
        {
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setEventDispatcher($dispatcher)
        {
            \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
<<<<<<< HEAD
         
    }

    class Mail {
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
=======
    }

    class Mail
    {
        /**
         * Set the global from address and name.
         *
         * @param string      $address
         * @param string|null $name
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function alwaysFrom($address, $name = null)
        {
            \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
        }
<<<<<<< HEAD
        
        /**
         * Set the global reply-to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
=======

        /**
         * Set the global reply-to address and name.
         *
         * @param string      $address
         * @param string|null $name
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function alwaysReplyTo($address, $name = null)
        {
            \Illuminate\Mail\Mailer::alwaysReplyTo($address, $name);
        }
<<<<<<< HEAD
        
        /**
         * Set the global to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
=======

        /**
         * Set the global to address and name.
         *
         * @param string      $address
         * @param string|null $name
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function alwaysTo($address, $name = null)
        {
            \Illuminate\Mail\Mailer::alwaysTo($address, $name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
<<<<<<< HEAD
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
>>>>>>> upstream/master
        public static function to($users)
        {
            return \Illuminate\Mail\Mailer::to($users);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
<<<<<<< HEAD
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
>>>>>>> upstream/master
        public static function bcc($users)
        {
            return \Illuminate\Mail\Mailer::bcc($users);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
<<<<<<< HEAD
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $callback
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function raw($text, $callback)
        {
            \Illuminate\Mail\Mailer::raw($text, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
<<<<<<< HEAD
         * @param array $data
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
=======
         * @param array  $data
         * @param mixed  $callback
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function plain($view, $data, $callback)
        {
            \Illuminate\Mail\Mailer::plain($view, $data, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Render the given message as a view.
         *
         * @param string|array $view
<<<<<<< HEAD
         * @param array $data
         * @return \Illuminate\View\View 
         * @static 
         */ 
        public static function render($view, $data = array())
        {
            return \Illuminate\Mail\Mailer::render($view, $data);
        }
        
=======
         * @param array        $data
         *
         * @return \Illuminate\View\View
         * @static
         */
        public static function render($view, $data = [])
        {
            return \Illuminate\Mail\Mailer::render($view, $data);
        }

>>>>>>> upstream/master
        /**
         * Send a new message using a view.
         *
         * @param string|array|\Illuminate\Mail\MailableContract $view
<<<<<<< HEAD
         * @param array $data
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function send($view, $data = array(), $callback = null)
        {
            \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }
        
=======
         * @param array                                          $data
         * @param \Closure|string                                $callback
         *
         * @return void
         * @static
         */
        public static function send($view, $data = [], $callback = null)
        {
            \Illuminate\Mail\Mailer::send($view, $data, $callback);
        }

>>>>>>> upstream/master
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array|\Illuminate\Mail\MailableContract $view
<<<<<<< HEAD
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
=======
         * @param string|null                                    $queue
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function queue($view, $queue = null)
        {
            return \Illuminate\Mail\Mailer::queue($view, $queue);
        }
<<<<<<< HEAD
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string       $queue
         * @param string|array $view
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function onQueue($queue, $view)
        {
            return \Illuminate\Mail\Mailer::onQueue($queue, $view);
        }
<<<<<<< HEAD
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         * 
         * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
         *
         * @param string $queue
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
         *
         * @param string       $queue
         * @param string|array $view
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function queueOn($queue, $view)
        {
            return \Illuminate\Mail\Mailer::queueOn($queue, $view);
        }
<<<<<<< HEAD
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|array|\Illuminate\Mail\MailableContract $view
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int           $delay
         * @param string|array|\Illuminate\Mail\MailableContract $view
         * @param string|null                                    $queue
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function later($delay, $view, $queue = null)
        {
            return \Illuminate\Mail\Mailer::later($delay, $view, $queue);
        }
<<<<<<< HEAD
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string                               $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|array                         $view
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function laterOn($queue, $delay, $view)
        {
            return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view);
        }
<<<<<<< HEAD
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */ 
=======

        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory
         * @static
         */
>>>>>>> upstream/master
        public static function getViewFactory()
        {
            return \Illuminate\Mail\Mailer::getViewFactory();
        }
<<<<<<< HEAD
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */ 
=======

        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer
         * @static
         */
>>>>>>> upstream/master
        public static function getSwiftMailer()
        {
            return \Illuminate\Mail\Mailer::getSwiftMailer();
        }
<<<<<<< HEAD
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the array of failed recipients.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function failures()
        {
            return \Illuminate\Mail\Mailer::failures();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setSwiftMailer($swift)
        {
            \Illuminate\Mail\Mailer::setSwiftMailer($swift);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Factory $queue
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setQueue($queue)
        {
            return \Illuminate\Mail\Mailer::setQueue($queue);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Mail\Mailer::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Mail\Mailer::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Mail\Mailer::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Notification {
        
=======
    }

    class Notification
    {
>>>>>>> upstream/master
        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
<<<<<<< HEAD
         * @param mixed $notification
         * @return void 
         * @static 
         */ 
=======
         * @param mixed                                      $notification
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function send($notifiables, $notification)
        {
            \Illuminate\Notifications\ChannelManager::send($notifiables, $notification);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Send the given notification immediately.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
<<<<<<< HEAD
         * @param mixed $notification
         * @param array|null $channels
         * @return void 
         * @static 
         */ 
=======
         * @param mixed                                      $notification
         * @param array|null                                 $channels
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function sendNow($notifiables, $notification, $channels = null)
        {
            \Illuminate\Notifications\ChannelManager::sendNow($notifiables, $notification, $channels);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a channel instance.
         *
         * @param string|null $name
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function channel($name = null)
        {
            return \Illuminate\Notifications\ChannelManager::channel($name);
        }
<<<<<<< HEAD
        
        /**
         * Get the default channel driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Notifications\ChannelManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
        /**
         * Get the default channel driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function deliversVia()
        {
            return \Illuminate\Notifications\ChannelManager::deliversVia();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default channel driver name.
         *
         * @param string $channel
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function deliverVia($channel)
        {
            \Illuminate\Notifications\ChannelManager::deliverVia($channel);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a driver instance.
         *
         * @param string $driver
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::getDrivers();
        }
         
    }

    class Password {
        
=======
         *
         * @return mixed
         * @static
         */
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Notifications\ChannelManager::driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Notifications\ChannelManager::extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Notifications\ChannelManager::getDrivers();
        }
    }

    class Password
    {
>>>>>>> upstream/master
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Auth\PasswordBroker 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Auth\PasswordBroker
         * @static
         */
>>>>>>> upstream/master
        public static function broker($name = null)
        {
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::broker($name);
        }
<<<<<<< HEAD
        
        /**
         * Get the default password broker name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default password broker name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default password broker name.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\Passwords\PasswordBrokerManager::setDefaultDriver($name);
        }
<<<<<<< HEAD
         
    }

    class Queue {
        
=======
    }

    class Queue
    {
>>>>>>> upstream/master
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function before($callback)
        {
            \Illuminate\Queue\QueueManager::before($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function after($callback)
        {
            \Illuminate\Queue\QueueManager::after($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function exceptionOccurred($callback)
        {
            \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function looping($callback)
        {
            \Illuminate\Queue\QueueManager::looping($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function failing($callback)
        {
            \Illuminate\Queue\QueueManager::failing($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function stopping($callback)
        {
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function connected($name = null)
        {
            return \Illuminate\Queue\QueueManager::connected($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Queue\Queue
         * @static
         */
>>>>>>> upstream/master
        public static function connection($name = null)
        {
            return \Illuminate\Queue\QueueManager::connection($name);
        }
<<<<<<< HEAD
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
=======

        /**
         * Add a queue connection resolver.
         *
         * @param string   $driver
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function extend($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
<<<<<<< HEAD
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
=======

        /**
         * Add a queue connection resolver.
         *
         * @param string   $driver
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addConnector($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
<<<<<<< HEAD
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the name of the default queue connection.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultDriver($name)
        {
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getName($connection = null)
        {
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isDownForMaintenance()
        {
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the size of the queue.
         *
         * @param string $queue
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function size($queue = null)
        {
            return \Illuminate\Queue\SyncQueue::size($queue);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
<<<<<<< HEAD
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
=======
         * @param mixed  $data
         * @param string $queue
         *
         * @throws \Exception|\Throwable
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function push($job, $data = '', $queue = null)
        {
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
<<<<<<< HEAD
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = array())
        {
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
=======
         * @param array  $options
         *
         * @return mixed
         * @static
         */
        public static function pushRaw($payload, $queue = null, $options = [])
        {
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }

>>>>>>> upstream/master
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
<<<<<<< HEAD
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
=======
         * @param string                               $job
         * @param mixed                                $data
         * @param string                               $queue
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function later($delay, $job, $data = '', $queue = null)
        {
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Queue\Job|null
         * @static
         */
>>>>>>> upstream/master
        public static function pop($queue = null)
        {
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
<<<<<<< HEAD
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
=======
         * @param mixed  $data
         *
         * @return mixed
         * @static
         */
        public static function pushOn($queue, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }

        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string                               $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string                               $job
         * @param mixed                                $data
         *
         * @return mixed
         * @static
         */
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }

        /**
         * Push an array of jobs onto the queue.
         *
         * @param array  $jobs
         * @param mixed  $data
         * @param string $queue
         *
         * @return mixed
         * @static
         */
        public static function bulk($jobs, $data = '', $queue = null)
        {
            //Method inherited from \Illuminate\Queue\Queue
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }

>>>>>>> upstream/master
        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getJobExpiration($job);
        }
        
        /**
         * Get the connection name for the queue.
         *
         * @return string 
         * @static 
         */ 
        public static function getConnectionName()
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getConnectionName();
        }
        
=======
         *
         * @return mixed
         * @static
         */
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue
            return \Illuminate\Queue\SyncQueue::getJobExpiration($job);
        }

        /**
         * Get the connection name for the queue.
         *
         * @return string
         * @static
         */
        public static function getConnectionName()
        {
            //Method inherited from \Illuminate\Queue\Queue
            return \Illuminate\Queue\SyncQueue::getConnectionName();
        }

>>>>>>> upstream/master
        /**
         * Set the connection name for the queue.
         *
         * @param string $name
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
        public static function setConnectionName($name)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::setConnectionName($name);
        }
        
=======
         *
         * @return $this
         * @static
         */
        public static function setConnectionName($name)
        {
            //Method inherited from \Illuminate\Queue\Queue
            return \Illuminate\Queue\SyncQueue::setConnectionName($name);
        }

>>>>>>> upstream/master
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
         
    }

    class Redirect {
        
=======
         *
         * @return void
         * @static
         */
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
    }

    class Redirect
    {
>>>>>>> upstream/master
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
<<<<<<< HEAD
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
>>>>>>> upstream/master
        public static function home($status = 302)
        {
            return \Illuminate\Routing\Redirector::home($status);
        }
<<<<<<< HEAD
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function back($status = 302, $headers = array(), $fallback = false)
        {
            return \Illuminate\Routing\Redirector::back($status, $headers, $fallback);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function refresh($status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
=======

        /**
         * Create a new redirect response to the previous location.
         *
         * @param int   $status
         * @param array $headers
         * @param mixed $fallback
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function back($status = 302, $headers = [], $fallback = false)
        {
            return \Illuminate\Routing\Redirector::back($status, $headers, $fallback);
        }

        /**
         * Create a new redirect response to the current URI.
         *
         * @param int   $status
         * @param array $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function refresh($status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function guest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
=======
         * @param int    $status
         * @param array  $headers
         * @param bool   $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
=======
         * @param int    $status
         * @param array  $headers
         * @param bool   $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function to($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
=======
         * @param int    $status
         * @param array  $headers
         * @param bool   $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function away($path, $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
=======
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function away($path, $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function secure($path, $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
=======
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function secure($path, $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
<<<<<<< HEAD
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function route($route, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
=======
         * @param array  $parameters
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
<<<<<<< HEAD
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function action($action, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
=======
         * @param array  $parameters
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }

        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
>>>>>>> upstream/master
        public static function getUrlGenerator()
        {
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setSession($session)
        {
            \Illuminate\Routing\Redirector::setSession($session);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Redirector::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Routing\Redirector::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Request {
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
=======
    }

    class Request
    {
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static
         * @static
         */
>>>>>>> upstream/master
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }
<<<<<<< HEAD
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Return the Request instance.
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function instance()
        {
            return \Illuminate\Http\Request::instance();
        }
<<<<<<< HEAD
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the request method.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function method()
        {
            return \Illuminate\Http\Request::method();
        }
<<<<<<< HEAD
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the root URL for the application.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function root()
        {
            return \Illuminate\Http\Request::root();
        }
<<<<<<< HEAD
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function url()
        {
            return \Illuminate\Http\Request::url();
        }
<<<<<<< HEAD
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the full URL for the request.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function fullUrl()
        {
            return \Illuminate\Http\Request::fullUrl();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function fullUrlWithQuery($query)
        {
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
<<<<<<< HEAD
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the current path info for the request.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function path()
        {
            return \Illuminate\Http\Request::path();
        }
<<<<<<< HEAD
        
        /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the current decoded path info for the request.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function decodedPath()
        {
            return \Illuminate\Http\Request::decodedPath();
        }
<<<<<<< HEAD
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
=======

        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int         $index
         * @param string|null $default
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function segment($index, $default = null)
        {
            return \Illuminate\Http\Request::segment($index, $default);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the segments for the request path.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function segments()
        {
            return \Illuminate\Http\Request::segments();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function is($patterns = null)
        {
            return \Illuminate\Http\Request::is($patterns);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function routeIs($patterns = null)
        {
            return \Illuminate\Http\Request::routeIs($patterns);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed $patterns
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function fullUrlIs($patterns = null)
        {
            return \Illuminate\Http\Request::fullUrlIs($patterns);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function ajax()
        {
            return \Illuminate\Http\Request::ajax();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function pjax()
        {
            return \Illuminate\Http\Request::pjax();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function secure()
        {
            return \Illuminate\Http\Request::secure();
        }
<<<<<<< HEAD
        
        /**
         * Get the client IP address.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the client IP address.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function ip()
        {
            return \Illuminate\Http\Request::ip();
        }
<<<<<<< HEAD
        
        /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the client IP addresses.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function ips()
        {
            return \Illuminate\Http\Request::ips();
        }
<<<<<<< HEAD
        
        /**
         * Get the client user agent.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the client user agent.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function userAgent()
        {
            return \Illuminate\Http\Request::userAgent();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
<<<<<<< HEAD
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Http\Request
         * @static
         */
>>>>>>> upstream/master
        public static function merge($input)
        {
            return \Illuminate\Http\Request::merge($input);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Replace the input for the current request.
         *
         * @param array $input
<<<<<<< HEAD
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Http\Request
         * @static
         */
>>>>>>> upstream/master
        public static function replace($input)
        {
            return \Illuminate\Http\Request::replace($input);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function json($key = null, $default = null)
        {
            return \Illuminate\Http\Request::json($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
<<<<<<< HEAD
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Http\Request
         * @static
         */
>>>>>>> upstream/master
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }
<<<<<<< HEAD
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static 
         * @static 
         */ 
=======

        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query      The GET parameters
         * @param array $request    The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies    The COOKIE parameters
         * @param array $files      The FILES parameters
         * @param array $server     The SERVER parameters
         *
         * @return static
         * @static
         */
>>>>>>> upstream/master
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
<<<<<<< HEAD
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */ 
=======

        /**
         * Get the session associated with the request.
         *
         * @throws \RuntimeException
         *
         * @return \Illuminate\Session\Store
         * @static
         */
>>>>>>> upstream/master
        public static function session()
        {
            return \Illuminate\Http\Request::session();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setLaravelSession($session)
        {
            \Illuminate\Http\Request::setLaravelSession($session);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function user($guard = null)
        {
            return \Illuminate\Http\Request::user($guard);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
<<<<<<< HEAD
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Routing\Route|object|string
         * @static
         */
>>>>>>> upstream/master
        public static function route($param = null)
        {
            return \Illuminate\Http\Request::route($param);
        }
<<<<<<< HEAD
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
=======

        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @throws \RuntimeException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function fingerprint()
        {
            return \Illuminate\Http\Request::fingerprint();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the JSON payload for the request.
         *
         * @param array $json
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setJson($json)
        {
            return \Illuminate\Http\Request::setJson($json);
        }
<<<<<<< HEAD
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
=======

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
>>>>>>> upstream/master
        public static function getUserResolver()
        {
            return \Illuminate\Http\Request::getUserResolver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setUserResolver($callback)
        {
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
<<<<<<< HEAD
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
=======

        /**
         * Get the route resolver callback.
         *
         * @return \Closure
         * @static
         */
>>>>>>> upstream/master
        public static function getRouteResolver()
        {
            return \Illuminate\Http\Request::getRouteResolver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setRouteResolver($callback)
        {
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the input and files for the request.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function toArray()
        {
            return \Illuminate\Http\Request::toArray();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function offsetExists($offset)
        {
            return \Illuminate\Http\Request::offsetExists($offset);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function offsetGet($offset)
        {
            return \Illuminate\Http\Request::offsetGet($offset);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function offsetSet($offset, $value)
        {
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function offsetUnset($offset)
        {
            \Illuminate\Http\Request::offsetUnset($offset);
        }
<<<<<<< HEAD
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */ 
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static 
         * @static 
         */ 
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return static 
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
=======

        /**
         * Sets the parameters for this request.
         *
         * This method also re-initializes all properties.
         *
         * @param array           $query      The GET parameters
         * @param array           $request    The POST parameters
         * @param array           $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array           $cookies    The COOKIE parameters
         * @param array           $files      The FILES parameters
         * @param array           $server     The SERVER parameters
         * @param string|resource $content    The raw body data
         * @static
         */
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }

        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static
         * @static
         */
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::createFromGlobals();
        }

        /**
         * Creates a Request based on a given URI and configuration.
         *
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri        The URI
         * @param string $method     The HTTP method
         * @param array  $parameters The query (GET) or request (POST) parameters
         * @param array  $cookies    The request cookies ($_COOKIE)
         * @param array  $files      The request files ($_FILES)
         * @param array  $server     The server parameters ($_SERVER)
         * @param string $content    The raw body data
         *
         * @return static
         * @static
         */
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }

        /**
         * Sets a callable able to create a Request instance.
         *
>>>>>>> upstream/master
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
<<<<<<< HEAD
         * @static 
         */ 
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static 
         */ 
        public static function setTrustedProxies($proxies)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
=======
         * @static
         */
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setFactory($callable);
        }

        /**
         * Overrides the PHP global variables according to this request instance.
         *
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static
         */
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::overrideGlobals();
        }

        /**
         * Sets a list of trusted proxies.
         *
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies          A list of trusted proxies
         * @param int   $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         *
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static
         */
        public static function setTrustedProxies($proxies)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }

>>>>>>> upstream/master
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
<<<<<<< HEAD
         * @static 
         */ 
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
=======
         * @static
         */
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedProxies();
        }

>>>>>>> upstream/master
        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
<<<<<<< HEAD
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
=======
         * @static
         */
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }

        /**
         * Sets a list of trusted host patterns.
         *
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static
         */
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }

>>>>>>> upstream/master
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
<<<<<<< HEAD
         * @static 
         */ 
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
=======
         * @static
         */
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHosts();
        }

        /**
         * Sets the name for trusted headers.
         *
         * The following header keys are supported:
         *
>>>>>>> upstream/master
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         *  * Request::HEADER_FORWARDED:    defaults to Forwarded         (see RFC 7239)
<<<<<<< HEAD
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static 
         */ 
        public static function setTrustedHeaderName($key, $value)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
=======
         *
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key   The header key
         * @param string $value The header name
         *
         * @throws \InvalidArgumentException
         *
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static
         */
        public static function setTrustedHeaderName($key, $value)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }

>>>>>>> upstream/master
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
<<<<<<< HEAD
         * @return string The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static 
         */ 
        public static function getTrustedHeaderName($key)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
=======
         *
         * @throws \InvalidArgumentException
         *
         * @return string The header name
         *
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static
         */
        public static function getTrustedHeaderName($key)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }

        /**
         * Normalizes a query string.
         *
>>>>>>> upstream/master
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
<<<<<<< HEAD
         * @return string A normalized query string for the Request
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
=======
         *
         * @return string A normalized query string for the Request
         * @static
         */
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }

        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         *
>>>>>>> upstream/master
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
<<<<<<< HEAD
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
=======
         *
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static
         */
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }

>>>>>>> upstream/master
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
<<<<<<< HEAD
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key The key
         * @param mixed $default The default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
=======
         * @static
         */
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }

        /**
         * Gets a "parameter" value from any bag.
         *
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         *
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key     The key
         * @param mixed  $default The default value if the parameter key does not exist
         *
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::get($key, $default);
        }

>>>>>>> upstream/master
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
<<<<<<< HEAD
         * @static 
         */ 
        public static function getSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
=======
         * @static
         */
        public static function getSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getSession();
        }

>>>>>>> upstream/master
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
=======
         * @return bool
         * @static
         */
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::hasPreviousSession();
        }

        /**
         * Whether the request contains a Session object.
         *
>>>>>>> upstream/master
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
<<<<<<< HEAD
         * @static 
         */ 
        public static function hasSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
=======
         * @static
         */
        public static function hasSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::hasSession();
        }

>>>>>>> upstream/master
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
<<<<<<< HEAD
         * @static 
         */ 
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
=======
         * @static
         */
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setSession($session);
        }

        /**
         * Returns the client IP addresses.
         *
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         *
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         *
         * @see getClientIp()
         * @static
         */
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getClientIps();
        }

        /**
         * Returns the client IP address.
         *
>>>>>>> upstream/master
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
<<<<<<< HEAD
         * 
=======
         *
>>>>>>> upstream/master
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
<<<<<<< HEAD
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */ 
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
=======
         *
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static
         */
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getClientIp();
        }

        /**
         * Returns current script name.
         *
         * @return string
         * @static
         */
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getScriptName();
        }

        /**
         * Returns the path being requested relative to the executed script.
         *
         * The path info always starts with a /.
         *
         * Suppose this request is instantiated from /mysite on localhost:
         *
>>>>>>> upstream/master
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
<<<<<<< HEAD
         * @static 
         */ 
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
=======
         * @static
         */
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getPathInfo();
        }

        /**
         * Returns the root path from which this request is executed.
         *
         * Suppose that an index.php file instantiates this request object:
         *
>>>>>>> upstream/master
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
<<<<<<< HEAD
         * @static 
         */ 
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
=======
         * @static
         */
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getBasePath();
        }

        /**
         * Returns the root URL from which this request is executed.
         *
         * The base URL never ends with a /.
         *
>>>>>>> upstream/master
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
<<<<<<< HEAD
         * @static 
         */ 
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */ 
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
=======
         * @static
         */
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getBaseUrl();
        }

        /**
         * Gets the request's scheme.
         *
         * @return string
         * @static
         */
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getScheme();
        }

        /**
         * Returns the port on which the request is made.
         *
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Port" header must contain the client port.
         *
>>>>>>> upstream/master
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return int|string can be a string if fetched from the server bag
<<<<<<< HEAD
         * @static 
         */ 
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
=======
         * @static
         */
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getPort();
        }

        /**
         * Returns the user.
         *
         * @return string|null
         * @static
         */
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getUser();
        }

        /**
         * Returns the password.
         *
         * @return string|null
         * @static
         */
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getPassword();
        }

>>>>>>> upstream/master
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
<<<<<<< HEAD
         * @static 
         */ 
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */ 
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
=======
         * @static
         */
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getUserInfo();
        }

        /**
         * Returns the HTTP host being requested.
         *
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string
         * @static
         */
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHttpHost();
        }

>>>>>>> upstream/master
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
<<<<<<< HEAD
         * @static 
         */ 
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
=======
         * @static
         */
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getRequestUri();
        }

        /**
         * Gets the scheme and HTTP host.
         *
>>>>>>> upstream/master
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
<<<<<<< HEAD
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
=======
         * @static
         */
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }

>>>>>>> upstream/master
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
<<<<<<< HEAD
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
=======
         *
         * @see getQueryString()
         * @static
         */
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getUri();
        }

>>>>>>> upstream/master
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
<<<<<<< HEAD
         * @return string The normalized URI for the path
         * @static 
         */ 
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
=======
         *
         * @return string The normalized URI for the path
         * @static
         */
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getUriForPath($path);
        }

        /**
         * Returns the path as relative reference from the current Request path.
         *
>>>>>>> upstream/master
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
<<<<<<< HEAD
         * 
=======
         *
>>>>>>> upstream/master
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
<<<<<<< HEAD
         * @return string The relative target path
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
=======
         *
         * @return string The relative target path
         * @static
         */
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }

        /**
         * Generates the normalized query string for the Request.
         *
>>>>>>> upstream/master
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
<<<<<<< HEAD
         * @static 
         */ 
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
=======
         * @static
         */
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getQueryString();
        }

        /**
         * Checks whether the request is secure or not.
         *
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
>>>>>>> upstream/master
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
=======
         * @return bool
         * @static
         */
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isSecure();
        }

        /**
         * Returns the host name.
         *
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Host" header must contain the client host name.
         *
>>>>>>> upstream/master
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
<<<<<<< HEAD
         * @return string 
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
=======
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         *
         * @return string
         * @static
         */
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHost();
        }

>>>>>>> upstream/master
        /**
         * Sets the request method.
         *
         * @param string $method
<<<<<<< HEAD
         * @static 
         */ 
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
=======
         * @static
         */
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setMethod($method);
        }

        /**
         * Gets the request "intended" method.
         *
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         *
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         *
         * The method is always an uppercased string.
         *
         * @return string The request method
         *
         * @see getRealMethod()
         * @static
         */
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMethod();
        }

>>>>>>> upstream/master
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
<<<<<<< HEAD
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
=======
         *
         * @see getMethod()
         * @static
         */
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getRealMethod();
        }

>>>>>>> upstream/master
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
<<<<<<< HEAD
         * @return string The associated mime type (null if not found)
         * @static 
         */ 
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
=======
         *
         * @return string The associated mime type (null if not found)
         * @static
         */
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMimeType($format);
        }

>>>>>>> upstream/master
        /**
         * Gets the mime types associated with the format.
         *
         * @param string $format The format
<<<<<<< HEAD
         * @return array The associated mime types
         * @static 
         */ 
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeTypes($format);
        }
        
=======
         *
         * @return array The associated mime types
         * @static
         */
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMimeTypes($format);
        }

>>>>>>> upstream/master
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
<<<<<<< HEAD
         * @return string|null The format (null if not found)
         * @static 
         */ 
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
=======
         *
         * @return string|null The format (null if not found)
         * @static
         */
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getFormat($mimeType);
        }

        /**
         * Associates a format with mime types.
         *
         * @param string       $format    The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static
         */
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }

        /**
         * Gets the request format.
         *
         * Here is the process to determine the format:
         *
>>>>>>> upstream/master
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string $default The default format
<<<<<<< HEAD
         * @return string The request format
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
=======
         *
         * @return string The request format
         * @static
         */
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getRequestFormat($default);
        }

>>>>>>> upstream/master
        /**
         * Sets the request format.
         *
         * @param string $format The request format
<<<<<<< HEAD
         * @static 
         */ 
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
=======
         * @static
         */
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setRequestFormat($format);
        }

>>>>>>> upstream/master
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
<<<<<<< HEAD
         * @static 
         */ 
        public static function getContentType()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
=======
         * @static
         */
        public static function getContentType()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getContentType();
        }

>>>>>>> upstream/master
        /**
         * Sets the default locale.
         *
         * @param string $locale
<<<<<<< HEAD
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
=======
         * @static
         */
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }

        /**
         * Get the default locale.
         *
         * @return string
         * @static
         */
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getDefaultLocale();
        }

>>>>>>> upstream/master
        /**
         * Sets the locale.
         *
         * @param string $locale
<<<<<<< HEAD
         * @static 
         */ 
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
=======
         * @static
         */
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setLocale($locale);
        }

        /**
         * Get the locale.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getLocale();
        }

>>>>>>> upstream/master
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isMethod($method);
        }

>>>>>>> upstream/master
        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
<<<<<<< HEAD
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         * @return bool 
         * @static 
         */ 
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodIdempotent();
        }
        
=======
         *
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         *
         * @return bool
         * @static
         */
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isMethodSafe();
        }

        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool
         * @static
         */
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isMethodIdempotent();
        }

>>>>>>> upstream/master
        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodCacheable();
        }
        
        /**
         * Returns the protocol version.
         * 
=======
         *
         * @return bool
         * @static
         */
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isMethodCacheable();
        }

        /**
         * Returns the protocol version.
         *
>>>>>>> upstream/master
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
        public static function getProtocolVersion()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getProtocolVersion();
        }
        
=======
         * @return string
         * @static
         */
        public static function getProtocolVersion()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getProtocolVersion();
        }

>>>>>>> upstream/master
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
<<<<<<< HEAD
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */ 
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
=======
         *
         * @throws \LogicException
         *
         * @return string|resource The request body content or a resource to read the body stream
         * @static
         */
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getContent($asResource);
        }

>>>>>>> upstream/master
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
<<<<<<< HEAD
         * @static 
         */ 
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
=======
         * @static
         */
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getETags();
        }

        /**
         * @return bool
         * @static
         */
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isNoCache();
        }

>>>>>>> upstream/master
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
<<<<<<< HEAD
         * @return string|null The preferred locale
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
=======
         *
         * @return string|null The preferred locale
         * @static
         */
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }

>>>>>>> upstream/master
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
<<<<<<< HEAD
         * @static 
         */ 
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
=======
         * @static
         */
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getLanguages();
        }

>>>>>>> upstream/master
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
<<<<<<< HEAD
         * @static 
         */ 
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
=======
         * @static
         */
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getCharsets();
        }

>>>>>>> upstream/master
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
<<<<<<< HEAD
         * @static 
         */ 
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
=======
         * @static
         */
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getEncodings();
        }

>>>>>>> upstream/master
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
<<<<<<< HEAD
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
=======
         * @static
         */
        public static function getAcceptableContentTypes()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }

        /**
         * Returns true if the request is a XMLHttpRequest.
         *
>>>>>>> upstream/master
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
<<<<<<< HEAD
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * Indicates whether this request originated from a trusted proxy.
         * 
=======
         *
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static
         */
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }

        /**
         * Indicates whether this request originated from a trusted proxy.
         *
>>>>>>> upstream/master
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
<<<<<<< HEAD
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isFromTrustedProxy();
        }
        
=======
         * @static
         */
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::isFromTrustedProxy();
        }

>>>>>>> upstream/master
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the request is sending JSON.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isJson()
        {
            return \Illuminate\Http\Request::isJson();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function expectsJson()
        {
            return \Illuminate\Http\Request::expectsJson();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function wantsJson()
        {
            return \Illuminate\Http\Request::wantsJson();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function accepts($contentTypes)
        {
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
<<<<<<< HEAD
         * @return string|null 
         * @static 
         */ 
=======
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function prefers($contentTypes)
        {
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
<<<<<<< HEAD
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function acceptsJson()
        {
            return \Illuminate\Http\Request::acceptsJson();
        }
<<<<<<< HEAD
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function acceptsHtml()
        {
            return \Illuminate\Http\Request::acceptsHtml();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function format($default = 'html')
        {
            return \Illuminate\Http\Request::format($default);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve an old input item.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function old($key = null, $default = null)
        {
            return \Illuminate\Http\Request::old($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flash the input for the current request to the session.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flash()
        {
            \Illuminate\Http\Request::flash();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flashOnly($keys)
        {
            \Illuminate\Http\Request::flashOnly($keys);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flashExcept($keys)
        {
            \Illuminate\Http\Request::flashExcept($keys);
        }
<<<<<<< HEAD
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush all of the old input from the session.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flush()
        {
            \Illuminate\Http\Request::flush();
        }
<<<<<<< HEAD
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve a server variable from the request.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function server($key = null, $default = null)
        {
            return \Illuminate\Http\Request::server($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasHeader($key)
        {
            return \Illuminate\Http\Request::hasHeader($key);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve a header from the request.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function header($key = null, $default = null)
        {
            return \Illuminate\Http\Request::header($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
=======

        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function bearerToken()
        {
            return \Illuminate\Http\Request::bearerToken();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function exists($key)
        {
            return \Illuminate\Http\Request::exists($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($key)
        {
            return \Illuminate\Http\Request::has($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param mixed $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasAny($keys = null)
        {
            return \Illuminate\Http\Request::hasAny($keys);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function filled($key)
        {
            return \Illuminate\Http\Request::filled($key);
        }
<<<<<<< HEAD
        
        /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the keys for all of the input and files.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function keys()
        {
            return \Illuminate\Http\Request::keys();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed $keys
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function all($keys = null)
        {
            return \Illuminate\Http\Request::all($keys);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve an input item from the request.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function input($key = null, $default = null)
        {
            return \Illuminate\Http\Request::input($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function only($keys)
        {
            return \Illuminate\Http\Request::only($keys);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function except($keys)
        {
            return \Illuminate\Http\Request::except($keys);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve a query string item from the request.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function query($key = null, $default = null)
        {
            return \Illuminate\Http\Request::query($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve a request payload item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve a request payload item from the request.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function post($key = null, $default = null)
        {
            return \Illuminate\Http\Request::post($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasCookie($key)
        {
            return \Illuminate\Http\Request::hasCookie($key);
        }
<<<<<<< HEAD
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
=======

        /**
         * Retrieve a cookie from the request.
         *
         * @param string            $key
         * @param string|array|null $default
         *
         * @return string|array
         * @static
         */
>>>>>>> upstream/master
        public static function cookie($key = null, $default = null)
        {
            return \Illuminate\Http\Request::cookie($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get an array of all of the files on the request.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function allFiles()
        {
            return \Illuminate\Http\Request::allFiles();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasFile($key)
        {
            return \Illuminate\Http\Request::hasFile($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|array|null 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return \Illuminate\Http\UploadedFile|array|null
         * @static
         */
>>>>>>> upstream/master
        public static function file($key = null, $default = null)
        {
            return \Illuminate\Http\Request::file($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Http\Request::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }
<<<<<<< HEAD
        
        /**
         * 
         *
         * @static 
         */ 
=======

        /**
         * @static
         */
>>>>>>> upstream/master
        public static function validate($rules, $params = null)
        {
            return \Illuminate\Http\Request::validate($rules, $params);
        }
<<<<<<< HEAD
         
    }

    class Response {
        
=======
    }

    class Response
    {
>>>>>>> upstream/master
        /**
         * Return a new response from the application.
         *
         * @param string $content
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function make($content = '', $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
=======
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function make($content = '', $status = 200, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Return a new view response from the application.
         *
         * @param string $view
<<<<<<< HEAD
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function view($view, $data = array(), $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
=======
         * @param array  $data
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Return a new JSON response from the application.
         *
         * @param mixed $data
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
=======
         * @param int   $status
         * @param array $headers
         * @param int   $options
         *
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }

>>>>>>> upstream/master
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
<<<<<<< HEAD
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
=======
         * @param mixed  $data
         * @param int    $status
         * @param array  $headers
         * @param int    $options
         *
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }

>>>>>>> upstream/master
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function stream($callback, $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
=======
         * @param int      $status
         * @param array    $headers
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function stream($callback, $status = 200, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
<<<<<<< HEAD
         * @param string $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment')
        {
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
=======
         * @param string              $name
         * @param array               $headers
         * @param string|null         $disposition
         *
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }

>>>>>>> upstream/master
        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
<<<<<<< HEAD
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function file($file, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
=======
         * @param array               $headers
         *
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static function file($file, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string    $path
         * @param int       $status
         * @param array     $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
<<<<<<< HEAD
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
=======
         * @param array  $parameters
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }

>>>>>>> upstream/master
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
<<<<<<< HEAD
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======
         * @param array  $parameters
         * @param int    $status
         * @param array  $headers
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string    $path
         * @param int       $status
         * @param array     $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string    $default
         * @param int       $status
         * @param array     $headers
         * @param bool|null $secure
         *
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Routing\ResponseFactory::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Route {
        
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======
    }

    class Route
    {
        /**
         * Register a new GET route with the router.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function get($uri, $action = null)
        {
            return \Illuminate\Routing\Router::get($uri, $action);
        }
<<<<<<< HEAD
        
        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Register a new POST route with the router.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function post($uri, $action = null)
        {
            return \Illuminate\Routing\Router::post($uri, $action);
        }
<<<<<<< HEAD
        
        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Register a new PUT route with the router.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function put($uri, $action = null)
        {
            return \Illuminate\Routing\Router::put($uri, $action);
        }
<<<<<<< HEAD
        
        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Register a new PATCH route with the router.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function patch($uri, $action = null)
        {
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
<<<<<<< HEAD
        
        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Register a new DELETE route with the router.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function delete($uri, $action = null)
        {
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
<<<<<<< HEAD
        
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function options($uri, $action = null)
        {
            return \Illuminate\Routing\Router::options($uri, $action);
        }
<<<<<<< HEAD
        
        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Register a new route responding to all verbs.
         *
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function any($uri, $action = null)
        {
            return \Illuminate\Routing\Router::any($uri, $action);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a new Fallback route with the router.
         *
         * @param \Closure|array|string|null $action
<<<<<<< HEAD
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function fallback($action)
        {
            return \Illuminate\Routing\Router::fallback($action);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
<<<<<<< HEAD
         * @param int $status
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======
         * @param int    $status
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function redirect($uri, $destination, $status = 301)
        {
            return \Illuminate\Routing\Router::redirect($uri, $destination, $status);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
<<<<<<< HEAD
         * @param array $data
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function view($uri, $view, $data = array())
        {
            return \Illuminate\Routing\Router::view($uri, $view, $data);
        }
        
        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======
         * @param array  $data
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function view($uri, $view, $data = [])
        {
            return \Illuminate\Routing\Router::view($uri, $view, $data);
        }

        /**
         * Register a new route with the given verbs.
         *
         * @param array|string               $methods
         * @param string                     $uri
         * @param \Closure|array|string|null $action
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function match($methods, $uri, $action = null)
        {
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function resources($resources)
        {
            \Illuminate\Routing\Router::resources($resources);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
<<<<<<< HEAD
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function resource($name, $controller, $options = array())
        {
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
=======
         * @param array  $options
         *
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static function resource($name, $controller, $options = [])
        {
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }

>>>>>>> upstream/master
        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function apiResources($resources)
        {
            \Illuminate\Routing\Router::apiResources($resources);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
<<<<<<< HEAD
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function apiResource($name, $controller, $options = array())
        {
            return \Illuminate\Routing\Router::apiResource($name, $controller, $options);
        }
        
        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|string $routes
         * @return void 
         * @static 
         */ 
=======
         * @param array  $options
         *
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static function apiResource($name, $controller, $options = [])
        {
            return \Illuminate\Routing\Router::apiResource($name, $controller, $options);
        }

        /**
         * Create a route group with shared attributes.
         *
         * @param array           $attributes
         * @param \Closure|string $routes
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function group($attributes, $routes)
        {
            \Illuminate\Routing\Router::group($attributes, $routes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function mergeWithLastGroup($new)
        {
            return \Illuminate\Routing\Router::mergeWithLastGroup($new);
        }
<<<<<<< HEAD
        
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getLastGroupPrefix()
        {
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Return the response returned by the given route.
         *
         * @param string $name
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function respondWithRoute($name)
        {
            return \Illuminate\Routing\Router::respondWithRoute($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
         * @static
         */
>>>>>>> upstream/master
        public static function dispatch($request)
        {
            return \Illuminate\Routing\Router::dispatch($request);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function dispatchToRoute($request)
        {
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function gatherRouteMiddleware($route)
        {
            return \Illuminate\Routing\Router::gatherRouteMiddleware($route);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
<<<<<<< HEAD
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
=======
         * @param mixed                                     $response
         *
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
         * @static
         */
>>>>>>> upstream/master
        public static function prepareResponse($request, $response)
        {
            return \Illuminate\Routing\Router::prepareResponse($request, $response);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
<<<<<<< HEAD
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
=======
         * @param mixed                                     $response
         *
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
         * @static
         */
>>>>>>> upstream/master
        public static function toResponse($request, $response)
        {
            return \Illuminate\Routing\Router::toResponse($request, $response);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
<<<<<<< HEAD
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function substituteBindings($route)
        {
            return \Illuminate\Routing\Router::substituteBindings($route);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Substitute the implicit Eloquent model bindings for the route.
         *
         * @param \Illuminate\Routing\Route $route
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function substituteImplicitBindings($route)
        {
            \Illuminate\Routing\Router::substituteImplicitBindings($route);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function matched($callback)
        {
            \Illuminate\Routing\Router::matched($callback);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getMiddleware()
        {
            return \Illuminate\Routing\Router::getMiddleware();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function aliasMiddleware($name, $class)
        {
            return \Illuminate\Routing\Router::aliasMiddleware($name, $class);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMiddlewareGroup($name)
        {
            return \Illuminate\Routing\Router::hasMiddlewareGroup($name);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the defined middleware groups.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the defined middleware groups.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getMiddlewareGroups()
        {
            return \Illuminate\Routing\Router::getMiddlewareGroups();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register a group of middleware.
         *
         * @param string $name
<<<<<<< HEAD
         * @param array $middleware
         * @return $this 
         * @static 
         */ 
=======
         * @param array  $middleware
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function middlewareGroup($name, $middleware)
        {
            return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
        }
<<<<<<< HEAD
        
        /**
         * Add a middleware to the beginning of a middleware group.
         * 
=======

        /**
         * Add a middleware to the beginning of a middleware group.
         *
>>>>>>> upstream/master
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::prependMiddlewareToGroup($group, $middleware);
        }
<<<<<<< HEAD
        
        /**
         * Add a middleware to the end of a middleware group.
         * 
=======

        /**
         * Add a middleware to the end of a middleware group.
         *
>>>>>>> upstream/master
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::pushMiddlewareToGroup($group, $middleware);
        }
<<<<<<< HEAD
        
        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */ 
=======

        /**
         * Add a new route parameter binder.
         *
         * @param string          $key
         * @param string|callable $binder
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function bind($key, $binder)
        {
            \Illuminate\Routing\Router::bind($key, $binder);
        }
<<<<<<< HEAD
        
        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */ 
=======

        /**
         * Register a model binder for a wildcard.
         *
         * @param string        $key
         * @param string        $class
         * @param \Closure|null $callback
         *
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function model($key, $class, $callback = null)
        {
            \Illuminate\Routing\Router::model($key, $class, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
<<<<<<< HEAD
         * @return \Closure|null 
         * @static 
         */ 
=======
         *
         * @return \Closure|null
         * @static
         */
>>>>>>> upstream/master
        public static function getBindingCallback($key)
        {
            return \Illuminate\Routing\Router::getBindingCallback($key);
        }
<<<<<<< HEAD
        
        /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the global "where" patterns.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getPatterns()
        {
            return \Illuminate\Routing\Router::getPatterns();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function pattern($key, $pattern)
        {
            \Illuminate\Routing\Router::pattern($key, $pattern);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function patterns($patterns)
        {
            \Illuminate\Routing\Router::patterns($patterns);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasGroupStack()
        {
            return \Illuminate\Routing\Router::hasGroupStack();
        }
<<<<<<< HEAD
        
        /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the current group stack for the router.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getGroupStack()
        {
            return \Illuminate\Routing\Router::getGroupStack();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string $default
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function input($key, $default = null)
        {
            return \Illuminate\Routing\Router::input($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
=======

        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
>>>>>>> upstream/master
        public static function getCurrentRequest()
        {
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
<<<<<<< HEAD
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function getCurrentRoute()
        {
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
<<<<<<< HEAD
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
=======

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route
         * @static
         */
>>>>>>> upstream/master
        public static function current()
        {
            return \Illuminate\Routing\Router::current();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($name)
        {
            return \Illuminate\Routing\Router::has($name);
        }
<<<<<<< HEAD
        
        /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */ 
=======

        /**
         * Get the current route name.
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function currentRouteName()
        {
            return \Illuminate\Routing\Router::currentRouteName();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function is($patterns = null)
        {
            return \Illuminate\Routing\Router::is($patterns);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function currentRouteNamed($patterns = null)
        {
            return \Illuminate\Routing\Router::currentRouteNamed($patterns);
        }
<<<<<<< HEAD
        
        /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */ 
=======

        /**
         * Get the current route action.
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function currentRouteAction()
        {
            return \Illuminate\Routing\Router::currentRouteAction();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function uses($patterns = null)
        {
            return \Illuminate\Routing\Router::uses($patterns);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function currentRouteUses($action)
        {
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
<<<<<<< HEAD
        
        /**
         * Register the typical authentication routes for an application.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register the typical authentication routes for an application.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function auth()
        {
            \Illuminate\Routing\Router::auth();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function singularResourceParameters($singular = true)
        {
            \Illuminate\Routing\Router::singularResourceParameters($singular);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function resourceParameters($parameters = array())
        {
            \Illuminate\Routing\Router::resourceParameters($parameters);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function resourceParameters($parameters = [])
        {
            \Illuminate\Routing\Router::resourceParameters($parameters);
        }

>>>>>>> upstream/master
        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
<<<<<<< HEAD
         * @return array|null 
         * @static 
         */ 
        public static function resourceVerbs($verbs = array())
        {
            return \Illuminate\Routing\Router::resourceVerbs($verbs);
        }
        
        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection 
         * @static 
         */ 
=======
         *
         * @return array|null
         * @static
         */
        public static function resourceVerbs($verbs = [])
        {
            return \Illuminate\Routing\Router::resourceVerbs($verbs);
        }

        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection
         * @static
         */
>>>>>>> upstream/master
        public static function getRoutes()
        {
            return \Illuminate\Routing\Router::getRoutes();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setRoutes($routes)
        {
            \Illuminate\Routing\Router::setRoutes($routes);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Router::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Routing\Router::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Router::hasMacro($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
<<<<<<< HEAD
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
=======
         * @param array  $parameters
         *
         * @throws \BadMethodCallException
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Routing\Router::macroCall($method, $parameters);
        }
<<<<<<< HEAD
         
    }

    class Schema {
        
=======
    }

    class Schema
    {
>>>>>>> upstream/master
        /**
         * Determine if the given table exists.
         *
         * @param string $table
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasTable($table)
        {
            return \Illuminate\Database\Schema\PostgresBuilder::hasTable($table);
        }
<<<<<<< HEAD
        
        /**
         * Drop all tables from the database.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Drop all tables from the database.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function dropAllTables()
        {
            \Illuminate\Database\Schema\PostgresBuilder::dropAllTables();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getColumnListing($table)
        {
            return \Illuminate\Database\Schema\PostgresBuilder::getColumnListing($table);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::defaultStringLength($length);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::defaultStringLength($length);
        }

>>>>>>> upstream/master
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::hasColumn($table, $column);
        }
        
=======
         *
         * @return bool
         * @static
         */
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::hasColumn($table, $column);
        }

>>>>>>> upstream/master
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
<<<<<<< HEAD
         * @param array $columns
         * @return bool 
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::hasColumns($table, $columns);
        }
        
=======
         * @param array  $columns
         *
         * @return bool
         * @static
         */
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::hasColumns($table, $columns);
        }

>>>>>>> upstream/master
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
        public static function getColumnType($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::getColumnType($table, $column);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::create($table, $callback);
        }
        
=======
         *
         * @return string
         * @static
         */
        public static function getColumnType($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::getColumnType($table, $column);
        }

        /**
         * Modify a table on the schema.
         *
         * @param string   $table
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::table($table, $callback);
        }

        /**
         * Create a new table on the schema.
         *
         * @param string   $table
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::create($table, $callback);
        }

>>>>>>> upstream/master
        /**
         * Drop a table from the schema.
         *
         * @param string $table
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::drop($table);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::drop($table);
        }

>>>>>>> upstream/master
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::dropIfExists($table);
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::dropIfExists($table);
        }

>>>>>>> upstream/master
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::rename($from, $to);
        }
        
        /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::getConnection();
        }
        
=======
         *
         * @return void
         * @static
         */
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::rename($from, $to);
        }

        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::enableForeignKeyConstraints();
        }

        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::disableForeignKeyConstraints();
        }

        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::getConnection();
        }

>>>>>>> upstream/master
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
        public static function setConnection($connection)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\PostgresBuilder::setConnection($connection);
        }
        
=======
         *
         * @return $this
         * @static
         */
        public static function setConnection($connection)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            return \Illuminate\Database\Schema\PostgresBuilder::setConnection($connection);
        }

>>>>>>> upstream/master
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\PostgresBuilder::blueprintResolver($resolver);
        }
         
    }

    class Session {
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder
            \Illuminate\Database\Schema\PostgresBuilder::blueprintResolver($resolver);
        }
    }

    class Session
    {
        /**
         * Get the session configuration.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getSessionConfig()
        {
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
<<<<<<< HEAD
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default session driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default session driver name.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDefaultDriver($name)
        {
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a driver instance.
         *
         * @param string $driver
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Session\SessionManager::driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Session\SessionManager::getDrivers();
        }

        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function start()
        {
            return \Illuminate\Session\Store::start();
        }
<<<<<<< HEAD
        
        /**
         * Save the session data to storage.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Save the session data to storage.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function save()
        {
            return \Illuminate\Session\Store::save();
        }
<<<<<<< HEAD
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Age the flash data for the session.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function ageFlashData()
        {
            \Illuminate\Session\Store::ageFlashData();
        }
<<<<<<< HEAD
        
        /**
         * Get all of the session data.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the session data.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function all()
        {
            return \Illuminate\Session\Store::all();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if a key exists.
         *
         * @param string|array $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function exists($key)
        {
            return \Illuminate\Session\Store::exists($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function has($key)
        {
            return \Illuminate\Session\Store::has($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get an item from the session.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function get($key, $default = null)
        {
            return \Illuminate\Session\Store::get($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function pull($key, $default = null)
        {
            return \Illuminate\Session\Store::pull($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the session contains old input.
         *
         * @param string $key
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasOldInput($key = null)
        {
            return \Illuminate\Session\Store::hasOldInput($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function getOldInput($key = null, $default = null)
        {
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function replace($attributes)
        {
            \Illuminate\Session\Store::replace($attributes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed        $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function put($key, $value = null)
        {
            \Illuminate\Session\Store::put($key, $value);
        }
<<<<<<< HEAD
        
        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
=======

        /**
         * Get an item from the session, or store the default value.
         *
         * @param string   $key
         * @param \Closure $callback
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function remember($key, $callback)
        {
            return \Illuminate\Session\Store::remember($key, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Push a value onto a session array.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function push($key, $value)
        {
            \Illuminate\Session\Store::push($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
<<<<<<< HEAD
         * @param int $amount
         * @return mixed 
         * @static 
         */ 
=======
         * @param int    $amount
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function increment($key, $amount = 1)
        {
            return \Illuminate\Session\Store::increment($key, $amount);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
<<<<<<< HEAD
         * @param int $amount
         * @return int 
         * @static 
         */ 
=======
         * @param int    $amount
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function decrement($key, $amount = 1)
        {
            return \Illuminate\Session\Store::decrement($key, $amount);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flash($key, $value = true)
        {
            \Illuminate\Session\Store::flash($key, $value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $value
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function now($key, $value)
        {
            \Illuminate\Session\Store::now($key, $value);
        }
<<<<<<< HEAD
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Reflash all of the session flash data.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function reflash()
        {
            \Illuminate\Session\Store::reflash();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function keep($keys = null)
        {
            \Illuminate\Session\Store::keep($keys);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Flash an input array to the session.
         *
         * @param array $value
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flashInput($value)
        {
            \Illuminate\Session\Store::flashInput($value);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function remove($key)
        {
            return \Illuminate\Session\Store::remove($key);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function forget($keys)
        {
            \Illuminate\Session\Store::forget($keys);
        }
<<<<<<< HEAD
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Remove all of the items from the session.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flush()
        {
            \Illuminate\Session\Store::flush();
        }
<<<<<<< HEAD
        
        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function invalidate()
        {
            return \Illuminate\Session\Store::invalidate();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function regenerate($destroy = false)
        {
            return \Illuminate\Session\Store::regenerate($destroy);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function migrate($destroy = false)
        {
            return \Illuminate\Session\Store::migrate($destroy);
        }
<<<<<<< HEAD
        
        /**
         * Determine if the session has been started.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the session has been started.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isStarted()
        {
            return \Illuminate\Session\Store::isStarted();
        }
<<<<<<< HEAD
        
        /**
         * Get the name of the session.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the name of the session.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getName()
        {
            return \Illuminate\Session\Store::getName();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the name of the session.
         *
         * @param string $name
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setName($name)
        {
            \Illuminate\Session\Store::setName($name);
        }
<<<<<<< HEAD
        
        /**
         * Get the current session ID.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getId()
        {
            return \Illuminate\Session\Store::getId();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the session ID.
         *
         * @param string $id
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setId($id)
        {
            \Illuminate\Session\Store::setId($id);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isValidId($id)
        {
            return \Illuminate\Session\Store::isValidId($id);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setExists($value)
        {
            \Illuminate\Session\Store::setExists($value);
        }
<<<<<<< HEAD
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the CSRF token value.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function token()
        {
            return \Illuminate\Session\Store::token();
        }
<<<<<<< HEAD
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Regenerate the CSRF token value.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function regenerateToken()
        {
            \Illuminate\Session\Store::regenerateToken();
        }
<<<<<<< HEAD
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
=======

        /**
         * Get the previous URL from the session.
         *
         * @return string|null
         * @static
         */
>>>>>>> upstream/master
        public static function previousUrl()
        {
            return \Illuminate\Session\Store::previousUrl();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setPreviousUrl($url)
        {
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
<<<<<<< HEAD
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */ 
=======

        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface
         * @static
         */
>>>>>>> upstream/master
        public static function getHandler()
        {
            return \Illuminate\Session\Store::getHandler();
        }
<<<<<<< HEAD
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Determine if the session handler needs a request.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function handlerNeedsRequest()
        {
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setRequestOnHandler($request)
        {
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
<<<<<<< HEAD
         
    }

    class Storage {
        
=======
    }

    class Storage
    {
>>>>>>> upstream/master
        /**
         * Get a filesystem instance.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
>>>>>>> upstream/master
        public static function drive($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a filesystem instance.
         *
         * @param string $name
<<<<<<< HEAD
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
>>>>>>> upstream/master
        public static function disk($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
<<<<<<< HEAD
        
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
=======

        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
>>>>>>> upstream/master
        public static function cloud()
        {
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
<<<<<<< HEAD
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
>>>>>>> upstream/master
        public static function createLocalDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
<<<<<<< HEAD
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter
         * @static
         */
>>>>>>> upstream/master
        public static function createFtpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
>>>>>>> upstream/master
        public static function createS3Driver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
<<<<<<< HEAD
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
=======
         *
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
>>>>>>> upstream/master
        public static function createRackspaceDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the given disk instance.
         *
         * @param string $name
<<<<<<< HEAD
         * @param mixed $disk
         * @return void 
         * @static 
         */ 
=======
         * @param mixed  $disk
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function set($name, $disk)
        {
            \Illuminate\Filesystem\FilesystemManager::set($name, $disk);
        }
<<<<<<< HEAD
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
<<<<<<< HEAD
        
        /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getDefaultCloudDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
<<<<<<< HEAD
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Register a custom driver creator Closure.
         *
         * @param string   $driver
         * @param \Closure $callback
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function extend($driver, $callback)
        {
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Assert that the given file exists.
         *
         * @param string $path
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function assertExists($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertExists($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Assert that the given file does not exist.
         *
         * @param string $path
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function assertMissing($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertMissing($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a file exists.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function exists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function path($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::path($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the contents of a file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
=======
         *
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function get($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
<<<<<<< HEAD
        
        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function response($path, $name = null, $headers = array(), $disposition = 'inline')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::response($path, $name, $headers, $disposition);
        }
        
        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function download($path, $name = null, $headers = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::download($path, $name, $headers);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param mixed $options
         * @return bool 
         * @static 
         */ 
        public static function put($path, $contents, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $options);
        }
        
        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFile($path, $file, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFile($path, $file, $options);
        }
        
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param string $name
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFileAs($path, $file, $name, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFileAs($path, $file, $name, $options);
        }
        
=======

        /**
         * Create a streamed response for a given file.
         *
         * @param string      $path
         * @param string|null $name
         * @param array|null  $headers
         * @param string|null $disposition
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::response($path, $name, $headers, $disposition);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param string      $path
         * @param string|null $name
         * @param array|null  $headers
         *
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function download($path, $name = null, $headers = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::download($path, $name, $headers);
        }

        /**
         * Write the contents of a file.
         *
         * @param string          $path
         * @param string|resource $contents
         * @param mixed           $options
         *
         * @return bool
         * @static
         */
        public static function put($path, $contents, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $options);
        }

        /**
         * Store the uploaded file on the disk.
         *
         * @param string                                              $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param array                                               $options
         *
         * @return string|false
         * @static
         */
        public static function putFile($path, $file, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFile($path, $file, $options);
        }

        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string                                              $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param string                                              $name
         * @param array                                               $options
         *
         * @return string|false
         * @static
         */
        public static function putFileAs($path, $file, $name, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFileAs($path, $file, $name, $options);
        }

>>>>>>> upstream/master
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getVisibility($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setVisibility($path, $visibility)
        {
            \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function prepend($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function append($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function copy($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function move($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the file size of a given file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function size($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string|false 
         * @static 
         */ 
=======
         *
         * @return string|false
         * @static
         */
>>>>>>> upstream/master
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the file's last modification time.
         *
         * @param string $path
<<<<<<< HEAD
         * @return int 
         * @static 
         */ 
=======
         *
         * @return int
         * @static
         */
>>>>>>> upstream/master
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function url($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
<<<<<<< HEAD
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl($path, $expiration, $options);
        }
        
=======

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string             $path
         * @param \DateTimeInterface $expiration
         * @param array              $options
         *
         * @return string
         * @static
         */
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl($path, $expiration, $options);
        }

>>>>>>> upstream/master
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\AwsS3v3\AwsS3Adapter $adapter
<<<<<<< HEAD
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
=======
         * @param string                                 $path
         * @param \DateTimeInterface                     $expiration
         * @param array                                  $options
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\Rackspace\RackspaceAdapter $adapter
<<<<<<< HEAD
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
=======
         * @param string                                       $path
         * @param \DateTimeInterface                           $expiration
         * @param array                                        $options
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function getRackspaceTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getRackspaceTemporaryUrl($adapter, $path, $expiration, $options);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
<<<<<<< HEAD
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
=======
         * @param bool        $recursive
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function files($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function allFiles($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
<<<<<<< HEAD
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
=======
         * @param bool        $recursive
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function directories($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function allDirectories($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Create a directory.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function makeDirectory($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function deleteDirectory($directory)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
<<<<<<< HEAD
        
        /**
         * Flush the Flysystem cache.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush the Flysystem cache.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flushCache()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushCache();
        }
<<<<<<< HEAD
        
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface 
         * @static 
         */ 
=======

        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface
         * @static
         */
>>>>>>> upstream/master
        public static function getDriver()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
<<<<<<< HEAD
         
    }

    class URL {
        
        /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
=======
    }

    class URL
    {
        /**
         * Get the full URL for the current request.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function full()
        {
            return \Illuminate\Routing\UrlGenerator::full();
        }
<<<<<<< HEAD
        
        /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Get the current URL for the request.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function current()
        {
            return \Illuminate\Routing\UrlGenerator::current();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function previous($fallback = false)
        {
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
<<<<<<< HEAD
        
        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = array(), $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
=======

        /**
         * Generate an absolute URL to the given path.
         *
         * @param string    $path
         * @param mixed     $extra
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
        public static function to($path, $extra = [], $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }

>>>>>>> upstream/master
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = array())
        {
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
=======
         * @param array  $parameters
         *
         * @return string
         * @static
         */
        public static function secure($path, $parameters = [])
        {
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }

        /**
         * Generate the URL to an application asset.
         *
         * @param string    $path
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function asset($path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function secureAsset($path)
        {
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
<<<<<<< HEAD
        
        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
=======

        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string    $root
         * @param string    $path
         * @param bool|null $secure
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function assetFrom($root, $path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function formatScheme($secure)
        {
            return \Illuminate\Routing\UrlGenerator::formatScheme($secure);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the URL to a named route.
         *
         * @param string $name
<<<<<<< HEAD
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function route($name, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
=======
         * @param mixed  $parameters
         * @param bool   $absolute
         *
         * @throws \InvalidArgumentException
         *
         * @return string
         * @static
         */
        public static function route($name, $parameters = [], $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }

>>>>>>> upstream/master
        /**
         * Get the URL to a controller action.
         *
         * @param string $action
<<<<<<< HEAD
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
=======
         * @param mixed  $parameters
         * @param bool   $absolute
         *
         * @throws \InvalidArgumentException
         *
         * @return string
         * @static
         */
        public static function action($action, $parameters = [], $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }

>>>>>>> upstream/master
        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function formatParameters($parameters)
        {
            return \Illuminate\Routing\UrlGenerator::formatParameters($parameters);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string $root
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function formatRoot($scheme, $root = null)
        {
            return \Illuminate\Routing\UrlGenerator::formatRoot($scheme, $root);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function format($root, $path)
        {
            return \Illuminate\Routing\UrlGenerator::format($root, $path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function isValidUrl($path)
        {
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function defaults($defaults)
        {
            \Illuminate\Routing\UrlGenerator::defaults($defaults);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Force the scheme for URLs.
         *
         * @param string $schema
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function forceScheme($schema)
        {
            \Illuminate\Routing\UrlGenerator::forceScheme($schema);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the forced root URL.
         *
         * @param string $root
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function forceRootUrl($root)
        {
            \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function formatHostUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatHostUsing($callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function formatPathUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatPathUsing($callback);
        }
<<<<<<< HEAD
        
        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
=======

        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure
         * @static
         */
>>>>>>> upstream/master
        public static function pathFormatter()
        {
            return \Illuminate\Routing\UrlGenerator::pathFormatter();
        }
<<<<<<< HEAD
        
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
=======

        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
>>>>>>> upstream/master
        public static function getRequest()
        {
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setRequest($request)
        {
            \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setRoutes($routes)
        {
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setSessionResolver($sessionResolver)
        {
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
<<<<<<< HEAD
         * @return $this 
         * @static 
         */ 
=======
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function setRootControllerNamespace($rootNamespace)
        {
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function mixin($mixin)
        {
            \Illuminate\Routing\UrlGenerator::mixin($mixin);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Checks if macro is registered.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
<<<<<<< HEAD
         
    }

    class Validator {
        
=======
    }

    class Validator
    {
>>>>>>> upstream/master
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
<<<<<<< HEAD
         * @return \Illuminate\Validation\Validator 
         * @static 
         */ 
        public static function make($data, $rules, $messages = array(), $customAttributes = array())
        {
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
=======
         *
         * @return \Illuminate\Validation\Validator
         * @static
         */
        public static function make($data, $rules, $messages = [], $customAttributes = [])
        {
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }

>>>>>>> upstream/master
        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
<<<<<<< HEAD
         * @return void 
         * @throws \Illuminate\Validation\ValidationException
         * @static 
         */ 
        public static function validate($data, $rules, $messages = array(), $customAttributes = array())
        {
            \Illuminate\Validation\Factory::validate($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
=======
         *
         * @throws \Illuminate\Validation\ValidationException
         *
         * @return void
         * @static
         */
        public static function validate($data, $rules, $messages = [], $customAttributes = [])
        {
            \Illuminate\Validation\Factory::validate($data, $rules, $messages, $customAttributes);
        }

        /**
         * Register a custom validator extension.
         *
         * @param string          $rule
         * @param \Closure|string $extension
         * @param string          $message
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function extend($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom implicit validator extension.
         *
         * @param string          $rule
         * @param \Closure|string $extension
         * @param string          $message
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function extendImplicit($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom dependent validator extension.
         *
         * @param string          $rule
         * @param \Closure|string $extension
         * @param string          $message
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function extendDependent($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendDependent($rule, $extension, $message);
        }
<<<<<<< HEAD
        
        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a custom validator message replacer.
         *
         * @param string          $rule
         * @param \Closure|string $replacer
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function replacer($rule, $replacer)
        {
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function resolver($resolver)
        {
            \Illuminate\Validation\Factory::resolver($resolver);
        }
<<<<<<< HEAD
        
        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator 
         * @static 
         */ 
=======

        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator
         * @static
         */
>>>>>>> upstream/master
        public static function getTranslator()
        {
            return \Illuminate\Validation\Factory::getTranslator();
        }
<<<<<<< HEAD
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */ 
=======

        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface
         * @static
         */
>>>>>>> upstream/master
        public static function getPresenceVerifier()
        {
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setPresenceVerifier($presenceVerifier)
        {
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
<<<<<<< HEAD
         
    }

    class View {
        
=======
    }

    class View
    {
>>>>>>> upstream/master
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
<<<<<<< HEAD
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function file($path, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }
        
=======
         * @param array  $data
         * @param array  $mergeData
         *
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function file($path, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }

>>>>>>> upstream/master
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
<<<<<<< HEAD
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function make($view, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
=======
         * @param array  $data
         * @param array  $mergeData
         *
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function make($view, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }

>>>>>>> upstream/master
        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param array $data
         * @param array $mergeData
<<<<<<< HEAD
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function first($views, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::first($views, $data, $mergeData);
        }
        
        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return string 
         * @static 
         */ 
        public static function renderWhen($condition, $view, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::renderWhen($condition, $view, $data, $mergeData);
        }
        
=======
         *
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function first($views, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::first($views, $data, $mergeData);
        }

        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool   $condition
         * @param string $view
         * @param array  $data
         * @param array  $mergeData
         *
         * @return string
         * @static
         */
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::renderWhen($condition, $view, $data, $mergeData);
        }

>>>>>>> upstream/master
        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
<<<<<<< HEAD
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string 
         * @static 
         */ 
=======
         * @param array  $data
         * @param string $iterator
         * @param string $empty
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Determine if a given view exists.
         *
         * @param string $view
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function exists($view)
        {
            return \Illuminate\View\Factory::exists($view);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
<<<<<<< HEAD
         * @return \Illuminate\Contracts\View\Engine 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======
         *
         * @throws \InvalidArgumentException
         *
         * @return \Illuminate\Contracts\View\Engine
         * @static
         */
>>>>>>> upstream/master
        public static function getEngineFromPath($path)
        {
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
<<<<<<< HEAD
         * @param mixed $value
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed        $value
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function share($key, $value = null)
        {
            return \Illuminate\View\Factory::share($key, $value);
        }
<<<<<<< HEAD
        
        /**
         * Increment the rendering counter.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Increment the rendering counter.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function incrementRender()
        {
            \Illuminate\View\Factory::incrementRender();
        }
<<<<<<< HEAD
        
        /**
         * Decrement the rendering counter.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Decrement the rendering counter.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function decrementRender()
        {
            \Illuminate\View\Factory::decrementRender();
        }
<<<<<<< HEAD
        
        /**
         * Check if there are no active render operations.
         *
         * @return bool 
         * @static 
         */ 
=======

        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function doneRendering()
        {
            return \Illuminate\View\Factory::doneRendering();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addLocation($location)
        {
            \Illuminate\View\Factory::addLocation($location);
        }
<<<<<<< HEAD
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Add a new namespace to the loader.
         *
         * @param string       $namespace
         * @param string|array $hints
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function addNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
<<<<<<< HEAD
        
        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Prepend a new namespace to the loader.
         *
         * @param string       $namespace
         * @param string|array $hints
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function prependNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
<<<<<<< HEAD
        
        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
=======

        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string       $namespace
         * @param string|array $hints
         *
         * @return $this
         * @static
         */
>>>>>>> upstream/master
        public static function replaceNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::replaceNamespace($namespace, $hints);
        }
<<<<<<< HEAD
        
        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
=======

        /**
         * Register a valid view extension and its engine.
         *
         * @param string   $extension
         * @param string   $engine
         * @param \Closure $resolver
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addExtension($extension, $engine, $resolver = null)
        {
            \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
<<<<<<< HEAD
        
        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flushState()
        {
            \Illuminate\View\Factory::flushState();
        }
<<<<<<< HEAD
        
        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flushStateIfDoneRendering()
        {
            \Illuminate\View\Factory::flushStateIfDoneRendering();
        }
<<<<<<< HEAD
        
        /**
         * Get the extension to engine bindings.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getExtensions()
        {
            return \Illuminate\View\Factory::getExtensions();
        }
<<<<<<< HEAD
        
        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver 
         * @static 
         */ 
=======

        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver
         * @static
         */
>>>>>>> upstream/master
        public static function getEngineResolver()
        {
            return \Illuminate\View\Factory::getEngineResolver();
        }
<<<<<<< HEAD
        
        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface 
         * @static 
         */ 
=======

        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface
         * @static
         */
>>>>>>> upstream/master
        public static function getFinder()
        {
            return \Illuminate\View\Factory::getFinder();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setFinder($finder)
        {
            \Illuminate\View\Factory::setFinder($finder);
        }
<<<<<<< HEAD
        
        /**
         * Flush the cache of views located by the finder.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush the cache of views located by the finder.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flushFinderCache()
        {
            \Illuminate\View\Factory::flushFinderCache();
        }
<<<<<<< HEAD
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
=======

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
>>>>>>> upstream/master
        public static function getDispatcher()
        {
            return \Illuminate\View\Factory::getDispatcher();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setDispatcher($events)
        {
            \Illuminate\View\Factory::setDispatcher($events);
        }
<<<<<<< HEAD
        
        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
=======

        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
>>>>>>> upstream/master
        public static function getContainer()
        {
            return \Illuminate\View\Factory::getContainer();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function setContainer($container)
        {
            \Illuminate\View\Factory::setContainer($container);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get an item from the shared data.
         *
         * @param string $key
<<<<<<< HEAD
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
=======
         * @param mixed  $default
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function shared($key, $default = null)
        {
            return \Illuminate\View\Factory::shared($key, $default);
        }
<<<<<<< HEAD
        
        /**
         * Get all of the shared data for the environment.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getShared()
        {
            return \Illuminate\View\Factory::getShared();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Start a component rendering process.
         *
         * @param string $name
<<<<<<< HEAD
         * @param array $data
         * @return void 
         * @static 
         */ 
        public static function startComponent($name, $data = array())
        {
            \Illuminate\View\Factory::startComponent($name, $data);
        }
        
        /**
         * Render the current component.
         *
         * @return string 
         * @static 
         */ 
=======
         * @param array  $data
         *
         * @return void
         * @static
         */
        public static function startComponent($name, $data = [])
        {
            \Illuminate\View\Factory::startComponent($name, $data);
        }

        /**
         * Render the current component.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function renderComponent()
        {
            return \Illuminate\View\Factory::renderComponent();
        }
<<<<<<< HEAD
        
        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @return void 
         * @static 
         */ 
=======

        /**
         * Start the slot rendering process.
         *
         * @param string      $name
         * @param string|null $content
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function slot($name, $content = null)
        {
            \Illuminate\View\Factory::slot($name, $content);
        }
<<<<<<< HEAD
        
        /**
         * Save the slot content for rendering.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Save the slot content for rendering.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function endSlot()
        {
            \Illuminate\View\Factory::endSlot();
        }
<<<<<<< HEAD
        
        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
=======

        /**
         * Register a view creator event.
         *
         * @param array|string    $views
         * @param \Closure|string $callback
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function creator($views, $callback)
        {
            return \Illuminate\View\Factory::creator($views, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
<<<<<<< HEAD
         * @return array 
         * @static 
         */ 
=======
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function composers($composers)
        {
            return \Illuminate\View\Factory::composers($composers);
        }
<<<<<<< HEAD
        
        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
=======

        /**
         * Register a view composer event.
         *
         * @param array|string    $views
         * @param \Closure|string $callback
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function composer($views, $callback)
        {
            return \Illuminate\View\Factory::composer($views, $callback);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function callComposer($view)
        {
            \Illuminate\View\Factory::callComposer($view);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function callCreator($view)
        {
            \Illuminate\View\Factory::callCreator($view);
        }
<<<<<<< HEAD
        
        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void 
         * @static 
         */ 
=======

        /**
         * Start injecting content into a section.
         *
         * @param string      $section
         * @param string|null $content
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function startSection($section, $content = null)
        {
            \Illuminate\View\Factory::startSection($section, $content);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function inject($section, $content)
        {
            \Illuminate\View\Factory::inject($section, $content);
        }
<<<<<<< HEAD
        
        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string 
         * @static 
         */ 
=======

        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function yieldSection()
        {
            return \Illuminate\View\Factory::yieldSection();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
<<<<<<< HEAD
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======
         *
         * @throws \InvalidArgumentException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function stopSection($overwrite = false)
        {
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
<<<<<<< HEAD
        
        /**
         * Stop injecting content into a section and append it.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======

        /**
         * Stop injecting content into a section and append it.
         *
         * @throws \InvalidArgumentException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function appendSection()
        {
            return \Illuminate\View\Factory::appendSection();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function yieldContent($section, $default = '')
        {
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function parentPlaceholder($section = '')
        {
            return \Illuminate\View\Factory::parentPlaceholder($section);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Check if section exists.
         *
         * @param string $name
<<<<<<< HEAD
         * @return bool 
         * @static 
         */ 
=======
         *
         * @return bool
         * @static
         */
>>>>>>> upstream/master
        public static function hasSection($name)
        {
            return \Illuminate\View\Factory::hasSection($name);
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string $default
<<<<<<< HEAD
         * @return mixed 
         * @static 
         */ 
=======
         *
         * @return mixed
         * @static
         */
>>>>>>> upstream/master
        public static function getSection($name, $default = null)
        {
            return \Illuminate\View\Factory::getSection($name, $default);
        }
<<<<<<< HEAD
        
        /**
         * Get the entire array of sections.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getSections()
        {
            return \Illuminate\View\Factory::getSections();
        }
<<<<<<< HEAD
        
        /**
         * Flush all of the sections.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush all of the sections.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flushSections()
        {
            \Illuminate\View\Factory::flushSections();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function addLoop($data)
        {
            \Illuminate\View\Factory::addLoop($data);
        }
<<<<<<< HEAD
        
        /**
         * Increment the top loop's indices.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Increment the top loop's indices.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function incrementLoopIndices()
        {
            \Illuminate\View\Factory::incrementLoopIndices();
        }
<<<<<<< HEAD
        
        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function popLoop()
        {
            \Illuminate\View\Factory::popLoop();
        }
<<<<<<< HEAD
        
        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null 
         * @static 
         */ 
=======

        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null
         * @static
         */
>>>>>>> upstream/master
        public static function getLastLoop()
        {
            return \Illuminate\View\Factory::getLastLoop();
        }
<<<<<<< HEAD
        
        /**
         * Get the entire loop stack.
         *
         * @return array 
         * @static 
         */ 
=======

        /**
         * Get the entire loop stack.
         *
         * @return array
         * @static
         */
>>>>>>> upstream/master
        public static function getLoopStack()
        {
            return \Illuminate\View\Factory::getLoopStack();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function startPush($section, $content = '')
        {
            \Illuminate\View\Factory::startPush($section, $content);
        }
<<<<<<< HEAD
        
        /**
         * Stop injecting content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======

        /**
         * Stop injecting content into a push section.
         *
         * @throws \InvalidArgumentException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function stopPush()
        {
            return \Illuminate\View\Factory::stopPush();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function startPrepend($section, $content = '')
        {
            \Illuminate\View\Factory::startPrepend($section, $content);
        }
<<<<<<< HEAD
        
        /**
         * Stop prepending content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
=======

        /**
         * Stop prepending content into a push section.
         *
         * @throws \InvalidArgumentException
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function stopPrepend()
        {
            return \Illuminate\View\Factory::stopPrepend();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
<<<<<<< HEAD
         * @return string 
         * @static 
         */ 
=======
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function yieldPushContent($section, $default = '')
        {
            return \Illuminate\View\Factory::yieldPushContent($section, $default);
        }
<<<<<<< HEAD
        
        /**
         * Flush all of the stacks.
         *
         * @return void 
         * @static 
         */ 
=======

        /**
         * Flush all of the stacks.
         *
         * @return void
         * @static
         */
>>>>>>> upstream/master
        public static function flushStacks()
        {
            \Illuminate\View\Factory::flushStacks();
        }
<<<<<<< HEAD
        
=======

>>>>>>> upstream/master
        /**
         * Start a translation block.
         *
         * @param array $replacements
<<<<<<< HEAD
         * @return void 
         * @static 
         */ 
        public static function startTranslation($replacements = array())
        {
            \Illuminate\View\Factory::startTranslation($replacements);
        }
        
        /**
         * Render the current translation.
         *
         * @return string 
         * @static 
         */ 
=======
         *
         * @return void
         * @static
         */
        public static function startTranslation($replacements = [])
        {
            \Illuminate\View\Factory::startTranslation($replacements);
        }

        /**
         * Render the current translation.
         *
         * @return string
         * @static
         */
>>>>>>> upstream/master
        public static function renderTranslation()
        {
            return \Illuminate\View\Factory::renderTranslation();
        }
<<<<<<< HEAD
         
    }
 
}


namespace  { 

    class App extends \Illuminate\Support\Facades\App {}

    class Artisan extends \Illuminate\Support\Facades\Artisan {}

    class Auth extends \Illuminate\Support\Facades\Auth {}

    class Blade extends \Illuminate\Support\Facades\Blade {}

    class Broadcast extends \Illuminate\Support\Facades\Broadcast {}

    class Bus extends \Illuminate\Support\Facades\Bus {}

    class Cache extends \Illuminate\Support\Facades\Cache {}

    class Config extends \Illuminate\Support\Facades\Config {}

    class Cookie extends \Illuminate\Support\Facades\Cookie {}

    class Crypt extends \Illuminate\Support\Facades\Crypt {}

    class DB extends \Illuminate\Support\Facades\DB {}

    class Eloquent extends \Illuminate\Database\Eloquent\Model {         
            /**
             * Create and return an un-saved model instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function make($attributes = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::make($attributes);
            }
         
            /**
             * Register a new global scope.
             *
             * @param string $identifier
             * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
             * @return $this 
             * @static 
             */ 
            public static function withGlobalScope($identifier, $scope)
            {    
                return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
            }
         
            /**
             * Remove a registered global scope.
             *
             * @param \Illuminate\Database\Eloquent\Scope|string $scope
             * @return $this 
             * @static 
             */ 
            public static function withoutGlobalScope($scope)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
            }
         
            /**
             * Remove all or passed registered global scopes.
             *
             * @param array|null $scopes
             * @return $this 
             * @static 
             */ 
            public static function withoutGlobalScopes($scopes = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
            }
         
            /**
             * Get an array of global scopes that were removed from the query.
             *
             * @return array 
             * @static 
             */ 
            public static function removedScopes()
            {    
                return \Illuminate\Database\Eloquent\Builder::removedScopes();
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return $this 
             * @static 
             */ 
            public static function whereKey($id)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereKey($id);
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return $this 
             * @static 
             */ 
            public static function whereKeyNot($id)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereKeyNot($id);
            }
         
            /**
             * Add a basic where clause to the query.
             *
             * @param string|array|\Closure $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function where($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where" clause to the query.
             *
             * @param \Closure|array|string $column
             * @param string $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhere($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
            }
         
            /**
             * Create a collection of models from plain arrays.
             *
             * @param array $items
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function hydrate($items)
            {    
                return \Illuminate\Database\Eloquent\Builder::hydrate($items);
            }
         
            /**
             * Create a collection of models from a raw query.
             *
             * @param string $query
             * @param array $bindings
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function fromQuery($query, $bindings = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::fromQuery($query, $bindings);
            }
         
            /**
             * Find a model by its primary key.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null 
             * @static 
             */ 
            public static function find($id, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
            }
         
            /**
             * Find multiple models by their primary keys.
             *
             * @param \Illuminate\Contracts\Support\Arrayable|array $ids
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function findMany($ids, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
            }
         
            /**
             * Find a model by its primary key or throw an exception.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function findOrFail($id, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
            }
         
            /**
             * Find a model by its primary key or return fresh model instance.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function findOrNew($id, $columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
            }
         
            /**
             * Get the first record matching the attributes or instantiate it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrNew($attributes, $values = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes, $values);
            }
         
            /**
             * Get the first record matching the attributes or create it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrCreate($attributes, $values = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes, $values);
            }
         
            /**
             * Create or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function updateOrCreate($attributes, $values = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
            }
         
            /**
             * Execute the query and get the first result or throw an exception.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function firstOrFail($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
            }
         
            /**
             * Execute the query and get the first result or call a callback.
             *
             * @param \Closure|array $columns
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Model|static|mixed 
             * @static 
             */ 
            public static function firstOr($columns = array(), $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOr($columns, $callback);
            }
         
            /**
             * Get a single column's value from the first result of a query.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function value($column)
            {    
                return \Illuminate\Database\Eloquent\Builder::value($column);
            }
         
            /**
             * Execute the query as a "select" statement.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection|static[] 
             * @static 
             */ 
            public static function get($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::get($columns);
            }
         
            /**
             * Get the hydrated models without eager loading.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model[] 
             * @static 
             */ 
            public static function getModels($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::getModels($columns);
            }
         
            /**
             * Eager load the relationships for the models.
             *
             * @param array $models
             * @return array 
             * @static 
             */ 
            public static function eagerLoadRelations($models)
            {    
                return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
            }
         
            /**
             * Get a generator for the given query.
             *
             * @return \Generator 
             * @static 
             */ 
            public static function cursor()
            {    
                return \Illuminate\Database\Eloquent\Builder::cursor();
            }
         
            /**
             * Chunk the results of a query by comparing numeric IDs.
             *
             * @param int $count
             * @param callable $callback
             * @param string $column
             * @param string|null $alias
             * @return bool 
             * @static 
             */ 
            public static function chunkById($count, $callback, $column = null, $alias = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column, $alias);
            }
         
            /**
             * Get an array with the values of a given column.
             *
             * @param string $column
             * @param string|null $key
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function pluck($column, $key = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
            }
         
            /**
             * Paginate the given query.
             *
             * @param int $perPage
             * @param array $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function paginate($perPage = null, $columns = array(), $pageName = 'page', $page = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
            }
         
            /**
             * Paginate the given query into a simple paginator.
             *
             * @param int $perPage
             * @param array $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\Paginator 
             * @static 
             */ 
            public static function simplePaginate($perPage = null, $columns = array(), $pageName = 'page', $page = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
            }
         
            /**
             * Save a new model and return the instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function create($attributes = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::create($attributes);
            }
         
            /**
             * Save a new model and return the instance. Allow mass-assignment.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function forceCreate($attributes)
            {    
                return \Illuminate\Database\Eloquent\Builder::forceCreate($attributes);
            }
         
            /**
             * Register a replacement for the default delete function.
             *
             * @param \Closure $callback
             * @return void 
             * @static 
             */ 
            public static function onDelete($callback)
            {    
                \Illuminate\Database\Eloquent\Builder::onDelete($callback);
            }
         
            /**
             * Call the given local model scopes.
             *
             * @param array $scopes
             * @return mixed 
             * @static 
             */ 
            public static function scopes($scopes)
            {    
                return \Illuminate\Database\Eloquent\Builder::scopes($scopes);
            }
         
            /**
             * Apply the scopes to the Eloquent builder instance and return it.
             *
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function applyScopes()
            {    
                return \Illuminate\Database\Eloquent\Builder::applyScopes();
            }
         
            /**
             * Prevent the specified relations from being eager loaded.
             *
             * @param mixed $relations
             * @return $this 
             * @static 
             */ 
            public static function without($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::without($relations);
            }
         
            /**
             * Create a new instance of the model being queried.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function newModelInstance($attributes = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::newModelInstance($attributes);
            }
         
            /**
             * Get the underlying query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function getQuery()
            {    
                return \Illuminate\Database\Eloquent\Builder::getQuery();
            }
         
            /**
             * Set the underlying query builder instance.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return $this 
             * @static 
             */ 
            public static function setQuery($query)
            {    
                return \Illuminate\Database\Eloquent\Builder::setQuery($query);
            }
         
            /**
             * Get a base query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function toBase()
            {    
                return \Illuminate\Database\Eloquent\Builder::toBase();
            }
         
            /**
             * Get the relationships being eagerly loaded.
             *
             * @return array 
             * @static 
             */ 
            public static function getEagerLoads()
            {    
                return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
            }
         
            /**
             * Set the relationships being eagerly loaded.
             *
             * @param array $eagerLoad
             * @return $this 
             * @static 
             */ 
            public static function setEagerLoads($eagerLoad)
            {    
                return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
            }
         
            /**
             * Get the model instance being queried.
             *
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function getModel()
            {    
                return \Illuminate\Database\Eloquent\Builder::getModel();
            }
         
            /**
             * Set a model instance for the model being queried.
             *
             * @param \Illuminate\Database\Eloquent\Model $model
             * @return $this 
             * @static 
             */ 
            public static function setModel($model)
            {    
                return \Illuminate\Database\Eloquent\Builder::setModel($model);
            }
         
            /**
             * Get the given macro by name.
             *
             * @param string $name
             * @return \Closure 
             * @static 
             */ 
            public static function getMacro($name)
            {    
                return \Illuminate\Database\Eloquent\Builder::getMacro($name);
            }
         
            /**
             * Chunk the results of the query.
             *
             * @param int $count
             * @param callable $callback
             * @return bool 
             * @static 
             */ 
            public static function chunk($count, $callback)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
            }
         
            /**
             * Execute a callback over each item while chunking.
             *
             * @param callable $callback
             * @param int $count
             * @return bool 
             * @static 
             */ 
            public static function each($callback, $count = 1000)
            {    
                return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
            }
         
            /**
             * Execute the query and get the first result.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|static|null 
             * @static 
             */ 
            public static function first($columns = array())
            {    
                return \Illuminate\Database\Eloquent\Builder::first($columns);
            }
         
            /**
             * Apply the callback's query changes if the given "value" is true.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function when($value, $callback, $default = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::when($value, $callback, $default);
            }
         
            /**
             * Pass the query to a given callback.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function tap($callback)
            {    
                return \Illuminate\Database\Eloquent\Builder::tap($callback);
            }
         
            /**
             * Apply the callback's query changes if the given "value" is false.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function unless($value, $callback, $default = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::unless($value, $callback, $default);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orHas($relation, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function doesntHave($relation, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orDoesntHave($relation)
            {    
                return \Illuminate\Database\Eloquent\Builder::orDoesntHave($relation);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereDoesntHave($relation, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereDoesntHave($relation, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereDoesntHave($relation, $callback);
            }
         
            /**
             * Add subselect queries to count the relations.
             *
             * @param mixed $relations
             * @return $this 
             * @static 
             */ 
            public static function withCount($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::withCount($relations);
            }
         
            /**
             * Merge the where constraints from another query to the current query.
             *
             * @param \Illuminate\Database\Eloquent\Builder $from
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function mergeConstraintsFrom($from)
            {    
                return \Illuminate\Database\Eloquent\Builder::mergeConstraintsFrom($from);
            }
         
            /**
             * Set the columns to be selected.
             *
             * @param array|mixed $columns
             * @return $this 
             * @static 
             */ 
            public static function select($columns = array())
            {    
                return \Illuminate\Database\Query\Builder::select($columns);
            }
         
            /**
             * Add a new "raw" select expression to the query.
             *
             * @param string $expression
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function selectRaw($expression, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
            }
         
            /**
             * Add a subselect expression to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder|static 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function selectSub($query, $as)
            {    
                return \Illuminate\Database\Query\Builder::selectSub($query, $as);
            }
         
            /**
             * Add a new select column to the query.
             *
             * @param array|mixed $column
             * @return $this 
             * @static 
             */ 
            public static function addSelect($column)
            {    
                return \Illuminate\Database\Query\Builder::addSelect($column);
            }
         
            /**
             * Force the query to only return distinct results.
             *
             * @return $this 
             * @static 
             */ 
            public static function distinct()
            {    
                return \Illuminate\Database\Query\Builder::distinct();
            }
         
            /**
             * Set the table which the query is targeting.
             *
             * @param string $table
             * @return $this 
             * @static 
             */ 
            public static function from($table)
            {    
                return \Illuminate\Database\Query\Builder::from($table);
            }
         
            /**
             * Add a join clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @param string $type
             * @param bool $where
             * @return $this 
             * @static 
             */ 
            public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {    
                return \Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type, $where);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @param string $type
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
            {    
                return \Illuminate\Database\Query\Builder::joinWhere($table, $first, $operator, $second, $type);
            }
         
            /**
             * Add a left join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoin($table, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoinWhere($table, $first, $operator, $second)
            {    
                return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a right join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoin($table, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "right join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoinWhere($table, $first, $operator, $second)
            {    
                return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a "cross join" clause to the query.
             *
             * @param string $table
             * @param string|null $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function crossJoin($table, $first = null, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
            }
         
            /**
             * Merge an array of where clauses and bindings.
             *
             * @param array $wheres
             * @param array $bindings
             * @return void 
             * @static 
             */ 
            public static function mergeWheres($wheres, $bindings)
            {    
                \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
            }
         
            /**
             * Add a "where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @param string|null $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
            }
         
            /**
             * Add an "or where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereColumn($first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
            }
         
            /**
             * Add a raw where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function whereRaw($sql, $bindings = array(), $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereRaw($sql, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
            }
         
            /**
             * Add a "where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereIn($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
            }
         
            /**
             * Add an "or where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereIn($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
            }
         
            /**
             * Add a "where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotIn($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
            }
         
            /**
             * Add an "or where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotIn($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
            }
         
            /**
             * Add a "where null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereNull($column, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
            }
         
            /**
             * Add an "or where null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNull($column);
            }
         
            /**
             * Add a "where not null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotNull($column, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
            }
         
            /**
             * Add a where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereBetween($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
            }
         
            /**
             * Add an or where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereBetween($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
            }
         
            /**
             * Add a where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotBetween($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
            }
         
            /**
             * Add an or where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotBetween($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
            }
         
            /**
             * Add an "or where not null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
            }
         
            /**
             * Add a "where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDate($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param string $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereDate($column, $operator, $value)
            {    
                return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
            }
         
            /**
             * Add a "where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereTime($column, $operator, $value, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereTime($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereTime($column, $operator, $value)
            {    
                return \Illuminate\Database\Query\Builder::orWhereTime($column, $operator, $value);
            }
         
            /**
             * Add a "where day" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDay($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "where month" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "where year" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereYear($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a nested where statement to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNested($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
            }
         
            /**
             * Create a new query instance for nested where condition.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forNestedWhere()
            {    
                return \Illuminate\Database\Query\Builder::forNestedWhere();
            }
         
            /**
             * Add another query builder as a nested where to the query builder.
             *
             * @param \Illuminate\Database\Query\Builder|static $query
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function addNestedWhereQuery($query, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereExists($callback, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
            }
         
            /**
             * Add an or exists clause to the query.
             *
             * @param \Closure $callback
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereExists($callback, $not = false)
            {    
                return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotExists($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotExists($callback)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
            }
         
            /**
             * Handles dynamic "where" clauses to the query.
             *
             * @param string $method
             * @param string $parameters
             * @return $this 
             * @static 
             */ 
            public static function dynamicWhere($method, $parameters)
            {    
                return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
            }
         
            /**
             * Add a "group by" clause to the query.
             *
             * @param array $groups
             * @return $this 
             * @static 
             */ 
            public static function groupBy($groups = null)
            {    
                return \Illuminate\Database\Query\Builder::groupBy($groups);
            }
         
            /**
             * Add a "having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function having($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "or having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHaving($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
            }
         
            /**
             * Add a raw having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function havingRaw($sql, $bindings = array(), $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHavingRaw($sql, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
            }
         
            /**
             * Add an "order by" clause to the query.
             *
             * @param string $column
             * @param string $direction
             * @return $this 
             * @static 
             */ 
            public static function orderBy($column, $direction = 'asc')
            {    
                return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
            }
         
            /**
             * Add a descending "order by" clause to the query.
             *
             * @param string $column
             * @return $this 
             * @static 
             */ 
            public static function orderByDesc($column)
            {    
                return \Illuminate\Database\Query\Builder::orderByDesc($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function latest($column = 'created_at')
            {    
                return \Illuminate\Database\Query\Builder::latest($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function oldest($column = 'created_at')
            {    
                return \Illuminate\Database\Query\Builder::oldest($column);
            }
         
            /**
             * Put the query's results in random order.
             *
             * @param string $seed
             * @return $this 
             * @static 
             */ 
            public static function inRandomOrder($seed = '')
            {    
                return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
            }
         
            /**
             * Add a raw "order by" clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return $this 
             * @static 
             */ 
            public static function orderByRaw($sql, $bindings = array())
            {    
                return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
            }
         
            /**
             * Alias to set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function skip($value)
            {    
                return \Illuminate\Database\Query\Builder::skip($value);
            }
         
            /**
             * Set the "offset" value of the query.
             *
             * @param int $value
             * @return $this 
             * @static 
             */ 
            public static function offset($value)
            {    
                return \Illuminate\Database\Query\Builder::offset($value);
            }
         
            /**
             * Alias to set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function take($value)
            {    
                return \Illuminate\Database\Query\Builder::take($value);
            }
         
            /**
             * Set the "limit" value of the query.
             *
             * @param int $value
             * @return $this 
             * @static 
             */ 
            public static function limit($value)
            {    
                return \Illuminate\Database\Query\Builder::limit($value);
            }
         
            /**
             * Set the limit and offset for a given page.
             *
             * @param int $page
             * @param int $perPage
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPage($page, $perPage = 15)
            {    
                return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
            }
         
            /**
             * Constrain the query to the next "page" of results after a given ID.
             *
             * @param int $perPage
             * @param int $lastId
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
            {    
                return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
            }
         
            /**
             * Add a union statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @param bool $all
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function union($query, $all = false)
            {    
                return \Illuminate\Database\Query\Builder::union($query, $all);
            }
         
            /**
             * Add a union all statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function unionAll($query)
            {    
                return \Illuminate\Database\Query\Builder::unionAll($query);
            }
         
            /**
             * Lock the selected rows in the table.
             *
             * @param string|bool $value
             * @return $this 
             * @static 
             */ 
            public static function lock($value = true)
            {    
                return \Illuminate\Database\Query\Builder::lock($value);
            }
         
            /**
             * Lock the selected rows in the table for updating.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lockForUpdate()
            {    
                return \Illuminate\Database\Query\Builder::lockForUpdate();
            }
         
            /**
             * Share lock the selected rows in the table.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function sharedLock()
            {    
                return \Illuminate\Database\Query\Builder::sharedLock();
            }
         
            /**
             * Get the SQL representation of the query.
             *
             * @return string 
             * @static 
             */ 
            public static function toSql()
            {    
                return \Illuminate\Database\Query\Builder::toSql();
            }
         
            /**
             * Get the count of the total records for the paginator.
             *
             * @param array $columns
             * @return int 
             * @static 
             */ 
            public static function getCountForPagination($columns = array())
            {    
                return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
            }
         
            /**
             * Concatenate values of a given column as a string.
             *
             * @param string $column
             * @param string $glue
             * @return string 
             * @static 
             */ 
            public static function implode($column, $glue = '')
            {    
                return \Illuminate\Database\Query\Builder::implode($column, $glue);
            }
         
            /**
             * Determine if any rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function exists()
            {    
                return \Illuminate\Database\Query\Builder::exists();
            }
         
            /**
             * Retrieve the "count" result of the query.
             *
             * @param string $columns
             * @return int 
             * @static 
             */ 
            public static function count($columns = '*')
            {    
                return \Illuminate\Database\Query\Builder::count($columns);
            }
         
            /**
             * Retrieve the minimum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function min($column)
            {    
                return \Illuminate\Database\Query\Builder::min($column);
            }
         
            /**
             * Retrieve the maximum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function max($column)
            {    
                return \Illuminate\Database\Query\Builder::max($column);
            }
         
            /**
             * Retrieve the sum of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function sum($column)
            {    
                return \Illuminate\Database\Query\Builder::sum($column);
            }
         
            /**
             * Retrieve the average of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function avg($column)
            {    
                return \Illuminate\Database\Query\Builder::avg($column);
            }
         
            /**
             * Alias for the "avg" method.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function average($column)
            {    
                return \Illuminate\Database\Query\Builder::average($column);
            }
         
            /**
             * Execute an aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return mixed 
             * @static 
             */ 
            public static function aggregate($function, $columns = array())
            {    
                return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
            }
         
            /**
             * Execute a numeric aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return float|int 
             * @static 
             */ 
            public static function numericAggregate($function, $columns = array())
            {    
                return \Illuminate\Database\Query\Builder::numericAggregate($function, $columns);
            }
         
            /**
             * Insert a new record into the database.
             *
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function insert($values)
            {    
                return \Illuminate\Database\Query\Builder::insert($values);
            }
         
            /**
             * Insert a new record and get the value of the primary key.
             *
             * @param array $values
             * @param string|null $sequence
             * @return int 
             * @static 
             */ 
            public static function insertGetId($values, $sequence = null)
            {    
                return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
            }
         
            /**
             * Insert or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function updateOrInsert($attributes, $values = array())
            {    
                return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
            }
         
            /**
             * Run a truncate statement on the table.
             *
             * @return void 
             * @static 
             */ 
            public static function truncate()
            {    
                \Illuminate\Database\Query\Builder::truncate();
            }
         
            /**
             * Create a raw database expression.
             *
             * @param mixed $value
             * @return \Illuminate\Database\Query\Expression 
             * @static 
             */ 
            public static function raw($value)
            {    
                return \Illuminate\Database\Query\Builder::raw($value);
            }
         
            /**
             * Get the current query value bindings in a flattened array.
             *
             * @return array 
             * @static 
             */ 
            public static function getBindings()
            {    
                return \Illuminate\Database\Query\Builder::getBindings();
            }
         
            /**
             * Get the raw array of bindings.
             *
             * @return array 
             * @static 
             */ 
            public static function getRawBindings()
            {    
                return \Illuminate\Database\Query\Builder::getRawBindings();
            }
         
            /**
             * Set the bindings on the query builder.
             *
             * @param array $bindings
             * @param string $type
             * @return $this 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function setBindings($bindings, $type = 'where')
            {    
                return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
            }
         
            /**
             * Add a binding to the query.
             *
             * @param mixed $value
             * @param string $type
             * @return $this 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function addBinding($value, $type = 'where')
            {    
                return \Illuminate\Database\Query\Builder::addBinding($value, $type);
            }
         
            /**
             * Merge an array of bindings into our bindings.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return $this 
             * @static 
             */ 
            public static function mergeBindings($query)
            {    
                return \Illuminate\Database\Query\Builder::mergeBindings($query);
            }
         
            /**
             * Get the database query processor instance.
             *
             * @return \Illuminate\Database\Query\Processors\Processor 
             * @static 
             */ 
            public static function getProcessor()
            {    
                return \Illuminate\Database\Query\Builder::getProcessor();
            }
         
            /**
             * Get the query grammar instance.
             *
             * @return \Illuminate\Database\Query\Grammars\Grammar 
             * @static 
             */ 
            public static function getGrammar()
            {    
                return \Illuminate\Database\Query\Builder::getGrammar();
            }
         
            /**
             * Use the write pdo for query.
             *
             * @return $this 
             * @static 
             */ 
            public static function useWritePdo()
            {    
                return \Illuminate\Database\Query\Builder::useWritePdo();
            }
         
            /**
             * Clone the query without the given properties.
             *
             * @param array $properties
             * @return static 
             * @static 
             */ 
            public static function cloneWithout($properties)
            {    
                return \Illuminate\Database\Query\Builder::cloneWithout($properties);
            }
         
            /**
             * Clone the query without the given bindings.
             *
             * @param array $except
             * @return static 
             * @static 
             */ 
            public static function cloneWithoutBindings($except)
            {    
                return \Illuminate\Database\Query\Builder::cloneWithoutBindings($except);
            }
         
            /**
             * Register a custom macro.
             *
             * @param string $name
             * @param object|callable $macro
             * @return void 
             * @static 
             */ 
            public static function macro($name, $macro)
            {    
                \Illuminate\Database\Query\Builder::macro($name, $macro);
            }
         
            /**
             * Mix another object into the class.
             *
             * @param object $mixin
             * @return void 
             * @static 
             */ 
            public static function mixin($mixin)
            {    
                \Illuminate\Database\Query\Builder::mixin($mixin);
            }
         
            /**
             * Checks if macro is registered.
             *
             * @param string $name
             * @return bool 
             * @static 
             */ 
            public static function hasMacro($name)
            {    
                return \Illuminate\Database\Query\Builder::hasMacro($name);
            }
         
            /**
             * Dynamically handle calls to the class.
             *
             * @param string $method
             * @param array $parameters
             * @return mixed 
             * @throws \BadMethodCallException
             * @static 
             */ 
            public static function macroCall($method, $parameters)
            {    
                return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
            }
        }

    class Event extends \Illuminate\Support\Facades\Event {}

    class File extends \Illuminate\Support\Facades\File {}

    class Gate extends \Illuminate\Support\Facades\Gate {}

    class Hash extends \Illuminate\Support\Facades\Hash {}

    class Lang extends \Illuminate\Support\Facades\Lang {}

    class Log extends \Illuminate\Support\Facades\Log {}

    class Mail extends \Illuminate\Support\Facades\Mail {}

    class Notification extends \Illuminate\Support\Facades\Notification {}

    class Password extends \Illuminate\Support\Facades\Password {}

    class Queue extends \Illuminate\Support\Facades\Queue {}

    class Redirect extends \Illuminate\Support\Facades\Redirect {}

    class Request extends \Illuminate\Support\Facades\Request {}

    class Response extends \Illuminate\Support\Facades\Response {}

    class Route extends \Illuminate\Support\Facades\Route {}

    class Schema extends \Illuminate\Support\Facades\Schema {}

    class Session extends \Illuminate\Support\Facades\Session {}

    class Storage extends \Illuminate\Support\Facades\Storage {}

    class URL extends \Illuminate\Support\Facades\URL {}

    class Validator extends \Illuminate\Support\Facades\Validator {}

    class View extends \Illuminate\Support\Facades\View {}
 
}



=======
    }

}

namespace  {

    class App extends \Illuminate\Support\Facades\App
    {
    }

    class Artisan extends \Illuminate\Support\Facades\Artisan
    {
    }

    class Auth extends \Illuminate\Support\Facades\Auth
    {
    }

    class Blade extends \Illuminate\Support\Facades\Blade
    {
    }

    class Broadcast extends \Illuminate\Support\Facades\Broadcast
    {
    }

    class Bus extends \Illuminate\Support\Facades\Bus
    {
    }

    class Cache extends \Illuminate\Support\Facades\Cache
    {
    }

    class Config extends \Illuminate\Support\Facades\Config
    {
    }

    class Cookie extends \Illuminate\Support\Facades\Cookie
    {
    }

    class Crypt extends \Illuminate\Support\Facades\Crypt
    {
    }

    class DB extends \Illuminate\Support\Facades\DB
    {
    }

    class Eloquent extends \Illuminate\Database\Eloquent\Model
    {
        /**
         * Create and return an un-saved model instance.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function make($attributes = [])
        {
            return \Illuminate\Database\Eloquent\Builder::make($attributes);
        }

        /**
         * Register a new global scope.
         *
         * @param string                                       $identifier
         * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
         *
         * @return $this
         * @static
         */
        public static function withGlobalScope($identifier, $scope)
        {
            return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
        }

        /**
         * Remove a registered global scope.
         *
         * @param \Illuminate\Database\Eloquent\Scope|string $scope
         *
         * @return $this
         * @static
         */
        public static function withoutGlobalScope($scope)
        {
            return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
        }

        /**
         * Remove all or passed registered global scopes.
         *
         * @param array|null $scopes
         *
         * @return $this
         * @static
         */
        public static function withoutGlobalScopes($scopes = null)
        {
            return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
        }

        /**
         * Get an array of global scopes that were removed from the query.
         *
         * @return array
         * @static
         */
        public static function removedScopes()
        {
            return \Illuminate\Database\Eloquent\Builder::removedScopes();
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         *
         * @return $this
         * @static
         */
        public static function whereKey($id)
        {
            return \Illuminate\Database\Eloquent\Builder::whereKey($id);
        }

        /**
         * Add a where clause on the primary key to the query.
         *
         * @param mixed $id
         *
         * @return $this
         * @static
         */
        public static function whereKeyNot($id)
        {
            return \Illuminate\Database\Eloquent\Builder::whereKeyNot($id);
        }

        /**
         * Add a basic where clause to the query.
         *
         * @param string|array|\Closure $column
         * @param string                $operator
         * @param mixed                 $value
         * @param string                $boolean
         *
         * @return $this
         * @static
         */
        public static function where($column, $operator = null, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where" clause to the query.
         *
         * @param \Closure|array|string $column
         * @param string                $operator
         * @param mixed                 $value
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhere($column, $operator = null, $value = null)
        {
            return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
        }

        /**
         * Create a collection of models from plain arrays.
         *
         * @param array $items
         *
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function hydrate($items)
        {
            return \Illuminate\Database\Eloquent\Builder::hydrate($items);
        }

        /**
         * Create a collection of models from a raw query.
         *
         * @param string $query
         * @param array  $bindings
         *
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function fromQuery($query, $bindings = [])
        {
            return \Illuminate\Database\Eloquent\Builder::fromQuery($query, $bindings);
        }

        /**
         * Find a model by its primary key.
         *
         * @param mixed $id
         * @param array $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
         * @static
         */
        public static function find($id, $columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
        }

        /**
         * Find multiple models by their primary keys.
         *
         * @param \Illuminate\Contracts\Support\Arrayable|array $ids
         * @param array                                         $columns
         *
         * @return \Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function findMany($ids, $columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
        }

        /**
         * Find a model by its primary key or throw an exception.
         *
         * @param mixed $id
         * @param array $columns
         *
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         *
         * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection
         * @static
         */
        public static function findOrFail($id, $columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
        }

        /**
         * Find a model by its primary key or return fresh model instance.
         *
         * @param mixed $id
         * @param array $columns
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function findOrNew($id, $columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
        }

        /**
         * Get the first record matching the attributes or instantiate it.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function firstOrNew($attributes, $values = [])
        {
            return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes, $values);
        }

        /**
         * Get the first record matching the attributes or create it.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function firstOrCreate($attributes, $values = [])
        {
            return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes, $values);
        }

        /**
         * Create or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function updateOrCreate($attributes, $values = [])
        {
            return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
        }

        /**
         * Execute the query and get the first result or throw an exception.
         *
         * @param array $columns
         *
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         *
         * @return \Illuminate\Database\Eloquent\Model|static
         * @static
         */
        public static function firstOrFail($columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
        }

        /**
         * Execute the query and get the first result or call a callback.
         *
         * @param \Closure|array $columns
         * @param \Closure|null  $callback
         *
         * @return \Illuminate\Database\Eloquent\Model|static|mixed
         * @static
         */
        public static function firstOr($columns = [], $callback = null)
        {
            return \Illuminate\Database\Eloquent\Builder::firstOr($columns, $callback);
        }

        /**
         * Get a single column's value from the first result of a query.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static function value($column)
        {
            return \Illuminate\Database\Eloquent\Builder::value($column);
        }

        /**
         * Execute the query as a "select" statement.
         *
         * @param array $columns
         *
         * @return \Illuminate\Database\Eloquent\Collection|static[]
         * @static
         */
        public static function get($columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::get($columns);
        }

        /**
         * Get the hydrated models without eager loading.
         *
         * @param array $columns
         *
         * @return \Illuminate\Database\Eloquent\Model[]
         * @static
         */
        public static function getModels($columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::getModels($columns);
        }

        /**
         * Eager load the relationships for the models.
         *
         * @param array $models
         *
         * @return array
         * @static
         */
        public static function eagerLoadRelations($models)
        {
            return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
        }

        /**
         * Get a generator for the given query.
         *
         * @return \Generator
         * @static
         */
        public static function cursor()
        {
            return \Illuminate\Database\Eloquent\Builder::cursor();
        }

        /**
         * Chunk the results of a query by comparing numeric IDs.
         *
         * @param int         $count
         * @param callable    $callback
         * @param string      $column
         * @param string|null $alias
         *
         * @return bool
         * @static
         */
        public static function chunkById($count, $callback, $column = null, $alias = null)
        {
            return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column, $alias);
        }

        /**
         * Get an array with the values of a given column.
         *
         * @param string      $column
         * @param string|null $key
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function pluck($column, $key = null)
        {
            return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
        }

        /**
         * Paginate the given query.
         *
         * @param int      $perPage
         * @param array    $columns
         * @param string   $pageName
         * @param int|null $page
         *
         * @throws \InvalidArgumentException
         *
         * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
         * @static
         */
        public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Paginate the given query into a simple paginator.
         *
         * @param int      $perPage
         * @param array    $columns
         * @param string   $pageName
         * @param int|null $page
         *
         * @return \Illuminate\Contracts\Pagination\Paginator
         * @static
         */
        public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
        }

        /**
         * Save a new model and return the instance.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static function create($attributes = [])
        {
            return \Illuminate\Database\Eloquent\Builder::create($attributes);
        }

        /**
         * Save a new model and return the instance. Allow mass-assignment.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model|$this
         * @static
         */
        public static function forceCreate($attributes)
        {
            return \Illuminate\Database\Eloquent\Builder::forceCreate($attributes);
        }

        /**
         * Register a replacement for the default delete function.
         *
         * @param \Closure $callback
         *
         * @return void
         * @static
         */
        public static function onDelete($callback)
        {
            \Illuminate\Database\Eloquent\Builder::onDelete($callback);
        }

        /**
         * Call the given local model scopes.
         *
         * @param array $scopes
         *
         * @return mixed
         * @static
         */
        public static function scopes($scopes)
        {
            return \Illuminate\Database\Eloquent\Builder::scopes($scopes);
        }

        /**
         * Apply the scopes to the Eloquent builder instance and return it.
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function applyScopes()
        {
            return \Illuminate\Database\Eloquent\Builder::applyScopes();
        }

        /**
         * Prevent the specified relations from being eager loaded.
         *
         * @param mixed $relations
         *
         * @return $this
         * @static
         */
        public static function without($relations)
        {
            return \Illuminate\Database\Eloquent\Builder::without($relations);
        }

        /**
         * Create a new instance of the model being queried.
         *
         * @param array $attributes
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function newModelInstance($attributes = [])
        {
            return \Illuminate\Database\Eloquent\Builder::newModelInstance($attributes);
        }

        /**
         * Get the underlying query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function getQuery()
        {
            return \Illuminate\Database\Eloquent\Builder::getQuery();
        }

        /**
         * Set the underlying query builder instance.
         *
         * @param \Illuminate\Database\Query\Builder $query
         *
         * @return $this
         * @static
         */
        public static function setQuery($query)
        {
            return \Illuminate\Database\Eloquent\Builder::setQuery($query);
        }

        /**
         * Get a base query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function toBase()
        {
            return \Illuminate\Database\Eloquent\Builder::toBase();
        }

        /**
         * Get the relationships being eagerly loaded.
         *
         * @return array
         * @static
         */
        public static function getEagerLoads()
        {
            return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
        }

        /**
         * Set the relationships being eagerly loaded.
         *
         * @param array $eagerLoad
         *
         * @return $this
         * @static
         */
        public static function setEagerLoads($eagerLoad)
        {
            return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
        }

        /**
         * Get the model instance being queried.
         *
         * @return \Illuminate\Database\Eloquent\Model
         * @static
         */
        public static function getModel()
        {
            return \Illuminate\Database\Eloquent\Builder::getModel();
        }

        /**
         * Set a model instance for the model being queried.
         *
         * @param \Illuminate\Database\Eloquent\Model $model
         *
         * @return $this
         * @static
         */
        public static function setModel($model)
        {
            return \Illuminate\Database\Eloquent\Builder::setModel($model);
        }

        /**
         * Get the given macro by name.
         *
         * @param string $name
         *
         * @return \Closure
         * @static
         */
        public static function getMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::getMacro($name);
        }

        /**
         * Chunk the results of the query.
         *
         * @param int      $count
         * @param callable $callback
         *
         * @return bool
         * @static
         */
        public static function chunk($count, $callback)
        {
            return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
        }

        /**
         * Execute a callback over each item while chunking.
         *
         * @param callable $callback
         * @param int      $count
         *
         * @return bool
         * @static
         */
        public static function each($callback, $count = 1000)
        {
            return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
        }

        /**
         * Execute the query and get the first result.
         *
         * @param array $columns
         *
         * @return \Illuminate\Database\Eloquent\Model|static|null
         * @static
         */
        public static function first($columns = [])
        {
            return \Illuminate\Database\Eloquent\Builder::first($columns);
        }

        /**
         * Apply the callback's query changes if the given "value" is true.
         *
         * @param mixed    $value
         * @param callable $callback
         * @param callable $default
         *
         * @return mixed
         * @static
         */
        public static function when($value, $callback, $default = null)
        {
            return \Illuminate\Database\Eloquent\Builder::when($value, $callback, $default);
        }

        /**
         * Pass the query to a given callback.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function tap($callback)
        {
            return \Illuminate\Database\Eloquent\Builder::tap($callback);
        }

        /**
         * Apply the callback's query changes if the given "value" is false.
         *
         * @param mixed    $value
         * @param callable $callback
         * @param callable $default
         *
         * @return mixed
         * @static
         */
        public static function unless($value, $callback, $default = null)
        {
            return \Illuminate\Database\Eloquent\Builder::unless($value, $callback, $default);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string        $relation
         * @param string        $operator
         * @param int           $count
         * @param string        $boolean
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         * @param string $operator
         * @param int    $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orHas($relation, $operator = '>=', $count = 1)
        {
            return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query.
         *
         * @param string        $relation
         * @param string        $boolean
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function doesntHave($relation, $boolean = 'and', $callback = null)
        {
            return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with an "or".
         *
         * @param string $relation
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orDoesntHave($relation)
        {
            return \Illuminate\Database\Eloquent\Builder::orDoesntHave($relation);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string        $relation
         * @param \Closure|null $callback
         * @param string        $operator
         * @param int           $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string   $relation
         * @param \Closure $callback
         * @param string   $operator
         * @param int      $count
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses.
         *
         * @param string        $relation
         * @param \Closure|null $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function whereDoesntHave($relation, $callback = null)
        {
            return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
        }

        /**
         * Add a relationship count / exists condition to the query with where clauses and an "or".
         *
         * @param string   $relation
         * @param \Closure $callback
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function orWhereDoesntHave($relation, $callback = null)
        {
            return \Illuminate\Database\Eloquent\Builder::orWhereDoesntHave($relation, $callback);
        }

        /**
         * Add subselect queries to count the relations.
         *
         * @param mixed $relations
         *
         * @return $this
         * @static
         */
        public static function withCount($relations)
        {
            return \Illuminate\Database\Eloquent\Builder::withCount($relations);
        }

        /**
         * Merge the where constraints from another query to the current query.
         *
         * @param \Illuminate\Database\Eloquent\Builder $from
         *
         * @return \Illuminate\Database\Eloquent\Builder|static
         * @static
         */
        public static function mergeConstraintsFrom($from)
        {
            return \Illuminate\Database\Eloquent\Builder::mergeConstraintsFrom($from);
        }

        /**
         * Set the columns to be selected.
         *
         * @param array|mixed $columns
         *
         * @return $this
         * @static
         */
        public static function select($columns = [])
        {
            return \Illuminate\Database\Query\Builder::select($columns);
        }

        /**
         * Add a new "raw" select expression to the query.
         *
         * @param string $expression
         * @param array  $bindings
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function selectRaw($expression, $bindings = [])
        {
            return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
        }

        /**
         * Add a subselect expression to the query.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|string $query
         * @param string                                             $as
         *
         * @throws \InvalidArgumentException
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function selectSub($query, $as)
        {
            return \Illuminate\Database\Query\Builder::selectSub($query, $as);
        }

        /**
         * Add a new select column to the query.
         *
         * @param array|mixed $column
         *
         * @return $this
         * @static
         */
        public static function addSelect($column)
        {
            return \Illuminate\Database\Query\Builder::addSelect($column);
        }

        /**
         * Force the query to only return distinct results.
         *
         * @return $this
         * @static
         */
        public static function distinct()
        {
            return \Illuminate\Database\Query\Builder::distinct();
        }

        /**
         * Set the table which the query is targeting.
         *
         * @param string $table
         *
         * @return $this
         * @static
         */
        public static function from($table)
        {
            return \Illuminate\Database\Query\Builder::from($table);
        }

        /**
         * Add a join clause to the query.
         *
         * @param string      $table
         * @param string      $first
         * @param string|null $operator
         * @param string|null $second
         * @param string      $type
         * @param bool        $where
         *
         * @return $this
         * @static
         */
        public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            return \Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type, $where);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         * @param string $type
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
        {
            return \Illuminate\Database\Query\Builder::joinWhere($table, $first, $operator, $second, $type);
        }

        /**
         * Add a left join to the query.
         *
         * @param string      $table
         * @param string      $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function leftJoin($table, $first, $operator = null, $second = null)
        {
            return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "join where" clause to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function leftJoinWhere($table, $first, $operator, $second)
        {
            return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a right join to the query.
         *
         * @param string      $table
         * @param string      $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rightJoin($table, $first, $operator = null, $second = null)
        {
            return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
        }

        /**
         * Add a "right join where" clause to the query.
         *
         * @param string $table
         * @param string $first
         * @param string $operator
         * @param string $second
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function rightJoinWhere($table, $first, $operator, $second)
        {
            return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $first, $operator, $second);
        }

        /**
         * Add a "cross join" clause to the query.
         *
         * @param string      $table
         * @param string|null $first
         * @param string|null $operator
         * @param string|null $second
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function crossJoin($table, $first = null, $operator = null, $second = null)
        {
            return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
        }

        /**
         * Merge an array of where clauses and bindings.
         *
         * @param array $wheres
         * @param array $bindings
         *
         * @return void
         * @static
         */
        public static function mergeWheres($wheres, $bindings)
        {
            \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
        }

        /**
         * Add a "where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null  $operator
         * @param string|null  $second
         * @param string|null  $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
        }

        /**
         * Add an "or where" clause comparing two columns to the query.
         *
         * @param string|array $first
         * @param string|null  $operator
         * @param string|null  $second
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereColumn($first, $operator = null, $second = null)
        {
            return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
        }

        /**
         * Add a raw where clause to the query.
         *
         * @param string $sql
         * @param mixed  $bindings
         * @param string $boolean
         *
         * @return $this
         * @static
         */
        public static function whereRaw($sql, $bindings = [], $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or where clause to the query.
         *
         * @param string $sql
         * @param mixed  $bindings
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereRaw($sql, $bindings = [])
        {
            return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
        }

        /**
         * Add a "where in" clause to the query.
         *
         * @param string $column
         * @param mixed  $values
         * @param string $boolean
         * @param bool   $not
         *
         * @return $this
         * @static
         */
        public static function whereIn($column, $values, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
        }

        /**
         * Add an "or where in" clause to the query.
         *
         * @param string $column
         * @param mixed  $values
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereIn($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
        }

        /**
         * Add a "where not in" clause to the query.
         *
         * @param string $column
         * @param mixed  $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotIn($column, $values, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
        }

        /**
         * Add an "or where not in" clause to the query.
         *
         * @param string $column
         * @param mixed  $values
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotIn($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
        }

        /**
         * Add a "where null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         * @param bool   $not
         *
         * @return $this
         * @static
         */
        public static function whereNull($column, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
        }

        /**
         * Add an "or where null" clause to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNull($column)
        {
            return \Illuminate\Database\Query\Builder::orWhereNull($column);
        }

        /**
         * Add a "where not null" clause to the query.
         *
         * @param string $column
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotNull($column, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
        }

        /**
         * Add a where between statement to the query.
         *
         * @param string $column
         * @param array  $values
         * @param string $boolean
         * @param bool   $not
         *
         * @return $this
         * @static
         */
        public static function whereBetween($column, $values, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
        }

        /**
         * Add an or where between statement to the query.
         *
         * @param string $column
         * @param array  $values
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereBetween($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
        }

        /**
         * Add a where not between statement to the query.
         *
         * @param string $column
         * @param array  $values
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotBetween($column, $values, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
        }

        /**
         * Add an or where not between statement to the query.
         *
         * @param string $column
         * @param array  $values
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotBetween($column, $values)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
        }

        /**
         * Add an "or where not null" clause to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotNull($column)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
        }

        /**
         * Add a "where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed  $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereDate($column, $operator, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where date" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param string $value
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereDate($column, $operator, $value)
        {
            return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
        }

        /**
         * Add a "where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int    $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereTime($column, $operator, $value, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereTime($column, $operator, $value, $boolean);
        }

        /**
         * Add an "or where time" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param int    $value
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereTime($column, $operator, $value)
        {
            return \Illuminate\Database\Query\Builder::orWhereTime($column, $operator, $value);
        }

        /**
         * Add a "where day" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed  $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereDay($column, $operator, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
        }

        /**
         * Add a "where month" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed  $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
        }

        /**
         * Add a "where year" statement to the query.
         *
         * @param string $column
         * @param string $operator
         * @param mixed  $value
         * @param string $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereYear($column, $operator, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
        }

        /**
         * Add a nested where statement to the query.
         *
         * @param \Closure $callback
         * @param string   $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNested($callback, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
        }

        /**
         * Create a new query instance for nested where condition.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function forNestedWhere()
        {
            return \Illuminate\Database\Query\Builder::forNestedWhere();
        }

        /**
         * Add another query builder as a nested where to the query builder.
         *
         * @param \Illuminate\Database\Query\Builder|static $query
         * @param string                                    $boolean
         *
         * @return $this
         * @static
         */
        public static function addNestedWhereQuery($query, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Closure $callback
         * @param string   $boolean
         * @param bool     $not
         *
         * @return $this
         * @static
         */
        public static function whereExists($callback, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
        }

        /**
         * Add an or exists clause to the query.
         *
         * @param \Closure $callback
         * @param bool     $not
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereExists($callback, $not = false)
        {
            return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         * @param string   $boolean
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function whereNotExists($callback, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
        }

        /**
         * Add a where not exists clause to the query.
         *
         * @param \Closure $callback
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orWhereNotExists($callback)
        {
            return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
        }

        /**
         * Add an exists clause to the query.
         *
         * @param \Illuminate\Database\Query\Builder $query
         * @param string                             $boolean
         * @param bool                               $not
         *
         * @return $this
         * @static
         */
        public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
        {
            return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
        }

        /**
         * Handles dynamic "where" clauses to the query.
         *
         * @param string $method
         * @param string $parameters
         *
         * @return $this
         * @static
         */
        public static function dynamicWhere($method, $parameters)
        {
            return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
        }

        /**
         * Add a "group by" clause to the query.
         *
         * @param array $groups
         *
         * @return $this
         * @static
         */
        public static function groupBy($groups = null)
        {
            return \Illuminate\Database\Query\Builder::groupBy($groups);
        }

        /**
         * Add a "having" clause to the query.
         *
         * @param string      $column
         * @param string|null $operator
         * @param string|null $value
         * @param string      $boolean
         *
         * @return $this
         * @static
         */
        public static function having($column, $operator = null, $value = null, $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
        }

        /**
         * Add a "or having" clause to the query.
         *
         * @param string      $column
         * @param string|null $operator
         * @param string|null $value
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orHaving($column, $operator = null, $value = null)
        {
            return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
        }

        /**
         * Add a raw having clause to the query.
         *
         * @param string $sql
         * @param array  $bindings
         * @param string $boolean
         *
         * @return $this
         * @static
         */
        public static function havingRaw($sql, $bindings = [], $boolean = 'and')
        {
            return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
        }

        /**
         * Add a raw or having clause to the query.
         *
         * @param string $sql
         * @param array  $bindings
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function orHavingRaw($sql, $bindings = [])
        {
            return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
        }

        /**
         * Add an "order by" clause to the query.
         *
         * @param string $column
         * @param string $direction
         *
         * @return $this
         * @static
         */
        public static function orderBy($column, $direction = 'asc')
        {
            return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
        }

        /**
         * Add a descending "order by" clause to the query.
         *
         * @param string $column
         *
         * @return $this
         * @static
         */
        public static function orderByDesc($column)
        {
            return \Illuminate\Database\Query\Builder::orderByDesc($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function latest($column = 'created_at')
        {
            return \Illuminate\Database\Query\Builder::latest($column);
        }

        /**
         * Add an "order by" clause for a timestamp to the query.
         *
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function oldest($column = 'created_at')
        {
            return \Illuminate\Database\Query\Builder::oldest($column);
        }

        /**
         * Put the query's results in random order.
         *
         * @param string $seed
         *
         * @return $this
         * @static
         */
        public static function inRandomOrder($seed = '')
        {
            return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
        }

        /**
         * Add a raw "order by" clause to the query.
         *
         * @param string $sql
         * @param array  $bindings
         *
         * @return $this
         * @static
         */
        public static function orderByRaw($sql, $bindings = [])
        {
            return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
        }

        /**
         * Alias to set the "offset" value of the query.
         *
         * @param int $value
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function skip($value)
        {
            return \Illuminate\Database\Query\Builder::skip($value);
        }

        /**
         * Set the "offset" value of the query.
         *
         * @param int $value
         *
         * @return $this
         * @static
         */
        public static function offset($value)
        {
            return \Illuminate\Database\Query\Builder::offset($value);
        }

        /**
         * Alias to set the "limit" value of the query.
         *
         * @param int $value
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function take($value)
        {
            return \Illuminate\Database\Query\Builder::take($value);
        }

        /**
         * Set the "limit" value of the query.
         *
         * @param int $value
         *
         * @return $this
         * @static
         */
        public static function limit($value)
        {
            return \Illuminate\Database\Query\Builder::limit($value);
        }

        /**
         * Set the limit and offset for a given page.
         *
         * @param int $page
         * @param int $perPage
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function forPage($page, $perPage = 15)
        {
            return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
        }

        /**
         * Constrain the query to the next "page" of results after a given ID.
         *
         * @param int    $perPage
         * @param int    $lastId
         * @param string $column
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
        {
            return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
        }

        /**
         * Add a union statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         * @param bool                                        $all
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function union($query, $all = false)
        {
            return \Illuminate\Database\Query\Builder::union($query, $all);
        }

        /**
         * Add a union all statement to the query.
         *
         * @param \Illuminate\Database\Query\Builder|\Closure $query
         *
         * @return \Illuminate\Database\Query\Builder|static
         * @static
         */
        public static function unionAll($query)
        {
            return \Illuminate\Database\Query\Builder::unionAll($query);
        }

        /**
         * Lock the selected rows in the table.
         *
         * @param string|bool $value
         *
         * @return $this
         * @static
         */
        public static function lock($value = true)
        {
            return \Illuminate\Database\Query\Builder::lock($value);
        }

        /**
         * Lock the selected rows in the table for updating.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function lockForUpdate()
        {
            return \Illuminate\Database\Query\Builder::lockForUpdate();
        }

        /**
         * Share lock the selected rows in the table.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function sharedLock()
        {
            return \Illuminate\Database\Query\Builder::sharedLock();
        }

        /**
         * Get the SQL representation of the query.
         *
         * @return string
         * @static
         */
        public static function toSql()
        {
            return \Illuminate\Database\Query\Builder::toSql();
        }

        /**
         * Get the count of the total records for the paginator.
         *
         * @param array $columns
         *
         * @return int
         * @static
         */
        public static function getCountForPagination($columns = [])
        {
            return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
        }

        /**
         * Concatenate values of a given column as a string.
         *
         * @param string $column
         * @param string $glue
         *
         * @return string
         * @static
         */
        public static function implode($column, $glue = '')
        {
            return \Illuminate\Database\Query\Builder::implode($column, $glue);
        }

        /**
         * Determine if any rows exist for the current query.
         *
         * @return bool
         * @static
         */
        public static function exists()
        {
            return \Illuminate\Database\Query\Builder::exists();
        }

        /**
         * Retrieve the "count" result of the query.
         *
         * @param string $columns
         *
         * @return int
         * @static
         */
        public static function count($columns = '*')
        {
            return \Illuminate\Database\Query\Builder::count($columns);
        }

        /**
         * Retrieve the minimum value of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static function min($column)
        {
            return \Illuminate\Database\Query\Builder::min($column);
        }

        /**
         * Retrieve the maximum value of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static function max($column)
        {
            return \Illuminate\Database\Query\Builder::max($column);
        }

        /**
         * Retrieve the sum of the values of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static function sum($column)
        {
            return \Illuminate\Database\Query\Builder::sum($column);
        }

        /**
         * Retrieve the average of the values of a given column.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static function avg($column)
        {
            return \Illuminate\Database\Query\Builder::avg($column);
        }

        /**
         * Alias for the "avg" method.
         *
         * @param string $column
         *
         * @return mixed
         * @static
         */
        public static function average($column)
        {
            return \Illuminate\Database\Query\Builder::average($column);
        }

        /**
         * Execute an aggregate function on the database.
         *
         * @param string $function
         * @param array  $columns
         *
         * @return mixed
         * @static
         */
        public static function aggregate($function, $columns = [])
        {
            return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
        }

        /**
         * Execute a numeric aggregate function on the database.
         *
         * @param string $function
         * @param array  $columns
         *
         * @return float|int
         * @static
         */
        public static function numericAggregate($function, $columns = [])
        {
            return \Illuminate\Database\Query\Builder::numericAggregate($function, $columns);
        }

        /**
         * Insert a new record into the database.
         *
         * @param array $values
         *
         * @return bool
         * @static
         */
        public static function insert($values)
        {
            return \Illuminate\Database\Query\Builder::insert($values);
        }

        /**
         * Insert a new record and get the value of the primary key.
         *
         * @param array       $values
         * @param string|null $sequence
         *
         * @return int
         * @static
         */
        public static function insertGetId($values, $sequence = null)
        {
            return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
        }

        /**
         * Insert or update a record matching the attributes, and fill it with values.
         *
         * @param array $attributes
         * @param array $values
         *
         * @return bool
         * @static
         */
        public static function updateOrInsert($attributes, $values = [])
        {
            return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
        }

        /**
         * Run a truncate statement on the table.
         *
         * @return void
         * @static
         */
        public static function truncate()
        {
            \Illuminate\Database\Query\Builder::truncate();
        }

        /**
         * Create a raw database expression.
         *
         * @param mixed $value
         *
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            return \Illuminate\Database\Query\Builder::raw($value);
        }

        /**
         * Get the current query value bindings in a flattened array.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            return \Illuminate\Database\Query\Builder::getBindings();
        }

        /**
         * Get the raw array of bindings.
         *
         * @return array
         * @static
         */
        public static function getRawBindings()
        {
            return \Illuminate\Database\Query\Builder::getRawBindings();
        }

        /**
         * Set the bindings on the query builder.
         *
         * @param array  $bindings
         * @param string $type
         *
         * @throws \InvalidArgumentException
         *
         * @return $this
         * @static
         */
        public static function setBindings($bindings, $type = 'where')
        {
            return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
        }

        /**
         * Add a binding to the query.
         *
         * @param mixed  $value
         * @param string $type
         *
         * @throws \InvalidArgumentException
         *
         * @return $this
         * @static
         */
        public static function addBinding($value, $type = 'where')
        {
            return \Illuminate\Database\Query\Builder::addBinding($value, $type);
        }

        /**
         * Merge an array of bindings into our bindings.
         *
         * @param \Illuminate\Database\Query\Builder $query
         *
         * @return $this
         * @static
         */
        public static function mergeBindings($query)
        {
            return \Illuminate\Database\Query\Builder::mergeBindings($query);
        }

        /**
         * Get the database query processor instance.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getProcessor()
        {
            return \Illuminate\Database\Query\Builder::getProcessor();
        }

        /**
         * Get the query grammar instance.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getGrammar()
        {
            return \Illuminate\Database\Query\Builder::getGrammar();
        }

        /**
         * Use the write pdo for query.
         *
         * @return $this
         * @static
         */
        public static function useWritePdo()
        {
            return \Illuminate\Database\Query\Builder::useWritePdo();
        }

        /**
         * Clone the query without the given properties.
         *
         * @param array $properties
         *
         * @return static
         * @static
         */
        public static function cloneWithout($properties)
        {
            return \Illuminate\Database\Query\Builder::cloneWithout($properties);
        }

        /**
         * Clone the query without the given bindings.
         *
         * @param array $except
         *
         * @return static
         * @static
         */
        public static function cloneWithoutBindings($except)
        {
            return \Illuminate\Database\Query\Builder::cloneWithoutBindings($except);
        }

        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param object|callable $macro
         *
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Database\Query\Builder::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         *
         * @return void
         * @static
         */
        public static function mixin($mixin)
        {
            \Illuminate\Database\Query\Builder::mixin($mixin);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         *
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Database\Query\Builder::hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array  $parameters
         *
         * @throws \BadMethodCallException
         *
         * @return mixed
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
        }
    }

    class Event extends \Illuminate\Support\Facades\Event
    {
    }

    class File extends \Illuminate\Support\Facades\File
    {
    }

    class Gate extends \Illuminate\Support\Facades\Gate
    {
    }

    class Hash extends \Illuminate\Support\Facades\Hash
    {
    }

    class Lang extends \Illuminate\Support\Facades\Lang
    {
    }

    class Log extends \Illuminate\Support\Facades\Log
    {
    }

    class Mail extends \Illuminate\Support\Facades\Mail
    {
    }

    class Notification extends \Illuminate\Support\Facades\Notification
    {
    }

    class Password extends \Illuminate\Support\Facades\Password
    {
    }

    class Queue extends \Illuminate\Support\Facades\Queue
    {
    }

    class Redirect extends \Illuminate\Support\Facades\Redirect
    {
    }

    class Request extends \Illuminate\Support\Facades\Request
    {
    }

    class Response extends \Illuminate\Support\Facades\Response
    {
    }

    class Route extends \Illuminate\Support\Facades\Route
    {
    }

    class Schema extends \Illuminate\Support\Facades\Schema
    {
    }

    class Session extends \Illuminate\Support\Facades\Session
    {
    }

    class Storage extends \Illuminate\Support\Facades\Storage
    {
    }

    class URL extends \Illuminate\Support\Facades\URL
    {
    }

    class Validator extends \Illuminate\Support\Facades\Validator
    {
    }

    class View extends \Illuminate\Support\Facades\View
    {
    }

}
>>>>>>> upstream/master
