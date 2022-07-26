<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

trait PermissionsTrait
{
    public function deny($permission)
    {
        abort_if(Gate::denies($permission), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }
}
