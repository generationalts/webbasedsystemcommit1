<?php

namespace App\Http\Controllers;

use App\Models\documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $documents = documents::all();
    return view('dashboards.admin.documents.documents', compact('documents'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'document_name' => 'required',
            'description' => 'required',
            'document' => 'required|file',
            'date' => 'required|date',
        ]);

        // Store the uploaded document file
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/documents', $filename); // Use 'public/documents' as the storage path
        }

        // Create a new Document instance
        $document = new documents(); // Update the model class name to 'Document'
        $document->document_name = $validatedData['document_name'];
        $document->description = $validatedData['description'];
        $document->document = $filename;
        $document->date = $validatedData['date'];
        $document->save();

        return redirect()->back()->with('success', 'Document created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function show(documents $documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = documents::findOrFail($id);
        // Return the view with the document data
        return view('dashboards.admin.documents.edit', compact('document'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documents $document)
    {
        $validatedData = $request->validate([
            'document_name' => 'required',
            'description' => 'required',
            'new_document' => 'nullable|file',
            'date' => 'required|date',
        ]);

        // Update the document details
        $document->document_name = $validatedData['document_name'];
        $document->description = $validatedData['description'];
        $document->date = $validatedData['date'];

        // Check if a new document file is uploaded
        if ($request->hasFile('new_document')) {
            $file = $request->file('new_document');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/documents', $filename); // Use 'public/documents' as the storage path
            $document->document = $filename;
        }

        $document->save();

        return redirect()->back()->with('success', 'Document updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = documents::findOrFail($id);
        // Delete the document file from storage
        Storage::delete('documents/' . $document->document);
        // Delete the document record from the database
        $document->delete();
        return redirect()->back()->with('success', 'Document deleted successfully.');
    }

}
