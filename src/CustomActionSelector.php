<?php

namespace Energon7\CustomActionSelector;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class CustomActionSelector extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('custom-action-selector', __DIR__.'/../dist/js/tool.js');
    }
}
