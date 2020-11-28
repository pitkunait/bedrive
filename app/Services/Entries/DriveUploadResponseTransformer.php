<?php

namespace App\Services\Entries;

use App\Services\Entries\SetPermissionsOnEntry;
use Arr;

class DriveUploadResponseTransformer
{
    /**
     * @param array $response
     * @return array
     */
    public function transform($response)
    {
        if ( ! empty(Arr::get($response, 'fileEntry.users'))) {
            $response['fileEntry'] = app(SetPermissionsOnEntry::class)->execute($response['fileEntry']);
        }

        return $response;
    }
}
