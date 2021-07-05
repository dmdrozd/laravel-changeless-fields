<?php

namespace Dmdrozd\ChangelessFields\Exceptions;

use Exception;

class UpdateChangelessFieldsException extends Exception
{
    protected $code = 422;
    protected $message = "Trying to update a changeless model's field";
}