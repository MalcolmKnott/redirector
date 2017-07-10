<?php

namespace Malcolmknott\Redirector;

use Malcolmknott\Redirector\Redirect;
use Spatie\MissingPageRedirector\Redirector\Redirector;
use Symfony\Component\HttpFoundation\Request;

class DatabaseRedirector implements Redirector
{
    public function getRedirectsFor(Request $request): array
    {
        return Redirect::get()->flatMap(function($redirect) {
           return [$redirect->old_url => $redirect->new_url];
        })->toArray();
    }
}