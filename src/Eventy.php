<?php

namespace Javanile\Eventy;

class Eventy
{
    /**
     * @var Events
     */
    protected static $eventy;

    /**
     * Registers the eventy singleton.
     *
     * @return void
     */
    public static function register()
    {
        if (self::$eventy === null) {
            self::$eventy = new Events();
        }
    }

    /**
     *
     */
    public static function addFilter($hook, $callback, $priority = 20, $arguments = 1)
    {
        self::$eventy->addFilter($hook, $callback, $priority, $arguments);
    }

    /**
     *
     */
    public static function filter()
    {
        return call_user_func_array([self::$eventy, 'filter'], func_get_args());
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public static function smarty()
    {
        /*
        if ($this->app->has('blade.compiler')) {
            Blade::directive('action', function ($expression) {
                return "<?php app('eventy')->action({$expression}); ?>";
            });
            Blade::directive('filter', function ($expression) {
                return "<?php echo app('eventy')->filter({$expression}); ?>";
            });
        }
        */
    }
}
