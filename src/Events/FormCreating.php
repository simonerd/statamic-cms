<?php

namespace Statamic\Events;

class FormCreating extends Event
{
    public function __construct(public $form)
    {
    }

    /**
     * Dispatch the event with the given arguments, and halt on first non-null listener response.
     *
     * @return mixed
     */
    public static function dispatch()
    {
        return event(new static(...func_get_args()), [], true);
    }
}
