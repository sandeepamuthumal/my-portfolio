<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::with('images')->ordered();

        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('subtitle', 'like', "%{$search}%");
            });
        }

        if ($request->has('type') && $request->type) {
            $query->where('project_type', $request->type);
        }

        if ($request->has('status') && $request->status) {
            $query->where('status', $request->status);
        }

        $projects = $query->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'project_type' => 'required|in:personal,company',
            'status' => 'required|in:completed,ongoing,modifying',
            'description' => 'required',
            'primary_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'secondary_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'live_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'video_link' => 'nullable|url',
            'technologies' => 'nullable|string',
        ]);

        $maxOrder = Project::max('order') ?? 0;
        $validated['order'] = $maxOrder + 1;

        if ($request->hasFile('primary_image')) {
            $validated['primary_image'] = $this->uploadImage($request->file('primary_image'), 'projects/primary');
        }

        $project = Project::create($validated);

        if ($request->hasFile('secondary_images')) {
            foreach ($request->file('secondary_images') as $index => $image) {
                $path = $this->uploadImage($image, 'projects/secondary');
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $path,
                    'order' => $index
                ]);
            }
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully!');
    }

    public function edit(Project $project)
    {
        $project->load('images');
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'project_type' => 'required|in:personal,company',
            'status' => 'required|in:completed,ongoing,modifying',
            'description' => 'required',
            'primary_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'secondary_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'live_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'video_link' => 'nullable|url',
            'technologies' => 'nullable|string',
            'remove_images' => 'nullable|array',
            'remove_images.*' => 'integer'
        ]);

        if ($request->hasFile('primary_image')) {
            if ($project->primary_image) {
                Storage::disk('public')->delete($project->primary_image);
            }
            $validated['primary_image'] = $this->uploadImage($request->file('primary_image'), 'projects/primary');
        }

        $project->update($validated);

        if ($request->has('remove_images')) {
            foreach ($request->remove_images as $imageId) {
                $image = ProjectImage::find($imageId);
                if ($image && $image->project_id == $project->id) {
                    Storage::disk('public')->delete($image->image_path);
                    $image->delete();
                }
            }
        }

        if ($request->hasFile('secondary_images')) {
            $maxOrder = $project->images()->max('order') ?? 0;
            foreach ($request->file('secondary_images') as $index => $image) {
                $path = $this->uploadImage($image, 'projects/secondary');
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image_path' => $path,
                    'order' => $maxOrder + $index + 1
                ]);
            }
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        if ($project->primary_image) {
            Storage::disk('public')->delete($project->primary_image);
        }

        foreach ($project->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully!');
    }

    public function reorder(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
            'orders.*.id' => 'required|integer|exists:projects,id',
            'orders.*.order' => 'required|integer'
        ]);

        foreach ($request->orders as $item) {
            Project::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true, 'message' => 'Order updated successfully!']);
    }

    private function uploadImage($file, $path)
    {
        $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        return $file->storeAs($path, $filename, 'public');
    }
}
