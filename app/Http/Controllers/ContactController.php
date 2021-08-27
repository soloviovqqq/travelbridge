<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactMessageRequest;
use App\Models\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('contact');
    }

    /**
     * @param SendContactMessageRequest $request
     * @return RedirectResponse
     */
    public function sendMessage(SendContactMessageRequest $request): RedirectResponse
    {
        ContactMessage::query()->create($request->getData());
        Session::flash('message', 'Ваше сообщение успешно отправлено. Мы ответим Вам как можно быстрее.');
        return redirect(route('contact'));
    }
}
