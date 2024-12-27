<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

class TaskController extends Controller
{
    

    // Download all tasks as a Word document
    // public function downloadWord($id)
    // {
    //     $task = Task::findOrFail($id);
    //     $phpWord = new PhpWord();
    //     $section = $phpWord->addSection();

    //     // Add content to the Word file
    //     $section->addText('Day: ' . $task->day);
    //     $section->addText('Title: ' . $task->title);
    //     $section->addText('Description: ' . $task->description);
        
        

    //     // Save Word file and download
    //     $writer = IOFactory::createWriter($phpWord, 'Word2007');
    //     $fileName = 'task-' . $task->id . '.docx';
    //     $tempFile = storage_path('app/public/' . $fileName);
    //     $writer->save($tempFile);

    //     return response()->download($tempFile)->deleteFileAfterSend(true);
    // }

    // Download a specific task as a PDF
    public function downloadPdf($id)
    {
        $task = Task::findOrFail($id);
        $pdf = Pdf::loadView('tasks.pdf', compact('task'));
        return $pdf->download('task-' . $task->id . '.pdf');
    }

    // Display the list of tasks
    public function index()
    {
        $tasks = Task::all();
        $taskCount = $tasks->count();

        return view('tasks.index', compact('tasks', 'taskCount'));
    }

    // Show the form to create a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Store a new task in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'day' => 'nullable|integer|min:1|max:31',
        ]);

        Task::create($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully.');
    }

    // Show a specific task
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    // Show the form to edit a task
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update a task in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'day' => 'nullable|integer|min:1|max:31',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
