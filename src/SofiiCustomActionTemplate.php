<?php

namespace Agnico\SofiiCustomActionTemplate;

class SofiiCustomActionTemplate
{
    /**
     * Default custom action type.
     *
     * @return string
     */
    public $type = 'Plugin Call';

    /**
     * Default custom action icon.
     *
     * @return string
     */
    public $icon = 'execute.png';

    /**
     * Default custom action description.
     *
     * @return string
     */
    public $description = '';

    /**
     * Is the custom action global.
     *
     * @return boolean
     */
    public $global = true;

    /**
     * Is the custom action public.
     *
     * @return boolean
     */
    public $public = false;

    /**
     * Default custom action specification.
     *
     * @return string
     */
    public $specification = '{}';

    /**
     * Perform any tasks that need to happen when the custom action is booted.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Execute the custom action.
     *
     * @return int
     */
    public function execute()
    {
        return 'Hello world!';
    }
}
