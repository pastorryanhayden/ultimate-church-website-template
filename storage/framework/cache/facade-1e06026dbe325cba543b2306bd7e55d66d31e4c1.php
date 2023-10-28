<?php

namespace Facades\Livewire\Features\SupportFileUploads;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Livewire\Features\SupportFileUploads\GenerateSignedUploadUrl
 */
class GenerateSignedUploadUrl extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Livewire\Features\SupportFileUploads\GenerateSignedUploadUrl';
    }
}
