<?php

namespace App\Orchid\Screens\Clients;

use App\Models\Client;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;

class ClientListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Клиенты';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Список клиентов';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return ['clients' => Client::paginate(10)];
    }


    public function asyncGetClient(Client $client): array
    {
        $client->load('attachment');
        return ['client'=>$client];
    }


    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            \Orchid\Support\Facades\Layout::table('clients', [
                TD::make('phone', 'телефон'),
                TD::make('status', 'статус')->render(function (Client $client)
                {
                    return $client->status === 'interviewed' ? 'Опрошен' : 'Не опрошен';
                }),
                TD::make('email', 'email'),
                TD::make('assessment', 'оценка')
            ] )
        ];
    }
}
