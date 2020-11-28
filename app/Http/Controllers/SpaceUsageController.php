<?php

namespace App\Http\Controllers;

use Auth;
use Common\Core\BaseController;
use Common\Files\Actions\GetUserSpaceUsage;
use Common\Workspaces\ActiveWorkspace;
use Illuminate\Http\JsonResponse;

class SpaceUsageController extends BaseController
{
    public function index(): JsonResponse
    {
        $this->authorize('show', Auth::user());

        $activeWorkspace = app(ActiveWorkspace::class);

        if ($activeWorkspace->personal()) {
            $usage = app(GetUserSpaceUsage::class)->execute(
                null,
                Auth::user()->entries(['owner' => true])->whereNull('workspace_id')
            );
        } else {
            $usage = app(GetUserSpaceUsage::class)->execute(
                $activeWorkspace->owner(), $activeWorkspace->workspace()->entries()
            );
        }

        return $this->success($usage);
    }
}
