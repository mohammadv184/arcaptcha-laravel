<?php

namespace Mohammadv184\ArCaptcha\Laravel\Facade;

use Illuminate\Support\Facades\Facade;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @method static string getScript()
 * @method static string getWidget()
 * @method static Boolean verify(string $challenge_id)
 */
class ArCaptcha extends Facade
{
    /**
     * getFacadeAccessor method.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'arcaptcha';
    }
}
