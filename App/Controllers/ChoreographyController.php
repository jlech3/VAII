<?php

namespace App\Controllers;

use App\Models\Choreography;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Správa choreografií – zoznam, pridanie, úprava a zmazanie (CRUD).
 */
class ChoreographyController extends BaseController
{
    /**
     * Všetky akcie sú zatiaľ prístupné každému, prihlasovanie príde neskôr.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Zobrazí zoznam všetkých choreografií z databázy.
     *
     * @param Request $request Aktuálna HTTP požiadavka.
     * @return Response Stránka so zoznamom choreografií.
     */
    public function index(Request $request): Response
    {
        $choreographies = Choreography::getAll();
        return $this->html(compact('choreographies'));
    }

    /**
     * Zobrazí prázdny formulár na pridanie choreografie.
     *
     * @param Request $request Aktuálna HTTP požiadavka.
     * @return Response Stránka s formulárom.
     */
    public function create(Request $request): Response
    {
        return $this->html();
    }

    /**
     * Uloží novú choreografiu z odoslaného formulára.
     *
     * Po uložení presmeruje späť na zoznam, aby bolo vidno aktuálny stav
     * a aby sa formulár pri obnovení stránky (F5) neodoslal znova.
     *
     * @param Request $request Požiadavka s údajmi z formulára.
     * @return Response Presmerovanie na zoznam choreografií.
     */
    public function store(Request $request): Response
    {
        $choreography = new Choreography();
        $choreography->setName($request->value('name'));
        $choreography->setAuthor($request->value('author'));
        // z formulára príde text, stĺpec v databáze je číselný
        $choreography->setDurationMin((int)$request->value('duration_min'));
        $choreography->setDescription($request->value('description'));

        $choreography->save();

        return $this->redirect($this->url('choreography.index'));
    }

    /**
     * Zobrazí formulár na úpravu existujúcej choreografie.
     *
     * Id choreografie príde v adrese, napr. ?c=choreography&a=edit&id=4.
     *
     * @param Request $request Požiadavka s id choreografie.
     * @return Response Stránka s vyplneným formulárom.
     */
    public function edit(Request $request): Response
    {
        $choreography = Choreography::getOne((int)$request->value('id'));

        return $this->html(compact('choreography'));
    }

    /**
     * Uloží zmeny existujúcej choreografie z formulára na úpravu.
     *
     * Id upravovaného záznamu príde zo skrytého poľa formulára.
     *
     * @param Request $request Požiadavka s id a novými údajmi.
     * @return Response Presmerovanie na zoznam choreografií.
     */
    public function update(Request $request): Response
    {
        $choreography = Choreography::getOne((int)$request->value('id'));

        // záznam medzičasom niekto zmazal alebo id neexistuje
        if ($choreography === null) {
            return $this->redirect($this->url('choreography.index'));
        }

        $choreography->setName($request->value('name'));
        $choreography->setAuthor($request->value('author'));
        $choreography->setDurationMin((int)$request->value('duration_min'));
        $choreography->setDescription($request->value('description'));

        $choreography->save();

        return $this->redirect($this->url('choreography.index'));
    }

    /**
     * Zmaže choreografiu podľa id odoslaného z formulára v zozname.
     *
     * @param Request $request Požiadavka s id choreografie.
     * @return Response Presmerovanie na zoznam choreografií.
     */
    public function delete(Request $request): Response
    {
        $choreography = Choreography::getOne((int)$request->value('id'));

        if ($choreography !== null) {
            $choreography->delete();
        }

        return $this->redirect($this->url('choreography.index'));
    }


}