<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEntryRequest;
use App\Http\Requests\UpdateEntryRequest;
use App\Models\Entry;
use Illuminate\Http\Request;
use Flash;
use Response;

class EntryController extends Controller
{
    /**
     * Display a listing of the Entry.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Entry $entries */
        $entries = Entry::withTrashed()->where('user_id',auth()->user()->id)->orderBy('entry_date', 'desc')->paginate(5);
        if($request->view){
            session(['view' => $request->view]);
        }
        return view('entries.index')
            ->with('entries', $entries);
    }

    /**
     * Show the form for creating a new Entry.
     *
     * @return Response
     */
    public function create()
    {
        return view('entries.create');
    }

    /**
     * Store a newly created Entry in storage.
     *
     * @param CreateEntryRequest $request
     *
     * @return Response
     */
    public function store(CreateEntryRequest $request)
    {
        $input = $request->all();

        /** @var Entry $entry */
        $input['user_id']=auth()->user()->id;
        $entry = Entry::create($input);

        Flash::success('Entry saved successfully.');

        return redirect(route('entries.index'));
    }

    /**
     * Display the specified Entry.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Entry $entry */
        $entry = Entry::find($id);

        if (empty($entry)) {
            Flash::error('Entry not found');

            return redirect(route('entries.index'));
        }

        return view('entries.show')->with('entry', $entry);
    }

    /**
     * Show the form for editing the specified Entry.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Entry $entry */
        $entry = Entry::find($id);

        if (empty($entry)) {
            Flash::error('Entry not found');

            return redirect(route('entries.index'));
        }

        return view('entries.edit')->with('entry', $entry);
    }

    /**
     * Update the specified Entry in storage.
     *
     * @param int $id
     * @param UpdateEntryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEntryRequest $request)
    {
        /** @var Entry $entry */
        $entry = Entry::find($id);

        if (empty($entry)) {
            Flash::error('Entry not found');

            return redirect(route('entries.index'));
        }

        $entry->fill($request->all());
        $entry->save();

        Flash::success('Entry updated successfully.');

        return redirect(route('entries.index'));
    }

    /**
     * Remove the specified Entry from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Entry $entry */
        $entry = Entry::find($id);

        if (empty($entry)) {
            Flash::error('Entry not found');

            return redirect(route('entries.index'));
        }

        $entry->delete();

        Flash::success('Entry deleted successfully.');

        return redirect(route('entries.index'));
    }
}
