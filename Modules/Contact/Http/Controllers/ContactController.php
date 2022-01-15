<?php

namespace Modules\Contact\Http\Controllers;


use Modules\Contact\DTO\CreateContactDTO;
use Modules\Contact\Http\Requests\CreateContactRequest;
use Modules\Contact\Models\Contact;

class ContactController extends Controller
{
    // contact admin
    public function __invoke(Contact $contact, CreateContactRequest $request)
    {
      return $contact->create((array) new CreateContactDTO(...$request->validated()));
    }
}
