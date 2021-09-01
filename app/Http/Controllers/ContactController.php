<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactMessageRequest;
use App\Models\ContactMessage;
use GuzzleHttp\Client;
use Illuminate\Contracts\Container\BindingResolutionException;
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
     * @throws BindingResolutionException
     */
    public function sendMessage(SendContactMessageRequest $request): RedirectResponse
    {
        $message = ContactMessage::query()->create($request->getData());
        $this->sendMessageToTelegram($message);
        Session::flash('message', 'Ваше сообщение успешно отправлено. Мы ответим Вам как можно быстрее.');
        return redirect(route('contact'));
    }

    /**
     * @param ContactMessage $contactMessage
     * @throws BindingResolutionException
     */
    public function sendMessageToTelegram(ContactMessage $contactMessage): void
    {
        $token = config('telegram.token');
        $chatID = config('telegram.chat_id');
        $message = "Заявка контактной формы с сайта.\n" .
            "Имя:\n" . $contactMessage->name . "\n\n" .
            "Email:\n" . $contactMessage->email . "\n\n" .
            "Телефон:\n" . $contactMessage->phone . "\n\n" .
            "Сообщение:\n" . $contactMessage->message;
        $client = app()->make(Client::class);

        $client->get("https://api.telegram.org/bot$token/sendMessage?chat_id=$chatID&text=$message");
    }
}
