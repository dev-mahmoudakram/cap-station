<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Resolve the {locale} route segment, validate it against the supported
     * list, set the application locale and share it for URL generation.
     * Unsupported locales fall back to the configured default.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supported = config('locale.supported', ['ar']);
        $default   = config('locale.default', 'ar');

        $locale = $request->route('locale');

        if (! in_array($locale, $supported, true)) {
            $locale = $default;
        }

        App::setLocale($locale);

        // Make /{locale} the default for url()/route() within this group.
        url()->defaults(['locale' => $locale]);

        return $next($request);
    }
}
